 <?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>
        <div class="container-fluid">

          

          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-6">
                      
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Buku</h6>
              </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <form method="POST">
                <div class="form-group">
                  <label class="col-sm-3">Kode Buku</label>
                  <input type="text" name="isbn" class="form-control" required="required">
                </div>

                <div class="form-group">
                  <label class="col-sm-3">Judul Buku</label>
                  <input type="text" name="judul_buku" class="form-control" required="required">
                </div>

                <div class="form-group">
                  <label class="col-sm-3">Jenis Buku</label>
                  <select name="kategori" class="form-control" >
                    <option class="">-Pilih Jenis-</option>
                    <option value="Tutorial">Tutorial</option>
                    <option value="Cerpen">Cerpen</option>
                    <option value="Novel">Novel</option>
                    <option value="Modul">Modul</option>
                    <option value="Ilmu Komputer">Ilmu Komputer</option>
                    <option value="Karya Sastra">Karya Sastra</option>
                  </select>
                </div>

                  <div class="form-group">
                  <label class="col-sm-3">Penulis</label>
                  <input id="skills" type="text" name="pengarang" class="form-control" required="required">
                </div>

                <div class="form-group">
                  <label class="col-sm-3">Penerbit</label>
                  <input type="text" name="penerbit" class="form-control" required="required">
                </div>

                <div class="form-group">
                  <label class="col-sm-3">Jumlah Buku</label>
                  <input type="number" name="jumlah" class="form-control" required="required">
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
  $sql = $koneksi->query("INSERT INTO tbbuku (idbuku, judulbuku, kategori, pengarang, penerbit, jumlah) values ('$isbn','$judul_buku','$kategori','$pengarang','$penerbit','$jumlah')");
  if($sql){ 
    ?>
    <script type="text/javascript"">
      alert("Data Berhasil ditambahkan");
      window.location.href='?page=buku';
    </script>

    <?php
  }
 } 
?>
        