<?php
require_once __DIR__.'/vendor/autoload.php'; 
date_default_timezone_set('Asia/Tokyo');
$app = new Silex\Application();
$app->get('/callback', function() {
    return "Hello World!";
});
$app->run();

