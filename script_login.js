/*
File: script_login.js
Deskripsi: Script untuk memvalidasi form login pada halaman WorkPiece
Pembuat: [Nama Kamu]
Tanggal: [Tanggal Pembuatan]
*/

// Menangani event "submit" pada form login
document.getElementById('loginForm').addEventListener('submit', function (event) {
  // Mencegah form dari reload halaman otomatis
  event.preventDefault();

  // Mengambil nilai input dari form dan menghapus spasi berlebih
  let nim = document.getElementById('nim').value.trim();
  let password = document.getElementById('password').value.trim();

  // Menandai status validasi awal
  let valid = true;

  // ==========================
  // Validasi NIM
  // ==========================
  if (nim === '') {
    document.getElementById('nimError').style.display = 'block'; // tampilkan pesan error
    valid = false;
  } else {
    document.getElementById('nimError').style.display = 'none'; // sembunyikan jika valid
  }

  // ==========================
  // Validasi Password
  // ==========================
  if (password.length < 6) {
    document.getElementById('passwordError').style.display = 'block'; // password terlalu pendek
    valid = false;
  } else {
    document.getElementById('passwordError').style.display = 'none'; // password valid
  }

  // Jika ada error, hentikan eksekusi selanjutnya
  if (!valid) return;

  // ==========================
  // Autentikasi User (Login)
  // ==========================

  // Ambil data user dari localStorage (atau array kosong jika belum ada)
  let users = JSON.parse(localStorage.getItem('users')) || [];

  // Cek apakah ada user dengan NIM dan password yang cocok
  let user = users.find(u => u.nim === nim && u.password === password);

  // ==========================
  // Hasil Autentikasi
  // ==========================
  if (user) {
    // Jika login berhasil
    alert('Login berhasil! Selamat datang di WorkPiece.');

    // Simpan data user yang sedang login
    localStorage.setItem('loggedInUser', nim);

    // Arahkan ke halaman utama
    window.location.href = 'home_page.php';
  } else {
    // Jika kombinasi salah
    alert('NIM atau kata sandi salah!');
  }
});
