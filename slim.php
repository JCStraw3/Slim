<?php

require 'vendor/autoload.php';
require 'vendor/slim/slim/Slim/myview.php';

$app = new \Slim\Slim(array(
	'view' => new myView()
));

$app->get('/hello', function() use ($app){
	$app->render('view.php', array());
});

$app->run();