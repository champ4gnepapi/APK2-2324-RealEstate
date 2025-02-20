<?php
//set waktu
date_default_timezone_set('Asia/Jakarta');
$tgl = date('y-m-d H:i:s');

//Koneksi Data Base
$HOASTNAME = "localhost";
$DATABASE = "db_realestate";
$USERNAME = "root";
$PASSWORD = "";

$KONEKSI = mysqli_connect($HOASTNAME, $USERNAME, $PASSWORD, $DATABASE);

if (!$KONEKSI) {
    die("KONEKSI ERRORR" . mysqli_connect_error($KONEKSI));
}

