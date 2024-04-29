<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Setings;
use Illuminate\Console\Command;

class UpdateColumnTask extends Command
{
    // /**
    //  * The name and signature of the console command.
    //  *
    //  * @var string
    //  */
    // protected $signature = 'command:name';

    // /**
    //  * The console command description.
    //  *
    //  * @var string
    //  */
    // protected $description = 'Command description';

    // /**
    //  * Execute the console command.
    //  *
    //  * @return int
    //  */
    // public function handle()
    // {
    //     return Command::SUCCESS;
    // }

    // protected $signature = 'task:update-column';

    // protected $description = 'Update column in database if database time matches current time';

    // public function handle()
    // {
    //     $currentDateTime = now();
    //     $countdown = Setings::where('open_time', $currentDateTime)->first();

    //     if ($countdown) {
    //         $countdown->update(['column_to_update' => 'updated_value']);
    //         $this->info('Column updated successfully.');
    //     } else {
    //         $this->info('No matching record found.');
    //     }
    // }

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
                $setting->update(['status' => 'buka']); // Update status menjadi "buka"
            }
        }

        $this->info('Opening time checked and updated successfully.');
    }
}
