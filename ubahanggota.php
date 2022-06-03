 <?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>
<?php
 $idanggota = $_GET['idanggota'];
 $sql = $koneksi->query("SELECT * FROM tbanggota where idanggota='$idanggota'");
 
 $tampil = $sql->fetch_assoc();
?>
        <div class="container-fluid">

          

          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-6">
                      
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ubah Data Anggota</h6>
              </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <form method="POST">
                <div class="form-group">
                  <label class="col-sm-3">ID Anggota</label>
                  <input type="text" name="id_anggota" class="form-control" value="<?php echo $tampil ['idanggota']; ?>" readonly>
                </div>

                <div class="form-group">
                  <label class="col-sm-3">Nama Anggota</label>
                  <input type="text" name="nm_anggota" class="form-control" value="<?php echo $tampil ['nama'];?>">
                </div>

                <div class="form-group">
                  <label class="col-sm-3">Jenis Kelamin</label>
                  <select name="jk" class="form-control" >
                    <option class="">-Pilih Jenis Kelamin-</option>
                    <option value="Laki-Laki" <?php if ($tampil['jeniskelamin']=='Laki-Laki') {echo "selected";}?>>Laki-Laki</option>
                    <option value="Perempuan" <?php if ($tampil['jeniskelamin']=='Perempuan') {echo "selected";}?>>Perempuan</option>
                  </select>
                </div>
                  
                  <div class="form-group">
                  <label class="col-sm-3">Alamat</label>
                  <input type="text" name="alamat" class="form-control" value="<?php echo $tampil ['alamat'];?>">
                </div>

                <div class="form-group">
                  <label class="col-sm-3">No. HP</label>
                  <input type="text" name="nohp" class="form-control" value="<?php echo $tampil ['nohp'];?>">
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
  $sql = $koneksi->query("UPDATE tbanggota SET idanggota='$id_anggota', nama='$nama', jeniskelamin='$jk', alamat='$alamat', nohp='$nohp' WHERE idanggota='$idanggota'");
  if($sql){ 
    ?>
    <script type="text/javascript"">
      alert("Data Berhasil di Ubah");
      window.location.href='?page=anggota';
    </script>

    <?php
  }
 } 
?>
        