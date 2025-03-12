CREATE DATABASE ikbm;

USE ikbm;

CREATE TABLE pengguna (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(50) NOT NULL,
    tempat_tanggal_lahir DATE NOT NULL,
    agama VARCHAR(50) NOT NULL,
    kampus VARCHAR(100) NOT NULL,
    angkatan VARCHAR(50) NOT NULL,
    jenis_kelamin VARCHAR(10) NOT NULL,
    email VARCHAR(100) NOT NULL,
    foto VARCHAR(255) NOT NULL
);