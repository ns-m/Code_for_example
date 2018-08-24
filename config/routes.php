<?php

use myShop\Router;

//default
Router::add('^site$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^site/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');