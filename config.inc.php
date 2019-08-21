<?php
session_start("_TESTE_");
error_reporting(E_ALL);

define("DB_HOST", "localhost");
define("DB_USER", "teste");
define("DB_PASS", "teste");
define("DB", "TESTE");

try{
    $pdo = new PDO( 'mysql:host=' . DB_HOST . ';dbname=' . DB, DB_USER, DB_PASS);
}
catch ( PDOException $err )
{
    echo "SQL Error:" . $err->getMessage();
}


define("rnd", rand(1111,9999).time());
?>