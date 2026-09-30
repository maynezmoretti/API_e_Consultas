<?php
declare(strict_types=1);

$host = "192.168.10.97";
$usuario = "postgres";
$senha = "250318";
$banco = "almoxarifado";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);

?>