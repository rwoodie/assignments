<?php

$a = 1;

// Comment on my code...
/**
 * Whatever I want to write goes here.
 * 
 * And if I put line breaks, C9 helps me out.
 */
{// Comment on my code...
    var_dump($a); // int(1)
    var_dump($a == 42); // bool(false)
    var_dump($a == true); // bool(true)
    var_dump($a === true); // bool(false)
}

var_dump($a = 2 - 3); // int(-1)
var_dump($a = $a + 1); // int(0)
var_dump($a); // int(0)

var_dump($a = $a - 1); // int(-1)
var_dump($a -= 7); // int(-8)
var_dump($a++); // int(-8)
var_dump($a); // int(-7)
var_dump(--$a); // int(-8)
var_dump($a); // int(-8)

if ( !$connection = mysql_connect(. . .) ) die(mysql_error());
