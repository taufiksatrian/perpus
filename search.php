<?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>
<?php
$host = 'localhost';
$username = 'root';
$pass = '';
$Dbname = 'dbpus';
//connect with the database
$db = new mysqli($host,$username,$pass,$Dbname);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM tbpengarang WHERE namapengarang LIKE '%".$searchTerm."%' ORDER BY ");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['namapengarang'];
}
//return json data
echo json_encode($data);
?>