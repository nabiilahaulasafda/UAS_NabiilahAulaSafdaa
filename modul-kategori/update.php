<?php

include("../koneksi.php");

$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

$sunting = "UPDATE kategoris SET id_kategoris='$id_kategoris', nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'";

$proses = mysqli_query($koneksi, $sunting);
// untuk mengalihkan halaman diphp
// header("location:index.php");
?>

<script>
    document.location = "index.php";
</script>