<?php
include 'koneksi.php';
session_start();
$cekLogin = false;
if (isset($_SESSION['isLogin']) && !empty($_SESSION['isLogin'])) {
    $cekLogin = true;
}
?>

<?php
$query = 'SELECT * FROM `villa`';
$data = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sevensky</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">

    <link rel="stylesheet" type="text/css" href="css/common.css">
    <style type="text/css">
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }

        }
    </style>
</head>

<body>
    <!-- Navigasi 1 -->
    <nav class="navbar navbar-expand-md" id="menu">
        <a class="navbar-brand" href="#"><img class="logo" src="images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#Overview">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <?php if (!$cekLogin) : ?>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#logIn-model">
                            Log in
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#singUP-model"> Sign Up</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            Logout
                        </a>
                    </li>
                <?php endif ?>

            </ul>
        </div>
    </nav>
    <!-- End of Navigasi 1 -->

    <!-- pop up logIn-->
    <div class="modal fade" id="logIn-model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel form-title text-center">SevenSky Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column text-center">
                        <form action="login.php" method="POST">
                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your email address..." required>
                            </div>
                            <p>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Your password..." required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-round">Login</a>
                        </form>

                    </div>
                </div>
                <div class="modal-footer">
                    <div class="modal-footer d-flex justify-content-center">
                        <div class="signup-section">Not a member yet? <a data-bs-toggle="modal" data-bs-target="#singUP-model" class="text-info "> Sign Up</a>.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end of pop up logIn-->

    <!-- pop up singup-->
    <div class="modal fade" id="singUP-model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel form-title text-center">SevenSky Registration
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column">
                        <form action="register.php" method="post">
                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                            <div class="form-group mb-3">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter your username" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter your Email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-round btn2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--end of pop up singup-->

    <!--modal booking-->
    <div class="modal fade modal-lg" id="suksesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="fw-bold">Summary</h5>
                    <hr>
                    <form action="booking.php" method="post">
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="villaName" class="form-label">Nama villa</label>
                                <input type="text" class="form-control" id="villaName" name="villaName" readonly>
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="checkIn" class="form-label">Check-in</label>
                                <input type="date" class="form-control" id="checkIn" name="checkIn">
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <label for="checkOut" class="form-label">Check-out</label>
                                <input type="date" class="form-control" id="checkOut" name="checkOut">
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <input type="hidden" id="villaId" name="villaId">
                            </div>
                            <div class="mb-3 col-md-6 col-sm-12">
                                <input type="hidden" id="userId" name="userId">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-round btn2">Submit</button>

                    </form>
                </div>
                <!-- <div class="modal-footer">
                    <a type="button" class="btn btn-primary" href="index.php">Ok</a>
                </div> -->
            </div>
        </div>
    </div>
    <!--end of modal booking-->

    <!-- Header -->
    <?= $_SESSION['message'] ?? "" ?>
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden">
            <div class="swiper-wrapper" id="swiper-wrapper-4d539197e7103843d" aria-live="off" style="transition-duration: 0ms;">
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 6" style="width: 738px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                    <img src="images/carousel/6.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 6" style="width: 738px; opacity: 1; transform: translate3d(-738px, 0px, 0px); transition-duration: 0ms;">
                    <img src="images/carousel/1.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 738px; opacity: 1; transform: translate3d(-1476px, 0px, 0px); transition-duration: 0ms;">
                    <img src="images/carousel/2.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 738px; opacity: 1; transform: translate3d(-2214px, 0px, 0px); transition-duration: 0ms;">
                    <img src="images/carousel/3.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide swiper-slide-visible swiper-slide-active" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 738px; opacity: 1; transform: translate3d(-2952px, 0px, 0px); transition-duration: 0ms;">
                    <img src="images/carousel/4.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 738px; opacity: 0; transform: translate3d(-3690px, 0px, 0px); transition-duration: 0ms;">
                    <img src="images/carousel/5.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="6 / 6" style="width: 738px; opacity: 0; transform: translate3d(-4428px, 0px, 0px); transition-duration: 0ms;">
                    <img src="images/carousel/6.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 6" style="width: 738px; opacity: 0; transform: translate3d(-5166px, 0px, 0px); transition-duration: 0ms;">
                    <img src="images/carousel/1.png" class="w-100 d-block">
                </div>
            </div>

            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
    <!-- End of Header -->

    <!-- say hello -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded" style="text-align: center;">
                <h2 class="fw-bold">Welcome To SevenSky</h2>
                <hr>
                <p>
                    <b> "The most luxurious villa" </b><br><br>
                    Jadikan liburan seru bersama SevenSky, dengan nuansa baru bagi kehidupan Anda yang menawarkan villa dengan keasrian
                    alam yang berpadu dengan rancangan hunian berarsitektur eksklusif, artistik, dan elegan.
                </p>
            </div>
        </div>
    </div>
    <!-- end of say hello -->

    <!-- card -->
    <div class="container py-5">
        <h2 class="text-center feature-title fw-bold mb-5"><a name="Overview">Overview</a></h2>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 ">
                <div class="card" style="height: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Introduction</h5>
                        <hr>
                        <p class="card-text," style="text-align: justify;">
                            Sevensky adalah salah satu Tempat Penginapan yang sudah ada dari tahun 2015,
                            tempat penginapan Sevensky menawarkan suasana yang hangat dan nyaman yang cocok untuk menenangkan dan untuk berlibur. <br>
                            Penginapan Sevensky sangat ramai dikunjungi pada saat akhir tahun, ataupun saat hari besar lainnya.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 ">
                <div class="card" style="height: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">How to pay</h5>
                        <hr>
                        <p class="card-text" style="text-align: justify;">
                            Pembayaran pemesanan penginapan Sevensky dapat dilakukan melalui kartu kredit bank,
                            PayPal, transfer bank, dan metode over the counter.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 ">
                <div class="card" style="height: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Company Profile</h5>
                        <hr>
                        <p class="card-text" style="text-align: justify;">
                            Sevensky adalah salah satu akomodasi saat berpegian atau liburan untuk bertempat tinggal,
                            berteduh, dan menyimpan barang. <br> menyediakan beberapa fasilitas seperti Kamar mandi,
                            Ruang Tamu, Dapur, dan Kamar tidur, halaman yang luas dan masih banyak lagi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of card -->

    <!-- input reservation -->
    <div class="container-fluid py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Categories</h2>
            <div class="row mx-auto d-flex justify-content-center">
                <?php while ($dataVilla = mysqli_fetch_array($data)) {  ?>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-3">
                        <div class="card">
                            <img src="<?= $dataVilla["gambar"] ?>" alt="Gambar Villa">

                            <div class="card-body">
                                <h4 class="card-title"><?= $dataVilla["nama"] ?></h4>
                                <p class="card-text">Harga penginapan per hari</p>
                                <div class="buy d-flex justify-content-between align-items-center">
                                    <div class="price text-success">
                                        <h5 class="mt-4">Rp <?= number_format($dataVilla["harga"]) ?></h5>
                                    </div>
                                    <button type="button" class="btn btn-danger mt-3" onClick="book(<?= $dataVilla["id"] ?> ,`<?= $dataVilla['nama'] ?>`)">Book Now!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>
    </div>
    <!-- End of input reservation -->

    <!-- Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>Payment Methods</h6>
                    <img src="images/payment1.png" class="img-justify"><br>
                    <img src="images/payment2.png" class="img-justify">
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links" type="square">
                        <li><a class="nav-link" href="#">Luxe</a></li>
                        <li><a class="nav-link" href="#">Deluxe</a></li>
                        <li><a class="nav-link" href="#">Presidential Suite</a></li>
                        <li><a class="nav-link" href="#">Suite</a></li>
                        <li><a class="nav-link" href="#">Junior</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links" type="square">
                        <li><a class="nav-link" href="index7.php">Home</a></li>
                        <li><a class="nav-link" href="#Overview">Overview</a></li>
                        <li><a class="nav-link" href="blog.php">Blog</a></li>
                        <li><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <hr>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"> </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- jquery -->

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });

        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
        var myModal = new bootstrap.Modal(document.getElementById("suksesModal"), {});

        function book(x, y) {
            myModal.show()
            document.getElementById('villaName').value = y
            document.getElementById('villaId').value = x
        }
    </script>
</body>

</html>