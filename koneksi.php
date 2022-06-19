<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010271";
$db = "klinik_312010271";

$conn = mysqli_connect('localhost','adminklinik','312010271','klinik_312010271');
if(!$conn){
	die("koneksi gagal: ");
} else echo "Koneksi berhasil";

?>