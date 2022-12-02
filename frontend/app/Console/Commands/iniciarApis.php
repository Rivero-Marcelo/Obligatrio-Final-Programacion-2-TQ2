<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class iniciarApis extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'apis:iniciar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Inicia las apis en los puertos predeterminados';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $this->call('serve', []);
        
        return Command::SUCCESS;
    }
}
