<?php

$class = $_GET['controller'];
$metodo = $_GET['acao'];



$class .= 'Controller';

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula4/controller/EstudanteController.php';


$controller = new $class();
$controller -> $metodo();
