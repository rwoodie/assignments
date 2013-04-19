<?php // TEST FILE
require 'Homework-12.1.Code.php';

// test: can we make a hallway with 10 doors?
$hallway = createHall10;
// test: hallway match expected: '0000000000'
assert(createHall(10) === '0000000000'); 


// call: pass1() on hallway
// test: hallway match expected: '1111111111'


// call: pass2() on hallway
// test: hallway match expected: '1010101010'



// call: pass3() on hallway
// test: hallway match expected: '1000111000'



// call: pass4() on hallway
// test: hallway match expected: '1001111100'

// test: can we make a hallway with 100 doors?