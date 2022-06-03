
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
	barcode();
?>