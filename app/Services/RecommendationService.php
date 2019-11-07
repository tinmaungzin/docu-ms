<?php


namespace App\Services;


use App\Models\Document;

class RecommendationService extends PythonService
{
    protected $url, $data;

    public function __construct()
    {
        parent::__construct();
        $this->url = 'recommendation';
    }

    public function prepareData(Document $document, $jsonFile, $abstract)
    {
        $this->data = [
            'book_id'   => $document->id,
            'title'     => $document->title,
            'abstract'  => $abstract,
            'json_file' => $jsonFile
        ];
    }
}
