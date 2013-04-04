<?php

include ("Calculator.php");

{
    //This is a test for addition
    assert(addition(+1, +1) == +2);
    assert(addition(+1, -1) == +0);
    assert(addition(+1, +0) == +1);
    assert(addition(+0, +1) == +1);
    assert(addition(+0, -1) == -1);
    assert(addition(+0, +0) == +0);
    assert(addition(-1, +1) == +0);
    assert(addition(-1, -1) == -2);
    assert(addition(-1, +0) == -1);
}    
    