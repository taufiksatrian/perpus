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
         	<th>ISBN</th>
         	<th>Judul Buku</th>
         	<th>Kategori</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Jumlah</th>
        </tr>
		<?php
		    $no = 1;
		    $sql = $koneksi->query("select * from tbbuku");
		    while($data = $sql->fetch_assoc()) {
      	?>
		<tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data["idbuku"]?></td>
      <td><?php echo $data["judulbuku"]?></td>
      <td><?php echo $data["kategori"]?></td>
      <td><?php echo $data["pengarang"]?></td>
      <td><?php echo $data["penerbit"]?></td>
      <td><?php echo $data["jumlah"]?></td>
    </tr>
  <?php }?>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>