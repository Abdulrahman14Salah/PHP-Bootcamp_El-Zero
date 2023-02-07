<?php

$message = 'Hello';

echo $message;

$$message = &$message;

// Write Your Code Here
$message = function ($message) {
    $$message = $message;
    return " $message";
};
echo $Hello('Osama'); // Hello Osama
