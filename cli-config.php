<?php


// replace with file to your own project bootstrap

require_once "vendor/autoload.php";

use App\Config\Connection;
use App\Entities\Product;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

$paths = [__DIR__."/app/Entities"];
$isDevMode = true;
$params = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'pizzaApp',
    'host'     => '127.0.0.1'
);

$connection = new Connection();

$con = $connection->connect($paths, $isDevMode, $params);

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($con);
