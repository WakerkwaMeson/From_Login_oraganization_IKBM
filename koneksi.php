<?php
$servername = "localhost"; // Atau alamat server Anda
$username = "root";        // Nama pengguna MySQL
$password = "";            // Kata sandi MySQL (kosongkan jika tidak ada)
$dbname = "ikbm";          // Nama database yang digunakan

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>



<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Database IKBM</title>
    <link rel="stylesheet" href="style/style.css"> <!-- Pastikan path file CSS benar -->
</head>
<body>
    <!-- <img src="Gambar/logo ikbm.jpg" alt="Logo" class="logo"> -->
    <!-- <!-- <div class="kotak_login"></div> -->
        
           


    <div class="kotak_login">
        <div class="logo"></div>
           <center> <img src="Gambar/logo ikbm.jpg" alt="Logo" class="logo"></center> 
        <h1 class="judul">LOGIN<br></h1>
        <p class="tulisan_login"><b>IKATAN KORWIL KELUARGA BESAR MILIMBO <br> (IKBM)</b></p>

        <form action="myphp/myql" method="post" enctype="multipart/form-data">
        
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" autocomplete="off" placeholder="Nama Sesuai KTP" required>

            <label for="NIM">NIM</label>
            <input type="text" id="NIM" name="NIM" autocomplete="off" placeholder="Nomor NIM Atau NIP" required>

            <!-- <label for="Nomor">Nomor</label>
            <input type="text" id="Nomor" name="Nomor" autocomplete="off" placeholder="Nomor Wa/telp yang Aktif " required> -->
           
            <label for="TempatTanggalLahir">Tempat Tanggal Lahir</label>
            <input type="date" name="TempatTanggalLahir" id="TempatTanggalLahir" autocomplete="off" placeholder="tempat tanggal lahir" required>

            <label for="Agama">Agama</label>
            <select id="Agama" name="Agama" required>
                <option value="">Agama atau Kepercayaan</option>
                <option value="katolik">Katolik</option>
                <option value="Protestan">Protestan</option>
                <option value="Islam">Islam</option>
                <option value="GKI">GKI</option>
                <option value="GPDI">GPDI</option>
                <option value="Budha">Budha</option>
            </select>

            <label for="Kampus">Kampus</label>
            <input type="text" name="Kampus" id="Kampus" autocomplete="off" placeholder="Asal Kampus" required>

            <label for="Angkatan">Angkatan</label>
            <input type="text" id="Angkatan" name="Angkatan" autocomplete="off" placeholder="Tahun Angkatan" required>

            <label for="Jeniskelamin">Jenis Kelamin</label>
            <div class="jenis-kelamin">
                <label>
                    <input type="radio" name="Jeniskelamin" value="Pria" required> Pria
                </label>
                <label>
                    <input type="radio" name="Jeniskelamin" value="Wanita" required> Wanita
                </label>
            </div>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" autocomplete="off" placeholder="Nama E-mail yang terpakai" required>

            <label for="file-upload">Pilih file Foto yang rapi:</label>
            <input type="file" id="file-upload" name="file" placeholder="Wajib Mengisi Foto Anda"required>

            <div class="form-buttons">
                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
            </div>
        </form>
    </div>
</body>
    <!-- // Membuat koneksi script -->
    <script src="JSScrip/javaScrip.js"></script>
</html>