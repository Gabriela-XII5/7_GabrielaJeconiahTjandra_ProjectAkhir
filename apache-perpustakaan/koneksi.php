<?php

$koneksi = mysqli_connect("localhost", "root", "", "e-library");

//if (!$koneksi) { 
   // die("koneksi gagal".mysqli_connect_error()); }

if(mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>