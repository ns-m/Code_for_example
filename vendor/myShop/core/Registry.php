<?php

namespace myShop;


class Registry
{
    use TSingletone;

    protected static $properties = [];

    /**
     * @param array $properties
     */
    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    /**
     * @return array
     */
    public function getProperty($name)
    {
        if (isset(self::$properties[$name])){
            return self::$properties[$name];
        }
        return null;
    }

    public function getProperties()
    {
        return self::$properties;
    }
}