<?php
$start = 10;
$end = 0;
$stop = 3;

for ($i = $start; $i > $end; $i--) {
    if ($i < $start) {
        echo "<div>0" . $i . "</div>";
    } else {
        echo "<div>" . $i . "</div>";
    }
}

// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03