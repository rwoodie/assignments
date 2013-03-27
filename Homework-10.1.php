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
 * +    | +1  | +1  | +2
 * +    | +1  | -1  | +0
 * +    | +1  | +0  | +1
 * +    | +0  | +1  | +1
 * +    | +0  | -1  | -1
 * +    | +0  | +0  | +0
 * +    | -1  | +1  | +0
 * +    | -1  | -1  | -2
 * +    | -1  | +0  | -1
 */
 
// This function is for addition
function add($a, $b)
{
    return $a + $b;
}
 
{
    assert(add(+1, +1) == +2);
    assert(add(+1, -1) == +0);
    assert(add(+1, +0) == +1);
    assert(add(+0, +1) == +1);
    assert(add(+0, -1) == -1);
    assert(add(+0, +0) == +0);
    assert(add(-1, +1) == +0);
    assert(add(-1, -1) == -2);
    assert(add(-1, +0) == -1);
}

