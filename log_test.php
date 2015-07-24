<?php

require_once 'Log.php';

$log = new Log('cli');

/*Call the methods logMessage(), info(), and error() with to test the functionality of each.
*/
$log->logMessage('Info', 'This is an info message.');

?>