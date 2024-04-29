<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Setings;
use Illuminate\Console\Command;

class CheckOpeningTime extends Command
{
    protected $signature = 'check:opening-time';

    protected $description = 'Check if current time matches the opening time in settings and update the status';

    public function handle()
    {
        $currentTime = Carbon::now();

        // Misalkan Setting adalah model untuk tabel settings
        $settings = Setings::all();

        foreach ($settings as $setting) {
            $openingTime = Carbon::parse($setting->open_time);

            if ($currentTime->equalTo($openingTime)) {
                $setting->update(['opsi' => 'buka']); // Update status menjadi "buka"
            }
        }

        $this->info('Opening time checked and updated successfully.');
    }
}
