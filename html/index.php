<?php
declare(strict_types=1);

use Laminas\Diactoros\ServerRequestFactory;
use Phtmx\Application;

require __DIR__ . '/../vendor/autoload.php';

$application  = new Application(
    __DIR__ . '/../routes',
    __DIR__ . '/../middlewares',
    [
        'cacheFile' => __DIR__ . '/../tmp/routes.cache',
        'cacheDisabled' => true
    ]
);
$application->run(ServerRequestFactory::fromGlobals());
