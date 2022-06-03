<?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>
<?php
	$idbuku = $_GET['idbuku'];
	$del = $koneksi->query("DELETE FROM tbbuku WHERE idbuku='$idbuku'");
?>
    <script type="text/javascript"">
      alert("Data Berhasil di Hapus");
      window.location.href='?page=buku';
    </script>