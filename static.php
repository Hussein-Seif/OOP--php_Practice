<?php

class Str
{
    public static $y="dasdasd";
    public static function upercase($string)
    {
        return trim(ucwords($string));
    }
}


echo Str::upercase("hussein seif");


class Text extends Str
{
   public static $x=2;
   public static function test1()
   {
       echo self::$x;
       echo  parent::$y ;

   }
}
echo "<br>" ;
echo Text:: test1();    
