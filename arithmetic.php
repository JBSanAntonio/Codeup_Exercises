<?php

function add($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR: $a and $b must be numbers\n";
    }
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "ERROR: $a and $b must be numbers\n";
    }
}

function multiply($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
    	return $a * $b;
    } else {
    	return "ERROR: $a and $b must be numbers\n";
    }
}

function divide($a, $b, $strict = true)
{
    if ($b == 0) {
    	return "ERROR: $b must not equal zero";
	    } elseif 
	   		(is_numeric($a) && is_numeric($b)) {	
	    		return $a / $b;
		    } else {
		    	return "ERROR: $a and $b must be numbers\n";
	   		}
}

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    	return $a % $b;
    } else {
    	return "ERROR: $a and $b must be numbers\n";
    }
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
