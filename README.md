st-php-logger
===============

A simple php logger.  Log messages to text files.

#Required
-PHP 5.4 or higher

#Example Usage
require 'st-php-logger.php';

$time = date('d-M-Y');

$log = new snowytech\stphplogger\logWriter('log-' . $time . '.txt');

$log->warning('this is the warning message');

$log->info('this is the info message');

$log->error('this is the error message');

$log->debug('this is the debug message');

#Website
www.drewlenhart.com