<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class enableMatlab extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'enable-matlab {dataset} {algorithm} {k} {trainingset} {evolutionindex}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enable Matlab';

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
        $dataset = $this->argument('dataset');
        $algorithm = $this->argument('algorithm');
        $k = $this->argument('k');
        $trainingset = $this->argument('trainingset');
        $evolutionindex = $this->argument('evolutionindex');
        exec('matlab -r show(' . $dataset . ',' . $algorithm . ',' . $k . ',' . $trainingset . ',' . $evolutionindex . ')');
//        exec('C:\Users\ioanna\Documents\Project\Datamining\storage\app\matlab.bat');
//        exec('C:\projects\Datamining\storage\app\matlab.bat');

    }
}
