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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/home.css">
</head>

<body>
    <?php include 'partials/header.php' ?>
    <?php if (isset($_GET['message']) && $_GET['message'] == 'success'): ?>
        <div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3">
            <div id="liveToast" class="toast custom-toast bg-white" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <span class="material-symbols-outlined me-2 text-success">
                        check_circle
                    </span>
                    <strong class="me-auto text-success">Success</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Booking created successfully!
                </div>
            </div>
        </div>
    <?php endif; ?>
    <main class="bg-white">
        <section id="hero">
            <div class="container">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner rounded" style="height: 500px;">
                        <div class="carousel-item active">
                            <img src="./assets/images/hero.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/images/hero-2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/images/hero-3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/images/hero-4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/images/hero-5.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <section id="destination" class="my-5">
            <div class="container">
                <div class="row my-4 g-4 g-lg-0">
                    <h2 class="section-title text-primary">Destination</h2>
                    <div class="col-12 col-md-8 mb-4 me-lg-5">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                            <div class="col">
                                <div class="card h-100">
                                    <img src="./assets/images/hero-2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Maldives</h5>
                                        <p class="card-text">Experience the pristine beaches and crystal-clear waters of the Maldives.</p>
                                        <a href="booking.php?destination=1" class="btn btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="./assets/images/hero-5.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Macchu Picchu</h5>
                                        <p class="card-text">Discover the ancient Incan city of Machu Picchu, nestled high in the Andes Mountains.</p>
                                        <a href="booking.php?destination=5" class="btn btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="./assets/images/hero-4.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Santorini</h5>
                                        <p class="card-text">Enjoy the iconic white-washed buildings of Santorini.</p>
                                        <a href="booking.php?destination=4" class="btn btn-primary">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <h2>Video</h2>
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/LCG9FM8FPKY?si=mdk-JIwfEDpbgO6_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="package my-5" id="packages">
            <div class="container">
                <h2 class="section-title text-primary">Packages</h2>
                <div class="card-deck mb-3 text-center">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Accomodation</h4>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title pricing-card-title">Rp. 1.000.000 <small class="text-muted">/ orang</small></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Transportation</h4>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title pricing-card-title">Rp. 1.200.000 <small class="text-muted">/ orang</small></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card mb-4 box-shadow">
                                <div class="card-header">
                                    <h4 class="my-0 font-weight-normal">Meals</h4>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title pricing-card-title">Rp. 500.000 <small class="text-muted">/ orang</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section id="gallery" class="mb-5">
            <div class="container">
                <h2 class="section-title text-primary">Gallery</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img
                            src="./assets/images/gallery2.png"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Wintry Mountain Landscape" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img
                            src="./assets/images/gallery3.png"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Mountains in the Clouds" />

                        <img
                            src="./assets/images/gallery4.png"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Boat on Calm Water" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img
                            src="./assets/images/gallery5.png"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Waves at Sea" />
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'partials/footer.php' ?>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script src="./assets/js/index.js"></script>
</body>

</html>