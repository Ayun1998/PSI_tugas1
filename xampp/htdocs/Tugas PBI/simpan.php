<!DOCTYPE html>

<html>
<head>
	<title>Simpan Barang</title>
 	<meta author=Ayun>
</head>
<body>
	<h1>Data Barang</h1>
	<?php
	include 'koneksi.php';
		$nama_produk = $_POST['nama_produk'];
		$hargasatuan  = $_POST['harga_satuan'];
		$stok = $_POST['jml_stok'];
		$tgl_produksi = $_POST['tgl_produksi'];
		$tgl_kadaluarsa = $_POST['tgl_kadaluarsa'];
	?>
	<?php
		$q_simpan = "INSERT INTO produk (nama_produk, hargasatuan, stok, tgl_produksi, tgl_kadaluarsa)
					VALUES ('$nama_produk', '$hargasatuan', '$stok', '$tgl_produksi', '$tgl_kadaluarsa')";
		$hasil = mysqli_query($connector,$q_simpan);

		if($hasil){
			echo "Data tersimpan	: <br>";
			echo "Nama Produk    	: ".$nama_produk."<br>";
			echo "Harga Satuan   	: ".$hargasatuan."<br>"; 
			echo "Jumlah Stok    	: ".$stok."<br>";
			echo "Tanggal Produksi  : ".$tgl_produksi."<br>";
			echo "Tanggal Kadaluarsa : ".$tgl_kadaluarsa."<br>";
		}else{
		echo "Data gagal disimpan";}
	?>
	<form method=post action=form_inputbrg.php>
	<input type=submit value=Kembali>
	</form>
	
</body>
</html>

