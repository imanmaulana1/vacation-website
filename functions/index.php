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

if (isset($_POST['edit'])) {
    $id = (int)$_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $packageId = $_POST['package'];
    $serviceMakanan = isset($_POST['makanan']) ? 1 : 0;
    $serviceTransportasi = isset($_POST['transportasi']) ? 1 : 0;
    $servicePenginapan = isset($_POST['penginapan']) ? 1 : 0;
    $startDate = $_POST['startDate'];
    $duration = (int)$_POST['duration'];
    $guestCount = (int)$_POST['guest'];
    $subTotal = number_format((float)$_POST['subTotal'], 2, '.', '');
    $total = number_format((float)$_POST['total'], 2, '.', '');

    $query = "UPDATE 
                pesanan 
                SET 
                nama_pemesan='$name',  
                nomor_hp='$phone', 
                tanggal_mulai_wisata='$startDate', 
                durasi_wisata='$duration', 
                id_paket_wisata='$packageId', 
                layanan_penginapan='$servicePenginapan', 
                layanan_transportasi='$serviceTransportasi', 
                layanan_makanan='$serviceMakanan', 
                jumlah_peserta='$guestCount', 
                harga_paket='$subTotal', 
                jumlah_tagihan='$total'
                WHERE id_pesanan = $id";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: reservations.php?message=updated successfully");
    } else {
        header("Location: reservations.php?message=updated failed");
    }
}




function formatRupiah($number)
{
    return 'Rp ' . number_format($number, 2, ',', '.');
}
