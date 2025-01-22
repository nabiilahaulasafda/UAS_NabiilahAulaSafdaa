<?php

include("../koneksi.php");

$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

$simpan = "INSERT INTO kategoris (id_kategori,nama_kategori) VALUES ('$id_kategori','$nama_kategori')";

$proses = mysqli_query($koneksi, $simpan);

// untuk mengalihkan halaman diphp
// header("location:index.php");
?>

<script>
  document.location = "index.php";
</script>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>data kategori produk </title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/all.css">
</head>

<body>
  <?php include_once('../navbar.php') ?>

  <div class="container">
    <div class="row mt-5">
      <div class="col-8 m-auto">
        <div class="card">
          <div class="card-header bg-dark-subtle">
            <h3 class="float-start"> Form Kategori Produk</h3>
          </div>

          <div class="card-body">
            <div class="card-body">
              <table class="table">

                <tbody>
                  <tr>
                    <td scope="row"> ID Kategori</td>
                    <th>: <?= $id_kategori ?> </th>
                  </tr>
                  <tr>
                    <td scope="row"> Nama Kategori</td>
                    <th>: <?= $nama_kategori ?> </th>
                  </tr>

                </tbody>

              </table>
              <a href="form.php" class="btn btn-warning btn-sm">Kembali</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="../js/bootstrap.js"></script>
  <script src="../js/bootstrap.bundle.js"></script>
  <script src="../js/all.js"></script>
</body>

</html>