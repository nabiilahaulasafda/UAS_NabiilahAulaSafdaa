<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data produk </title>
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
                        <h3 class="float-start"> Form Data Produk </h3>
                    </div>

                    <div class="card-body">
                        <form action="proses.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"> Nama Produk</label>
                                <input type="text" name="nama_produk" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"> Harga</label>
                                <input type="text" name="harga" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"> Kategori </label>
                                <select name="kategori_id" class="form-control" id="">
                                    <option value="">-Pilih Kategori-</option>
                                    <?php
                                    include('../koneksi.php');
                                    $sql_kat = " SELECT * FROM kategoris";
                                    $qry_kat = mysqli_query($koneksi, $sql_kat);
                                    foreach ($qry_kat as $data_kat) {
                                    ?>
                                        <option value="<?= $data_kat['id'] ?>"><?= $data_kat['id_kategori'] ?></option>

                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"> Gambar Produk</label>
                                <input type="file" name="gambar_produk" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
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