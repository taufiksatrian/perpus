<?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
  $tglpinjam = date("Y-m-d");
?>
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengembalian</h6>
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
                        <th>Status</th>
                      </tr>
                    </tr>
                  </thead>
                  <tbody>
    <?php
    $no = 1;
    $sql = $koneksi->query("select * from tbtransaksi where status='kembali' order by tglkembali asc");
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
      <td><?php echo $data["status"]?></td>
    </tr>
  <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>