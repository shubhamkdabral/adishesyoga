<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class SliderButtonType extends Enum
{
    const ARROW = 'fa-arrow-right';
    const USERS = 'fa-users';
    const PLAY = 'fa-play';
    const SEARCH = 'fa-search';
    const PHONE = 'fa-phone';
    const INFO = 'fa-info-circle';
}
