<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UserData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command use testing customer command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $this->info('Userdata');

        return Command::SUCCESS;
    }
}
