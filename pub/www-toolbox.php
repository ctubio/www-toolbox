<?php
use ctubio\ItsToolTime\WWWToolbox;

ini_set('display_errors', TRUE);
ini_set('error_reporting', E_ALL);

require '../vendor/autoload.php';

define('WWWToolboxPathPrefix', '/tools'); # public path url (href values prefix)

echo new WWWToolbox(
  WWWToolbox::ALL_TOOLS
);