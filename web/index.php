<?php
namespace zero;

require __DIR__ . '/../vendor/autoload.php';

$config = include __DIR__ . '/../config/error.php';
new Error($config);

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Authorization, Content-Type, If-Match, If-Modified-Since, If-None-Match, If-Unmodified-Since, X-Requested-With,X-Token');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE');
header('Access-Control-Max-Age: 1728000');

// try{
    Container::get('application')->run()->send();
// } catch(\Exception $exception) {
    // throw new \Exception($exception->getMessage()); 
// }