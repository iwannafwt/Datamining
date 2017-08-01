<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EnableBayes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Enable:Bayes {dataset} {algorithm} {trainingset} {evolutionindex}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command Enable:Bayes enable matlab and run Bayes function';

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
        $trainingset = $this->argument('trainingset');
        $evolutionindex = $this->argument('evolutionindex');
        exec(' matlab /minimize /nosplash /nodesktop /r bayes(' . $dataset . ',' . $algorithm . ',' . $trainingset . ',' . $evolutionindex . ')');

    }
}
