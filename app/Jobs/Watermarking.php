<?php

namespace App\Jobs;

use App\Models\Author;
use App\Models\Document;
use App\Services\WatermarkService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class Watermarking implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $document, $author;

    /**
     * Create a new job instance.
     *
     * @param Document $document
     * @param Author $author
     */
    public function __construct(Document $document, Author $author)
    {
        //
        $this->document = $document;
        $this->author = $author;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        /**
         * @var WatermarkService $watermarkService
         */
        //
//        dd $this->document, $this->author);
        $watermarkService = resolve(WatermarkService::class);
        $watermarkService->prepareData($this->document, $this->author);
        $response = $watermarkService->sendRequest('POST');
        $newFileName = 'watermarked/' . $response->watermarked;
        $this->document->filename = $newFileName;
        $this->document->save();

    }
}
