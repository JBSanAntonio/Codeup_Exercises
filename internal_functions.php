<?php

function inspect($value){
	switch (gettype($value)){
	    case 'string':
	    	if (empty($value)){
	        return 'The value is an empty string' . PHP_EOL;
	    	} else {
	    		return 'The value is a string' . PHP_EOL;	
	    	}	
	    case 'array':
	    	if (empty($value)){	
	        return 'The value is an empty array' . PHP_EOL;
	    	} else {
	    		return 'The value is an array' . PHP_EOL;
	    	}
	    case 'boolean':
	    	if ($value){	
	        return 'The boolean is true' . PHP_EOL;
	    	} else {
	    		return "The boolean is false" . PHP_EOL;
	    	}
	    case 'integer':
	        return "The integer is $value" . PHP_EOL;
	    case 'double':
	        return 'The value is a float' . PHP_EOL;
	    case 'NULL':
	        return "$value is null" . PHP_EOL;  
	}
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($num1) . PHP_EOL;

echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($num2) . PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($num3) . PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($num4) . PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;
echo inspect($null) . PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool1) . PHP_EOL;

echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($bool2) . PHP_EOL;

echo 'Inspecting $string1' . PHP_EOL;
echo inspect($string1) . PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;
echo inspect($string2) . PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;
echo inspect($array1) . PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;
echo inspect($array2) . PHP_EOL;
