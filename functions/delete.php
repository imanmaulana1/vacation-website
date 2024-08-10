<?php

if (isset($_POST['delete'])) {
    $id = $_POST['reservation_id'];

    $query = "DELETE FROM pesanan WHERE id_pesanan = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Check if any rows were affected
        if (mysqli_affected_rows($conn) > 0) {
            // Redirect or provide feedback
            header("Location: reservations.php?message=deleted successfully");
            exit();
        } else {
            header("Location: reservations.php?message=deleted failed");
        }
    } else {
        // Handle error
        echo "Error: " . mysqli_error($conn);
    }
}
