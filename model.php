<?php

/*Create a Model class with attributes property (array)-use protected so not visible outside the class*/

class Model
{
	protected $attributes = [];

    // Magic setter to populate $data array
 	public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    // Magic getter to retrieve values from $data
	public function __get($name)
	{

	// Check for existence of array key $name
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];	
        }
        return null;
    }
}

$model = new Model;
$model->test = 'appearance';

echo $model->test;

?>