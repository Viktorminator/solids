<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 5/24/17
 * Time: 4:20 PM
 */
class Helpers
{

    public static function getRusDate($date, $format = 'd m Y')
    {
        $month =  array ('', 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');

        $datetime = strtotime($date);
        $format = str_replace('m', '%s', $format);
        $format = sprintf($format, $month[date('n', $datetime)]);

        return date($format, $datetime);
    }
}