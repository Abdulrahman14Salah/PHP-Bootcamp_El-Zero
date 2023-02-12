<?php

// Every Time The Array Elements Will Be Shuffled
$nums = [1, 2, 3, 4, 5, 6];

for ($i = 0; $i < count($nums); $i++) {
    $num[$i] = array_rand($nums);
    for ($j = 0; $j < $i; $j++) {
        while ($num[$j] == $num[$i]) {
            $num[$i] = array_rand($nums);
            $j = 0;
        }
    }
}

echo '<pre>';
print_r($num);
echo '</pre>';

// Output
// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// // Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )
