<?php

include ("Calculator.php");

{//Testing for addition
    assert(addition(+1, +1) == +2);
    assert(addition(+1, +0) == +1);
    assert(addition(+0, +1) == +1);
    assert(addition(+0, -1) == -1);
    assert(addition(+0, +0) == +0);
    assert(addition(-1, +1) == +0);
    assert(addition(-1, -1) == -2);
    assert(addition(-1, +0) == -1);
}

{//Testing for multiplication
    assert(multiplication(+1, +1) == +1);
    assert(multiplication(+1, -1) == -1);
    assert(multiplication(+1, +0) == +0);
    assert(multiplication(+0, +1) == +0);
    assert(multiplication(+0, -1) == +0);
    assert(multiplication(+0, +0) == +0);
    assert(multiplication(-1, +1) == -1);
    assert(multiplication(-1, -1) == +1);
    assert(multiplication(-1, +0) == +0);
}
    