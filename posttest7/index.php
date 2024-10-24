<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saniyyah-posttest7</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
  <div id="welcomePopup" class="popup-box">
    <div class="popup-content">
        <span id="closeWelcomePopup" class="close-popup">&times;</span>
        <h2>Selamat Datang!</h2>
        <p>Terima kasih telah mengunjungi website kami.</p>
    </div>
</div>
  <header>
    <div class="container">
        <div class="logo">
            <a href="#">
                <img src="img/hni-logo.png" alt="HNI-HPAI" style="height: 40px;"> HNI-HPAI
            </a>
        </div>        
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produk.php">Product</a></li>
            <li><a href="about.php">HNI-HPAI</a></li>
            <li><a href="biodata.php">About Me</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="keranjang.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
          </ul>
        </nav>
        <div>
          <div class="hamburger-menu" onclick="toggleMenu()">
            <div class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
          </div>
          <div>
            <div id="menu" class="menu">
              <ul>
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="produk.php"><i class="fas fa-box"></i> Product</a></li>
                <li><a href="about.php"><i class="fas fa-user"></i> HNI-HPAI</a></li>
                <li><a href="biodata.php"><i class="fas fa-envelope"></i> About Me</a></li>
                <li><a href="login.php"><i class="fa-solid fa-right-to-bracket"></i>Login</a></li>
                <li><a href="keranjang.php"><i class="fa-solid fa-cart-shopping"></i>Cart</a></li>
                <li>
                  <a href="<?php 
                      if (isset($_SESSION['role'])) {
                          echo ($_SESSION['role'] === 'Admin') ? 'dbpembelian.php' : 'dbpembelianuser.php';
                      } else {
                          echo 'login.php';
                      }?>"><i class="fa-solid fa-database"></i>DataBase</a>
                </li>
                <li><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a></li>
              </ul>
              <button class="button-burger" id="theme-toggle">Dark Mode</button>
            </div>            
          </div>
      </div>
    </div>
  </header>
  <main>
    <section class="hero">
        <div class="container">
            <div class="text">
                <h1 class="h1">
                    <span class="product-title">PRODUK</span><br>
                    <span class="herbal-title">HERBAL ALAMI</span>
                </h1>                
                <p class="p1">Halal Is My Way</p>
                <p class="p2">HALAL NETWORK INTERNATIONAL -HPAI <br>
                    adalah era baru kejayaan bisnis Network Marketing Muslim, 
                    memanfaatkan teknologi terkini untuk menciptakan layanan yang cepat,
                    akurat dan memuaskan, yang hadir pada layanan online maupun offline.</p>
                    <a href="produk.php"><button class="btn">Belanja Sekarang</button></a>
            </div>
            <div class="image">
                <img src="img/logo-1.jpg" alt="Gambar Produk"> 
            </div>
        </div>
    </section>
    <section class="testimonials">
      <div class="container">
        <h2>Apa Kata Mereka</h2>
        <div class="testimonial">
          <img src="img/orang1.jpg" alt="Ani" class="testimonial-image">
          <p>"Saya sudah mencoba produk HNI-HPAI dan sangat terkesan dengan kualitasnya. Herbal yang digunakan benar-benar alami dan bermanfaat!" - <strong>Ani</strong></p>
        </div>
        <div class="testimonial">
          <img src="img/orang2.jpg" alt="Joko" class="testimonial-image">
          <p>"HNI-HPAI memberikan pelayanan yang cepat dan produk yang sangat membantu kesehatan saya. Sangat rekomendasi!" - <strong>Joko</strong></p>
        </div>
        <div class="testimonial">
          <img src="img/orang3.jpg" alt="Siti" class="testimonial-image">
          <p>"Setelah menggunakan produk suplemen dari HNI-HPAI, saya merasa lebih bertenaga dan sehat. Terima kasih!" - <strong>Siti</strong></p>
        </div>
        <div class="testimonial">
          <img src="img/orang4.jpg" alt="Budi" class="testimonial-image">
          <p>"Saya sangat puas dengan produk kosmetik dari HNI-HPAI. Kulit saya terasa lebih segar dan sehat!" - <strong>Budi</strong></p>
        </div>
      </div>
    </section>
      
  </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="column">
                    <ul>
                        <li>PT HPAI - Halal Network International (HNI)</li> <br>
                        <li><b>Head Office :</b></li>
                        <li>HNI PLAZA, Jl. Raya Kalimalang - Billy Moon, RT 03 RW 10, Pondok Kelapa, Duren Sawit, Jakarta Timur 13450</li>
                        <li><b>Leaders Office : </b></li>
                        <li>Komplek Sentra Kota Jatibening Blok F1-F5 RT001/RW003, Jatibening Baru, Pondok Gede, Kota Bekasi, Jawa Barat 17412</li>
                    </ul>
                </div>
                <div class="column">
                    <ul>
                        <li><p><b>Layanan HALO HNI</b><br>Senin - Jum'at 08.00 - 17.00</p></li> <br>
                        <li><a href="tel:1234567890"><i class="fa-solid fa-phone"></i> 123-456-7890</a></li>
                        <li><a href="tel:+6287886416000">+62 878-8641-6000</a></li><br>
                        <li><b>Email & Telegram: 24 jam</b> <br>
                            <a href="mailto:crm@hni.net" target="_blank"><i class="fa-solid fa-envelope"></i> crm@hni.net</a><br>
                            <a href="https://t.me/halohnibot"target="_blank"><i class="fa-brands fa-telegram"></i> @halohnibot</a><br>                            
                        </li>                        
                    </ul>
                </div>
                <div class="column">
                    <ul>
                        <li><p><b>Ikuti Kami</b></p>
                            <a href="https://www.facebook.com/pthpai?ref=hl" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://www.instagram.com/pthpai/?hl=e" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://x.com/pthpai" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://youtube.com/@sangagenhni7669?si=l_vdZwe7r8zQylxA" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>    
        </div>
    </footer> 
  <script src="script.js"></script>
</body>
</html>
