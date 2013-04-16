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

function createHall($size)
{
    return '0000000000';
}

//ake a walk down the hallway, change the state of the doors
function pass1(createHall(10))
{
    return '1111111111';
}