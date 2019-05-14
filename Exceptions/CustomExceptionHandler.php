<?php

class EmptyEmailException extends Exception{}

class InvalidEmailException extends Exception{}

//$email = '';
//$email = 'some@gmail.com';
$email = 'some';
try {
    //Throw exception if email is empty
    if (empty($email)) {
        throw new EmptyEmailException('Email should not be empty');
    }

    // Throw exception if email is not valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        throw new InvalidEmailException("$email is not a valid E-mail address!</p>");
    }


    echo "Email is valid";
} catch (EmptyEmailException $e) {
    echo $e->getMessage();
} catch (InvalidEmailException $e) {
    echo $e->getMessage();
}