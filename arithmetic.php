<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    // Add code here
    return $a - $b;
}

function multiply($a, $b)
{
    // Add code here
    return $a * $b;
}

function divide($a, $b)
{
    // Add code here
    return $a / $b;
}

function modulus($a, $b)
{
	return $a % $b;
}

// Add code to test your functions here
	$number = add(10, 5);
	echo $number . PHP_EOL;

	$number = subtract(10, 5);
	echo $number . PHP_EOL;

	$number = multiply(10, 5);
	echo $number . PHP_EOL;

	$number = divide(10, 5);
	echo $number . PHP_EOL;

	$number = modulus(10, 5);
	echo $number . PHP_EOL;

?>
