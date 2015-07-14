<?php

		fwrite(STDOUT, "Please enter a starting number");
		$argv[1] = trim(fgets(STDIN) . PHP_EOL);
		fwrite(STDOUT, "Please enter an ending number");
		$argv[2] = trim(fgets(STDIN) . PHP_EOL);
		for ($i=$argv[1]; $i<=$argv[2]; $i++) {	
			echo "\$i has a value of {$i}\n";
		}
?>