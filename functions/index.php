<?php

$query = "SELECT * FROM pesanan";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}


$datas = [];
$i = 0;

while ($data = mysqli_fetch_assoc($result)) {
    $datas[] = $data;
    $i++;
}

function formatRupiah($number)
{
    return 'Rp ' . number_format($number, 2, ',', '.');
}
