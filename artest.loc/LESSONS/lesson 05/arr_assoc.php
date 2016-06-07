<?php
$assoc = array("first_name"=>"Kevin",
                "last_name"=>"Skoglund");

echo $assoc["first_name"]. "<br>";
echo $assoc["first_name"]. " ". $assoc["last_name"]. "<br>";
$assoc["first_name"] = "Larry";
echo $assoc["first_name"]. " ". $assoc["last_name"]. "<br>";
echo $assoc['0'];
