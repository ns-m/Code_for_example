<?php
namespace app\controllers;

use myShop\Cache;

class MainController extends AppController
{
    public function indexAction()
    {
        $this->setMeta(\myShop\App::$app->getProperty('shop_name'), 'About site...', 'Words, words, words');
    }
}