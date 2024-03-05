<?php

$server = "localhost";
$user = "id21961488_fachri_project";
$password = "PSM07FACHRi#$";
$nama_database = "id21961488_pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}