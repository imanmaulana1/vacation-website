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

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/booking.css">
</head>

<body>
    <?php include 'partials/header.php' ?>

    <main>
        <div class="container pb-5">
            <h1 class="text-center py-5">Confirm your <span class="text-primary">Reservation</span></h1>
            <form action="booking.php" method="POST" id="reservationForm">
                <div class="row g-4">
                    <div class="col-12 col-lg-7">
                        <section class="bg-white p-4 h-100 rounded-3 shadow">
                            <h2 class="fs-3 mb-3">Reservation Details</h2>
                            <div class="info-wrapper">
                                <p class="fs-5">Enter your details:</p>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-4">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="John" required>
                                    </div>
                                    <div class="col-12 col-md-6 mb-4">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe" required>
                                    </div>
                                    <div class="col-12 col-md-6 mb-4">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="johndoe@example.com" required>
                                    </div>
                                    <div class="col-12 col-md-6 mb-4">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">+62</span>
                                            <input type="text" class="form-control" id="phone" name="phone" aria-label="phone" required>
                                        </div>
                                    </div>
                                </div>
                                <p class="fs-5 mt-4">Select Packages:</p>
                                <div class="packages">
                                    <div class="col-12 mb-3">
                                        <input class="form-check-input visually-hidden package-checkbox" type="checkbox" id="cb-packages-1" name="transportasi">
                                        <label for="cb-packages-1" class="w-100 cursor-pointer">
                                            <div class="package d-flex justify-content-between align-items-center p-3 border rounded">
                                                <div class="detail d-flex align-items-center gap-2">
                                                    <div class="dot rounded-circle border border-primary bg-white me-4" style="width: 20px; height: 20px;"></div>
                                                    <div class="icon me-2">
                                                        <span class="material-symbols-outlined">
                                                            local_taxi
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h3 class="fs-5 mb-1">Transportation Service</h3>
                                                        <p class="mb-0 fw-bold">Rp. 1.200.000<span class="text-muted">/orang</span></p>
                                                    </div>
                                                </div>

                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input class="form-check-input visually-hidden package-checkbox" type="checkbox" id="cb-packages-2" name="penginapan">
                                        <label for="cb-packages-2" class="w-100 cursor-pointer">
                                            <div class="package d-flex justify-content-between align-items-center p-3 border rounded">
                                                <div class="detail d-flex align-items-center gap-2">
                                                    <div class="dot rounded-circle border border-primary bg-white me-4" style="width: 20px; height: 20px;"></div>
                                                    <div class="icon me-2">
                                                        <span class="material-symbols-outlined">
                                                            bed
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h3 class="fs-5 mb-1">Accommodation Service</h3>
                                                        <p class="mb-0 fw-bold">Rp. 1.000.000<span class="text-muted">/orang</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input class="form-check-input visually-hidden package-checkbox" type="checkbox" id="cb-packages-3" name="makanan">
                                        <label for="cb-packages-3" class="w-100 cursor-pointer">
                                            <div class="package d-flex justify-content-between align-items-center p-3 border rounded">
                                                <div class="detail d-flex align-items-center gap-2">
                                                    <div class="dot rounded-circle border border-primary bg-white me-4" style="width: 20px; height: 20px;"></div>
                                                    <div class="icon me-2">
                                                        <span class="material-symbols-outlined">
                                                            restaurant
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <h3 class="fs-5 mb-1">Meal Service</h3>
                                                        <p class="mb-0 fw-bold">Rp. 500.000<span class="text-muted">/orang</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <p class="fs-5 mt-5">Booking Details:</p>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="daterange" id="daterange" class="visually-hidden" required />
                                        <input type="date" name="startDate" id="startDate-hidden" class="visually-hidden" required />
                                        <div class="d-flex align-items-center justify-content-between">
                                            <section class="date">
                                                <div class="d-flex align-items-center gap-4">
                                                    <label for="daterange">
                                                        <div class="icon">
                                                            <span class="material-symbols-outlined">
                                                                date_range
                                                            </span>
                                                        </div>
                                                    </label>
                                                    <div class="date-info">
                                                        <h3 class="fs-5 mb-1">Start from</h3>
                                                        <p class="mb-0" id="startDate"></p>
                                                    </div>
                                                    <div class="date-info">
                                                        <h3 class="fs-5 mb-1">End to</h3>
                                                        <p class="mb-0" id="end-date"></p>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="duration">
                                                <h3 class="fs-5 mb-1">Duration</h3>
                                                <input class="form-control visually-hidden" type="text" aria-label="readonly" id="duration" name="duration" readonly required>
                                                <label for="duration">
                                                    <p class="mb-0" id="duration-text"></p>
                                                </label>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="d-flex align-items-center justify-content-between gap-4">
                                            <div class="d-flex align-items-center gap-4 text-guest">
                                                <div class="icon">
                                                    <span class="material-symbols-outlined">
                                                        group
                                                    </span>
                                                </div>
                                                <label for="guestCount" class="form-label mb-0">
                                                    <h3 class="fs-5 mb-0">Number of Guests</h3>
                                                </label>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 input-guest">
                                                <button type="button" id="btn-down" class="btn btn-primary text-white" onclick="decrementGuestCount()">
                                                    <span class="material-symbols-outlined btn-count">
                                                        arrow_drop_down
                                                    </span>
                                                </button>
                                                <input type="number" class="form-control" id="guestCount" name="guestCount" min="1" value="1" style="width: 60px; text-align: center;">
                                                <button type="button" class="btn btn-primary text-white" onclick="incrementGuestCount()">
                                                    <span class="material-symbols-outlined btn-count">
                                                        arrow_drop_up
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="button" id="count" name="count" class="btn btn-info text-white">Hitung</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-12 col-lg-5">
                        <section class="bg-white p-4 h-100 rounded-3 shadow height-max-content">
                            <h2 class="fs-3 mb-3">Summary</h2>
                            <div class="total-wrapper">
                                <p class="fs-6">Your reservation summary:</p>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="subTotal" class="form-label">Sub Total</label>
                                            <input type="number" class="form-control" id="subTotal" name="subTotal" value="0" readonly>
                                            <input type="hidden" id="hiddenSubTotal" name="hiddenSubTotal" value="0">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="total" class="form-label">Total</label>
                                            <input type="number" class="form-control" id="total" name="total" value="0" readonly>
                                            <input type="hidden" id="hiddenTotal" name="hiddenTotal" value="0">
                                            <div class="col-12 d-flex justify-content-end mt-5">
                                                <button type="reset" name="reset" id="resetButton" class="btn btn-danger text-white me-2">Reset</button>
                                                <button type="submit" name="payment" class="btn btn-primary text-white">Payment</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <?php include 'partials/footer.php' ?>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Moment -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

    <!-- Daterangepicker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="./assets/js/booking.js"></script>
</body>

</html>