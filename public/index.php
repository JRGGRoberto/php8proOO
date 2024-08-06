<?php

use app\core\Router;

require '../vendor/autoload.php';

session_start();

Router::run();

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$protocolo = '';
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
    $protocolo = 'https';
} else {
    $protocolo = 'http';
}

$caminho = $_SERVER['DOCUMENT_URI'];
$partes = explode('/', trim($caminho, '/'));
$url = $protocolo.'://'.$_SERVER['SERVER_NAME'].'/'.$partes[0].'/';

echo '<pre>';
echo $protocolo.'<br>';
echo $caminho.'<br>';
echo $partes[0].'<br>';
echo $url.'<br>';

echo '</pre>';

$date_now = new DateTime();
$limite = new DateTime('08/02/2024');
echo $date_now->format('d/m/Y H:i').'<br>';
echo $limite->format('d/m/Y H:i').'<br>';

if ($date_now > $limite) {
    echo 'greater than';
} else {
    echo 'Less than';
}

// $array1 = ['cor' => 'vermelho', 2, 4];
// $array2 = ['a', 'b', 'cor' => 'verde', 'forma' => 'trapezoide', 4];
$array1 = ['a', 'e', 'i', 'o', 'u'];
$array2 = ['x', 'y', 'z'];
$result = array_merge($array1, $array2);
print_r($result);
// Expectável: Array ( [0] => a [1] => e [2] => i [3] => o [4] => u [5] => x [6] => y [7] => z ) ';
*/
