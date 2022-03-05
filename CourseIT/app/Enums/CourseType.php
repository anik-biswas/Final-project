<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CourseType extends Enum
{
    const Short =   0;
    const Medium =   1;
    const Long = 2;
    public static function getDescription($value): string
    {
        if ($value=== self::Short){
            return "Short";
        } elseif($value===self:: Medium){
            return "Medium";
        } else
        {
            return "Long";
        }
       return parent::getDescription($value);
    }
}
