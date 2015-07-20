<?php

function logMessage($logLevel, $message) 
{

	$filenameDate = date("Y-m-d", time());

	$filename = 'log-' . $filenameDate . '.log';

	/*Each entry is formatted YYYY-MM-DD HH:MM:SS [LEVEL] MESSAGE */
	$dateTime = date("Y-m-d H-i-s", time());
	$stringToWrite = "$dateTime [{$logLevel}] $message";

	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL . $stringToWrite);
	fclose($handle);
}

logMessage("ERROR", "This is an error message.");
logMessage("INFO", "This is an info message.");

function logInfo(){
	$message = "Info message without info.";
	logMessage("INFO", $message);
}

logInfo();

function logError(){
	$message = "Computer problem.";
	logMessage("ERROR", $message);
}
logError();

?>



