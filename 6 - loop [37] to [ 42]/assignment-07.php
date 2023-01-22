<?php
$mix = [1, 2, "A", "B", "C", 3, 4];
$integer = 0;
$string = 0;

foreach ($mix as $i => $v) {

    if (gettype($v) == "integer") {
        echo "<div>" . $v . "</div>";
        $integer++;
    } elseif (gettype($v) == "string") {
        $string++;
    }
}

echo "<div>\"$integer Numbers Printed\"</div>";
echo "<div>\"$string Letters Ignored\"</div>";

// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"
