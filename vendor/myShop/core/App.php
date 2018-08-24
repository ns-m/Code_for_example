<?php

namespace myShop;


class App
{
    public static $app;
    public function __construct()
    {
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        self::$app = Registry::instance();
        $this->getParams();
        new ErrorsHeandler();
        Router::dispatch($query);
    }
    protected function getParams()
    {
        $params = require_once CONFIG . '/params.php';
        if (!empty($params)){
            foreach ($params as $key => $val){
                self::$app->setProperty($key, $val);
            }
        }
    }

}