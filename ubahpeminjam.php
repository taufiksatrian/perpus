<?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>
<?php
          $denda = 500;

          $tgldateline = $data['tglkembali'];
          $tglkembali = date;

          $lambat = denda($tgldateline,$tglkembali);
          $denda1 = $lambat*$denda;
        ?>
<?php
	$idtransaksi = $_GET['idtransaksi'];
	$judulbuku = $_GET['judulbuku'];

	$sql = $koneksi->query("UPDATE tbtransaksi SET denda='$denda1', status='Kembali' WHERE idtransaksi='$idtransaksi'");

	$sql = $koneksi->query("UPDATE tbbuku SET jumlah=(jumlah+1) WHERE judulbuku='$judulbuku'");

	?>
	<script type="text/javascript">
		alert("Proses Pengembalian Berhasil");
		window.location.href="?page=pengembalian";
	</script>
	<?php

?>