<?php
  session_start();
  $koneksi = new mysqli ("localhost","root","","dbpus");

?>
  <?php
    $query1 = $koneksi->query("SELECT sum(jumlah) as Total FROM tbbuku");
    $query2 = $koneksi->query("SELECT count(idanggota) as Total1 FROM tbanggota");
    $query3 = $koneksi->query("SELECT COUNT(npm) as Total2 FROM tbpengunjung where asalprodi LIKE 'Informatika'");
    $query4 = $koneksi->query("SELECT COUNT(npm) as Total3 FROM tbpengunjung where asalprodi LIKE 'Teknik Sipil'");
    $query5 = $koneksi->query("SELECT COUNT(npm) as Total4 FROM tbpengunjung where asalprodi LIKE 'Teknik Mesin'");
    $query6 = $koneksi->query("SELECT COUNT(npm) as Total5 FROM tbpengunjung where asalprodi LIKE 'Teknik Elektro'");
    $query7 = $koneksi->query("SELECT COUNT(npm) as Total6 FROM tbpengunjung where asalprodi LIKE 'Arsitektur'");
    $query8 = $koneksi->query("SELECT COUNT(npm) as Total7 FROM tbpengunjung where asalprodi LIKE 'Sistem Informasi'");
    $query9 = $koneksi->query("SELECT COUNT(npm) as Total8 FROM tbpengunjung ");
    $query10 = $koneksi->query("SELECT count(idtransaksi) as Total9 FROM tbtransaksi");

    $jml_buku = mysqli_fetch_array($query1);
    $jml_agt = mysqli_fetch_array($query2);
    $jml_pengunjung = mysqli_fetch_array($query3);
    $jml_pengunjung1 = mysqli_fetch_array($query4);
    $jml_pengunjung2 = mysqli_fetch_array($query5);
    $jml_pengunjung3 = mysqli_fetch_array($query6);
    $jml_pengunjung4 = mysqli_fetch_array($query7);
    $jml_pengunjung5 = mysqli_fetch_array($query8);
    $jml_pengunjung6 = mysqli_fetch_array($query9);
    $jml_transaksi = mysqli_fetch_array($query10);
  ?>


        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <!-- DataTales Example -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Buku</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jml_buku["Total"]; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Anggota</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jml_agt["Total1"]; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Transaksi</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $jml_transaksi["Total9"] ;?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Pengujung</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jml_pengunjung6["Total8"]; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4 sm-6">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
				</div>
				
                <div class="card-body" >
                  <br> <br> 
				  <div class ="datang">
				  <center>
				  <img class="img-profile rounded-circle" width="250px" border="2px" src="fp.jpg"/>
				  
				  <h3 class="m-0 font-weight-bold text-primary" ><u>Selamat Datang Admin</u></h3>
				  
				  <script type='text/javascript'>

var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];

var date = new Date();

var day = date.getDate();

var month = date.getMonth();

var thisDay = date.getDay(),

    thisDay = myDays[thisDay];

var yy = date.getYear();

var year = (yy < 1000) ? yy + 1900 : yy;

document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);

</script>
				  <br> <br> 
				  
				  </center>
				  <div class="card-header py-3">
				</div>
				  
                </div>
				
              </div>

              

              <!-- Color System -->
              <div class="row">
              </div>

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->

            </div>
          </div>

        </div>

        <!-- /.container-fluid -->

 