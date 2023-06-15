<?php
require "model.php";
require "controller.php";
require "view.php";

$model = new Model();
$controller = new Controller($model);
$view = new View($controller);

echo $view->output();