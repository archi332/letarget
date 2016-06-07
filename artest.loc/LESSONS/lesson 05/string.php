<?php
$string=" This is first string ";
echo 'strtoupper: '. strtoupper($string). '<br>';
echo 'strtolower: '. strtolower($string). '<br>';
echo 'ucfirst: '. ucfirst($string). '<br>';
echo 'ucwords: '. ucwords($string). '<br>';
echo 'trim: '. "   a". trim("    b        c      "). 'd<br>';
echo 'strstr: '. strstr($stringstrstr, 'is'). '<br>';
echo 'str_replace: '. str_replace('first', 'third', $string). '<br>';
echo 'str_repeat: '. str_repeat($string, 3). '<br>';
echo 'strpos: '. strpos($string, 'first'). '<br>';
echo 'strchr: '. strchr($string, 'f'). '<br>';
echo 'substr: '. substr($string,5,8). '<br>';