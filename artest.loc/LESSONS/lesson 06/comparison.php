<?php
echo '<H1 align="center">'. ucfirst('comparsion, logical operators').  '</H1><br><br><br>';

$a = 4;
$b = 3;
$c = 1;
$d = 20;

if (($a > $b) || ($c > $d)) {
    echo 'a is larger than b OR ';
    echo 'c is larger than d .';
}

echo '<br><br><br><br>';
$e = 100;
if (!isset($e)){
    $e = 200;
}
echo $e;
echo '<br><br><br><br>';

$quantity = "";
if (empty($quantity) && !is_numeric($quantity)) {
    echo 'You must enter a quantity!';
}
