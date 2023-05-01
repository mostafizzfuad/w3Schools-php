<?php

/********************************
switch (n) {    // n = single expression (most often a variable)
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    case label3:
        code to be executed if n=label3;
        break;
        ...
    default:
        code to be executed if n is different from all labels;
}
********************************/

$favoriteColor = "red";
switch ($favoriteColor) {
    case "red":
        echo "Favorite color is red!";
        break;
    case "blue":
        echo "Favorite color is blue!";
        break;
    case "green":
        echo "Favorite color is green!";
        break;
    default:
        echo "Color don't match!";
}