<?php

function paint($room='office',$color='red') {
    return "The color of the {$room} is ". $color. ".<br>";
}
echo paint();
echo paint('bedroom', 'blue');
echo paint('beroom', null);
echo paint('beroom');
echo paint('blue');
