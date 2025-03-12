// Menunggu seluruh halaman dimuat sebelum menjalankan script
document.addEventListener("DOMContentLoaded", function () {

    // Mendapatkan form dan elemen-elemen input
    const form = document.querySelector("form");
    const namaInput = document.getElementById("nama");
    const nimInput = document.getElementById("NIM");
    const tempatTanggalLahirInput = document.getElementById("TempatTanggalLahir");
    const agamaSelect = document.getElementById("Agama");
    const kampusInput = document.getElementById("Kampus");
    const angkatanInput = document.getElementById("Angkatan");
    const emailInput = document.getElementById("email");
    const fileUploadInput = document.getElementById("file-upload");

    // Menangani pengiriman form
    form.addEventListener("submit", function (event) {
        // Menghentikan pengiriman form jika ada input yang kosong
        if (!validasiForm()) {
            event.preventDefault(); // Membatalkan pengiriman form
        }
    });

    // Fungsi untuk validasi form
    function validasiForm() {
        let valid = true;
        let errorMessage = "";

        // Validasi nama
        if (namaInput.value.trim() === "") {
            errorMessage += "Nama tidak boleh kosong.\n";
            valid = false;
        }

        // Validasi NIM
        if (nimInput.value.trim() === "") {
            errorMessage += "NIM tidak boleh kosong.\n";
            valid = false;
        }

        // Validasi Tempat Tanggal Lahir
        if (tempatTanggalLahirInput.value === "") {
            errorMessage += "Tempat dan Tanggal Lahir tidak boleh kosong.\n";
            valid = false;
        }

        // Validasi agama
        if (agamaSelect.value === "") {
            errorMessage += "Agama harus dipilih.\n";
            valid = false;
        }

        // Validasi Kampus
        if (kampusInput.value.trim() === "") {
            errorMessage += "Kampus tidak boleh kosong.\n";
            valid = false;
        }

        // Validasi Angkatan
        if (angkatanInput.value.trim() === "") {
            errorMessage += "Angkatan tidak boleh kosong.\n";
            valid = false;
        }

        // Validasi Email
        if (emailInput.value.trim() === "") {
            errorMessage += "Email tidak boleh kosong.\n";
            valid = false;
        } else if (!validateEmail(emailInput.value)) {
            errorMessage += "Email tidak valid.\n";
            valid = false;
        }

        // Validasi foto
        if (!fileUploadInput.files.length) {
            errorMessage += "Foto harus diupload.\n";
            valid = false;
        }

        // Menampilkan pesan error jika ada masalah
        if (!valid) {
            alert(errorMessage);
        }

        return valid;
    }

    // Fungsi untuk validasi format email
    function validateEmail(email) {
        const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return re.test(String(email).toLowerCase());
    }
});