<?php

session_start();
if(empty($_SESSION['username'])) {
  header("location: index.php?pesan=belum_login");
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
    <div class="container mt-5 text-center">
      <div class="p-5">
        <h1 class="mb-3" style="font-size: 54pt; color: #64aeeb;">Update Movie List</h1>
        <a href="main.php" class="btn btn-outline-primary mx-2">Home</a>
        <a href="include/inc.logout.php" class="btn btn-outline-warning mx-2">Logout</a>
        <div class="container p-5">
          <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
              <form method="POST" action="include/inc.edit.php">
                <?php
                include('include/inc.koneksi.php');

                $id  = $_GET['id'];

                $sql      = "SELECT * FROM movie WHERE id_movie='$id'";
                $query    = mysqli_query($connect, $sql);

                while($data = mysqli_fetch_array($query)) {
                ?>
                <input type="hidden" name="id" value="<?= $data['id_movie']; ?>">
                <div class="row mb-3">
                  <div class="col-4" style="font-weight: bold; color: #64aeeb;">Title</div>
                  <div class="col-7">
                    <input type="text" name="title" class="form-control text-primary border-info" value="<?= $data['title']; ?>">
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-4" style="font-weight: bold; color: #64aeeb;">Genre</div>
                  <div class="col-7">
                    <select class="form-select border-info text-primary" name="genre">
                      <?php
                      include 'include/inc.koneksi.php';

                      $sql2    = "SELECT * FROM genre ORDER BY genre";
                      $query2  = mysqli_query($connect, $sql2);

                      while ($data2 = mysqli_fetch_array($query2)) {
                      ?>
                      <option value="<?= $data2['id_genre']; ?>" <?php if($data2['id_genre']==$data['genre']) { echo "selected"; } ?>>
                        <?= $data2['genre']; ?>
                      </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div>
                    <input type="submit" name="" value="Update Movie" class="btn text-light" style="background-color: #64aeeb;">
                  </div>
                </div>
              <?php } ?>
              </form>
            </div>
            <div class="col-3"></div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>