<?php

$file_json = file_get_contents("../../json/config.json");
$parsed_json = json_decode($file_json, true);
$dbadmin = $parsed_json['dbadmin'];
$adminPass = $parsed_json['adminPass'];
$servername = $parsed_json['servername'];
$dbname = $parsed_json['dbname'];


$dsn = "mysql:host=$servername;dbname=$dbname";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $dbadmin, $adminPass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>