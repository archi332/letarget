<?php
echo '<H1 align="center">'. strtoupper('if_else, logical operators').  '</H1><br><br><br>';

$a = 3;
$b = 4;

if ($a>$b) {
    echo 'a larger than b';
} elseif ($a<$b) {
    echo 'a smaller than b';
} else {
    echo 'a is equal to b';
}

$new_user = true;
if ($new_user) {
    echo "<H1>Wellcome!</H1>";
    echo "<p>We are glad to see you!</p>";
}