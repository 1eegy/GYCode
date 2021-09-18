<?php
require_once 'dbconfig.php';
$conh = "mysql:host=$host;dbname=$dbname";
$conn = new PDO($conh, $username, $password);
$conn->query("set character set 'utf8mb4'");//utf8mb4
?>