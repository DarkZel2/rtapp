<?php


$host = "localhost";
$user = "root";
$password = "";
$db = "rtapp";

try {
    $con = new PDO("mysql:host=$host; dbname=$db", $user, $password);
} catch (PDOException $e) {
    die('Connected failed: '.$e->getMessage());
}
