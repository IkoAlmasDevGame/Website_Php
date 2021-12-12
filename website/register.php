<?php
include 'koneksi.php';

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$jeniskelamin = $_POST['jeniskelamin'];
$datebirth = $_POST['datebirth'];

mysqli_query($host, "insert into register values ('', '$email', '$username', '$password', '$jeniskelamin', '$datebirth')");

header("location:index.php?pesan=input");
?>