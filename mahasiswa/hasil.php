
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="Alok.webp" type="image/x-icon" />
    <link rel="stylesheet" href="hasil.css">
    <title>hasil</title>
</head>
<body>
    <div class="container">
        <h1 class="judul">Data Anda</h1>
    <h3>Nama yang anda masukkan adalah : 
    <?php
     echo $_GET["nama"];
     ?></h3> 

<h3>Alamat : <?php
     echo $_GET["alamat"]; ?></h3>
  
  <h3>Jenis Kelamin : <?php
     echo $_GET["tingkatan"]; ?></h3>


  <h3>Pekerjaan : <?php
     echo $_GET["pekerjaan"]; ?></h3>

<h3>Hobi : <?php
     echo $_GET["hobi"]; ?></h3>



<h3>Nilai Rata-rata : <?php
     echo $_GET["nilai"]; ?></h3>

<h3>Username : <?php
     echo $_GET["username"]; ?></h3>

<h3>Password : <?php
     echo $_GET["password"]; ?></h3>
     </div>


     <?php
     $rata = $_GET["nilai"];
     if($rata <=80){
          echo("<h3>Maaf, anda tidak lulus </h3>");
     }else if($rata <=100 && $rata >=80){ 
          echo("<h3>Selamat, anda lulus</h3>");
     }else{
          echo("<h3>Anda Sukses Jadi Presisden");
     }
     ?>
</body>
</html>
