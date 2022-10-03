<?php
     $koneksi = mysqli_connect("localhost" , "root" , "" , "db-Pendaftaran_siswa");

     if(mysqli_connect_errno()){
         echo "koneksi gagal: ".mysqlierror();    //cek koneksi ke database
     }else{
         echo "";
     }
     ?>