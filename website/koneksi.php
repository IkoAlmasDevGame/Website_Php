<?php 
$host = mysqli_connect("localhost","root" ,"", "website");
 
if($host){
	echo "koneksi host berhasil.<br/>";
}else{
	echo "koneksi gagal.<br/>";
}
?>