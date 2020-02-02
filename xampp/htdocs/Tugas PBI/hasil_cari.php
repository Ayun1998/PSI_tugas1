<!DOCTYPE html>
<html>
<head>
	<title>Hasil Cari</title>
</head>
<body>
	<h1>Data Barang</h1>
	<?php
	$nama_db = "jualbeli";
	$connector = mysqli_connect("localhost","root","");
	mysqli_select_db($connector,$nama_db) or die("Koneksi ke jualbeli gagal");

	$cari = $_POST['cari'];
	$sql = "SELECT * FROM produk where nama_produk like '%$cari%'";
	$hasil = mysqli_query($connector,$sql);
	$jumlah=mysqli_num_rows($hasil);
	echo "<br>";
 	echo "Ditemukan: $jumlah";
 	echo "<br>";
 	while($baris=mysqli_fetch_array($hasil)){
  		 echo "Nama Produk : ";
   		 echo $baris[1];
   		 echo "<br>";
   		 echo "Harga Satuan : ";
   		 echo $baris[2];
   		 echo "<br>";
   		 echo "Jumlah Stok :";
   	 	 echo $baris[3];
   	 	 echo "<br>";
   	 	 echo "Tanggal Produksi :";
   	 	 echo $baris[4];
   	 	 echo "<br>";
   	 	 echo "Tanggal Kadaluarsa :";
   	 	 echo $baris[5];
	}		
	?>
</body>
</html>