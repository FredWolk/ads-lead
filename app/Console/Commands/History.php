<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class History extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:history';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $shows = \App\Models\ShowBanner::all();
        if ($shows->count() > 0){
            foreach ($shows->toArray() as $show){
                \App\Models\HistoryShowBanners::create([
                    'banner' => $show['banner'],
                    'views' => $show['views'],
                    'clicks' => $show['clicks'],
                    'created_at' => date('Y-m-d 00:00:01')
                ]);
            }
            \App\Models\ShowBanner::truncate();
        }
        return Command::SUCCESS;
    }
}
