<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saniyyah-posttest7</title>
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
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
    <div class="container-bio">
        <img src="img/me.jpg" alt="Foto Diri" class="profile-pic">
        <div class="info">
            <p> <b>SANIYYAH INTAN SALSABIILA</b></p>
            <p> A'1 Praktikum Web</p>
            <p> 2309106004</p>
        </div>
    </div>
</main>
<footer>
  <div class="container">
    <a href="https://classroom.google.com/u/1/c/NzA1MzMyNzkzODU2">Posttest7</a>
    &copy; Saniyyah Intan Salsabiila 2309106004
</div>
</footer>
    
    <script src="script.js"></script>
</body>
</html>