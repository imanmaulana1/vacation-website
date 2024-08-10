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
    <link rel="stylesheet" href="./assets/css/reservations.css">
</head>

<body>
    <?php include 'partials/header.php' ?>

    <main>
        <?php if (isset($_GET['message'])): ?>
            <div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3">
                <div id="liveToast" class="toast custom-toast bg-white" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <span class="material-symbols-outlined me-2 <?= $_GET['message'] == 'deleted successfully' ? 'text-success' : 'text-danger' ?>">
                            <?= $_GET['message'] == 'deleted successfully' ? 'check_circle' : 'error' ?>
                        </span>
                        <strong class="me-auto <?= $_GET['message'] == 'deleted successfully' ? 'text-success' : 'text-danger' ?>">
                            <?= $_GET['message'] == 'deleted successfully' ? 'Success' : 'Failed' ?>
                        </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        <?= $_GET['message'] == 'deleted successfully' ? 'Item deleted successfully!' : 'Item deletion failed!' ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="container px-2 px-lg-5">
            <div class="row pt-5">
                <div class="col-lg-12">
                    <h1 class="section-title text-primary text-center">Reservations</span></h1>
                </div>
            </div>
        </div>
        <div class="container-fluid px-2 px-lg-5 pb-5">
            <div class="table-responsive table-dark table-hover mb-5">
                <table class="table caption-top">
                    <caption>List of users</caption>
                    <thead class="table-success">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">Booking Date</th>
                            <th scope="col">Duration (days)</th>
                            <th scope="col">Package ID</th>
                            <th scope="col">Accomodation Service</th>
                            <th scope="col">Transportation Service</th>
                            <th scope="col">Meal Service</th>
                            <th scope="col">Guests</th>
                            <th scope="col">Package Price</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php if (isset($datas) && is_iterable($datas)): ?>
                            <?php $i = 1; ?>
                            <?php foreach ($datas as $data): ?>
                                <tr>
                                    <td scope="row"><?= $i ?></td>
                                    <td scope="row"><?= $data['nama_pemesan'] ?></td>
                                    <td scope="row"><?= $data['nomor_hp'] ?></td>
                                    <td scope="row"><?= $data['tanggal_mulai_wisata'] ?></td>
                                    <td scope="row"><?= $data['tanggal_pesanan'] ?></td>
                                    <td scope="row" class="text-center"><?= $data['durasi_wisata'] ?></td>
                                    <td scope="row" class="text-center"><?= $data['id_paket_wisata'] ?></td>
                                    <td scope="row" class="text-center"><?= $data['layanan_penginapan']  == 1 ? "Yes" : "No"  ?></td>
                                    <td scope="row" class="text-center"><?= $data['layanan_transportasi']  == 1 ? "Yes" : "No"  ?></td>
                                    <td scope="row" class="text-center"><?= $data['layanan_makanan']  == 1 ? "Yes" : "No"  ?></td>
                                    <td scope="row" class="text-center"><?= $data['jumlah_peserta'] ?></td>
                                    <td scope="row"><?= formatRupiah($data['harga_paket']) ?></td>
                                    <td scope="row"><?= formatRupiah($data['jumlah_tagihan']) ?></td>
                                    <td scope="row">
                                        <div class="d-flex align-items-center gap-2">
                                            <a href="#">
                                                <span class="material-symbols-outlined text-warning">
                                                    edit
                                                </span>
                                            </a>
                                            <button type="button" class="btn-delete bg-white" class="btn btn-link p-0" data-reservation-id="<?= $data['id_pesanan'] ?>">
                                                <span class="material-symbols-outlined text-danger">
                                                    delete
                                                </span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="14" class="text-center">No data available</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <form action="" method="post">
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="deleteModalLabel">Confirm Deletion</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this item? This action cannot be undone.
                            <input type="hidden" name="reservation_id" id="reservationId">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>

    <?php include 'partials/footer.php' ?>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="./assets/js/reservations.js"></script>
</body>

</html>