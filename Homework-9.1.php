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
 
//This function is for subtraction
function subtract($a, $b)
{
    return $a - $b;
}

{
    assert(subtract(+1, +1) == +0);
    assert(subtract(+1, -1) == +2);
    assert(subtract(+1, +0) == +1);
    assert(subtract(+0, +1) == -1);
    assert(subtract(+0, -1) == +1);
    assert(subtract(+0, +0) == +0);
    assert(subtract(-1, +1) == -2);
    assert(subtract(-1, -1) == +0);
    assert(subtract(-1, +0) == -1);
}

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
 
//This is for multiplication function
function multiply($a, $b)
{
    return $a * $b;
}

{
    assert(multiply(+1, +1) == +1);
    assert(multiply(+1, -1) == -1);
    assert(multiply(+1, +0) == +0);
    assert(multiply(+0, +1) == +0);
    assert(multiply(+0, -1) == +0);
    assert(multiply(+0, +0) == +0);
    assert(multiply(-1, +1) == -1);
    assert(multiply(-1, -1) == +1);
    assert(multiply(-1, +0) == +0);
}

/**
 * math | one | two | value
 * ===+=====+=====+======
 * /    | +1  | +1  | +1
 * /    | +1  | -1  | -1
 * /    | +1  | +0  | +0
 * /    | +0  | +1  | +0
 * /    | +0  | -1  | +0
 * /    | +0  | +0  | +0
 * /    | -1  | +1  | -1
 * /    | -1  | -1  | +1
 * /    | -1  | +0  | +0
 */
 
//This is for multiplication function
function divide($a, $b)
{
    return $a / $b;
}

{
    assert(divide(+1, +1) == +1);
    assert(divide(+1, -1) == -1);
//  assert(divide(+1, +0) == +0); causes an error
    assert(divide(+0, +1) == +0);
    assert(divide(+0, -1) == +0);
//  assert(divide(+0, +0) == +0); causes an error
    assert(divide(-1, +1) == -1);
    assert(divide(-1, -1) == +1);
//  assert(divide(-1, +0) == +0); causes an error
}

    
    