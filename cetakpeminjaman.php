<?php
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>            
        <div class="container-fluid" >
          <div class="card shadow mb-4">
            <form method="POST" target="blank" action="cetakpeminjaman2.php">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Cetak </h6>
                </div>
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col">
                        <label>Dari Tanggal</label>
                        <input type="date" name="dari" class="form-control">                    
                    </div>
                    <div class="form-group col">
                        <label>Hingga Tanggal</label>
                        <input type="date" name="sampai" class="form-control">                    
                    </div>
                    <div class="form-group col">
                        <br>
                        <h5></h5>
                        <input type="submit" name="cetak" value="Cetak" class="btn btn-primary">                  
                    </div>
                          

                  </div>
                </div>  
            </form>

              </div>
            </div>
