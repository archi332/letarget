<?php
echo '<H1 align="center">'. strtoupper('null'). ' and empty'. '</H1><br><br><br>';


$var1 = null;
$var2 = "";

echo 'Var1:  '. is_null($var1). '<br>';
echo 'Var2:  '. is_null($var2). '<br>';
echo 'Var3:  '. is_null($var3). '<br>';


echo 'Isset(1)?   '. isset($var1). '<br>';
echo 'Isset(2)?   '. isset($var2). '<br>';
echo 'Isset(3)?   '. isset($var3). '<br>';


$var3 = "0";

echo '<br><br><br><br>';
echo 'empty(1)?   '. empty($var1). '<br>';
echo 'empty(2)?   '. empty($var2). '<br>';
echo 'empty(3)?   '. empty($var3). '<br>';
