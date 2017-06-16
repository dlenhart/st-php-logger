st-php-logger
===============

A simple PHP logger class.  Log messages to text files.

Required
----
-PHP 5.4 or higher

Example Usage
----
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

Website
----
www.drewlenhart.com

#License
MIT License

Copyright (c) 2016 Drew D. Lenhart

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
