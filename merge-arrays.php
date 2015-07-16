<?php

/*Search for Bob and Bob in $names. Make sure it works as expected.
*/

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function combine_arrays ($names, $compare) {
	$newArray = [];
	foreach ($names as $namesValue) {
		$compareValue = array_shift($compare);
		if ($namesValue == $compareValue) {
		array_push($newArray, $namesValue);
		}
		if ($namesValue !== $compareValue) {
		array_push($newArray, $namesValue);
		array_push($newArray, $compareValue);
		}
	}
	print_r($newArray);
}
	combine_arrays ($names, $compare);

?>
