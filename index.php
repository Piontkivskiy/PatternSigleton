<?php
require_once 'src/Util/Logging/LoggerSingleton.php';

use Util\Logging\LoggerSingleton;


$l = LoggerSingleton::getInstance();
$l->log('Example of usage pattern Singleton.');
$l->log('Log entry one.');
$l->log('Log entry two.');
print_r($l->getLog());