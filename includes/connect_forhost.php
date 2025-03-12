<?php
$dsn = "mysql:host=localhost;dbname=rohkb389_portfolio;charset=utf8mb4";
try {
$connect = new PDO($dsn, 'rohkb389_nate', 'aJBje;xxM@');
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('unable to connect please check your connection.php file');
}
?>

