<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\FootballMatch;
use Carbon\Carbon;

class UpdateMatchResults extends Command
{
    protected $signature = 'matches:update-results';


    protected $description = 'Update results of matches played in the last 24 hours';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $now = now();
        $yesterday = now()->subDay();

        $this->info("Current time: $now");
        $this->info("24 hours ago: $yesterday");


        $matches = FootballMatch::whereBetween('date', [$yesterday, $now])
            ->whereNull('result')
            ->get();

        $this->info('Number of matches found: ' . $matches->count());

        if ($matches->isEmpty()) {
            $this->info('No matches found to update.');
            return;
        }


        foreach ($matches as $match) {
            $randomResult = rand(0, 5) . '-' . rand(0, 5);
            $match->result = $randomResult;
            $match->save();

            $this->info("Match ID {$match->id} updated with result: $randomResult");
        }

        $this->info('Match results updated successfully.');
    }
}
