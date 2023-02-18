<?php
function check_status($a, $b, $c)
{
    // Function Code Here
    foreach (func_get_args() as $arg) {
        if (gettype($arg) == 'string') {
            $name = $arg;
        } elseif (gettype($arg) == 'integer') {
            $age = $arg;
        } elseif (gettype($arg) == 'boolean') {
            if ($arg == true) {
                $availability = "Available";
            } else {
                $availability = "Not Available";
            }
        }
    }
    return "Hello $name, Your Age Is $age, You Are $availability For Hire";
}

// // Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
echo "<br>";
