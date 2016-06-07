<?php
ini_set('display_errors', '1');
echo 'End \'error \'value: '. ini_get('display_errors'). '<br><br><br>';


$number = 99;
$string = 'bug?';
$array = [1 => 'Homepage',
    2 => 'About us',
    3 => 'Services'];
var_dump($number);
echo '<br>';
var_dump($string);
echo '<br>';
var_dump($array);
echo '<br><pre>';

//print_r(get_defined_vars());

function say_hello_to($word) {
    echo 'Hello '. $word. '!!!<br>';
    var_dump (debug_backtrace());
}
say_hello_to('miss');


