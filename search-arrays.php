<?php

/*Search for Tina and Bob in $names. Make sure it works as expected.
*/

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function isInArray($query, $names) {
	$result = array_search($query, $haystack);
	if($result !== false) {
		return true;
	} else {
		return false;
	};
};
	
?>
