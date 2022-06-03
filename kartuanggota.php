<?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
  include "vendor/autoload.php";
?>
<?php
 $idanggota = $_GET['idanggota'];
 $sql = $koneksi->query("SELECT * FROM tbanggota where idanggota='$idanggota'");
 
 $tampil = $sql->fetch_assoc();
?>
<?php
	function barcode(){
	$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
	echo $generator->getBarcode($_GET['idanggota'], $generator::TYPE_CODE_128);	
	}

?>
<!DOCTYPE html>
<html>
<head>
<title>Cetak Kartu Tanda Anggota</title>
</head>
<body>
<table border="1">
<tr bgcolor="white">
<td colspan="3"><b><font color="black"><center>KARTU TANDA ANGGOTA</b>
	<center>PERPUSTAKAAN SUKABACA</b></td>

</tr>
<tr>
<td>
<table border="0" width="350px" height="140px">
<tbody>
<tr><td>Nama</td><td>:</td><td><?php echo $tampil ['nama']; ?></td></tr>
<tr><td>ID Anggota</td><td>:</td><td><?php echo $tampil ['idanggota']; ?></td></tr>
<tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $tampil ['jeniskelamin']; ?></td></tr>
<tr><td>Alamat</td><td>:</td><td><?php echo $tampil ['alamat']; ?></td></tr>
<tr><td></td><td></td><td><?php barcode();?></td></tr>

</tbody></table>

</tr>
<tr bgcolor="white">
<td colspan="3"><b><font color="black"><center>Berlaku Selamanya</center></b></td>
</tr>
</body>
</html>



<p>
<!DOCTYPE html>
<html>
<head>
<title >Cetak Kartu Tanda Anggota</title>
</head>
<body>
<table border="1">
<tr bgcolor="white">
<td colspan="3"><b><font color="black"><center>TATA TERTIB PERPUSTAKAAN</b></td>

</tr>
<tr>
<td>
<table border="0" width="350px" height="140px">
<tbody>
<tr><td>1.</td><td></td><td>Apabila meminjam buku Perpustakaan harus</td></tr>
<tr><td></td><td></td><td>menunjukan kartu anggotanya</td></tr>
<tr><td>2.</td><td></td><td>Tidak dapat dipinjmankan kepada orang lain</td></tr>
<tr><td>3.</td><td></td><td>Buku yang hilang harus diganti</td></tr>
<tr><td>4.</td><td></td><td>Pengembalian lewat dari batas waktu </td></tr>
<tr><td></td><td></td><td>akan dikenakan denda</td></tr>
</tbody></table>

</tr>
<tr bgcolor="white">
<td colspan="3"><b><font color="black"><center>PERPUSTAKAAN SUKABACA</center></b></td>
</tr>
</body>
</html>	

</p>
