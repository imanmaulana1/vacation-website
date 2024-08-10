<?php

$host = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'db_umkm_pariwisata';

$conn = mysqli_connect($host, $username, $password, $databaseName);

if (!$conn) {
    echo "Connection fail:" . mysqli_connect_error();
}
