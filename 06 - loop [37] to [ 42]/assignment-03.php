<?php

$num = 2;
while ($num < 520) {
    if ($num == 382) {
        break;
    }
    if ($num == 2) {
        $num--;
        echo "<div>1</div>";
    }
    echo "<div>";
    echo $num = (2 * $num) + 2;
    echo "</div>";

}
