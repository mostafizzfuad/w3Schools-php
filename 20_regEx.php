<?php

/********* syntax *********
 
$exp = "/w3schools/i";

In the example above, / is the delimiter, w3schools is the pattern that is being searched for, and i is a modifier that makes the search case-insensitive.

 **************************/


/********* Regular Expression Functions ******
 * preg_match()	        - Returns 1 if the pattern was found in the string and 0 if not
 * preg_match_all()	    - Returns how many matches were found for a pattern in a string.
 * preg_replace()	    - Returns a new string where matched patterns have been replaced with another string
 * ******************/


/********* 1. preg_match() ******/
// [ note : যেই word টা match / find করতে চাচ্ছি, সেটা যদি match করে তাহলে return 1 , না হলে return 0 ]
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); // Outputs 1


echo PHP_EOL;


/********* 2. preg_match_all() ******/
// [ note : যেই word টা match / find করতে চাচ্ছি, সেটা কতবার আছে সেটি count করবে ]
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4


echo PHP_EOL;


/********* 3. preg_replace() ******/
// [ note : replace all of the matches of the pattern in a string with another string ]
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"