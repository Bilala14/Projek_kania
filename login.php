<?php
if (isset($_POST['tombol'])){
    #1.koneksi database
    include_once("koneksi.php");

    $email =$_POST['email'];
    $pass =$_POST['password'];

    $sql_cek = "SELECT * FROM users WHERE email='$email' AND password='$pass'";

    $sql_cek = mysqli_query($koneksi,$sql_cek);

    $cek = mysqli_num_rows($sql_cek);

    #6. Buatkan IF jika loginnya berhasil atua gagal
    if($cek > 0){
        // login berhasil
    }else{
        // login gagal
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project IS62</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>


<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header text-center">
                <h3>Sistem Informasi Mahasiswa</h3>
            </div>
            <div class="card-body">
            <form method="post" action="login.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" name="cek" value="yes" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
  </div>
  <button type="submit" name="tombol" class="btn btn-primary">Login</button>
</form>
            </div>
            </div>
        </div>
    </div>
</div>

    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>