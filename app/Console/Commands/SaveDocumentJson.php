<?php

namespace App\Console\Commands;

use App\Jobs\RecommendationJob;
use App\Models\Document;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Config;

class SaveDocumentJson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'save:document';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save document rows to json and populate related table for recommendation.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     */
    public function handle()
    {

        $documentsCollect = collect();  //For storing collection to save in json file
        $documentsElo = Collection::make(); //For storing eloquent collection
        $jsonFile = storage_path('app/documents/' . Config::get('document.json_file'));
        //check if previous json file exists
        if (file_exists($jsonFile)) {
            unlink($jsonFile);
        }
        $newJsonFile = fopen($jsonFile, 'w');
        Document::chunk(300, function ($documents) use ($documentsCollect, $documentsElo) {
            foreach ($documents as $document) {
                /**
                 * @var Document $document
                 */
                $abstract = $document->keywords()->get('name');
                $documentsCollect->push([
                    'book_id'  => $document->id,
                    'title'    => $document->title,
                    'abstract' => $abstract->pluck('name')
                ]);
                $documentsElo->push($document);
            }
        });
        fwrite($newJsonFile, $documentsCollect->toJson());
        fclose($newJsonFile);
        $this->populateRecommendation($documentsElo);

    }


    /**
     * Populate recommendation data for all documents.
     *
     * @param Collection $documents
     */
    protected function populateRecommendation(Collection $documents)
    {
        $documents->each(function ($document) {
            /**
             * @var Document $document
             */
            $this->storeRecommendation($document);
        });
    }

    /**
     * Store recommendation data for one document.
     *
     * @param Document $document
     */
    protected function storeRecommendation($document)
    {
        $document->related()->delete();
        RecommendationJob::dispatch($document);
    }

}
