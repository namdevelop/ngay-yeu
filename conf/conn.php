<?php 
include __DIR__ . '/db.sql.php'; 
session_start();
header("Cache-Control: no-cache, must-revalidate");
header('Content-Type: text/html; charset=utf-8');
define("localhost", $localhost_db);
define("username", $username_db); 
define("password", $password_db); 
define("database", $database_db);
$thanhdieudb = @mysqli_connect(localhost, username, password, database);
if (!$thanhdieudb) {
    echo "<iframe src='error' style='position:absolute;width: 100%;height: 100%;top: 0;left: 0;border: none;' allowfullscreen></iframe>";
	exit('404 Not Found');
}
include __DIR__ . '/common.php'; 