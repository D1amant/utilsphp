<?php

/**
 * Created by PhpStorm.
 * User: diamate
 * Date: 06/01/16
 * Time: 12:48
 */
class Money
{

    /**
     * renorna currency value already rounded
     * @param $value
     * @return float
     */

    public static function getTaxa($value){
            $return = round (str_replace(',' , '.' , str_replace('.' , '', $value)) , 8);
            return   $return;
    }



    /**
     * renorna currency value already rounded
     * @param $value
     * @return float
     */

    public static function getvalue($value){
        $return = round (str_replace(',' , '.' , str_replace('.' , '', $value)) , 2);
        return   $return;
    }



    /**
     * renorna currency value already rounded
     * @param $value
     * @return float
     */

    public static function getMoneyToView($value){

        return  number_format($value,2, ',', '.');
    }

}