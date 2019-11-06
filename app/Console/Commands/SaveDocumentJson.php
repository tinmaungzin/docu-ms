<?php

namespace App\Console\Commands;

use App\Models\Document;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class SaveDocumentJson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'document:save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save document rows to json';

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
        $documentsCollect = collect();
        $jsonFile = storage_path('app/documents/' . Config::get('document.json_file'));
        //check if previous json file exists
        if (file_exists($jsonFile)) {
            unlink($jsonFile);
        }
        $newJsonFile = fopen($jsonFile, 'w');
        Document::chunk(300, function ($documents) use ($documentsCollect) {
            foreach ($documents as $document) {
                /**
                 * @var Document $document
                 */
                $abstract = $document->keywords()->get('name');
//                ($abstract);
                $documentsCollect->push([
                    'book_id'  => $document->id,
                    'title'    => $document->title,
                    'abstract' => $abstract->pluck('name')
                ]);
            }
        });
        fwrite($newJsonFile, $documentsCollect->toJson());
        fclose($newJsonFile);
    }
}
