<?php
// Write Function Content Here
function greeting($name, $gender = "")
{
    switch ($gender) {
        case "Male":
            return "<div>Hello Mr $name</div>";
            break;
        case "Female":
            return "<div>Hello Miss $name</div>";
            break;
        default:
            return "<div>Hello $name</div>";
    }
}
// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
