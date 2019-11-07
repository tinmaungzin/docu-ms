<?php


namespace App\Services;


use App\Models\Author;
use App\Models\Document;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use function GuzzleHttp\Psr7\str;

class WatermarkService extends PythonService
{

    protected $url;

    protected $data;

    public function __construct()
    {
        parent::__construct();
        $this->url = 'watermark';
    }


    public function handle(Document $document, Author $author)
    {
        $this->prepareData($document, $author);

    }

    public function prepareData(Document $document, Author $author)
    {
        $this->data = collect([
            'authorname' => $author->name,
            'pdfpath'    => $document->filename
        ]);
    }
}
