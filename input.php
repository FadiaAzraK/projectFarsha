<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <link rel="stylesheet" href="">
</head>
<body>
<center>
<h1> Input Data Donatur </h1>
<form action="index.php" method= "post">
    <table>
           
            <h3>Nama</h3>
            <input type="text" name="nama">

            <h3>ID</h3>
            <input type="text" name="id">

            <h3>Paket</h3>
            <input type="text" name="paket">

            <h3>Kategori</h3>
            <input type="text" name="kategori">

            <h3>Nominal/Barang</h3>
            <input type="text" name="barang">
            <td></td>
            <br>
            <br>
            <td><input type ="submit" value= "simpan" name= "proses"></td>
            
</tr>
</table>
</form>
</center>


</body>