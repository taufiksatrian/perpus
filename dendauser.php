<?php
  session_start();
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>


        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Info Denda</h6>
            </div>
            <div class="card-body">
			
			<?php
    $no = 1;
    $sql = $koneksi->query("select * from tbtransaksi where idanggota='$id' AND status='pinjam' ");
    while($data = $sql->fetch_assoc()) {
      ?>
			
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                  
                    <tr>
                      <tr>
                        
                        <td>ID Anggota</td>
						<td><?php echo $data["idanggota"]?></td>
						
						</tr>
						<tr>
                        <td>Nama Anggota</td>
						<td><?php echo $data["nama"]?></td>
						</tr>
						<tr>
                        <td>Judul Buku</td>
						<td><?php echo $data["judulbuku"]?></td>
                        </tr>
						<tr>
                        <td>Denda</td>
						
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
						
                        </tr>
                      </tr>
                  
                  
    
    
	  
		<tr align="center">
        <td colspan="2">
		<a href="metodebayar.php" class="btn-sm btn-success"> Bayar Sekarang</a>
       </td>
	   
		</tr>
		</table>
  <?php }?>
                  
                
              </div>
            </div>
          </div>
        </div>
