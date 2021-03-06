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
    protected $signature = 'Enable:Bayes {dataset} {from} {to} {algorithm} {trainingset} {userId}';

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
        $from = $this->argument('from');
        $to = $this->argument('to');
        $algorithm = $this->argument('algorithm');
        $trainingset = $this->argument('trainingset');
        $userId = $this->argument('userId');
        exec(' matlab /minimize /nosplash /nodesktop /r bayes(' . $dataset . ',' . $from . ',' . $to . ',' . $algorithm . ',' . $trainingset .  ',' . $userId .')');
    }
}
