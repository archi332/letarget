<?php
echo $float = 3.14;
echo "<br>";
echo $float+7;
echo "<br>";
echo 3/4;
echo "<br>";
echo round($float,1);
echo "<br>";
echo ceil($float);
echo "<br>";
echo floor($float);
$integer = 3;
echo "<br>";
echo "$integer integer? ". is_int($integer);
echo "<br>";
echo "$integer float? ". is_float($integer);
echo "<br>";
echo "$float integer? ". is_int($integer);
echo "<br>";
echo "$integer numeric? ". is_numeric($integer);
echo "<br>";
echo "$float numeric? ". is_numeric($integer);
