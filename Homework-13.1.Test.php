<?php // TEST FILE
require 'Homework-13.1.Code.php';

// test: hallway(10) == '0000000000'
assert(hallway(10) == '0000000000');

// test: porter('1') == '0'
assert(porter('1') == '0');



// test: porter('0') == '1'
assert(porter('0') == '1');


// test: firstPass(hallway(10)) == '1111111111'
assert(firstPass(hallway(10)) == '1111111111');



// test: secondPass(hallway(10)) == '1010101010'



// test: thirdPass(hallway(10)) == '0010010010'


// test: solution(10) == '1001000010'
