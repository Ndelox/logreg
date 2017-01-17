<?php
session_start();
if ( !isset($_SESSION['userid']) ) {
    header('location:login.php'); 
}
else { 
    $usr = $_SESSION['userid']; 
}
require_once('connect.php');
$query = mysql_query("SELECT * FROM anggota WHERE userid = '$usr'");
$hasil = mysql_fetch_array($query);
?>
 
<html>
<head>
    <title>Halaman Utama</title>
</head>
<body>
<?php 
echo "<h2>Selamat Datang, $usr</h2>"; 
echo "Nama Lengkap : " . $hasil['nama'] . "<br />";
echo "Email : " . $hasil['email'];
 ?>  
<a href="logout.php"><b>Logout</b></a>
</body>
</html>
