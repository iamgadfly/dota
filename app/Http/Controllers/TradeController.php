<?php

namespace App\Http\Controllers;

use App\Enums\ErrEnum;
use App\Enums\OrderEnum;
use App\Enums\TradeEnum;
use App\Http\Requests\CreateTradeRequest;
use App\Models\Items;
use App\Models\Order;
use http\Env\Request;
use Illuminate\Support\Facades\Http;
use waylaidwanderer\SteamCommunity\TradeOffers\Trade;

class TradeController extends Controller
{

    static $COOKIES
        = [
            'sessionid'        => '6357303fc2887a7ce7b0d343',
            'steamCountry'     => 'RU%7C68ea76aa6c028cc8103574e4de1a903c',
            'steamLoginSecure' => '76561198841334052%7C%7CeyAidHlwIjogIkpXVCIsICJhbGciOiAiRWREU0EiIH0.eyAiaXNzIjogInI6MEVDQ18yNDI3OEE2N185QTUxQiIsICJzdWIiOiAiNzY1NjExOTg4NDEzMzQwNTIiLCAiYXVkIjogWyAid2ViOnN0b3JlIiBdLCAiZXhwIjogMTcxMjMxNTcxMCwgIm5iZiI6IDE3MDM1ODg2OTksICJpYXQiOiAxNzEyMjI4Njk5LCAianRpIjogIjBFRkZfMjQzNjI4RkZfNkVFNzIiLCAib2F0IjogMTcxMTQzOTU0OSwgInJ0X2V4cCI6IDE3Mjk0MDE1NjEsICJwZXIiOiAwLCAiaXBfc3ViamVjdCI6ICIzNy4xMTMuMTA0LjIwNSIsICJpcF9jb25maXJtZXIiOiAiMzcuMTEzLjEwNC4yMDUiIH0.Lf-0YYPC7giksooRatMiNnw9CtPmzOSyBfdQgtlTvvLGPboCpy-wkKU14u8khBL9U1e3313c2yAKziUlerbWAg',
            'browserid'        => '3432379323214150486',
            'recentapps'       => '%7B%22534600%22%3A1712042264%7D',
            'ak_bmsc'          => '67AE708DA7F33F41FEF9E2F71F865A7E~000000000000000000000000000000~YAAQFflVaHgoRZqOAQAAqo7IqBdB5LkveXZ0RcRnVb1cqkOJriuioolzqfYYQ59dm5TGjR3QT1K8v+vfmqmOEb5Q1fq1yUtAc6wOwmWG6zDwIkTmmYq2dNewI91Cx4GGLbDT0YTCJay+BIPrOkdj45pdFvbEICGNFci4AM4VBhhMg5Q5zB46GBagXWwaP0YjvDD1h/hya42yu0S0hulmijkE/3MWpQPwFU7tEsj6ZGer70LHr8E9Mju90CXYBG/YkJlHpyKqHxjLHmpnwP/i6iZmCucaKI3wg+rDUA7rRkgwaXZhxuv4nM/5ByTaQYfSo4JauDpdFlxXEc4cSBDi1sJBVeF42qMuFnWdZQHbRB/XAB7IWY/Re/CGp/UXEP16Y9ekYxRq',
        ];

    public function steamAuth()
    {
        $ch = curl_init();

        curl_setopt(
            $ch,
            CURLOPT_URL,
            'https://api.steampowered.com/IAuthenticationService/GetPasswordRSAPublicKey/v1?origin=https:%2F%2Fstore.steampowered.com&input_protobuf_encoded=Cgp0b21fZGVyZGVu'
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        $headers   = [];
        $headers[] = 'Accept: application/json, text/plain, */*';
        $headers[] = 'Accept-Language: en-US,en;q=0.9';
        $headers[] = 'Cache-Control: no-cache';
        $headers[] = 'Origin: https://store.steampowered.com';
        $headers[] = 'Pragma: no-cache';
        $headers[] = 'Referer: https://store.steampowered.com/';
        $headers[]
                   = 'Sec-Ch-Ua: \"Google Chrome\";v=\"123\", \"Not:A-Brand\";v=\"8\", \"Chromium\";v=\"123\"';
        $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
        $headers[] = 'Sec-Ch-Ua-Platform: \"macOS\"';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Site: same-site';
        $headers[]
                   = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        dd($result);

        //        $ch = curl_init();
        //
        //        curl_setopt($ch, CURLOPT_URL, 'https://steamcommunity.com/my/goto');
        //        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        //
        //
        //        $headers = array();
        //        $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7';
        //        $headers[] = 'Accept-Language: en-US,en;q=0.9';
        //        $headers[] = 'Cache-Control: no-cache';
        //        $headers[] = 'Connection: keep-alive';
        //        $headers[] = 'Cookie: sessionid=4af3a2b8a04d7a2b58746888; steamCountry=RU%7C68ea76aa6c028cc8103574e4de1a903c; timezoneOffset=10800,0; Steam_Language=russian; browserid=3189185576849944606; steamLoginSecure=76561199667623388%7C%7CeyAidHlwIjogIkpXVCIsICJhbGciOiAiRWREU0EiIH0.eyAiaXNzIjogInI6MEVFRl8yNDM2MjkzNF8yOTk2MiIsICJzdWIiOiAiNzY1NjExOTk2Njc2MjMzODgiLCAiYXVkIjogWyAid2ViOmNvbW11bml0eSIgXSwgImV4cCI6IDE3MTI2NTA0NDQsICJuYmYiOiAxNzAzOTIzODY5LCAiaWF0IjogMTcxMjU2Mzg2OSwgImp0aSI6ICIwRUYzXzI0MzYyOTM1XzdFNDk4IiwgIm9hdCI6IDE3MTI1NjM4NjcsICJydF9leHAiOiAxNzMwNTgyMTE3LCAicGVyIjogMCwgImlwX3N1YmplY3QiOiAiMzcuMTEzLjEwOS45NCIsICJpcF9jb25maXJtZXIiOiAiMzcuMTEzLjEwOS45NCIgfQ.h9HjTdMtpPAPK5JrGue5kr4dvCj5p4ECl6u4KKa6UzpW4soVShul8EnJiDYe52wLNtDWDc0ogp2MryNtx7TLAA';
        //        $headers[] = 'Pragma: no-cache';
        //        $headers[] = 'Referer: https://steamcommunity.com/login/home/?goto=';
        //        $headers[] = 'Sec-Fetch-Dest: document';
        //        $headers[] = 'Sec-Fetch-Mode: navigate';
        //        $headers[] = 'Sec-Fetch-Site: same-origin';
        //        $headers[] = 'Upgrade-Insecure-Requests: 1';
        //        $headers[] = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36';
        //        $headers[] = 'Sec-Ch-Ua: \"Google Chrome\";v=\"123\", \"Not:A-Brand\";v=\"8\", \"Chromium\";v=\"123\"';
        //        $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
        //        $headers[] = 'Sec-Ch-Ua-Platform: \"macOS\"';
        //        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        //
        //        $result = curl_exec($ch);
        //    preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches);
        //    $cookies = array();
        //    foreach($matches[1] as $item) {
        //        parse_str($item, $cookie);
        //        $cookies = array_merge($cookies, $cookie);
        //    }

        //        dd($cookies);

        //        $ch = curl_init();
        //        curl_setopt($ch, CURLOPT_URL, 'https://steam.tv/login/settoken');
        //        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //        curl_setopt($ch, CURLOPT_POST, 1);
        //        curl_setopt($ch, CURLOPT_POSTFIELDS, "$'------WebKitFormBoundaryk0DfmVZSgVdO5eVmrnContent-Disposition:");
        //
        //        $headers = array();
        //        $headers[] = 'Accept: application/json, text/plain, */*';
        //        $headers[] = 'Accept-Language: en-US,en;q=0.9';
        //        $headers[] = 'Cache-Control: no-cache';
        //        $headers[] = 'Connection: keep-alive';
        //        $headers[] = 'Content-Type: multipart/form-data; boundary=----WebKitFormBoundaryk0DfmVZSgVdO5eVm';
        //        $headers[] = 'Origin: https://steamcommunity.com';
        //        $headers[] = 'Pragma: no-cache';
        //        $headers[] = 'Referer: https://steamcommunity.com/';
        //        $headers[] = 'Sec-Fetch-Dest: empty';
        //        $headers[] = 'Sec-Fetch-Mode: cors';
        //        $headers[] = 'Sec-Fetch-Site: cross-site';
        //        $headers[] = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36';
        //        $headers[] = 'Sec-Ch-Ua: \"Google Chrome\";v=\"123\", \"Not:A-Brand\";v=\"8\", \"Chromium\";v=\"123\"';
        //        $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
        //        $headers[] = 'Sec-Ch-Ua-Platform: \"macOS\"';
        //        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        //        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //        // get headers too with this line
        //        curl_setopt($ch, CURLOPT_HEADER, 1);
        //
        //        $result = curl_exec($ch);
        //
        //        preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches);
        //        $cookies = array();
        //        foreach($matches[1] as $item) {
        //            parse_str($item, $cookie);
        //            $cookies = array_merge($cookies, $cookie);
        //        }
        //
        //        dd($cookies);

        dd("322");
    }

    // Request $request
    public function trade()
    {
        //        76561198131886942
        //        $trade = new Trade(new SteamCommunity(), '1040416604');
        //        dd($trade->send('3XfqVJxT'));
        //        dd($trade->steamCommunity->getSessionId());
        //        //        935F87653DEAA11C4C81569196096A37
        //        8fe-B2gj
        //        dd(json_encode($trade));
        //        dd($trade->send());
        //        {"newversion":true,"version":1,"me":{"assets":[],"currency":[],"ready":false},"them":{"assets":[],"currency":[],"ready":false}}
        //        {"newversion":true,"version":2,"me":{"assets":[],"currency":[],"ready":false},"them":{"assets":[{"appid":"730","contextid":"2","amount":1,"assetid":"26007168339"}],"currency":[],"ready":false}}

        $tradeData = [
            "newversion" => true,
            "version"    => 2,
            "me"         => [
                "assets"   => [],
                "currency" => [],
                "ready"    => false,
            ],
            "them"       => [
                "assets"   => [
                    [
                        "appid"     => 570,
                        "contextid" => "2",
                        "amount"    => 1,
                        "assetid"   => "29019509310",
                    ],
                ],
                "currency" => [],
                "ready"    => false,
            ],
        ];

        $tradeToken = [
            'trade_offer_access_token' => '3XfqVJxT',
        ];

        //        dd("sessionid=tslqez6uh2wiybljhvacwkzc&serverid=1&partner=76561198131886942&tradeoffermessage=52&json_tradeoffer=" .  urlencode(json_encode($tradeData)) . "&captcha=&trade_offer_create_params=%7B%7D", "sessionid=tslqez6uh2wiybljhvacwkzc&serverid=1&partner=76561199000682332&tradeoffermessage=52&json_tradeoffer=%7B%22newversion%22%3Atrue%2C%22version%22%3A2%2C%22me%22%3A%7B%22assets%22%3A%5B%5D%2C%22currency%22%3A%5B%5D%2C%22ready%22%3Afalse%7D%2C%22them%22%3A%7B%22assets%22%3A%5B%7B%22appid%22%3A%22730%22%2C%22contextid%22%3A%222%22%2C%22amount%22%3A1%2C%22assetid%22%3A%2226007168339%22%7D%5D%2C%22currency%22%3A%5B%5D%2C%22ready%22%3Afalse%7D%7D&captcha=&trade_offer_create_params=%7B%7D");
        $ch = curl_init();
        curl_setopt(
            $ch,
            CURLOPT_URL,
            'https://steamcommunity.com/tradeoffer/new/send'
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        //        curl_setopt($ch, CURLOPT_POSTFIELDS, "sessionid=tslqez6uh2wiybljhvacwkzc&serverid=1&partner=76561199000682332&tradeoffermessage=52&json_tradeoffer=%7B%22newversion%22%3Atrue%2C%22version%22%3A2%2C%22me%22%3A%7B%22assets%22%3A%5B%5D%2C%22currency%22%3A%5B%5D%2C%22ready%22%3Afalse%7D%2C%22them%22%3A%7B%22assets%22%3A%5B%7B%22appid%22%3A%22730%22%2C%22contextid%22%3A%222%22%2C%22amount%22%3A1%2C%22assetid%22%3A%2226007168339%22%7D%5D%2C%22currency%22%3A%5B%5D%2C%22ready%22%3Afalse%7D%7D&captcha=&trade_offer_create_params=%7B%7D");
        // также как и здесь sessionid
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            "sessionid=d3ttuk5bmsqn0b5b44w4z3qb&serverid=1&partner=76561198131886942&tradeoffermessage=&json_tradeoffer="
            .urlencode(json_encode($tradeData))
            ."&captcha=&trade_offer_create_params=%7B%7D&trade_offer_create_params="
            .urlencode(json_encode($tradeToken))
        );
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
            = 'Cookie: bCompletedTradeOfferTutorial=true; strTradeLastInventoryContext=570_2; timezoneOffset=10800,0; webTradeEligibility=%7B%22allowed%22%3A0%2C%22reason%22%3A16416%2C%22allowed_at_time%22%3A1713184320%2C%22steamguard_required_days%22%3A15%2C%22new_device_cooldown_days%22%3A0%2C%22expiration%22%3A1712579820%2C%22time_checked%22%3A1712579520%7D; Steam_Language=english; mobileClient=ios; mobileClientVersion=777777 3.7.6; sessionid=d3ttuk5bmsqn0b5b44w4z3qb; steamLoginSecure=76561198841334052%7C%7CeyAidHlwIjogIkpXVCIsICJhbGciOiAiRWREU0EiIH0.eyAiaXNzIjogInI6MEVDNF8yNDI3OUUzQl9BN0Y1OSIsICJzdWIiOiAiNzY1NjExOTg4NDEzMzQwNTIiLCAiYXVkIjogWyAid2ViIiwgIm1vYmlsZSIgXSwgImV4cCI6IDE3MTI1ODcxODksICJuYmYiOiAxNzAzODYwNDgwLCAiaWF0IjogMTcxMjUwMDQ4MCwgImp0aSI6ICIwRUZGXzI0MzYyOTI5XzBBNjREIiwgIm9hdCI6IDE3MTE0MzkzMDQsICJydF9leHAiOiAxNzI5ODYxOTA0LCAicGVyIjogMCwgImlwX3N1YmplY3QiOiAiMzcuMTEzLjEwNC4yMDUiLCAiaXBfY29uZmlybWVyIjogIjM3LjExMy4xMDQuMjA1IiB9.nXJVgoJfr6xk8dgXfG7y3zSI_ESJDjwfCFFNXQ2aIVA15uNj_15t5o3t2FRMXf6wj6elLTFkScf3UXR-yaNjBg; strInventoryLastContext=570_2; browserid=3277004501253529734';

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);

        dd($result);
    }

    public function balance()
    {
        $resp = Http::withHeaders([
            'Token'        => TradeEnum::TOKEN,
            'Content-Type' => 'application/json',
        ])->get(TradeEnum::BALANCE);

        //        dd($resp->body());

        return $resp;
    }

    public function items()
    {
        $resp = Http::withHeaders([
            'Token'        => TradeEnum::TOKEN,
            'Content-Type' => 'application/json',
        ])->get(TradeEnum::ITEMS.'game='.TradeEnum::GAME);

        return $resp;
    }

    public function create_deposit(\Illuminate\Http\Request $request)
    {
        $o             = new Order();
        $o->user_id    = 1;
        $o->status     = OrderEnum::CREATED;
        $o->usd_amount = 0;
        $o->rub_amount = 0;
        $o->items      = json_encode($request->items);

        //        $data = urlencode(
        //            json_encode([
        //                'deposit_id' => 1,
        //                'game'       => TradeEnum::GAME,
        //                'items'      => $request->get('items'),
        //            ])
        //        );
        //
        //        $resp = Http::withHeaders([
        //            'Token'        => TradeEnum::TOKEN,
        //            'Content-Type' => 'application/x-www-form-urlencoded'
        //            //                'application/json',
        //        ])->withBody(
        //            urlencode(
        //                json_encode([
        //                    'deposit_id' => 1,
        //                    'game'       => TradeEnum::GAME,
        //                    'items'      => $request->get('items'),
        //                ])
        //            )
        //        )
        //            ->post(TradeEnum::TRADE);

        //        dd("transaction_id=". "123"
        //            ."&game="
        //            .TradeEnum::GAME."&items=" . "783312163");


        $o->save();
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL            => TradeEnum::DEPOSIT,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "POST",
            CURLOPT_POSTFIELDS     => "deposit_id=".$o->id
                ."&steam_id=76561198841334052",
            CURLOPT_HTTPHEADER     => [
                "Token:".TradeEnum::TOKEN,
                "cache-control: no-cache",
                "content-type: application/x-www-form-urlencoded",
            ],
        ]);
        //        .
        //        "&game=".TradeEnum::GAME."&items=".implode(', ', $request->get('items')
        $resp = curl_exec($curl);
        $resp = json_decode($resp);
        $o->save();

        if ($resp->status == 'error') {
            $o->status = OrderEnum::ERROR;
            $o->save();

            return response()->json([
                'status' => false,
                'err'    => $resp->error_message,
            ]);
        }

        $o->url            = $resp->url;
        $o->status         = OrderEnum::PROCESSING;
        $o->transaction_id = intval($resp->transaction_id);
        $o->save();

        return response()->json([
            'status' => true,
            'data'   => $resp,
        ]);

        //                dd($resp);

        //        $resp = ;
        //        12430999


        //        dd($request->all());
    }

    public function create_trade(\Illuminate\Http\Request $request)
    {
        $order = Order::find($request->get('order_id'));

        if (empty($order)) {
            return response()->json(
                ['status' => false, 'err' => ErrEnum::ORDER_NOT_FOUND],
                400
            );
        }


        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL            => TradeEnum::TRADE,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "POST",
            //            $resp->transaction_id
            CURLOPT_POSTFIELDS     => "transaction_id=".$order->transaction_id
                ."&game=".TradeEnum::GAME."&items=".implode(
                    ', ',
                    $request->get('items')
                ),
            CURLOPT_HTTPHEADER     => [
                "Token:".TradeEnum::TOKEN,
                "cache-control: no-cache",
                "content-type: application/x-www-form-urlencoded",
            ],
        ]);
        $response = curl_exec($curl);
        $err      = curl_error($curl);
        dd($response);
        //        dd(json_encode([
        //            'deposit_id' => 1,
        //            'game'       => TradeEnum::GAME,
        //            'items'      => $request->get('items'),
        //        ]));

        //        dd($resp->json());
        return $resp->json();
    }

}
