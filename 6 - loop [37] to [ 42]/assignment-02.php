<?php

$index = 0; 

while ($index <= 20) {
    if ($index % 2 == 0) {
        echo $index . "<br>";
    }
    $index++;
}
// ------------------------
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "<br>";
}

// Needed Output 
// 2
// 4
// 6
// 8
// 10
// 12
// 14
// 16
// 18
// 20
