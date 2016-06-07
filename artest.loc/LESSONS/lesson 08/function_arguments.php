<?php

function say_hello_to($word){
    echo ucwords("hello $word")."<br>";
}
$name = 'John Doe';
//say_hello_to($name);

function better_hello($greeting, $target, $punct) {
    echo $greeting. " ". $target. $punct. "<br>";
}

better_hello("Hello", $name, "!");
better_hello("Greetings", $name, null);
