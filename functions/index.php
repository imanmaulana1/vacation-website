<?php

$query = "SELECT * FROM pesanan";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

$datas = [];

while ($data = mysqli_fetch_assoc($result)) {
    $datas[] = $data;
}

function formatRupiah($number)
{
    return 'Rp ' . number_format($number, 2, ',', '.');
}
