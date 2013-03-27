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
    
    array(+1, +1)
    array(+1, -1)
    array(+1, +0)
    array(+0, +1)
    array(+0, -1)
    array(+0, +0)
    array(-1, +1)
    array(-1, -1)
    array(-1, +0)
    )

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
 
$outputs = array(
        +2,
        +0,
        +1,
        +1,
        -1,
        +0,
        +0,
        -2,
        -1,
    );
    
    for ($i = 0; $i < 9; $i++)
    {
        assert(add($inputs[$i][0], $inputs[$i][1]) == $outputs[$i]);
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

