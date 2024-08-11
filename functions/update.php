<?php

$id = $_GET['id'];

if (isset($id)) {
    $query = "SELECT * FROM pesanan WHERE id_pesanan = '$id'";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $data = mysqli_fetch_assoc($result);
}
