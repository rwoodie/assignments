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

    assert(subtraction(+1, +1) == +0);
    assert(subtraction(+1, -1) == +2);
    assert(subtraction(+1, +0) == +1);
    assert(subtraction(+0, +1) == -1);
    assert(subtraction(+0, -1) == +1);
    assert(subtraction(+0, +0) == +0);
    assert(subtraction(-1, +1) == -2);
    assert(subtraction(-1, -1) == +0);
    assert(subtraction(-1, +0) == -1);