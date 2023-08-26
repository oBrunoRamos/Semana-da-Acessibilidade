<?php

header('Content-type: text/plain');

$username = $_POST["username"];
$password = $_POST["password"];

// echo "O usuário {$username} esta tentando logar \n\n";
// echo "Com a senha {$password}";

$nota1 = 6;
$nota2 = 8;

$media = ($nota1 + $nota2) / 2;

echo "A média das notas é: {$media}";