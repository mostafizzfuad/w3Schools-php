<?php

// constant
define("FUAD", "Mostafizur Rahman Fuad"); // case-sensitive
echo FUAD;

echo PHP_EOL;

// constant array
define("name", ["Fuad", "Siam", "Junnun"]);
echo name[0];

echo PHP_EOL;

// Constants are Global
function myName() {
    echo FUAD;
}
myName();