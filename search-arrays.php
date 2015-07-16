<?php

/*Search for Bob and Bob in $names. Make sure it works as expected.
*/

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function isInArray($query, $names) {
	$result = array_search($query, $names);
	if($result !== false) {
		return true;
	} else {
		return false;
	};
};
	var_dump(isInArray('Tina', $names));
	if(isInArray('Tina', $names)) {
		echo 'Tina is in the array' . PHP_EOL;
	}
	var_dump(isInArray('Bob', $names));
	if(isInArray('Bob', $names)) {
		echo 'Bob is in the array' . PHP_EOL;
	}
?>
