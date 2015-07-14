<?php

/*fwrite(STDOUT, "Input a minimum and maximum number range to play");
*/
if ($argc == 3) {
$random = mt_rand($argv[1], $argv[2]);
}
$guessCount = 0;
do {
	fwrite(STDOUT, " What is your guess?\n");
		$userGuess = trim(fgets(STDIN)) . PHP_EOL;
		/*get the input from user*/
			$guessCount++;
		if ($argc !== 3) {
			fwrite(STDOUT, "Please enter minimum and maximum numbers");
			} elseif ($userGuess < $argv[1]) {
				fwrite(STDOUT, "Your guess is under the minimum number " . $argv[1]);
			} elseif ($userGuess > $argv[2]) {
				fwrite(STDOUT, "Your guess is over the maximum number " . $argv[2]);
			} elseif ($userGuess < $random) {
				fwrite(STDOUT, "HIGHER\n");
			} elseif ($userGuess > $random) {	
				fwrite(STDOUT, "LOWER\n");
			} elseif ($userGuess == $random) {
				fwrite(STDOUT, "GOOD GUESS, YOU WON!\n");
				fwrite(STDOUT, "in" . " " . $guessCount . " " . "total guesses\n");
				fwrite(STDOUT, "Play again? Yes or no?\n");
				exit(0);
			}
		} while ($userGuess !== $random);
	 
?>
		