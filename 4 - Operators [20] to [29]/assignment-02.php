<?php

$a = "10";
echo "<div>" . (int) $a . "</div>";
echo gettype((int) $a);
echo "<div>" . +$a . "</div>";
echo gettype(+$a);
echo "<div>" . intval($a) . "</div>";
echo gettype(intval($a));
// Needed Ouput
// 10
// "integer"
// 10
// "integer"
// 10
// "integer"
