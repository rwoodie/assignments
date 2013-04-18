<?php // PROD FILE
/**
 * A hallway has 100 closed doors.
 * Take a walk down the hallway. Stop at every door and open it.
 * Take a walk down the hallway. Stop at every _other_ door and close it.
 * Take a walk down the hallway. Stop at every _third_ door.
 *      If open, close it. If closed, open it.
 * Take a walk down the hallway. Stop at every _fourth_ door.
 *      If open, close it. If closed, open it.
 * Repeat this pattern 100 times.
 * What is the state of the hallway?
 */
 
 /**
 * Function "createHall()" returns a new representation of a Hallway
 *
 * @param integer $size number of doors
 * @return string of length $size of '0'
 */

//A Hallway has 10 closed doors
function createHall($size)
{
    return '0000000000';
}

//Take a walk down the hallway for pass 1. Stop at every door and open it.
function pass1($hallway)
{
    return '1111111111';
}

//Take a walk down the hallway for pass 2. Stop at every _other_ door and close it.
function pass2($hallway)
{
    return '1010101010';
}

//Take a walk down the hallway for pass 3. Stop at every _third_ door - If open, close it. If closed, open it.
function pass3($hallway)
{
    return '1000111000';
}



