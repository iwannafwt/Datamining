<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EnableKnn extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Enable:Knn {dataset} {k} {trainingset} {evolutionindex}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command Enable:Knn enable matlab and run Knn function';

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
        $k = $this->argument('k');
        $trainingset = $this->argument('trainingset');
        $evolutionindex = $this->argument('evolutionindex');
        exec(' matlab /minimize /nosplash /nodesktop /r knn(' . $dataset .  ',' . $k . ',' . $trainingset . ',' . $evolutionindex . ')');

    }
}
