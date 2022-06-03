<?php
	$koneksi = new mysqli ("localhost","root","","dbpus");
?>
<?php
	function denda($tgldateline, $tglkembali){
		$tgldateline_pecah = explode("-", $tgldateline);
		$tgldateline_pecah = $tgldateline_pecah[2]."-".$tgldateline_pecah[1]."-".$tgldateline_pecah[0];

		$tglkembali_pecah = explode("-", $tglkembali);
		$tglkembali_pecah = $tglkembali_pecah[2]."-".$tglkembali_pecah[1]."-".$tglkembali_pecah[0];

		$selisih = strtotime($tglkembali_pecah)-strtotime($tgldateline_pecah);

		$selisih = $selisih/86400;

		if ($selisih>=1) {
		 	$hasiltgl = floor($selisih);
		 }else{
		 	$hasiltgl = 0;
		 } 
		 return $hasiltgl;
	}
	function barcode(){
	$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
	echo $generator->getBarcode('ferdi', $generator::TYPE_CODE_128);	
	}
	
?>