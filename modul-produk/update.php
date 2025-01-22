<?php

include("../koneksi.php");

$id = $_POST['id'];
$nama_kategori = $_POST['nama_kategori'];

$sunting = "UPDATE kategoris SET nama_kategori='$nama_kategori' WHERE id='$id'";

$proses = mysqli_query($koneksi, $sunting);
// untuk mengalihkan halaman diphp
// header("location:index.php");
?>

<script>
    document.location = "index.php";
</script>