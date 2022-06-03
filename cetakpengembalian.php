
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<center>

		<h2>Data Laporan Buku</h2>
    <hr>
		<h4></h4>

	</center>

	<?php 
	$koneksi = new mysqli ("localhost","root","","dbpus");
	?>

	<table border="1" style="width: 100%">
		<tr>
       		<th>No.</th>
                        <th>ID Anggota</th>
                        <th>Nama Anggota</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
        </tr>
		<?php
		    $no = 1;
    $sql = $koneksi->query("select * from tbtransaksi where status='kembali'");
    while($data = $sql->fetch_assoc()) {
      	?>
		<tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data["idanggota"]?></td>
      <td><?php echo $data["nama"]?></td>
      <td><?php echo $data["judulbuku"]?></td>
      <td><?php echo $data["tglpinjam"]?></td>
      <td><?php echo $data["tglkembali"]?></td>
      <td><?php echo $data["status"]?></td>
      
    </tr>
  <?php }?>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>