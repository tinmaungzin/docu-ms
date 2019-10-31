<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class TestController extends Controller
{
    //

    public function testScript()
    {

//        $path_to_script = 'scripts/Book-Recommendation/Recommendation_final.py';
        $path_to_json = base_path('scripts/Book-Recommendation/keywords.json');
//        $process = new Process([
//            $path_to_script,
//            $path_to_json
//        ]);
//        $process->setWorkingDirectory('/var/www/');
////        $process = new Process();
//        $process->run();
//        if (!$process->isSuccessful()) {
//            throw new ProcessFailedException($process);
//        }
//        echo $process->getOutput();
//        $command = escapeshellcmd(  $path_to_script . ' ' . $path_to_json);
//        $output = shell_exec($command);
//        dd($output);
        echo Artisan::call('python:recom', ['json' => $path_to_json]);
    }
}
