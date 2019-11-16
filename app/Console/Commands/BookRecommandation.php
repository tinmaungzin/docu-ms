<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class BookRecommandation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'python:recom {json}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get results for recommended book for specified book';

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
     * @return mixed
     */
    public function handle()
    {
        //
        $path_to_script = base_path('scripts/Book-Recommendation/Recommendation_final.py');
//        dd($path_to_script);
//        $process = new Process([
//            $path_to_script,
//            $this->argument('json')
//        ]);
//        dd(shell_exec('python3'));
        $process = Process::fromShellCommandline('python3 ' . $path_to_script);
        $output = [];
        $return_var = 0;
//        $process->setWorkingDirectory('/var/www');
        $process->run();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        dd($process->getOutput());
        $this->info($process->getOutput());
    }
}
