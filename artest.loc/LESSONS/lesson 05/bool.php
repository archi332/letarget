<?php
echo '<H1 align="center">'. strtoupper(booleans). '</H1>';

$result1 = true;
$result2 = false;
echo 'Result1(true): '. $result1. '<br>';
echo 'Result2(false): '. $result2. '<br>';
echo 'is boolean?(Result2):  '. is_bool($result2);
echo "<br><br><br><br>";

$p = 3.14;
if (is_float($p)) {
    echo 'float';
} else {
    echo 'not float!';
}


