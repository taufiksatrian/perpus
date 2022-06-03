<?php 
global $koneksi;

$nama		="localhost";
$username	="root";
$pass		="";	
$namadb		="dbpus";


$koneksi = mysqli_connect("$nama","$username","$pass","$namadb");
 
// Check connection
if (!$koneksi){
	die("Koneksi database gagal : " . mysqli_connect_error()) ;
}
 
?>