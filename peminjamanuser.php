<?php
  session_start();
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>


        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Info Peminjaman</h6>
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
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Telat (Denda)</th>
                        <th>Status</th>
                      </tr>
                    </tr>
                  </thead>
                  <tbody>
    <?php
    $no = 1;
    $sql = $koneksi->query("select * from tbtransaksi where idanggota='$id' AND status='pinjam' ");
    while($data = $sql->fetch_assoc()) {
      ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data["idanggota"]?></td>
      <td><?php echo $data["nama"]?></td>
      <td><?php echo $data["judulbuku"]?></td>
      <td><?php echo $data["tglpinjam"]?></td>
      <td><?php echo $data["tglkembali"]?></td>
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
      <td >

        

        <span class="btn-sm btn-info"><?php echo $data["status"]?></span></td>
    </tr>
	

	
  <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
