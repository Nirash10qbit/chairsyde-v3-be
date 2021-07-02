<?php

namespace App\Console\Commands;
use Artisan;
use Illuminate\Console\Command;

class ProjectInitCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {

        $string = "
   _____ _           _                    _       __      ______
  / ____| |         (_)                  | |      \ \    / /___ \
 | |    | |__   __ _ _ _ __ ___ _   _  __| | ___   \ \  / /  __) |
 | |    | '_ \ / _` | | '__/ __| | | |/ _` |/ _ \   \ \/ /  |__ <
 | |____| | | | (_| | | |  \__ \ |_| | (_| |  __/    \  /   ___) |
  \_____|_| |_|\__,_|_|_|  |___/\__, |\__,_|\___|     \/   |____/
                                 __/ |
                                |___/
";

        $this->info($string);

        Artisan::call('migrate:fresh', array('--seed' => true));
        $this->info(Artisan::output());
        Artisan::call('module:seed');
        $this->info(Artisan::output());

        return 0;
    }
}
