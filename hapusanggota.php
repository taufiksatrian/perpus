<?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>
<?php
	$idanggota = $_GET['idanggota'];
	$del = $koneksi->query("DELETE FROM tbanggota WHERE idanggota='$idanggota'");
?>
    <script type="text/javascript"">
      alert("Data Berhasil di Hapus");
      window.location.href='?page=anggota';
    </script>