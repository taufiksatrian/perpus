<?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>
        <div class="container-fluid">
			
          <div class="card shadow mb-4">
		
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Buku
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <tr>
                        <th>No.</th>
                        <th>ISBN</th>
                        <th>Judul Buku</th>
                        <th>Kategori</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Jumlah</th>
                        <!-- <th>Aksi</th> -->
                      </tr>
                     </tr> 
                  </thead>
                  <tbody>
                        <?php
                $query1 = $koneksi->query("SELECT jumlah FROM tbbuku");

                $jml_buku = mysqli_num_rows($query1);

                ?>
    <?php
    $no = 1;
    $sql = $koneksi->query("select * from tbbuku");
    while($data = $sql->fetch_assoc()) {
      ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data["idbuku"]?></td>
      <td><?php echo $data["judulbuku"]?></td>
      <td><?php echo $data["kategori"]?></td>
      <td><?php echo $data["pengarang"]?></td>
      <td><?php echo $data["penerbit"]?></td>
      <td><?php echo $data["jumlah"]?></td>
      <!-- <td>
        <a href="login.php?page=ubahbuku&idbuku=<?php echo $data['idbuku'] ?>" class="btn-sm btn-info">Edit</a>
        <a href="barcode.php?&idbuku=<?php echo $data['idbuku'] ?>" class="btn-sm btn-success">Barcode</a>
        <a onclick="return confirm('Ingin Menghapus data ?')" href="login.php?page=hapusbuku&idbuku=<?php echo $data['idbuku'] ?>" class="btn-danger btn-sm">Hapus</a>
      </td> -->
    </tr> 
  <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
		  
        </div>