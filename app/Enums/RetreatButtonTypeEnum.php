<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class RetreatButtonTypeEnum extends Enum
{
    const BOOK = 'book_now';
    const LEARN_MORE = 'learn_more';
}
