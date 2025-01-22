<?php

include("../koneksi.php");

$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$kategori_id = $_POST['kategori_id'];
$gambar_produk = $_POST['gambar_produk'];

$sunting = "UPDATE produks SET nama_poduk='$nama_produk', harga='$harga',
kategori_id='$kategori_id', gambar_produk='$gambar_produk' WHERE id_produk='$id_produk'";

$proses = mysqli_query($koneksi, $sunting);
// untuk mengalihkan halaman diphp
// header("location:index.php");
?>

<script>
    document.location = "index.php";
</script>