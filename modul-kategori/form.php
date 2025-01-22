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
            <h3 class="float-start"> Form Kategori Produk </h3>
          </div>

          <div class="card-body">
            <form action="proses.php" method="POST">

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" id="">
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