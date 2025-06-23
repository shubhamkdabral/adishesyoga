<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CoreValuesEnum extends Enum
{
    const HEART = 'heart';
    const HAND = 'hand';
    const BOOK = 'book';
    const EARTH = 'earth';
}
