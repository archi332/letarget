<?php
//for ($count = 0; $count <= 10; $count++) {
//    if ($count == 5) {
//        break;
//    }
//    echo $count .", ";
//}
//echo "<br>";
//
//
//for ($i=0; $i<=5; $i++) {
//    if ($i%2==0) { continue(1); }
//    for ($k=0; $k<=5; $k++) {
//        if ($k == 3) { break(1);}
//        echo $i. " - ". $k. "<br>";
//    }
//}


$ages = [4,8,15,16,23,42];

echo '1: '. current($ages). '<br>';

next($ages);
echo '2: '. current($ages). '<br>';


next($ages);
next($ages);
echo '4: '. current($ages). '<br>';

prev($ages);
echo '3: '. current($ages). '<br>';

end($ages);
echo '6: '. current($ages). '<br>';

next($ages);
echo 'end >>: '. current($ages). '<br>';

reset($ages);
echo '1(reset): '. current($ages). '<br>';

next($ages);
echo '3: '. current($ages). '<br>';
echo '<br><br><br><br><br>';


reset($ages);
while ($age = current($ages)) {
    echo $age. ", ";
    next($ages);
}
