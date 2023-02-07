<?php

function calculate($num1, $num2, $checker = '')
{
    $checker = substr($checker, 0, 1);
    if ($checker == '' || $checker == 'a') {
        $result = $num1 + $num2;
        return $result;
    } elseif ($checker == 's') {
        $result = $num1 - $num2;
        return $result;
    }elseif ($checker == 'm') {
        $result = $num1 * $num2;
        return $result;
    }else {
        return 'Your calculation character does not exist';
    }
}

// Needed Output
echo '<br>';
echo calculate(10, 20); // 30
echo '<br>';
echo calculate(10, 20, 'a'); // 30
echo '<br>';
echo calculate(10, 20, 's'); // -10
echo '<br>';
echo calculate(10, 20, 'subtract'); // -10
echo '<br>';
echo calculate(10, 20, 'multiply'); // 200
echo '<br>';
echo calculate(10, 20, 'm'); // 200
echo '<br>';
