<?php 
$ages = [4,8,15,16,23,42];

foreach ($ages as $key => $age) {
	echo "Age: {$age}<br>";
}
echo "<br><br><br>";


$person = ["first_name" => "Kevin",
			"last_name" => "Scoglund",
			"address" => "123 Avenu",
			"city" => "Beverly Hills",
			"state" => "CA",
			"zip_code" => "90210"
			];

foreach ($person as $attribute => $data) {
	echo ucfirst(str_replace('_', ' ', $attribute)). ": {$data}<br>";
}
echo "<br><br><br>";


$prices = ['Brand New Computer' => 2000,
		'1 month of linda.com' => 25,
		'Learninh PHP' => null];

foreach ($prices as $key => $value) {
	echo $key." - ";
	if (is_numeric($value)) {
		echo "$".$value;
	} else {
		echo "<b>priceless</b>";
	}
echo "<br>";

}
