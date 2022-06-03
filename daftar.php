<?php
  ob_start();
  session_start();
  error_reporting(0);
  include "fungsi.php";
  include "vendor/autoload.php";
  $koneksi = new mysqli ("localhost","root","","dbpus");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daftar | Sistem Informasi Perpustakaan </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
		<div class="card-header py-3">
				</div>
          <div class="card-body p-8">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-3 d-none d-lg-block"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">REGISTER</h1>
                  </div>

                  <form method="POST">

                    <div class="form-group">
                      <input type="text" name="idanggota" class="form-control form-control-user" placeholder="Masukan Id Anggota" required>
                    </div>

                    <div class="form-group">
                      <input type="text" name="nmanggota" class="form-control form-control-user" placeholder="Masukan Nama Anggota" required>
                    </div>

                    <div class="form-group">
	                  <select name="jk" class="form-control form-control-user" required>
	                    <option class=""placeholder="Masukan Nama Anggota">-Pilih Jenis Kelamin-</option>
	                    <option value="Laki-Laki">Laki-Laki</option>
	                    <option value="Perempuan">Perempuan</option>
	                  </select>
                    </div>

                    <div class="form-group">
                      <input type="text" name="alamat" class="form-control form-control-user" placeholder="Masukan Alamat Anggota" required>
                    </div>

                    <div class="form-group">
                      <input type="text" name="nohp" class="form-control form-control-user" placeholder="Masukan Nomor HP" required>
                    </div>

                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
                    <hr>
                    <input type="submit" name="simpan" value="Register Now" class="btn btn-primary btn-user btn-block"><br>
                    <div class="text-center">
                        <a class="small" href="index.php">Back to Login!</a>
                    </div>
                  </form>


                  <div class="text-center">
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>


<?php
  $idanggota = $_POST['idanggota'];
  $nama = $_POST['nmanggota'];
  $jk= $_POST['jk'];
  $alamat= $_POST['alamat'];
  $nohp = $_POST['nohp'];
  $password = $_POST['password'];
  $simpan = $_POST['simpan'];

  if ($simpan) {
    $sql = $koneksi->query("INSERT INTO tbanggota (idanggota, nama, jeniskelamin, alamat, nohp, password) values ('$idanggota','$nama','$jk','$alamat','$nohp', '$password')");
    if($sql){ 

      ?>
      <script type="text/javascript"">
        alert("Data Berhasil ditambahkan");
              header("location:index.php");
      </script>

      <?php
    }

   } 
?>
        