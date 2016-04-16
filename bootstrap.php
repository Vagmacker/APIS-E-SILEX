<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

?>