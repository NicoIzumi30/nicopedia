<?php 
 $title =  "Hapus Akun";
require "includes/header.php";

$id = $_GET['id'];

$del = "DELETE FROM akun WHERE id_akun = '$id'";
$query = mysqli_query($conn, $del);

if ($query) {
	echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/akun.php'/>";
}
 ?>