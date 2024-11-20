<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Member Rhan cofee</title>
    <link rel="stylesheet" href="../assets/style/hasil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="logos.jpeg" type="image/x-icon">
</head>
<body>
    <h1 class="selamat">Selamat, kamu telah mendapatkan E-Member Rhan Cofee</h1>
    <div class="con_emember">
        <div class="logo">
        <h3 class="name">R<span class="cofee">Cofee</span></h3>
        <h4>E-member</h4>
        </div>

        <div class="identitas">
            <h2>MEMBERSHIP/2024/00054</h2>
            <h4> <h3>username: 
                <?php
                 echo $_GET["username"];
                 ?></h3> 
                </h4>
        </div>
        <div class="visa">
            <h2>VISA</h2>
        </div>
    </div>
</body>
</html>