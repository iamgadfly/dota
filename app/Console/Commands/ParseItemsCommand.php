<?php

namespace App\Console\Commands;

use App\Enums\TradeEnum;
use App\Models\Items;
use Closure;
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
        ])->get(TradeEnum::ITEMS.'game='.TradeEnum::GAME.'&full_list=1');

        $data = $resp->json();

        if ($data['status'] !== 'success') {
            dd("skins is empty!");
        }

        foreach ($data['skins'] as $item) {
            //            $slug  = Str::slug($item['name']);
            //            $check = Items::where('slug', $slug)->first();
            if (empty($check)) {
                //                Items::where('classid', $item['properties']['classid'])->update(
                //                    [
                //                        'shop_item_id' => $item['id'],
                //                        'price_usd' => $item['price'],
                //                    ]
                //                );
                Items::updateOrCreate(
                //                ['classid' => $item['properties']['classid']],
                    ['classid' => $item['properties']['classid']],
                    [
                        'name'         => $item['name'],
                        'slug'         => $slug,
                        'price_usd'    => $item['price'],
                        'count'        => $item['count'] ?? 10,
                        'classid'      => $item['properties']['classid'],
                        'shop_item_id' => $item['id'],
                    ]
                );
            }
        }
    }

    public function parse($name)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL            => "https://steamcommunity.com/market/listings/570/Lucky%20Alpine%20Stalker%27s%20Hat",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "GET",
            CURLOPT_POSTFIELDS     => "",
            CURLOPT_COOKIE         => "sessionid=be18494e5cac4e309fa3d785; steamCountry=RU%257Ca44fd2d4328e0f2629d4485513163d59; webTradeEligibility=%257B%2522allowed%2522%253A0%252C%2522reason%2522%253A16416%252C%2522allowed_at_time%2522%253A1714047937%252C%2522steamguard_required_days%2522%253A15%252C%2522new_device_cooldown_days%2522%253A0%252C%2522expiration%2522%253A1713443437%252C%2522time_checked%2522%253A1713443137%257D",
            CURLOPT_HTTPHEADER     => [
                "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
                "Accept-Encoding: gzip, deflate, br, zstd",
                "Accept-Language: en-US,en;q=0.9,ru-RU;q=0.8,ru;q=0.7",
                "Cookie: timezoneOffset=10800,0; browserid=3190310208425722721; recentlyVisitedAppHubs=570%2C304430%2C211%2C730; sessionid=37afe4d49b87a23b2424aebc; Steam_Language=russian; strInventoryLastContext=730_2; steamCountry=RU%7Ce52405df6fce077b1668efdc6fcbd679; steamLoginSecure=76561198841334052%7C%7CeyAidHlwIjogIkpXVCIsICJhbGciOiAiRWREU0EiIH0.eyAiaXNzIjogInI6MEVDQ18yNDI3OEE2N185QTUxQiIsICJzdWIiOiAiNzY1NjExOTg4NDEzMzQwNTIiLCAiYXVkIjogWyAid2ViOmNvbW11bml0eSIgXSwgImV4cCI6IDE3MTM1MTU5ODIsICJuYmYiOiAxNzA0Nzg4NzA1LCAiaWF0IjogMTcxMzQyODcwNSwgImp0aSI6ICIwRjBBXzI0NDg5RjA5XzA0MjM1IiwgIm9hdCI6IDE3MTE0Mzk1NDksICJydF9leHAiOiAxNzI5NDAxNTYxLCAicGVyIjogMCwgImlwX3N1YmplY3QiOiAiMzcuMTEzLjEwNC4yMDUiLCAiaXBfY29uZmlybWVyIjogIjM3LjExMy4xMDQuMjA1IiB9.TqlKGhcK9WWUA_ke8_bjeRxLL7ydEmb86ecPDD20sVRQWSejamqetaTCIApIS2q_eyU9vRgIxn04drtaPXquCw; app_impressions=570@2_100100_100101_100106|1049800@2_100300_100500__100510|1982340@2_100300_100500__100503; webTradeEligibility=%7B%22allowed%22%3A0%2C%22reason%22%3A16416%2C%22allowed_at_time%22%3A1714046869%2C%22steamguard_required_days%22%3A15%2C%22new_device_cooldown_days%22%3A0%2C%22expiration%22%3A1713442369%2C%22time_checked%22%3A1713442069%7D",
                "Host: steamcommunity.com",
                'Sec-Ch-Ua: "Google Chrome";v="123", "Not:A - Brand";v="8", "Chromium";v="123"',
                "Sec-Ch-Ua-Mobile: ?0",
                "Sec-Ch-Ua-Platform: macOS",
                "Sec-Fetch-Dest: document",
                "Sec-Fetch-Mode: navigate",
                "Sec-Fetch-Site: none",
                "Sec-Fetch-User: ?1",
                "Upgrade-Insecure-Requests: 1",
                "User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36",
            ],
        ]);

        $response = curl_exec($curl);
        $err      = curl_error($curl);

        return $response;
    }

}
