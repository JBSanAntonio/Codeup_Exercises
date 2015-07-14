<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $stuff) {
	if (is_scalar($stuff)) {
        echo "{$stuff} is a scalar\n";
    };
}



?>