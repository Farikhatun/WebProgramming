<?php
include 'koneksi.php';
session_start();
if (isset($_POST) && !empty($_POST)) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];

  $query = "insert into message set nama='$nama', email='$email', pesan='$pesan'";
  mysqli_query($koneksi, $query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <title>Responsive Contact Us Page</title>
  <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
</head>

<body>
  <section>
    <div class="container">
      <a href="index.php"><svg width="50" height="50" viewBox="0 0 24 24">
          <path fill="#ffffff" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
        </svg></a>
    </div>
    <div class="section-header">
      <div class="container">
        <h2>Contact Us</h2>
        <p>
          Sevensky merupakan perusahaan akomodasi yang menyediakan jasa
          layanan sewa Villa. Tersedia beragam pilihan unit dengan fasilitas
          yang lengkap & harga yang terjangkau.
        </p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-home"></i>
            </div>

            <div class="contact-info-content">
              <h4>Address</h4>
              <p>
                Jl. Slamet Baharudin ,<br />
                Surakarta, Central Java, <br />55060
              </p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-phone"></i>
            </div>

            <div class="contact-info-content">
              <h4>Phone</h4>
              <p>0571-457-2321</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope"></i>
            </div>

            <div class="contact-info-content">
              <h4>Email</h4>
              <p>halosevensyk@mail.com</p>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <form action="" method="POST" id="contact-form">
            <h2>Send Message</h2>
            <div class="input-box">
              <input type="text" required="true" name="nama" placeholder="Full Name" />
              <span></span>
            </div>

            <div class="input-box">
              <input type="email" required="true" name="email" placeholder="Email" />
              <span></span>
            </div>

            <div class="input-box">
              <textarea required="true" name="pesan" placeholder="Type your Message"></textarea>
              <span></span>
            </div>

            <div class="input-box">
              <input type="submit" value="Send" name="" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>