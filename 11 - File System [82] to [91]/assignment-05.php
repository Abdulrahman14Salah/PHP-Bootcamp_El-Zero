<?php
echo basename(__FILE__) . '<br>';
echo pathinfo(__FILE__, PATHINFO_BASENAME) . '<br>';
echo pathinfo(__FILE__)['basename'] . '<br>';
print_r(explode('\\', __FILE__)[count(explode('\\', __FILE__)) - 1]);

// Output

// "index.php"
// "index.php"
// "index.php"
// "index.php"
