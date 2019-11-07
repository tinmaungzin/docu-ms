<?php


namespace App\Services;


use App\Models\Document;
use GuzzleHttp\Psr7\Request;

class ExtractKeywordService extends PythonService
{

    protected $data, $url;

    public function __construct()
    {
        parent::__construct();
        $this->url = 'keywords';
    }


    public function prepareData(Document $document)
    {

        $this->data = [
            'title'    => $document->title,
            'abstract' => $document->abstract
        ];
    }
}
