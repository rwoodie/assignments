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

// a Hallway: string of '1' or '0' with length = number of doors ($N)
function hallway($n)
{
    return str_pad($input = '', $pad_length = $n, $pad_string = '0');
}



// open or close a door: function(string '1' or '0'): string '1' or '0', next state of door
function porter($door)
{
    if($door == '1')
    {
        return '0';
    }
        return '1';    
}


// first pass: function(string $hallway): a new Hallway, 1st state of hallway
function firstPass($hallway)
{
    return str_pad($input = '', strlen($hallway), $pad_string = '1111111111');
}



// second pass: function(string $hallway): a new Hallway, 2nd state of hallway


// third pass: function(string $hallway): a new Hallway, 3rd state of hallway

// perform ANY pass: function(string $hallway, integer $count): a new Hallway after step $count

// get solution for $N doors: function(integer $N number of doors): a Hallway of length $N after $N passes
// variable $state: a Hallway (string), current state of hallway
// variable $count: integer number of passes
