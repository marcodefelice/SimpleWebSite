<?php

/** @var \Slim\App $app */

$app->get('/', \Mlab\SimpleWebSite\Http\Controller\HomeController::class . ':index');

$app->post('/savemail', \Mlab\SimpleWebSite\Http\Controller\HomeController::class . ':saveContact');
