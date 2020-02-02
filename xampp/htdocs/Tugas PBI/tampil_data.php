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
	<title>Data Produk</title>
</head>
<body>
	<form action="form_update" method="GET">
	<table width="600" border="1" cellpadding="1" cellspacing="1">

	<tr>
		<th>ID Produk</th>
		<th>Nama Produk</th>
		<th>Harga Satuan</th>
		<th>Jumlah Stok</th>
		<th>Tanggal Produksi</th>
		<th>Tanggal Kadaluarsa</th>
		<th>Tools</th>
	</tr>



	<?php
	$mysqli = new mysqli('localhost','root','','jualbeli') or die(mysql_error($mysqli));	

	$data = mysqli_query($mysqli,"SELECT * FROM `produk` ");


	while ($produk = $data->fetch_assoc()): 
		?>
			<tr>
			<td><?php echo $produk['id_produk']; ?></td>
			<td><?php echo $produk['nama_produk']; ?></td>
			<td><?php echo $produk['hargasatuan']; ?></td>
			<td><?php echo $produk['stok']; ?></td>
			<td><?php echo $produk['tgl_produksi']; ?></td>
			<td><?php echo $produk['tgl_kadaluarsa']; ?></td>
			<td><a href="form_update.php?edit=<?php echo($produk['id_produk']); ?>">edit</a></td>
			</tr>

		<?php 
	endwhile; 
	?>
	</table>
		
	<?php 
		function pre_r($array){
			echo '<pre>';
			print_r($array);
			echo '</pre>';
		}
	?>
	</form>
	

</body>
</html>
