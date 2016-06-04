st-php-logger
===============

A simple PHP logger class.  Log messages to text files.

#Required
-PHP 5.4 or higher

#Example Usage
``` php
<?php

require 'st-php-logger.php';

$time = date('d-M-Y');

//Using timestamp in file name, e.g. log-02-06-2016.txt

$log = new snowytech\stphplogger\logWriter('log-' . $time . '.txt');

$log->warning('this is the warning message');

$log->info('this is the info message');

$log->error('this is the error message');

$log->debug('this is the debug message');
```

#Website
www.drewlenhart.com