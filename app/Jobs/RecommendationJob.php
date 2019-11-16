<?php

namespace App\Jobs;

use App\Models\Document;
use App\Services\RecommendationService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;

class RecommendationJob implements ShouldQueue
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
     * @return void
     */
    public function handle()
    {
        /**
         * @var RecommendationService $recommendationService
         */
        //
        $recommendationService = resolve(RecommendationService::class);
        $jsonFile = storage_path('app/documents/' . Config::get('document.json_file'));
        if (!file_exists($jsonFile)) {
            Artisan::call('document:save');
        }
        $jsonFile = 'documents/' . Config::get('document.json_file');
        $keywords = $this->document->keywords->pluck('name')->toArray();
        $abstract = implode(" ", $keywords);
        $recommendationService->prepareData($this->document, $jsonFile, $abstract);
        $response = $recommendationService->sendRequest("POST");
        $docIds = collect($response)->pluck('book_id');
        $docIds->each(function ($docId) {
            $this->document->related()->create([
                'related_document_id' => $docId
            ]);
        });
    }
}
