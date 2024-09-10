<?php

// use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;


Schedule::command('vehicles:cleanup')->everyFifteenMinutes();

// terminal:  php artisan schedule:work
