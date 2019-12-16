<?php
namespace zero;

require __DIR__ . '/../vendor/autoload.php';

new \Nezimi\Error();

Container::get('application')->run()->send();


