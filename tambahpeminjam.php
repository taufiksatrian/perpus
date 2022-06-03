 <?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>
<?php
$tglpinjam = date("Y-m-d");
$tujuhhari = mktime(0,0,0, date("n"), date("j")+7, date("Y"));

$kembali = date("Y-m-d", $tujuhhari);
?>
        <div class="container-fluid">

          

          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-6">
                      
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Peminjam</h6>
              </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <form method="POST">

                <div class="form-group">
                  <label class="col-sm-3">Judul Buku</label>
                  <select name="buku" class="form-control" >
                    <?php 
                      $sql = $koneksi->query("SELECT * FROM tbbuku ORDER BY idbuku ");
                      while ($data=$sql->fetch_assoc()) {
                        echo "<option value='$data[idbuku].$data[judulbuku]'>$data[idbuku].$data[judulbuku]</option>";
                      }
                     ?>
                  </select>
                </div>

                <div class="form-group">
                  <label class="col-sm-3">Nama Peminjam</label>
                  <select name="nama" class="form-control" >
                    <?php 
                      $sql = $koneksi->query("SELECT * FROM tbanggota ORDER BY idanggota ");
                      while ($data=$sql->fetch_assoc()) {
                        echo "<option value='$data[idanggota].$data[nama]'>$data[idanggota].$data[nama]</option>";
                      }
                     ?>
                  </select>
                </div>

                <div class="form-group">
                  <label class="col-sm-3">Tanggal Pinjam</label>
                  <input type="text" name="tanggalpinjam" class="form-control" value="<?php echo $tglpinjam ;?>" readonly>
                </div>

                <div class="form-group">
                  <label class="col-sm-3">Tanggal Kembali</label>
                  <input type="text" name="tanggalkembali" class="form-control" value="<?php echo $kembali ;?>"readonly>
                </div>

                <div class="form-group">  
                    <input type="submit" class="btn btn-primary" value="Simpan" name="simpan" class="form-control" >
                  </div>

                  </form>
                </div>

              </div>

              
            </div>
            

          </div>

        </div>

<?php
  if (isset($_POST['simpan'])) {
    $tanggalpinjam = $_POST['tanggalpinjam'];
    $tanggalkembali = $_POST['tanggalkembali'];
    $idtransaksi = $_POST['idtransaksi'];

    $buku = $_POST['buku'];
    $pecahbuku = explode(".", $buku);
    $idbuku = $pecahbuku[0];
    $judulbuku = $pecahbuku[1];

    $nama = $_POST['nama'];
    $pecahnama = explode(".", $nama);
    $idanggota = $pecahnama[0];
    $nama = $pecahnama[1];

    

    $sql = $koneksi->query("SELECT * FROM tbbuku WHERE judulbuku='$judulbuku'");
    while ($data = $sql->fetch_assoc()) {
      $sisa = $data['jumlah'];
      
      if ($sisa == 0) {
        ?>
        <script type="text/javascript">
          alert("Stok Buku Kosong ");
          window.location.href="?page=tambahpeminjam";
        </script>
        <?php
      } else {
        $sql = $koneksi->query("INSERT INTO tbtransaksi(idtransaksi, idanggota, nama, idbuku, judulbuku, tglpinjam, tglkembali, status) VALUES ('$idtransaksi','$idanggota','$nama','$idbuku','$judulbuku','$tanggalpinjam','$tanggalkembali','Pinjam')");

        $sql2 = $koneksi->query("UPDATE tbbuku SET jumlah=(jumlah-1) WHERE idbuku='$idbuku'");
        ?>
        <script type="text/javascript">
          alert("Data Berhasil Disimpan ");
          window.location.href="?page=peminjaman";
        </script>
        <?php
      }
    }
  }
?>    