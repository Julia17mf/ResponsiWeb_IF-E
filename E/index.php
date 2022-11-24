<?php

$msg = "";

if(isset($_GET['pesan'])) {
  if($_GET['pesan'] == "gagal") {
    $msg = "Login gagal. Username atau password salah.";
  } else if($_GET['pesan'] == "logout") {
    $msg = "Anda telah berhasil logout";
  } else if($_GET['pesan'] == "belum_login") {
    $msg = "Anda harus login untuk mengakses halaman admin";
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row p-5">
        <div class="col-4">
          <img src="img/popcorn.jpg" width="100%">
        </div>
        <div class="col-8 text-center mt-5">
          <h1 class="text-warning mb-3" style="font-size: 54pt;">LOGIN</h1>
          <p class="text-warning mb-5" style="font-weight: bold;"><?= $msg; ?></p>
          <div class="container p-5">
            <form method="POST" action="include/inc.login.php">
            <div class="row mb-3">
              <div class="col-4 text-warning" style="font-weight: bold;">Username</div>
              <div class="col-7">
                  <input type="text" name="username" class="form-control text-warning" style="border-color: yellow;">
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-4 text-warning" style="font-weight: bold;">Password</div>
              <div class="col-7">
                  <input type="password" name="password" class="form-control text-warning" style="border-color: yellow;">
              </div>
            </div>
            <div class="row">
              <div class="text-warning">
                <input type="submit" name="" value="LOGIN" class="btn btn-warning text-light">
              </div>
            </div>
            </form>           
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>