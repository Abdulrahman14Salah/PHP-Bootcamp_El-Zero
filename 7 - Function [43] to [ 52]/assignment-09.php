<?php

// $greet = function ($someone) {
//     return "Greetings $someone";
// };

$greet = fn($someone) => "Greetings $someone";
echo $greet('osama');
