<?php

/********* Superglobal *********

The PHP superglobal variables are:
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

 ********************************/



/*********  $GLOBALS *********/
$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;


echo PHP_EOL;
echo PHP_EOL;


/********* $_SERVER *********/

/*********
echo $_SERVER['PHP_SELF']; // Returns the filename of the currently executing script

echo $_SERVER['SERVER_NAME']; // Returns the name of the host server (such as www.w3schools.com)

echo $_SERVER['HTTP_HOST']; // Returns the Host header from the current request

echo $_SERVER['HTTP_REFERER']; // Returns the complete URL of the current page

echo $_SERVER['HTTP_USER_AGENT']; // Returns the browser's name

echo $_SERVER['SCRIPT_NAME']; // Returns the path of the current script

echo $_SERVER['SERVER_ADDR']; // Returns the IP address of the host server

echo $_SERVER['REQUEST_METHOD']; // Returns the request method used to access the page (such as POST)
*********/

// https://www.w3schools.com/php/php_superglobals_server.asp