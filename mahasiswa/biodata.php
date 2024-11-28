
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>From Biodata Siswa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="biodata.css" />
    <link rel="shortcut icon" href="Alok.webp" type="image/x-icon" />
  </head>
  <body>
    <header>
      <h1 style="padding-left: 20px">Biodata Mahasiswa</h1>
      <nav class="navBar">
        <ul>
          <li><a href="biodata.html" class="navBar">Biodata</a></li>
          <li><a href="profil.html" class="navBar">Profile</a></li>
          <li><a href="notes.html" class="navBar">Notes</a></li>
        </ul>
        <img src="Alok.webp" alt="" width="55px" height="55px" />
      </nav>
    </header>
    <div class="namaHead">
      <h3>Raihan Fauzan XI PPLG2</h3>
    </div>

    <form action="hasil.php" method="get">
      <div class="judul">
        <h2>Form Biodata</h2>
      </div>
      <div class="nama">
        <label for="nama" name="nama">Nama :</label>
        <input
          type="text"
          name="nama"
          id="nama"
          placeholder="Masukkan nama lengkap"
          class="inp"
          required
        />
      </div>

      <div class="alamat">
        <label for="alamat">Alamat :</label>
        <textarea
          name="alamat"
          id="alamat"
          cols="30"
          rows="10"
          placeholder="masukkan alamat lengkap"
          class="inp-almt"
          required
        ></textarea>
      </div>

      <div class="tingkatan">
        <label for="">Jenis kelamin :</label>
        <input type="radio" name="tingkatan" id="x" value="Laki-laki" />
        <label for="x">Laki-laki</label>
        <input type="radio" name="tingkatan" id="xi" value="Perempuan" />
        <label for="xi">Perempuan</label>
        <input type="radio" name="tingkatan" id="xii" value="Secret" />
        <label for="xii">Secret</label>
      </div> 

     
       <div class="kelas">
        <label for="pekerjaan">Pekerjaan :</label>
        <select name="pekerjaan" id="pekerjaan" class="inp" required>
          <option value="Pilih">Pilih</option>
          <option value="Pelajar">Pelajar</option>
          <option value="Karyawan">Karyawan</option>
          <option value="Wirausaha">Wirausaha</option>
          <option value="Lain-lain">Lain-lain</option>
        </select>
      </div>


      <div class="hobi">
        <label for="">Hobi :</label>
        <input type="checkbox" name="hobi" id="bolaV" value="Bolavolly" />
        <label for="bolaV">Bola Volly</label>
        <input type="checkbox" name="hobi" id="futsal" value="futsal" />
        <label for="futsal">Futsal</label>
        <input type="checkbox" name="hobi" id="badminton" value="badminton" />
        <label for="badminton">Badminton</label>
      </div>

     

      <div class="username">
        <label for="username">Username :</label>
        <input
          type="text"
          name="username"
          id="username"
          placeholder="masukkan username/email"
          class="inp"
          required
        />
      </div>

      <div class="username">
        <label for="nilai">Nilai :</label>
        <input
          type="number"
          name="nilai"
          id="nilai"
          placeholder="masukkan nilai rata-rata di raport"
          class="inp"
          required
        />
      </div>

      <div class="pass">
        <label for="pass">Password :</label>
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Masukkan password"
          class="inp"
          required
        />
      </div>
     
      <div class="simpan_con">
       <input type="submit" value="proses" class="simpan">
       </div>

       
    </form>

    <footer><h6>copyright by raihanfauzan 2024</h6></footer>
  </body>
</html>
