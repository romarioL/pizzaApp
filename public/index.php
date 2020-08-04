<?php

require_once __DIR__ . "/../vendor/autoload.php";

use App\Config\Connection;
use App\Entities\Produto;

$paths = [__DIR__."/../app/Entities"];
$isDevMode = true;
$params = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'pizzaApp',
);

$connection = new Connection();

$con = $connection->connect($paths, $isDevMode, $params);

$produto = new Produto;

$produto->setNome('Bicicleta');
$produto->setPreco(800);
$produto->setDescricao('Engrenagem fixa, azul, rápida');

$con->persist($produto);
$con->flush();

$productCount = $con->getRepository(Produto::class)
                         ->count(['nome' => 'Bicicleta']);

echo $productCount;
