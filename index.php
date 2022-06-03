
<?php
  ob_start();
  session_start();
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

  <title>Login | Sistem Informasi Perpustakaan </title>

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
                    <h1 class="h4 text-gray-900 mb-4">SISTEM INFORMASI</h1>
                    <h1 class="h4 text-gray-900 mb-4">PERPUSTAKAAN</h1>
                  </div>
                  <form class="user" method="POST">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan ID Anggota..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                    </div>
                    <hr>
                    <input type="submit" name="login" value="Login" class="btn btn-primary btn-user btn-block"><br>
                    <div class="text-center">
                        <a class="small" href="daftar.php">Create an Account!</a>
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
  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $koneksi->query("SELECT * FROM tbuser WHERE username='$username' AND password='$password'");

    $data = $sql->fetch_assoc();

    $ketemu = $sql->num_rows;

    $sql2 = $koneksi->query("SELECT * FROM tbanggota WHERE idanggota='$username' AND password='$password' ");
    $jml2 = mysqli_num_rows($sql2);
    $d2 = mysqli_fetch_array($sql2);

    if ($ketemu>=1) {
      session_start();

      if ($data['level'] == "admin") {

        $_SESSION['admin'] == $data['id'];
        header("location:login.php?page=dashboard");
        
      }else if ($data['level'] == "petugas") {

        $_SESSION['petugas'] == $data['id'];
        header("location:login2.php?page=dashboard");
      }else if ($data['level'] == "user") {

        $_SESSION['user'] == $data['id'];
        header("location:login3.php?page=peminjamanuser");

      }else if ($data['level'] == "tamu") {

        $_SESSION['tamu'] == $data['id'];
        header("location:login4.php?page=bukutamu");

      }

    }else if($jml2>=1) {
      session_start();
      $_SESSION['login'] = TRUE;
      $_SESSION['id'] = $d2['idanggota'];
      $_SESSION['username'] = $d2['idanggota'];

      header("location:login3.php?page=bukuuser");
    }else{
        ?>
        <script type="text/javascript">
          alert("Login Gagal! Silahkan Cek Username atau Password Anda !");
        </script>
        <?php 
      }
  }
?>