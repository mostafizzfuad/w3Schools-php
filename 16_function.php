<?php

/********* function syntax *********
function functionName() {
    code to be executed;
}
 ********************************/

function myName() {
    echo "My name is Mostafizur";
}
myName();

echo PHP_EOL;
echo PHP_EOL;



/********* one arguments *********/
function familyName($fname) {
    echo "$fname Rahman \n";
}
  
familyName("Mostafizur");
familyName("Musfiqur");
familyName("Touhidur");
familyName("Mahfujur");


echo PHP_EOL;
echo PHP_EOL;


/********* two arguments *********/
function familyInfo($fname, $year) {
    echo "$fname Rahman Born in $year \n";
}
  
familyInfo("Mostafizur", "1975");
familyInfo("Musfiqur", "1978");
familyInfo("Touhidur", "1983");



echo PHP_EOL;
echo PHP_EOL;



/********* Default Argument  *********/
function familyAge($age="25") {
    echo "age is $age \n";
}
familyAge(30);
familyAge();
familyAge(40);


echo PHP_EOL;
echo PHP_EOL;


/********* Returning values *********/
function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, 10); 

