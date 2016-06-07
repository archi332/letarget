<?php 
$i = 0;
while ($i <= 10) {
	if ($i % 2 == 0) {
		echo $i. "(in), ";
	} else {
	echo $i. ', ';		
	}
	$i++;
}


echo "<br><br><br><br>";
for ($i=0; $i < 10; $i++) { 
	if ($i%2 == 0) {
		echo "{$i} is even<br>";
	} else {
		echo "{$i} is odd<br>";
	}
}
