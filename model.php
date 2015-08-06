<?php

/*Create a Model class with attributes property (array)-use protected so not visible outside the class*/

class Model
{
    protected $attributes = [];
/*Add a new protected static property named $table. This table property will be used to let our model know which database table we will be representing.*/     
    protected static $table = '';

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

/*In the Model class, add a static method named getTableName() that 
returns the value of the static property $table*/    
    static function getTableName()
     {
        /*echo Table::getTableName();*/
        return static::$table;
     }
}

$model = new Model;
$model->test = 'appearance';

echo $model->test;

?>