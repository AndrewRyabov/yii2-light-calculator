<?php

namespace almaz44\light\calculator;
//include_once "L09.php";
//include_once "L10.php";
//include_once "L15.php";
//include_once "L16.php";
//include_once "L17.php";
//include_once "L18.php";
//include_once "L25.php";

/**
 * This is just an example.
 */
class CalculatorsLight
{
    private $_price;

    public function __construct()
    {
        if (class_exists('L25')) {
            $L25 = new L25();
        } else die('ERROR class L25 не доступен');
    }

    public function LightPrice()
    {
        return (strlen($this->_price) > 1) ? $this->_price : 10;
        //return $this->_price;
    }

    public function LightPower()
    {
        return 2;
    }

    public function LightMassa()
    {
        return 3;
    }
}
