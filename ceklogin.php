<?php
session_start();
// jika tidak ada $_session dan $_cookie maka
// alihkan ke halaman login
if (!isset($_SESSION['sid']) and !isset($_COOKIE['cid'])) {
    header("location:login.php");
}
