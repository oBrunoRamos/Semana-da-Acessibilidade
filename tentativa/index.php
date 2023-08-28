<?php

$class = $_GET('controller');
$action = $_GET('acao');

$class .= 'Controller';

require_once $_SERVER['DOCUMENT_ROOT'] . '/tentativa/controller/mainController.php';


