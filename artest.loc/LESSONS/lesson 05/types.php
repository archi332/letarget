<?php
echo '<H1 align="center">'. strtoupper('type jujjing and casing').  '</H1><br><br><br>';

$count = "2 cats";
echo 'Type count: '. gettype($count). '<br>';
$count+=3;
echo 'count+=3: '. $count. '<br>';
echo 'Type count: '. gettype($count). '<br>';
$cats = 'Ihave '. $count. ' cats';
echo 'Type cats: '. gettype($cats). '<br>';
settype($count, 'integer');


echo "<br><br><b>Type casting</b><br>";
echo 'Type count: '. gettype($count). '<br>';
$count2 = (string) $count;
echo 'Type count: '. gettype($count). '<br>';
echo 'Type count2: '. gettype($count2). '<br>';


echo '<br><br><br><br>';
$test1 = 3;
$test2 = 3;
settype($test1, 'string');
(string) $test2;
echo 'Type test1: '. gettype($test1). '<br>';
echo 'Type test2: '. gettype($test2). '<br>';
