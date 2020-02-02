<!DOCTYPE html>
<?php
$nama_db = "jualbeli";
	$connector = mysqli_connect("localhost","root","");
	mysqli_select_db($connector,$nama_db) or die("Koneksi ke jualbeli gagal");
?>