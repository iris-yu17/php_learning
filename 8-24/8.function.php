<?php

$a = 10;


function f()
{
    global $a;
    echo $a;
}




f();
