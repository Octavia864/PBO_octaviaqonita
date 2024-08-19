<?php
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS ['y'] = $GLOBALS ['x']
}

myTest();
echo $y;
