<?php
$nums = [1, 13, 12, 20, 51, 17, 30];

foreach ($nums as $num) {
    if ($num % 2 == 0) {
        echo "<div>" . $num / 2 . "</div>";
    }
}

// Output
// 6
// 10
// 15
