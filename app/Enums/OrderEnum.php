<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class OrderEnum extends Enum
{
    const CREATED = 'created';
    const PROCESSING = 'processing';
    const ACCEPTED = 'accepted';
    const WAIT = 'wait';
    const CANCEL = 'cancel';
    const SUCCESS = 'success';
    const ERROR = 'error';
    const TIMEOUT = 'timeout';
}
