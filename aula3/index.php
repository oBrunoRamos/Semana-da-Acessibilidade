<?php

$class = $_GET['classe'];
$metodo = $_GET['acao'];



$class .= 'Controller';

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/controller/EstudanteController.php';


$controller = new $class();
$controller -> $metodo();
