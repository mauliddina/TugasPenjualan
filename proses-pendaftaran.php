<?php 

include("koneksi.php");

if(isset($_POST['daftar'])){

	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah_asal'];

	$sql = "INSERT INTO calon_siswaa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE('$nama','$alamat','$jk','$agama','$sekolah')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
    	header('location:index.php?status=sukses');
    }else{
    	header('location:index.php?status=gagal');
    }
	
 } else{
 	die("Akses dilarang...");
 }
 ?>