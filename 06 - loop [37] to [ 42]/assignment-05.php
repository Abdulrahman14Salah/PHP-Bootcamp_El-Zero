<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

foreach ($mix as $i => $v) {

    if (gettype($v) == "integer") {

        if ($i == $start) {
            continue;
        }

        echo "<div>";
        echo $v;
        echo "</div>";
    }
}

// Output
// 2
// 3
// 4
