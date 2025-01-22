<?php

include("../koneksi.php");

$id_produk = $_GET['xyz'];

$hapus = "DELETE FROM kategoris WHERE nama_produk='$id_produk' ";

$proses = mysqli_query($koneksi, $hapus);

// untuk mengalihkan halaman diphp
// header("location:index.php");
?>

<script>
    document.location = "index.php";
</script>