<?php
// Test Case 1
// $a = 100;
// $b = 200;
// $c = 300;

// A Is Not Larger Than B Or C


// Test Case 2
// $a = 200;
// $b = 100;
// $c = 300;

// A Is Larger Than B


// Test Case 3
$a = 200;
$b = 200;
$c = 100;

// A Is Larger Than c


if ($a > $b & $a > $c) {
    echo 'A Larger Than B AND C';
}elseif ($a > $b) {
    echo "A Is larger Than B";
}elseif ($a > $c) {
    echo 'A Is Larger Than C';
}else {
    echo 'A Is Not Larger Than B Or C';
}