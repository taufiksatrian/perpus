<?php
  session_start();
  error_reporting();
  include "fungsi.php";

  $koneksi = new mysqli ("localhost","root","","dbpus");
?>
  <?php

    if (isset($_GET['id'])) { }
    $id = $_SESSION['id'];
    $username = $_SESSION['username'];

    $query1 = $koneksi->query("SELECT sum(jumlah) as Total FROM tbbuku");
    $query2 = $koneksi->query("SELECT count(idanggota) as Total1 FROM tbanggota");

    $jml_buku = mysqli_fetch_array($query1);
    $jml_agt = mysqli_fetch_array($query2);
  ?>
  
  <?php
    $no = 1;
    $sql = $koneksi->query("select * from tbtransaksi where idanggota='$id' AND status='pinjam' ");
    while($data = $sql->fetch_assoc()) {
      ?>






  <title>Bayar Denda</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">



<div id="page-top">

 

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->

           


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            
          </ul>

        </nav>
        <!-- End of Topbar -->
<body onload="start_timer()">
        <!-- Begin Page Content -->
		<br><br>
        <div class="container-fluid">

          
		  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" align="center"> Metode Pembayaran DANA</h6>
            </div>
            <div class="card-body">
			
			
		<center>
		<img width="200px" src="dana.png"/>
		
		<?php
          $denda = 500;

          $tgldateline = $data['tglkembali'];
          $tglkembali = date('d-m-Y');

          $lambat = denda($tgldateline,$tglkembali);
          $denda1 = $lambat*$denda;
		  ?>
		
		<h5 class="m-0 font-weight-bold text-primary" > Silahkan Bayar Sebesar "Rp <?php echo $denda1; ?>" melalui aplikasi DANA 
		<br>Ke nomor <b>081765432897</b> a/n ADMIN PERPUSTAKAAN Sebelum Waktu Habis</h5>
        <br>
		<span id="time" align="center">
        00:05:00
      </span>
		</center>
		<h6 class="table table-bordered">
		<h6 class="m-0 font-weight-bold text-primary"> <b>Tata Cara Pembayaran</h6> <br>
		
		1. Buka aplikasi DANA. <br>
		2. Tap Kirim. <br>
		3. Masukkan nomor tujuan yaitu <b>081765432897</b> <br>
		4. Masukkan nominal Rp <?php echo $denda1; ?> . <br>
		5. Pilih metode pembayaran menggunakan saldo DANA. <br>
		6. Pastikan nomor dan jumlah transfer sudah sesuai. <br>
		7. Tap Bayar. </h6>
       <hr>
	<style>	
    #time{
    
      font-size: 190%;
      font-weight: bold;
	 
    }
  </style>	
 
   


		

    <?php }?>              
                
              </div>
            </div>
			
			<a href="login3.php?page=dendauser" class="btn-sm btn-success"> Kembali </a>
			
          </div>
        </div>

		  
		  
		  
		  
		  
		  
		  
		  
        </div>
        
  </div>
  
  <script type="text/javascript">
    function start_timer(){
      var timer = document.getElementById("time").innerHTML;
      var arr = timer.split(":");
      var hour = arr[0];
      var min = arr[1];
      var sec = arr[2];
      if(sec == 0) {
        if(min == 0) {
          if(hour == 0) {
            alert("Waktu Habis");
            
            window.location.href="metodebayar.php";
          }
          hour--;
          min = 60;
          if(hour < 10) hour = "0" + hour;
        }
        min--;
        if(min < 10) min = "0" + min;
        sec = 59;
      }
      else sec--;
      if (sec < 10) sec == "0" + sec;

      document.getElementById("time").innerHTML = hour + ":" + min + ":" + sec;
      setTimeout(start_timer, 1000);
    }
  </script>		

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>




