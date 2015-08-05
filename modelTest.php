<?php

require_once 'model.php';

$model = new Model();

$model->name = 'Something';
$model->number = '12345';

echo "My name is: " . $model->name;

?>