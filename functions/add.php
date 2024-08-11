<?php

$subTotal = 0;
$total = 0;

// Get query parameter from url
$idPackage = isset($_GET['destination']) ? $_GET['destination'] : '';

// Add data to database
if (isset($_POST['payment'])) {

    // Get value from input
    $name = "{$_POST['firstName']} {$_POST['lastName']}";
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $packageId = $_POST['package'];
    $serviceMakanan = isset($_POST['makanan']) ? 1 : 0;
    $serviceTransportasi = isset($_POST['transportasi']) ? 1 : 0;
    $servicePenginapan = isset($_POST['penginapan']) ? 1 : 0;
    $startDate = $_POST['startDate'];
    $duration = (int)$_POST['duration'];
    $guestCount = (int)$_POST['guestCount'];

    // Calculate subtotal and total
    $subTotal = getSubTotal($duration, $serviceMakanan, $servicePenginapan, $serviceTransportasi);
    $total = getTotal($guestCount, $subTotal);

    // Get current datetime for order timestamp
    $orderDateTime = date('Y-m-d H:i:s');

    // Query Insert Data
    $query = "INSERT INTO pesanan
                VALUES 
            ('', '$name', '$phone', '$startDate', '$orderDateTime', '$duration', '$packageId', '$servicePenginapan', '$serviceTransportasi', '$serviceMakanan', '$guestCount', '$subTotal', '$total')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        "Error: " . mysqli_error($conn);
    } else {
        header("Location: index.php?message=success");
        exit();
    }
}

function getSubTotal($duration, $serviceMakanan, $servicePenginapan, $serviceTransportasi)
{
    $subTotal = 0;

    if ($serviceMakanan === 1) {
        $subTotal += 500000;
    }
    if ($servicePenginapan === 1) {
        $subTotal += 1000000;
    }
    if ($serviceTransportasi === 1) {
        $subTotal += 1200000;
    }

    return $subTotal * $duration;
}

function getTotal($guestCount, $subTotal)
{
    return $guestCount * $subTotal;
}
