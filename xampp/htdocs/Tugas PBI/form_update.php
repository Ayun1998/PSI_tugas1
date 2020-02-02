<!DOCTYPE html>
<?php
	$nama_db = "jualbeli";
	$connector = mysqli_connect("localhost","root","");
	mysqli_select_db($connector,$nama_db) or die("Koneksi ke jualbeli gagal");

	$sql = "SELECT * FROM produk ";
	$records = mysqli_query($connector,$sql);
?>

<html>
<head>
	<title>form update</title>
</head>
<body>

	<?php 
	$mysqli = new mysqli('localhost','root','','jualbeli') or die(mysql_error($mysqli));
	$res=mysqli_query($mysqli,"SELECT * FROM `produk` WHERE id_produk ='".$_GET['edit']."' " );

	while($produk = $res->fetch_assoc()){
	?>
	<form action="update.php" method="POST">
		<table>
			<tr>
				<td>ID Produk</td>
				<td><input type="text" name="id" value=" <?php echo $produk['id_produk']; ?>"></td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="nama" value=" <?php echo $produk['nama_produk']; ?>"></td>
			</tr>
			<tr>
				<td>Harga Satuan</td>
				<td><input type="text" name="harga" value=" <?php echo $produk['hargasatuan']; ?>"></td>
			</tr>
			<tr>
				<td>Jumlah Stok</td>
				<td><input type="text" name="jumlah" value=" <?php echo $produk['stok'];; ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Produksi</td>
				<td><input type="text" name="tglpro" value=" <?php echo $produk['tgl_produksi']; ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Kadaluarsa</td>
				<td><input type="text" name="tgl_exp" value=" <?php echo $produk['tgl_kadaluarsa']; ?>"></td>
			</tr>
			<tr>
				<td align=center><input type=submit name=submit value=Update></td>
			</tr>
		</table>
		
	</form>
	<?php
}
	?>

</body>
</html>