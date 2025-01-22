<?php
// 1. koneksi ke database
include("../koneksi.php");

// 2. ambil id yang akan disunting
$id_kategori = $_GET['id_kategori'];

// 3. mengambil semua record data berdasarkan id yang dipilih
$ambil = "SELECT * FROM kategoris WHERE id_kategori='$id_kategori'";

// 4. menjalankan query 
$edit = mysqli_query($koneksi, $ambil);

// 5. memisahkan record data berdasarkan kolom/field
$data = mysqli_fetch_array($edit);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kategori produk </title>
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
                        <h3 class="float-start"> Form Edit Kategori Produk </h3>
                    </div>

                    <div class="card-body">
                        <form action="update.php" method="POST">
                            <!-- jika tdk ada uniq di database -->
                            <input type="hidden" name="id_kategori" value="<?= $data['id_kategori'] ?>">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> ID Kategori </label>
                                <input type="text" value="<?= $data['id_kategori'] ?>" name="id_kategori" class="form-control" id="">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"> Nama Kategori</label>
                                <input type="text" value="<?= $data['nama_kategori'] ?>" name="nama_kategori" class="form-control" id="">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
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