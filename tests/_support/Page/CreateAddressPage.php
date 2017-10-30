<?php
namespace Page;

class CreateAddressPage
{
    // include url of current page
    public static $URL = '';

    public static function route($param)
    {
        return static::$URL.$param;
    }


}
