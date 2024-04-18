<?php  
namespace App\Helpers;

class CommonHelper
{
    public static function dateFormat($date='', $format = 'd M Y')
    { 
        if(empty($date))
            $date = date($format); 
            $tmp_date = strtotime($date);
            return date($format, $tmp_date);
    }
 
}
 
 