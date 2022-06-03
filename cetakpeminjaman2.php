<?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
?> 
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <center>

    <h2>Data Laporan Peminjaman</h2>
    <hr>
    <h4></h4>

  </center>  
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0"  border="1" style="width: 100%">
                  <thead>
                    <tr>
                      <tr>
                        <th>No.</th>
                        <th>ID Anggota</th>
                        <th>Nama Anggota</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                      </tr>
                    </tr>
                  </thead>
                  <tbody>
<?php
$no=1;
$dari = $_POST['dari'];
$sampai = $_POST['sampai'];
$cetak = $_POST['cetak'];
if ($cetak) {
  $sql = $koneksi->query("select * from tbtransaksi where status='kembali' and tglkembali between '$dari' and '$sampai' order by tglkembali asc");
    while($data = $sql->fetch_assoc()) {
      ?>        
                  <tbody>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data["idanggota"]?></td>
      <td><?php echo $data["nama"]?></td>
      <td><?php echo $data["judulbuku"]?></td>
      <td><?=date('d F Y', strtotime($data["tglpinjam"])); ?></td>
      <td><?=date('d F Y', strtotime($data["tglkembali"])); ?></td>
      <td><?php echo $data["status"]?></td>
    </tr>
    <script type="text/javascript">
      window.print();
    </script>
  <?php }} ?>
                  </tbody>
                </tbody>
              </table>
              </div>