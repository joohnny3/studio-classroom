<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=studio";

$pdo = new PDO($dsn, 'root', '');

// $sql = "SELECT SUM(Sales) FROM Store_Information";
$sql = "SELECT * FROM Store_Information WHERE Store_Name LIKE '%台北%'";

$result = $pdo->query($sql)->fetchAll();

print "<pre>";
print_r($result);
print "</pre>";
