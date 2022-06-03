 <?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>
<?php
 $idbuku = $_GET['idbuku'];
 $sql = $koneksi->query("SELECT * FROM tbbuku where idbuku='$idbuku'");
 $tampil = $sql->fetch_assoc();
?>
        <div class="container-fluid">

          

          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-6">
                      
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ubah Data Buku</h6>
              </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <form method="POST">
                <div class="form-group">
                  <label class="col-sm-3">Kode buku</label>
                  <input type="text" name="isbn" class="form-control" value="<?php echo $tampil ['idbuku']; ?>" readonly>
                </div>

                <div class="form-group">
                  <label class="col-sm-3">Judul Buku</label>
                  <input type="text" name="judul_buku" class="form-control" value="<?php echo $tampil ['judulbuku'];?>">
                </div>

                <div class="form-group">
                  <label class="col-sm-3">Kategori</label>
                  <select name="kategori" class="form-control" >
                    <option class="">-Pilih Kategori-</option>
                    <option value="Tutorial" <?php if ($tampil['kategori']=='Tutorial') {echo "selected";}?>>Tutorial</option>
                    <option value="Cerpen" <?php if ($tampil['kategori']=='Cerpen') {echo "selected";}?>>Cerpen</option>
                    <option value="Novel" <?php if ($tampil['kategori']=='Novel') {echo "selected";}?>>Novel</option>
                    <option value="Modul" <?php if ($tampil['kategori']=='Modul') {echo "selected";}?>>Modul</option>
                    <option value="Ilmu Komputer" <?php if ($tampil['kategori']=='Ilmu Komputer') {echo "selected";}?>>Ilmu Komputer</option>
                    <option value="Karya Sastra" <?php if ($tampil['kategori']=='Karya Sastra') {echo "selected";}?>>Karya Sastra</option>
                  </select>
                </div>
                  
                  <div class="form-group">
                  <label class="col-sm-3">Pengarang</label>
                  <input type="text" id="pengarang" name="pengarang" class="form-control" value="<?php echo $tampil ['pengarang'];?>">
                </div>

                <div class="form-group">
                  <label class="col-sm-3">Penerbit</label>
                  <input type="text" name="penerbit" class="form-control" value="<?php echo $tampil ['penerbit'];?>">
                </div>

                <div class="form-group">
                  <label class="col-sm-3">Jumlah Buku</label>
                  <input type="number" name="jumlah" class="form-control" value="<?php echo $tampil ['jumlah'];?>">
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
$isbn = $_POST['isbn'];
$judul_buku = $_POST['judul_buku'];
$kategori = $_POST['kategori'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$jumlah = $_POST['jumlah'];
$simpan = $_POST['simpan'];
if ($simpan) {
  $sql = $koneksi->query("UPDATE tbbuku SET idbuku='$isbn', judulbuku='$judul_buku', kategori='$kategori', pengarang='$pengarang', penerbit='$penerbit', jumlah='$jumlah' WHERE idbuku='$idbuku' ");
  if($sql){ 
    ?>
    <script type="text/javascript"">
      alert("Data Berhasil di Ubah");
      window.location.href='?page=buku';
    </script>

    <?php
  }
 } 
?>
        