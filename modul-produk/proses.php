<?php

include("../koneksi.php");

$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$kategori_id = $_POST['kategori_id'];

$nama_gambar = $_FILES['gambar_produk']['name'];
$tmp_gambar = $_FILES['gambar_produk']['tmp_name'];

$simpan = "INSERT INTO produks (nama_produk,harga,kategori_id,gambar_produk) VALUES ('$nama_produk','$harga','$kategori_id','$gambar_produk')";

$proses = mysqli_query($koneksi, $simpan);

?>

<script>
    document.location = "index.php";
</script>