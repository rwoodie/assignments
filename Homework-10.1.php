<?php
/**
 * four functions with two parameters:
 * - addition
 * - subtraction
 * - multiplication
 * - division
 * 
 * Must accept positive and negative Numbers (int or 
 * float) AND zero. Must not make an error!
 */

$inputs = array(
    array(+1, +1),
    array(+1, -1),
    array(+1, +0),
    array(+0, +1),
    array(+0, -1),
    array(+0, +0),
    array(-1, +1),
    array(-1, -1),
    array(-1, +0),
   
);

/**
 * math | one | two | value
 * ===+=====+=====+======
 * -    | +1  | +1  | +0
 * -    | +1  | -1  | +2
 * -    | +1  | +0  | +1
 * -    | +0  | +1  | -1
 * -    | +0  | -1  | +1
 * -    | +0  | +0  | +0
 * -    | -1  | +1  | -2
 * -    | -1  | -1  | +0
 * -    | -1  | +0  | -1
 */
 
function subtraction($a, $b)
{
    return $a - $b;
}

{
$outputs = array(
        +0,
        +2,
        +1,
        -1,
        +1,
        +0,
        -2,
        +0,
        -1,
    );

 foreach ($inputs as $index => $input)
    {
        assert(subtraction($input[0], $input[1]) == @$outputs[$index]);
    }

}    

   