<!DOCTYPE html>
<html>

<head>
 <title>Formulir Input Barang</title>
 <meta author=Ayun>
</head>
<body>
	<h1>Masukkan Data Barang</h1>
	<form method=post action=simpan.php>
 	<table>
  		<tr>
   			<td>Nama Produk</td>
   			<td><input type="text" name="nama_produk" size="20" required></td>
  		</tr>
  		<tr>
   			<td>Harga Satuan</td>
   			<td><input type="number" name="harga_satuan" size="20" min="0"></td>
  		</tr>
		<tr>
			<td>Jumlah Stok</td>
   			<td><input type="number" name="jml_stok" size="20" min="0"></td>
 		</tr>
 		<tr>
			<td>Tanggal Produksi</td>
   			<td><input type="date" name="tgl_produksi" required></td>
   		</tr>
 		<tr>
			<td>Tanggal Kadaluarsa</td>
   			<td><input type="date" name="tgl_kadaluarsa" required></td>
 		</tr>
  		<tr>
   			<td align=center><input type=submit name=submit value=Simpan></td>
   			<td align=center><input type=reset name=reset value=Ulangi></td>
  		</tr>
 	</table>
	</form>
</body>
</html>