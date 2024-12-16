<?php

// Function
// Loop, foor loop
// Foreach

function sayHello() {
	return "Hello there!<br/>";
}

sayHello();
// for loop
for ( $i = 0; $i < 5; $i++ ) {
	echo $i . " = " . sayHello();
}

$languages = [ 'HTML', 'CSS', 'Javascript', 'PHP' ];

foreach ( $languages as $item ) {
	echo $item . "<br/>";
}



// Function with argument
function sayGoodMorning( string $name ) {
	echo "Good Morning, " . $name . "!";
}
sayGoodMorning( "Jubyaer" );


