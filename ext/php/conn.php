<?php
session_start();
$dsn = 'mysql:dbname=tweety;host=127.0.0.1';
$user = 'root';
$password = 'Tigela12';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}