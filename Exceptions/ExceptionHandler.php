<?php

function division(int $dividend, int $divisor)
{
    if ($divisor == 0) {
        throw new Exception('divisor cannot be 0');
    }

    $result = $dividend / $divisor;

    echo " $dividend/$divisor = $result";
}


try {
    division(10, 2); // this will output 5
    division(10, 0); // this will throw exception
    division(10, -2); // this will not be executed

} catch (Exception $e) {
    echo "\r\n Error Message : " . $e->getMessage();
}

echo "\n this line always be printed regardless on fatal error in try";


