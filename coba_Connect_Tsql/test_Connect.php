<?php
 $host = "ARIEF"; //namaserver\nama_instance
    
 $connInfo = array("Database" => "TSQL", "UID" => "", "PWD" => "");
 $conn = sqlsrv_connect($host, $connInfo);

 if ($conn) {
 echo "Koneksi berhasil.<br />";
 } else {
 echo "Koneksi Gagal";
 die(print_r(sqlsrv_errors(), true));
 }
