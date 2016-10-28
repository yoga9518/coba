<?php

//Koneksi ke database

$server = "localhost";
$user = "root";
$pass = "";
$db = "lesson";

$koneksi = mysql_connect($server,$user,$pass,$db);

if($koneksi)
{
    echo "Koneksi berhasil";
}
else{
    echo "Koneksi gagal";
}