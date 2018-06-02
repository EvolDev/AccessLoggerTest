<?php
require_once ("autoloader.php");
use App\Services\AccessLogger;

$accessLoggerConfig = new AccessLogger\AccessLoggerConfig();
$accessLoggerConfig->setLogFileName("access.log");
$accessLogger = new AccessLogger\AccessLogger($accessLoggerConfig);;
echo $accessLogger->getOutput();