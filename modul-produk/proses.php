<?php

include("../koneksi.php");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$jur = $_POST['jur'];
$dos = $_POST['dos'];

$nama_foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];

$simpan = "INSERT INTO mahasiswas (nim,nama,tempat,tgl,alamat,email,jk,jurusans_id,dosens_id,foto) 
VALUES ('$nim','$nama','$tempat','$tanggal','$alamat','$email','$jk','$jur','$dos','$nama_foto')";

$proses = mysqli_query($koneksi, $simpan);

// untuk mengalihkan halaman diphp
// header("location:index.php");
?>

<script>
    document.location = "index.php";
</script>