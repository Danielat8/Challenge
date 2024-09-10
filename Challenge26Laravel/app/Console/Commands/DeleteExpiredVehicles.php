<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class DeleteExpiredVehicles extends Command
{
    protected $signature = 'vehicles:cleanup';
    protected $description = 'Delete all soft-deleted vehicles and vehicles with expired insurance dates';

    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        $yesterday = Carbon::yesterday()->startOfDay();

        Log::info('Cleanup task executed.');


        $deletedSoftDeleted = Vehicle::onlyTrashed()->forceDelete();
        Log::info("Deleted {$deletedSoftDeleted} soft-deleted vehicles.");


        $deletedExpired = Vehicle::where('insurance_date', '<', $yesterday)->forceDelete();
        Log::info("Deleted {$deletedExpired} expired vehicles.");

        $this->info('Expired vehicles cleaned up successfully.');
    }
}
