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
        ])->get(TradeEnum::ITEMS.'game='.TradeEnum::GAME);

        $data = $resp->json();

        if ($data['status'] !== 'success') {
            dd("skins is empty!");
        }

        foreach ($data['skins'] as $item) {
            dd($this->parse($item['name']));
            //            dd(urlencode($item['name']));
            //            $resp = Http::get('https://steamcommunity.com/market/listings/570/' . urlencode($item['name']));
            //            dd(explode('market_listing_largeimage', $resp->body()));

            //            $html = file_get_contents(s
            //                'https://steamcommunity.com/market/listings/570/'.urlencode(
            //                    $item['name']
            //                )
            //            );
            //            $doc  = new \DOMDocument();
            //            @$doc->loadHTML($html);
            //
            //            $tags = $doc->getElementsByTagName('img');
            //            foreach ($tags as $tag) {
            //                $images[] = $tag->getAttribute('src');
            //            }

            $ch = curl_init();
            curl_setopt(
                $ch,
                CURLOPT_URL,
                'https://steamcommunity.com/market/listings/570/'.urlencode(
                    $item['name']
                )
            );

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            //        curl_setopt($ch, CURLOPT_POSTFIELDS, "sessionid=tslqez6uh2wiybljhvacwkzc&serverid=1&partner=76561199000682332&tradeoffermessage=52&json_tradeoffer=%7B%22newversion%22%3Atrue%2C%22version%22%3A2%2C%22me%22%3A%7B%22assets%22%3A%5B%5D%2C%22currency%22%3A%5B%5D%2C%22ready%22%3Afalse%7D%2C%22them%22%3A%7B%22assets%22%3A%5B%7B%22appid%22%3A%22730%22%2C%22contextid%22%3A%222%22%2C%22amount%22%3A1%2C%22assetid%22%3A%2226007168339%22%7D%5D%2C%22currency%22%3A%5B%5D%2C%22ready%22%3Afalse%7D%7D&captcha=&trade_offer_create_params=%7B%7D");
            // также как и здесь sessionid
            curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

            $headers   = [];
            $headers[] = 'Host: steamcommunity.com';
            $headers[] = 'Accept: */*';
            $headers[] = 'Sec-Fetch-Site: same-origin';
            $headers[] = 'Accept-Language: ru';
            $headers[] = 'Sec-Fetch-Mode: cors';
            $headers[]
                       = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
            $headers[] = 'Origin: https://steamcommunity.com';
            $headers[]
                       = 'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 17_4 like Mac OS X; Valve Steam App Version/3) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148';
            $headers[]
                       = 'Referer: https://steamcommunity.com/tradeoffer/new/?partner=1040416604';
            $headers[] = 'Sec-Fetch-Dest: empty';
            // куки придется со временем менять всегда
            //        $headers[] = 'Cookie: bCompletedTradeOfferTutorial=true; strTradeLastInventoryContext=730_2; Steam_Language=english; mobileClient=ios; mobileClientVersion=777777 3.7.6; sessionid=tslqez6uh2wiybljhvacwkzc; steamLoginSecure=76561198841334052%7C%7CeyAidHlwIjogIkpXVCIsICJhbGciOiAiRWREU0EiIH0.eyAiaXNzIjogInI6MEVDNF8yNDI3OUUzQl9BN0Y1OSIsICJzdWIiOiAiNzY1NjExOTg4NDEzMzQwNTIiLCAiYXVkIjogWyAid2ViIiwgIm1vYmlsZSIgXSwgImV4cCI6IDE3MTIzMjExMjksICJuYmYiOiAxNzAzNTkzMTkyLCAiaWF0IjogMTcxMjIzMzE5MiwgImp0aSI6ICIwRUZGXzI0MzYyOTAwXzNFRUNEIiwgIm9hdCI6IDE3MTE0MzkzMDQsICJydF9leHAiOiAxNzI5ODYxOTA0LCAicGVyIjogMCwgImlwX3N1YmplY3QiOiAiMzcuMTEzLjEwNC4yMDUiLCAiaXBfY29uZmlybWVyIjogIjM3LjExMy4xMDQuMjA1IiB9.0ljUhc6eWc7XRi-ci286Rb62VVAFigS_DeO2RlYUTivKKl6S9C0BCUJmtnomFWDpP5JhoiIZMZDOEWCY14OeAg; timezoneOffset=10800,0; webTradeEligibility=%7B%22allowed%22%3A0%2C%22reason%22%3A16416%2C%22allowed_at_time%22%3A1712907220%2C%22steamguard_required_days%22%3A15%2C%22new_device_cooldown_days%22%3A0%2C%22expiration%22%3A1712302720%2C%22time_checked%22%3A1712302420%7D; strInventoryLastContext=730_2; browserid=3277004501253529734';
            // $headers[] = 'Cookie: bCompletedTradeOfferTutorial=true; strTradeLastInventoryContext=570_2; Steam_Language=english; mobileClient=ios; mobileClientVersion=777777 3.7.6; sessionid=37afe4d49b87a23b2424aebc; steamLoginSecure=76561198841334052%7C%7CeyAidHlwIjogIkpXVCIsICJhbGciOiAiRWREU0EiIH0.eyAiaXNzIjogInI6MEVDNF8yNDI3OUUzQl9BN0Y1OSIsICJzdWIiOiAiNzY1NjExOTg4NDEzMzQwNTIiLCAiYXVkIjogWyAid2ViIiwgIm1vYmlsZSIgXSwgImV4cCI6IDE3MTI0MTM3MzIsICJuYmYiOiAxNzAzNjg2MjM3LCAiaWF0IjogMTcxMjMyNjIzNywgImp0aSI6ICIwRUZGXzI0MzYyOTBFXzQyMkJEIiwgIm9hdCI6IDE3MTE0MzkzMDQsICJydF9leHAiOiAxNzI5ODYxOTA0LCAicGVyIjogMCwgImlwX3N1YmplY3QiOiAiMzcuMTEzLjEwNC4yMDUiLCAiaXBfY29uZmlybWVyIjogIjM3LjExMy4xMDQuMjA1IiB9.zAmXxhAGqeMIafDh_lc1soRc1Tsgdph4ZNlnx7HWT1mS9sz-7IdL5FjmD1dZoxz5rGPENz_zhZTHhdtKrtlkDw; timezoneOffset=10800,0; webTradeEligibility=%7B%22allowed%22%3A0%2C%22reason%22%3A16416%2C%22allowed_at_time%22%3A1712931111%2C%22steamguard_required_days%22%3A15%2C%22new_device_cooldown_days%22%3A0%2C%22expiration%22%3A1712326611%2C%22time_checked%22%3A1712326311%7D; strInventoryLastContext=570_2; browserid=3190310208425722721';
            $headers[]
                = 'Cookie: Steam_Language=russian; app_impressions=570@2_100100_100101_100106|1049800@2_100300_100500__100510|1982340@2_100300_100500__100503; browserid=3190310208425722721; recentlyVisitedAppHubs=570%2C304430%2C211%2C730; sessionid=37afe4d49b87a23b2424aebc; steamCountry=RU%7Ce52405df6fce077b1668efdc6fcbd679; steamLoginSecure=76561198841334052%7C%7CeyAidHlwIjogIkpXVCIsICJhbGciOiAiRWREU0EiIH0.eyAiaXNzIjogInI6MEVDQ18yNDI3OEE2N185QTUxQiIsICJzdWIiOiAiNzY1NjExOTg4NDEzMzQwNTIiLCAiYXVkIjogWyAid2ViOmNvbW11bml0eSIgXSwgImV4cCI6IDE3MTM1MTU5ODIsICJuYmYiOiAxNzA0Nzg4NzA1LCAiaWF0IjogMTcxMzQyODcwNSwgImp0aSI6ICIwRjBBXzI0NDg5RjA5XzA0MjM1IiwgIm9hdCI6IDE3MTE0Mzk1NDksICJydF9leHAiOiAxNzI5NDAxNTYxLCAicGVyIjogMCwgImlwX3N1YmplY3QiOiAiMzcuMTEzLjEwNC4yMDUiLCAiaXBfY29uZmlybWVyIjogIjM3LjExMy4xMDQuMjA1IiB9.TqlKGhcK9WWUA_ke8_bjeRxLL7ydEmb86ecPDD20sVRQWSejamqetaTCIApIS2q_eyU9vRgIxn04drtaPXquCw;';

            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $result = curl_exec($ch);

            dd($result);
            $doc = new \DOMDocument();
            @$doc->loadHTML($result);

            $tags = $doc->getElementsByTagName('img');
            foreach ($tags as $tag) {
                $images[] = $tag->getAttribute('src');
            }

            dd($images);

            Items::updateOrCreate(
                ['classid' => $item['properties']['classid']],
                [
                    'name'      => $item['name'],
                    'slug'      => Str::slug($item['name']),
                    'price_usd' => $item['price'],
                    'count'     => $item['count'],
                    'classid'   => $item['properties']['classid'],
                ]
            );
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
