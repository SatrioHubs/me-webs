<?php 
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB1', 'crud_web');

$db1 = new mysqli(HOST, USER, PASS, DB1);

$koneksi = new mysqli("localhost", "root", "", "crud_web");

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>