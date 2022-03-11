<?php



session_start();

var_dump($GLOBALS);

$_SESSION['teste'] = 3;

print_r($_SESSION);

echo "<br>";

echo "{$_SESSION['teste']}";

var_dump($_SESSION);
