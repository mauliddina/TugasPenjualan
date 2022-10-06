<?php
include("koneksi.php");

if(isset($_POST['simpan'])){;
    $kode =$_POST['id'];
    $kode =$_POST['nama'];
    $kode =$_POST['stok'];
    $kode =$_POST['harga'];

    $sql ="UPDATE barang SET nama='$nama', stok='$stok', harga='$harga' WHERE id=$kode";
    $query= mysqli_query($db, $sql);

    if($query){
        header('location:barang.php');
    }else{
        die ("gagal mengedit");
    }}
    else{
        die("akses dilarang");
    }
?>