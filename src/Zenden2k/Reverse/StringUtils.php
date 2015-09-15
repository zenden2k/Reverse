<?php

namespace Zenden2k\Reverse;

class StringUtils {

public static function Reverse($str)
{
    $str = preg_replace('/[aeiouаоуэиеы]/iu', '', $str);
    return implode(array_reverse(preg_split('//u', $str)));
}

}