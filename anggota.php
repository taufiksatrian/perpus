<?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>

        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Anggota
                &nbsp; &nbsp; | &nbsp; &nbsp; 
                <a href="login.php?page=tambahanggota"><i  class="btn-sm btn-primary">Tambah Anggota</i> </a></h6>
              
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                        <th>No.</th>
                        <th>ID Anggota</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No. HP</th>
                        <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                            <?php
    $no = 1;
    $sql = $koneksi->query("select * from tbanggota");
    while($data = $sql->fetch_assoc()) {
      ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data["idanggota"]?></td>
      <td><?php echo $data["nama"]?></td>
      <td><?php echo $data["jeniskelamin"]?></td>
      <td><?php echo $data["alamat"]?></td>
      <td><?php echo $data["nohp"]?></td>
      <td>
        <a href="login.php?page=ubahanggota&idanggota=<?php echo $data['idanggota'] ?>" class="btn-sm btn-info">Edit</a>
        <!--<a href="kartuanggota.php?&idanggota=<?php echo $data['idanggota'] ?>" class="btn-sm btn-success">Cetak</a>-->
        <a onclick="return confirm('Ingin Menghapus data ?')" href="login.php?page=hapusanggota&idanggota=<?php echo $data['idanggota'] ?>" class="btn-danger btn-sm">Hapus</a>
      </td>
    </tr>
  <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          </div>