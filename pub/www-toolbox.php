<?php
use Pux\Executor;
use Pux\Mux;
use ctubio\WWWToolbox\Controller\DummyController;
use ctubio\WWWToolbox\Controller\ErrorController;

ini_set('display_errors', TRUE);
ini_set('error_reporting', E_ALL);

require '../vendor/autoload.php';

$mux = new Mux();

$mux->mount('/dummy', new DummyController());
$mux->mount('/error', new ErrorController());

echo Executor::execute(
  $mux->dispatch(strtok($_SERVER['REQUEST_URI'],'?'))
  ?: $mux->dispatch('/error/error404')
);