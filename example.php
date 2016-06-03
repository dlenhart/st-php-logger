<?php 
require 'st-php-logger.php';

$time = date('d-M-Y');

$log = new snowytech\stphplogger\logWriter('logs/log-' . $time . '.txt');
 
$log->warning('this is the warning message');

$log->info('this is the info message');

$log->error('this is the error message');

$log->debug('this is the debug message');

echo "file written - " . $time;
?>