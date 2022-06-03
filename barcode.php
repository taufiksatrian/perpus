
<?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
  include "vendor/autoload.php";
?>
<?php
 $idbuku = $_GET['idbuku'];
 $sql = $koneksi->query("SELECT * FROM tbbuku where idbuku='$idbuku'");
 $tampil = $sql->fetch_assoc();
?>
<?php
	function barcode(){
	$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
	echo $generator->getBarcode($_GET['idbuku'], $generator::TYPE_CODE_128);	
	}
	barcode();
?>