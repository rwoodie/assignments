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
 
function addition($a, $b)
{
    return $a + $b;
}

/**
 * op | one | two | value
 * ===+=====+=====+======
 * x  | +1  | +1  | +1
 * x  | +1  | -1  | -1
 * x  | +1  | +0  | +0
 * x  | +0  | +1  | +0
 * x  | +0  | -1  | +0
 * x  | +0  | +0  | +0
 * x  | -1  | +1  | -1
 * x  | -1  | -1  | +1
 * x  | -1  | +0  | +0
 */

function multiplication($a, $b)
{
    return +1;
}
 
