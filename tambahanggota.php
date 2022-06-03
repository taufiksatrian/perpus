 <?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>
        <div class="container-fluid">

          

          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-6">
                      
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Anggota</h6>
              </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <form method="POST">
                <div class="form-group">
                  <label class="col-sm-3">ID Anggota</label>
                  <input type="text" name="id_anggota" class="form-control" required="required">
                </div>

                <div class="form-group">
                  <label class="col-sm-3">Nama Anggota</label>
                  <input type="text" name="nm_anggota" class="form-control" required="required">
                </div>

                <div class="form-group">
                  <label class="col-sm-3">Jenis Kelamin</label>
                  <select name="jk" class="form-control" >
                    <option class="">-Pilih Jenis Kelamin-</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                  
                  <div class="form-group">
                  <label class="col-sm-3">Alamat</label>
                  <input type="text" name="alamat" class="form-control" required="required">
                </div>

                <div class="form-group">
                  <label class="col-sm-3">No. HP</label>
                  <input type="text" name="nohp" class="form-control" required="required">
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
$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nm_anggota'];
$jk= $_POST['jk'];
$alamat= $_POST['alamat'];
$nohp = $_POST['nohp'];
$simpan = $_POST['simpan'];
if ($simpan) {
  $sql = $koneksi->query("INSERT INTO tbanggota (idanggota, nama, jeniskelamin, alamat, nohp) values ('$id_anggota','$nama','$jk','$alamat','$nohp')");
  if($sql){ 
    ?>
    <script type="text/javascript"">
      alert("Data Berhasil ditambahkan");
      window.location.href='?page=anggota';
    </script>

    <?php
  }
 } 
?>
        