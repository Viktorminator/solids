<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 5/24/17
 * Time: 4:20 PM
 */
class Helpers
{
    public static function hello_world($name)
    {
        return 'Hello World ' . $name;
    }
    public static function getRusDate($datetime) {
        $yy = (int) substr($datetime,0,4);
        $mm = (int) substr($datetime,5,2);
        $dd = (int) substr($datetime,8,2);

        $hours = substr($datetime,11,5);

        $month =  array ('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');

        return ($dd > 0 ? $dd . " " : '') . $month[$mm - 1]." ".$yy." г.";
    }
}