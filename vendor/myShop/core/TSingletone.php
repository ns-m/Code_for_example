<?php

namespace myShop;


trait TSingletone
{
    private static $instance;

    /**
     * @return mixed
     */
    public static function instance()
    {
        if (self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }
}