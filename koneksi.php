<?php
$host= "localhost";
$user= "id20939658_root";
$pass= "Masjidwikrama1_";
$db= "id20939658_masjidwebsite";
$koneksi= mysqli_connect($host, $user, $pass, $db);

if(!$koneksi){
    die ("koneksi database gagal: ".mysqli_connect_error());
} 
?>