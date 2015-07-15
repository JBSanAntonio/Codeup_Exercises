<?php
function numericCheck ($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		return "ERROR: Both $a and $b must be numbers\n";
	} else {
	}
}

function add($a, $b)
{
	numericCheck($a, $b);
    return $a + $b;
}

function subtract($a, $b)
{
	numericCheck($a, $b);
    return $a - $b;
}

function multiply($a, $b)
{
	numericCheck($a, $b);
	return $a * $b;
}

function divide($a, $b, $strict = true)
{
    if ($b == 0) {
    	return "ERROR: $b must not equal zero";
	    } else {	
			numericCheck($a, $b);
				return $a / $b;
	    } 
}

function modulus($a, $b)
{
	numericCheck($a, $b);
	return $a % $b;
}

// Add code to test your functions here
	$number = add(10, 5);
	echo $number . PHP_EOL;

	$number = subtract(10, 5);
	echo $number . PHP_EOL;

	$number = multiply(10, 5);
	echo $number . PHP_EOL;

	$number = divide(10, 0, true);
	echo $number . PHP_EOL;

	$number = modulus(10, 5);
	echo $number . PHP_EOL;

?>
