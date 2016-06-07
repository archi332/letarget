<?php
$numbers = array(4,8,15,16,23,42);
echo $numbers['0']. '<br>';

$mixed = array(6,"fox", "dog", array("x","y","z"));

echo $mixed['2']. "<br>";
echo $mixed['3']['1']. "<br>";
$mixed['2'] = 'cat';
$mixed['4'] = 'mouse';
$mixed[] = 'horse';
echo "<pre>";
echo print_r ($mixed);