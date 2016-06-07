<?php
echo '<H1 align="center">'. ucfirst('switch statements').  '</H1><br><br><br>';

$a = 9;
switch ($a) {
    case 0:
        echo "a is equal to 0<br>";
        break;
    case 1:
        echo "a is equal to 1<br>";
        break;
    case 2:
        echo "a is equal to 2<br>";
        break;
    case 3:
        echo "a is equal to 3<br>";
        break;

    default:
        echo "a is equal to 1, 2, 3<br>";

}
echo '<br><br><br><br>';


$year = "2016";
switch (($year) % 12) {
    case 0: $zodiac = 'Rat';        break;
    case 1: $zodiac = 'Ox';         break;
    case 2: $zodiac = 'Tiger';      break;
    case 3: $zodiac = 'Rabbit';     break;
    case 4: $zodiac = 'Dragon';     break;
    case 5: $zodiac = 'Snake';      break;
    case 6: $zodiac = 'Horse';      break;
    case 7: $zodiac = 'Goat';       break;
    case 8: $zodiac = 'Monkey';     break;
    case 9: $zodiac = 'Rooster';    break;
    case 10: $zodiac = 'Dog';       break;
    case 11: $zodiac = 'Pig';       break;
}


echo "This is year of $zodiac<br><br><br>";


$user_type = 'customer';
switch ($user_type) {
    case 'student':
        echo 'Welcome!';
        break;
    case 'press':
        echo 'Greetings!';
        break;
    case 'admin';
    case 'customer':
        echo 'Hello!';
        break;
    default :
        echo 'something wrong!';
}