<?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Peminjaman &nbsp; &nbsp; | &nbsp; &nbsp; 
              <a href="login.php?page=tambahpeminjam"><i  class="btn-sm btn-primary">Tambah Peminjam</i> </a></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <tr>
                        <th>No.</th>
                        <th>ID Anggota</th>
                        <th>Nama Anggota</th>
                        <th>Id Buku</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Denda</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </tr>
                  </thead>
                  <tbody>
    <?php
    $no = 1;
    $sql = $koneksi->query("select * from tbtransaksi where status='pinjam' order by tglpinjam asc");
    while($data = $sql->fetch_assoc()) {
      ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data["idanggota"]?></td>
      <td><?php echo $data["nama"]?></td>
      <td><?php echo $data["idbuku"]?></td>
      <td><?php echo $data["judulbuku"]?></td>
      <td><?=date('d F Y', strtotime($data["tglpinjam"])); ?></td>
      <td><?=date('d F Y', strtotime($data["tglkembali"])); ?></td>
      <td>
        <?php
          $denda = 500;

          $tgldateline = $data['tglkembali'];
          $tglkembali = date('d-m-Y');

          $lambat = denda($tgldateline,$tglkembali);
          $denda1 = $lambat*$denda;

          if ($lambat>0) {
            echo " <font color='red'> $lambat hari<br>( $denda1 )</font> ";
           } else {
            echo $lambat ."Hari";
           } 

        ?>
       </td>
      <td><?php echo $data["status"]?></td>
      <td>

        <a href="login.php?page=ubahpeminjam&idtransaksi=<?php echo $data['idtransaksi'] ?>&judulbuku=<?php echo $data['judulbuku'] ;?>&denda=<?php echo $data['denda1'] ;?>" class="btn-sm btn-info" class="fa fa-edit">Kembali</a>
      </td>
    </tr>
  <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>