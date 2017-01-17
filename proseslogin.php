<?php
session_start();
require_once ('connect.php');
$user = $_POST['userid'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM anggota WHERE userid = '$user'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if ( $jumlah == 0 ) {
    echo 'User ID Belum Terdaftar!<br/>';
    echo '<a href="login.php">&laquo; Back</a>';
} else {
    if ( $pass <> $hasil['password'] ) {
        echo 'Password Salah!<br/>';
        echo '<a href="login.php">&laquo; Back</a>';
    } else {
        $_SESSION['userid'] = $user;
        header('location:index.php');
    }
}
?>
