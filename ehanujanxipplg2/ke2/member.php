<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rhan Cafe</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="logos.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/style/member.css" type="text/css" media="all" />
    
  </head>
  <body>
    <nav class="navbar">
      <div class="logo">
        <img class="icon" src="logos.jpeg" alt="Logo Rhan Cafe"/>
        <h3 class="name">R<span class="cofee">Cofee</span></h3>
      </div>
      <ul class="pilih">
        <li><a href="../index.html">Menu</a></li>
        <li><a href="../index.html">Galeri</a></li>
        <li><a href="../index.html">Tentang</a></li>
        <li><a href="member.html" class="pesan">Join Member</a></li>
      </ul>
      
      <div class="menu-toggle" id="mobile-menu">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
</div>
<ul class="pilih-menu" id="navbar">
    <li><a href="../index.html">Menu</a></li>
    <li><a href="../index.html">Galeri</a></li>
    <li><a href="../index.html">Tentang</a></li>
    <li><a href="member.php" class="pesan">Join Member</a></li>
</ul>

    </nav>


    <div class="con_member">
      <div class="con_kiri">
      <form action="hasil.php" method="get" class="kiri">
        <div class="isi">
          <label for="email">Email :</label>
          <input type="email" name="email" id="" placeholder="masukkan email aktif" class="input_isi">
        </div>
        <div class="isi">
          <label for="username">Username :</label>
          <input type="text" name="username" id="" placeholder="masukkan username yang akan digunakan" class="input_isi">
        </div>
        <div class="isi">
          <label for="pass">Password :</label>
          <input type="password" name="pass" id="" placeholder="masukkan password" class="input_isi">
        </div>
          <input type="submit" value="Selesai" class="selesai">
        </form>
      </div>
        <div class="kanan">
          <h2>Join Member Rhan Cofee</h2>
          <p>ayo join member Rhan Cofee untuk mendapatkan diskon dan promo menarik lainnya</p>
        </div>
      </form>
    </div>
    

    
<script src="../assets/style/pesan2.js"></script>
</body>
</html>
    