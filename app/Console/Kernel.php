<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
<<<<<<< HEAD
        // Commands\Inspire::class,
=======
        Commands\Inspire::class,
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
<<<<<<< HEAD
        // $schedule->command('inspire')
        //          ->hourly();
=======
        $schedule->command('inspire')
                 ->hourly();
>>>>>>> 84a717c2a33d7f1175660ec174c315e1c580603c
    }
}
