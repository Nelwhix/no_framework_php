<?php declare(strict_types=1);

namespace Nelwhix\NoFrameworkPhp;

require __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

$environment = "development";

/**
 * Registering the Error Handler
 */
$appError = new \Whoops\Run;

if ($environment !== 'production') {
    $appError->pushHandler(new \Whoops\Handler\PrettyPageHandler);
} else {
    $appError->pushHandler(function($e) {
        echo "Todo: Friendly error page and send me mail";
    });
}

$appError->register();

throw new \Exception;
