<?php

$random = mt_rand(1, 100);
$guessCount = 0;
do {
fwrite(STDOUT, "Guess?\n");
$userGuess = (fgets(STDIN)) . PHP_EOL;
	$guessCount++;
	if ($userGuess < $random) {
		fwrite(STDOUT, "HIGHER\n");
	} elseif ($userGuess > $random) {	
		fwrite(STDOUT, "LOWER\n");
	} elseif ($userGuess == $random) {
		fwrite(STDOUT, "GOOD GUESS, YOU WON!\n");
		fwrite(STDOUT, "in" . " " . $guessCount . " " . "total guesses\n");
		exit(0);
	}
} while ($userGuess !== $random);
	 
?>
		