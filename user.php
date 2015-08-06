<?php

require_once 'model.php';

class User extends Model
{
	protected static $table = 'user';
}

echo User::getTableName();

?>