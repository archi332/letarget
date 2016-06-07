<?php
echo '<H1 align="center">'. strtoupper('Constants').  '</H1><br><br><br>';

$max_width = 980;

define("MAX_WIDTH", 980);
echo MAX_WIDTH. '<br>';

//  cant change value of constant:
//MAX_WIDTH +=1;
//MAX_WIDTH = MAX_WIDTH + 1;
define("MAX_WIDTH", 981);

echo MAX_WIDTH;