<?php

include ("Calculator.php");

{
    $inputs = array(
        array(+1, +1),
        array( +1, -1 ),
        array( +1, +0 ),
        array( +0, +1 ),
        array( +0, -1 ),
        array( +0, +0 ),
        array( -1, +1 ),
        array( -1, -1 ),
        array( -1, +0 ),
);
}

{
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
    
{
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
    
    foreach ( $inputs as $index => $input )
    {
        assert(addition($input[0], $input[1]) == @$outputs[$index]);
    }
}
