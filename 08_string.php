<?php

echo strlen("Mostafizur Rahman Fuad");  // Return the Length of a String
echo PHP_EOL;


echo str_word_count("Mostafizur Rahman Fuad");  // Count Words in a String
echo PHP_EOL;


echo strrev("Mostafizur Rahman Fuad"); // Reverse a String
echo PHP_EOL;


echo strpos("Mostafizur Rahman Fuad", "Rahman"); // searches for a specific text within a string
// note : Tip: The first character position in a string is 0 (not 1).


echo PHP_EOL;
echo str_replace("Fuad", "Siam", "My name is Fuad"); // replace Fuad by Siam
echo PHP_EOL;
$name = "My name is Fuad";
echo str_replace("Fuad", "Siam", $name); // replace Fuad by Siam


echo PHP_EOL;
echo str_repeat("Fuad",7); // Repeats a string a specified number of times


echo PHP_EOL;
echo strcmp("Hello BD!","Hello BD!");  // returns 0, if the two strings are equal.


echo PHP_EOL;
echo strtolower("MOSTAFIZUR RAHMAN FUAD"); // convert lowercase


echo PHP_EOL;
echo strtoupper("mostafizur rahman fuad"); // convert uppercase


echo PHP_EOL;
echo substr("Hello Mostafizur",6); // returns a part of a string. (6 means - কত নাম্বার ইন্ডেক্স এর পর থেকে রিটার্ন করবে)
// note : Tip: The first character position in a string is 0 (not 1).




// https://www.w3schools.com/php/php_ref_string.asp