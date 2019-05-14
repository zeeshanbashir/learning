<?php


function myCustomExceptionHandler($e)
{

    $dateTime = date('Y-m-d H:i:s');
    $error    = 'Uncaught Exception: ' . $dateTime;
    $error    .= $e->getMessage() . ' in line : ' . $e->getLine();

    error_log($error, 3, 'logs.log');
}

set_exception_handler('myCustomExceptionHandler');

throw new Exception('Testing Exception');