<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<center>

		<h2>Data Laporan Anggota</h2>
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
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No. HP</th>
                      </tr>
		<?php
		    $no = 1;
		    $sql = $koneksi->query("select * from tbanggota");
		    while($data = $sql->fetch_assoc()) {
      	?>
		<tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data["idanggota"]?></td>
      <td><?php echo $data["nama"]?></td>
      <td><?php echo $data["jeniskelamin"]?></td>
      <td><?php echo $data["alamat"]?></td>
      <td><?php echo $data["nohp"]?></td>

    </tr>
  <?php }?>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>