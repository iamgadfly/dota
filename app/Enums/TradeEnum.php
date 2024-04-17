<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class TradeEnum extends Enum
{
    const TOKEN = '6431-AFNFa2JQoLHgYQfHoWJrk0TkFL1Wtn';
    const BALANCE = 'https://skinify.io/api/project-balance';
    const ITEMS = 'https://skinify.io/api/withdraw/prices?';
    const TRADE = 'https://skinify.io/api/create-steam-offer';
    const DEPOSIT = 'https://skinify.io/api/create-deposit';
    const GAME = 'dota2';
}
