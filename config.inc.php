<?php
session_start();
error_reporting(E_ALL);

define("DB_HOST", "tete.br");
define("DB_USER", "teste");
define("DB_PASS", "xyz");
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