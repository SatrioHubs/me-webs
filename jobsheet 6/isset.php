<?php
$umur;

if (isset($umur) && $umur >= 18) {
    echo "Anda Sudah Dewasa<br>";
} else {
    echo "Anda Belum Dewasa<br>";
}

$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"] . "<br>";
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.<br>";
}
?>