<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PhpApi\Router;
use PhpApi\Model\RouterOptions;
use PhpApi\Model\SwaggerOptions;

$router = (new Router(
    new RouterOptions(
        namespace: 'SchentrupSoftware\\CatholicChurchApi',
        directory: __DIR__ . '/../src/Routes',
    ),
    new SwaggerOptions(
        title: "Sample API Documents",
        apiVersion: "1.2.3",
    )
));

$router->route()->send();
