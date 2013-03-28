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
 * x    | +1  | +1  | +1
 * x    | +1  | -1  | -1
 * x    | +1  | +0  | +0
 * x    | +0  | +1  | +0
 * x    | +0  | -1  | +0
 * x    | +0  | +0  | +0
 * x    | -1  | +1  | -1
 * x    | -1  | -1  | +1
 * x    | -1  | +0  | +0
 */
 
function multiply($a, $b)
{
    return $a * $b;
}

    assert(multiply(+1, +1) == +1);
    assert(multiply(+1, -1) == -1);
    assert(multiply(+1, +0) == +0);
    assert(multiply(+0, +1) == +0);
    assert(multiply(+0, -1) == +0);
    assert(multiply(+0, +0) == +0);
    assert(multiply(-1, +1) == -1);
    assert(multiply(-1, -1) == +1);
    assert(multiply(-1, +0) == +0);

