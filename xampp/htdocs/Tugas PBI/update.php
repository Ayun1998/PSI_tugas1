<!DOCTYPE html>
<html>
<head>
	<title>Update Data Barang</title>
	<meta author=Ayun>
</head>
<body>
	<?php
	include 'koneksi.php';
		$id = $_POST['id'];
		$nama_produk = $_POST['nama'];
		$hargasatuan  = $_POST['harga'];
		$stok = $_POST['jumlah'];
		$tgl_produksi = $_POST['tglpro'];
		$tgl_kadaluarsa = $_POST['tgl_exp'];

		// echo $_POST['nama'];

		$q_update = "UPDATE produk SET nama_produk='$nama_produk', hargasatuan='$hargasatuan', stok='$stok', tgl_produksi='$tgl_produksi', tgl_kadaluarsa='$tgl_kadaluarsa' WHERE id_produk='$id' ";
		$hasil = mysqli_query($connector,$q_update);

		if($hasil){
			echo "Data Diperbarui <br>";
			echo "Nama Produk    	: ".$nama_produk."<br>";
			echo "Harga Satuan   	: ".$hargasatuan."<br>"; 
			echo "Jumlah Stok    	: ".$stok."<br>";
			echo "Tanggal Produksi  : ".$tgl_produksi."<br>";
			echo "Jumlah Kadaluarsa : ".$tgl_kadaluarsa."<br>";
		}else{
		echo "Data gagal disimpan";}
	?>
	<form method=post action=tampil_data.php>
	<input type=submit value=Kembali>
	</form>

</body>
</html>