<?php

$filename = "contacts.txt";

function parseContacts($filename)
{
    $contacts = array();

// todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $content = trim(fread($handle, filesize($filename)));
    $contactsArray1 = explode(PHP_EOL, $content);

    foreach ($contactsArray1 as $key => $contactsArray1Value) 
    {
    	$contactsArray2 = explode('|', $contactsArray1Value);

    	var_dump($contactsArray2);
/*echo($contactsArray1Value);*/
/*now call the empty array $contacts defined at the top & separate name from number*/
		$contacts[$key]['name'] = $contactsArray2[0];
		$contacts[$key]['number'] = formatNumber($contactsArray2[1]);
    }
/*read file and parse contacts*/
    fclose($handle);
    return $contacts;
}
    
function formatNumber($number) {
    return '(' . substr($number, 0, 3) . ') ' . substr($number, 3, 3) . '-' . substr($number, 6, 4);
}

var_dump(parseContacts('contacts.txt'));

?>
