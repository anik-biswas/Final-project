<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class MainCategory extends Enum
{
    const WebDevelopment =   0;
    const SoftwareIt =   1;
    const ProgramLanguage = 2;

    public static function getDescription($value): string
    {
        if ($value=== self::WebDevelopment){
            return "Web Development";
        } elseif($value===self:: SoftwareIt){
            return "Software & IT";
        } else
        {
            return "Programming Language";
        }
       return parent::getDescription($value);
    }


    
}
