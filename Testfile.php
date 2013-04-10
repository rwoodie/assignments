<?php

include ("Calculator.php");

{//Testing for subtraction
    assert(subtraction(+1, +1) == +0);
    assert(subtraction(+1, -1) == +2);
    assert(subtraction(+1, +0) == +1);
    assert(subtraction(+0, +1) == -1);
    assert(subtraction(+0, -1) == +1);
    assert(subtraction(+0, +0) == +0);
    assert(subtraction(-1, +1) == -2);
    assert(subtraction(-1, -1) == +0);
    assert(subtraction(-1, +0) == -1);
}

    assert(addition(+1, +1) == +2);
    assert(addition(+1, -1) == +0);
    