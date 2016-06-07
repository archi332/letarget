<?php
$bar = 'outside';       // global

function foo() {
    global $bar;
    if (isset($bar)) {
        echo "foo: ". $bar. "<br>";
    }
    $bar = 'inside';        //  local
}

echo "1: {$bar}<br>";
foo();
echo "2: {$bar}<br>";
