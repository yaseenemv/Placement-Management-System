<?php

$dbHost = 'localhost';
$dbName = 'demo';
$dbUser = 'root';
$dbPasw = 'root';
try {
    $dbConn = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPasw);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo $e->getMessage();
}
//https://startbootstrap.com/template/sb-admin
	
	
?>