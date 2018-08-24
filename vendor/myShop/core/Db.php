<?php

namespace myShop;


class Db
{
    use TSingletone;

    protected function __construct()
    {
        $db = require_once CONFIG . '/connection_db.php';
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        if (!\R::testConnection()){
            throw new \Exception("DB is not connection!", 500);
        }
        \R::freeze(true);
        if (DEBUG){
            \R::debug(true, 1);
        }
    }
}