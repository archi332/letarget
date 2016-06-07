<?php

$numbers = array(8,23,15,42,16,4);
echo 'max:  '. max($numbers). '<br>';
echo 'min:  '. min($numbers). '<br>';
echo 'count_arr:  '. count($numbers). '<br>';

sort($numbers);
print_r($numbers);
echo '<br>';
rsort($numbers);
print_r($numbers);
echo '<br>';
var_dump($numbers);
echo '<br>';
echo 'implode: '. $num_string = implode('*', $numbers);
echo '<br>explode: ';
print_r(explode('*', $num_string));
echo '<br>';
echo 'in_array(15):  '. in_array('15', $numbers);
echo '<br>';
echo 'in_array(19):  '. in_array('19', $numbers);



echo '<br>';
echo '<br>';
