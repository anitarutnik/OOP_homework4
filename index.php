<?php

require 'classes/App.php';

use classes\App;

$input = array("dir1/One", "dir1/Two", "dir1/Three", "dir2/One", "dir2/Two", "dir2/Three");
$rand_keys = array_rand($input, 1);

$app = new App();

$className = $input[$rand_keys];

echo $app->outputViewAction($className);







