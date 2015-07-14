<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $value) {
       if(is_array($value)) {
       	echo implode(', ', $value) . PHP_EOL;
       } else {
       		echo $value .PHP_EOL;
       }
}
?>

