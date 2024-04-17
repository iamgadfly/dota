<?php

namespace App\Console\Commands;

use App\Enums\TradeEnum;
use App\Models\Items;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ParseItemsCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse_items';

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
        $resp = Http::withHeaders([
            'Token'        => TradeEnum::TOKEN,
            'Content-Type' => 'application/json',
        ])->get(TradeEnum::ITEMS.'game='.TradeEnum::GAME);

        $data = $resp->json();

        if ($data['status'] !== 'success') {
            dd("skins is empty!");
        }

        foreach ($data['skins'] as $item) {
            Items::updateOrCreate(
                ['classid' => $item['properties']['classid']],
                [
                    'name'      => $item['name'],
                    'slug' => Str::slug($item['name']),
                    'price_usd' => $item['price'],
                    'count'     => $item['count'],
                    'classid'   => $item['properties']['classid'],
                ]
            );
        }
    }

}
