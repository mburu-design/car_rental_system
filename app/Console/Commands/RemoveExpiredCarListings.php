<?php

namespace App\Console\Commands;

use App\Models\Listings;
use Carbon\Carbon;
use Illuminate\Console\Command;

class RemoveExpiredCarListings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:remove-expired-car-listings';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $currentDateTime = Carbon::now();
        Listings::where(function ($query) use ($currentDateTime) {
            $query->whereDate('dropoff_date', '<=', $currentDateTime->toDateString())
                ->orWhere(function ($query) use ($currentDateTime) {
                    $query->whereDate('dropoff_date', $currentDateTime->toDateString())
                        ->whereTime('dropoff_time', '<=', $currentDateTime->toTimeString());
                });
        })->delete();
        $this->info('Expired car listings removed successfully.');
    }
}
