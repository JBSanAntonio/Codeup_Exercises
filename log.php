<?php

class Log
{
	public $filename;
	
	public function logMessage($logLevel, $message) 
	{
		/*Each entry is formatted YYYY-MM-DD HH:MM:SS [LEVEL] MESSAGE */
		$dateTime = date("Y-m-d H-i-s", time());
		$stringToWrite = "$dateTime [{$logLevel}] $message";
		$handle = fopen($this->filename, 'a');
		fwrite($handle, PHP_EOL . $stringToWrite);
		fclose($handle);
	}
	public function logInfo($message)
	{
		return $this->logMessage('INFO', $message);
	}

	public function logError($message)
	{
		return $this->logMessage('ERROR', $message);
	}
}
?>