<?php

namespace App\Jobs;

use App\Models\Document;
use App\Services\ExtractKeywordService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ExtractKeywords implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $document;

    /**
     * Create a new job instance.
     *
     * @param Document $document
     */
    public function __construct(Document $document)
    {
        //
        $this->document = $document;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        /**
         * @var ExtractKeywordService $keywordService
         */
        //
        $keywordService = resolve(ExtractKeywordService::class);
        $keywordService->prepareData($this->document);
        $response = $keywordService->sendRequest('POST');
        $keywords = collect($response->abstract)->unique()->values()->take(10)->all();
        dd($keywords);

    }
}
