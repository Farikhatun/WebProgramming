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
  <link rel="stylesheet" type="text/css" href="login/style.css">
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
          <a class="nav-link " href="index.php#Overview">Overview</a>
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


  <!-- carousel -->
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


  <!-- card content -->
  <div class="container py-5">
    <h2>
      <div class="text-center mb-5 fw-bold"> Fasilitas Sevensky</div>
    </h2>
    <div class="row row-col-2">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/yard.jpg" class="img-fluid rounded-start" alt="yard">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Yard</h5>
              <p class="card-text">Feed your garden; recharge your soul, Happiness blooms in my garden,
                In my garden, you can't let little things bug you, Where flowers bloom so does hope.
              </p>
              <p class="card-text"><small class="text-muted">Post by Admin</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/swimpool.jpg" class="img-fluid rounded-start" alt="swimpool">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Swimming Pool</h5>
              <p class="card-text">Having a splashtastic time, Just trying to beat the heat,
                Time is a pool to swim and dream and create in,
                Too cool for school, but def not the pool.</p>
              <p class="card-text"><small class="text-muted">Post by Admin</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/playground.jpg" class="img-fluid rounded-start" alt="playground">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Playground</h5>
              <p class="card-text">Sports teaches you character, it teaches you to play by the rules,
                it teaches you to know what it feels like to win and lose—it teaches you about life.</p>
              <p class="card-text"><small class="text-muted">Post by Admin</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/livingroom.jpg" class="img-fluid rounded-start" alt="livingroom">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Living Room</h5>
              <p class="card-text">The living room should be a place where we feel totally at ease
                – temple of the soul, Television is an invention that permits you to be entertained
                in your living room by people you wouldn't have in your home.</p>
              <p class="card-text"><small class="text-muted">Post by Admin</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/kitchen.jpg" class="img-fluid rounded-start" alt="Kitchen">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">kitchen</h5>
              <p class="card-text">a gathering place for family and friends –
                a place where memories are made and seasoned with love,
                Kitchens are made for bringing families together</p>
              <p class="card-text"><small class="text-muted">Post by Admin</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/bedroom.jpg" class="img-fluid rounded-start" alt="bedroom">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Bedroom</h5>
              <p class="card-text"> Capturing the amazing views from my new spot in Albuquerque, New Mexico.
                Let’s get away from our screens and appreciate the view. The best room is out there.
              </p>
              <p class="card-text"><small class="text-muted">Post by Admin</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/bathroom.jpg" class="img-fluid rounded-start" alt="bathroom">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Bathroom</h5>
              <p class="card-text">
                Believe in the magic of bubble baths, There she goes, drawing a bubble bath again,
                Drop your favorite bath bomb in the comments, Swipe for the skincare products I've been using
              </p>
              <p class="card-text"><small class="text-muted">Post by Admin</small></p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  </div>


  <!-- card content -->
  </main>

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
            <li><a class="nav-link" href="index.php">Home</a></li>
            <li><a class="nav-link" href="index.php#Overview">Overview</a></li>
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
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

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
  </script>

</body>

</html>