<?php

include("../koneksi.php");

$id = $_POST['id'];
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];
$hp = $_POST['hp'];

$sunting = "UPDATE dosens SET nidn='$nidn', nama='$nama', jabatan='$jabatan',
email='$email', hp='$hp' WHERE id='$id'";

$proses = mysqli_query($koneksi, $sunting);
// untuk mengalihkan halaman diphp
// header("location:index.php");
?>

<script>
    document.location = "index.php";
</script>