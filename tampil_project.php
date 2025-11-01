<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PoliKarya - Portofolio PBL Polibatam</title>
  <link rel="stylesheet" href="style_tampil_project.css">
</head>

<body>
  <header class="navbar">
    <h1>WorkPiece</h1>
    <nav>
      <a href="home_page.php">Beranda</a>
      <a href="profil_page.php">Profil</a>
    </nav>
  </header>

  <div class="container">
    <button onclick="goBack()" class="btn-back">Kembali</button>

    <h2>Proyek</h2>
    <input type="text" id="judulProyek" readonly>

    <h3>Jurusan</h3>
    <input type="text" id="jurusan" readonly>

    <h3>Deskripsi Proyek</h3>
    <textarea id="deskripsiProyek" rows="4" readonly></textarea>

    <div class="media">
      <div class="media-item kotak">
        <p><strong>Foto</strong></p>
        <div class="media-box">
          <img id="fotoProyek" alt="Foto Proyek">
        </div>
      </div>
      <div class="media-item kotak">
        <p><strong>Video</strong></p>
        <div class="media-box">
          <iframe id="videoProyek" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <div class="tanggal">
      <p id="tglMulai"></p>
      <p id="tglSelesai"></p>
    </div>

    <div class="actions">
      <button class="btn-ubah" onclick="goBackUpload()">Ubah</button>
      <button class="btn-hapus" onclick="hapusProyek()">Hapus</button>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-content">
        <span>© 2025 PBL Polibatam</span>
        <span class="separator">|</span>
        <a href="#">Tentang</a>
        <span class="separator">|</span>
        <a href="#">Proyek</a>
        <span class="separator">|</span>
        <a href="#">Kebijakan Privasi</a>
      </div>
    </div>
  </footer>

  <script src="script_tampil_project.js"></script>
</body>

</html>