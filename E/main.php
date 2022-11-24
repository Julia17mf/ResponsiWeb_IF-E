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
    <div class="container mt-5">
      <div class="row p-5">
        <div class="col-8 text-center mt-5">
          <h1 class="mb-3" style="font-size: 54pt; color: #64aeeb;">Movie List</h1>
          <a href="add.php" class="btn btn-outline-primary">Add Movie List</a>
          <a href="include/inc.logout.php" class="btn btn-outline-warning">Logout</a>
          <div class="container p-5">
            <table class="table table-bordered border-primary" style="color: #64aeeb;">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Title</th>
                  <th scope="col">Genre</th>
                  <th scope="col" colspan="2">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include 'include/inc.koneksi.php';

                $sql    = "SELECT * FROM movie INNER JOIN genre ON movie.genre=genre.id_genre";
                $query  = mysqli_query($connect, $sql);

                $count  = 0;

                while ($data = mysqli_fetch_array($query)) {
                  $count++;
                ?>
                <tr>
                  <th scope="row"><?= $count; ?></th>
                  <td><?= $data['title']; ?></td>
                  <td><?= $data['genre']; ?></td>
                  <td><a href="edit.php?id=<?= $data['id_movie']; ?>" class="btn btn-outline-primary">Edit</a></td>
                  <td><a href="include/inc.delete.php?id=<?= $data['id_movie']; ?>" class="btn btn-outline-warning">Delete</a></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-4">
          <img src="img/minion.jpg" width="100%">
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>