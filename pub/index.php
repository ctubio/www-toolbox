<?php
use ctubio\WWWToolbox;

ini_set('display_errors', TRUE);
ini_set('error_reporting', E_ALL);

require '../vendor/autoload.php';

print new WWWToolbox\Factory('dummy', array(
  'arg' => 'dummy'
));