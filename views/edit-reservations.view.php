<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/edit-reservation.css">
</head>

<body>
    <?php include 'partials/header.php' ?>

    <main>
        <div class="container ">
            <div class="row">
                <div class="col-12 mx-auto">
                    <form action="reservations.php" method="POST" class="max-w-md mx-auto m-5 p-4 bg-white rounded">
                        <fieldset>
                            <legend>Edit Data</legend>
                            <div class="mb-3">
                                <label for="name" class="form-label">Customer Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="<?= $data['nama_pemesan']; ?>" aria-describedby="name">
                                <input type="hidden" id="hiddenId" name="id" value="<?= $data['id_pesanan']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">No Phone</label>
                                <input type="text" class="form-control" value="<?= $data['nomor_hp']; ?>" name="phone" id="phone">
                            </div>
                            <div class="mb-3">
                                <label for="package" class="form-label">Destination</label>
                                <select class="form-select" name="package" aria-label="package">
                                    <option value="1" <?= $data['id_paket_wisata'] == 1 ? 'selected' : '' ?>>Maldives</option>
                                    <option value="2" <?= $data['id_paket_wisata'] == 2 ? 'selected' : '' ?>>Grand Canyon</option>
                                    <option value="3" <?= $data['id_paket_wisata'] == 3 ? 'selected' : '' ?>>Great Barrier Reef</option>
                                    <option value="4" <?= $data['id_paket_wisata'] == 4 ? 'selected' : '' ?>>Santorini</option>
                                    <option value="5" <?= $data['id_paket_wisata'] == 5 ? 'selected' : '' ?>>Machu Picchu</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="bookingDate">Booking Date</label>
                                <p><?= $data['tanggal_pesanan']; ?></p>
                                <input type="hidden" id="hiddenBookingDate" name="bookingDate" value="<?= $data['tanggal_pesanan']; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="startDate">Start Date</label>
                                <input type="date" class="form-control" name="startDate" id="startDate" value="<?= $data['tanggal_mulai_wisata']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="duration" class="form-label">Duration</label>
                                <input type="number" class="form-control" name="duration" id="duration" aria-describedby="duration" min="0" value="<?= $data['durasi_wisata']; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Services</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="<?= $data['layanan_penginapan']; ?>" name="penginapan" id="penginapan">
                                    <label class="form-check-label" for="penginapan">
                                        Service Accomodation
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="<?= $data['layanan_transportasi']; ?>" id="transportasi" name="transportasi" checked>
                                    <label class="form-check-label" for="transportasi">
                                        Service Transportation
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="<?= $data['layanan_makanan']; ?>" id="makanan" name="makanan" checked>
                                    <label class="form-check-label" for="makanan">
                                        Service Meal
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="guest">Number of Guest</label>
                                <input type="number" class="form-control" name="guest" id="guest" min="0" value="<?= (int)$data['jumlah_peserta']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="subTotal" class="form-label">Subtotal</label>
                                <input type="number" class="form-control" id="subTotal" name="subTotal" value="<?= $data['harga_paket']; ?>" aria-describedby="subTotal" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="total" class="form-label">Total</label>
                                <input type="number" class="form-control" id="total" name="total" value="<?= $data['jumlah_tagihan']; ?>" aria-describedby="total" readonly>
                            </div>
                            <div class="text-end mt-5">
                                <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </main>

    <?php include 'partials/footer.php' ?>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="assets/js/edit.js"></script>
</body>

</html>