<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WorkPiece</title>
  <link rel="stylesheet" href="style_upload_project.css">
</head>

<body>
  <header class="navbar">
    <h1>WorkPiece</h1>
    <nav>
      <a href="home_page.php">Beranda</a>
      <a href="profil_page.php">Profil</a>
    </nav>
  </header>
  <main class="container">
    <div class="form-card">
      <h2>Tambah Proyek PBL</h2>
      <p>Isi informasi proyek Anda</p>

      <form id="projectForm">
        <!-- Informasi Dasar -->
        <div class="section">
          <h3>Informasi Dasar</h3>

          <label for="judul">Judul Proyek</label>
          <input type="text" id="judul" placeholder="Masukkan judul proyek yang menarik" required>

          <label for="deskripsi">Deskripsi Proyek</label>
          <textarea id="deskripsi" rows="4" placeholder="Jelaskan detail proyek, tujuan, dan hasil yang dicapai..."
            required></textarea>

          <label for="link">Link Video (Opsional)</label>
          <input type="url" id="link" placeholder="https://youtube.com/watch?v=...">
        </div>

        <!-- Upload Foto -->
        <div class="section">
          <h3>Foto Proyek</h3>
          <div class="upload-box" id="uploadBox">
            <input type="file" id="foto" accept=".jpg,.jpeg,.png">
            <p>Klik untuk upload atau drag & drop<br><span>JPG, JPEG, PNG (max 30MB)</span></p>
            <div id="preview"></div> <!-- Tambahan penting -->
          </div>
        </div>

        <!-- Timeline -->
        <div class="section">
          <h3>Timeline</h3>
          <label for="mulai">Tanggal Mulai</label>
          <input type="date" id="mulai" required>

          <label for="selesai">Tanggal Selesai</label>
          <input type="date" id="selesai" required>
        </div>

        <!-- Checklist -->
        <div class="checklist">
          <h3>Checklist Pengisian</h3>
          <ul id="checklist">
            <li><input type="checkbox" disabled> Judul proyek</li>
            <li><input type="checkbox" disabled> Deskripsi proyek</li>
            <li><input type="checkbox" disabled> Foto proyek</li>
            <li><input type="checkbox" disabled> Tanggal mulai</li>
            <li><input type="checkbox" disabled> Tanggal selesai</li>
          </ul>
        </div>

        <button type="submit" class="btn">Simpan Proyek</button>
      </form>
    </div>
  </main>

  <footer>
    <p>© 2025 PBL Polibatam | Tentang | Proyek | Kebijakan Privasi</p>
  </footer>

  <script src="script_upload_project.js"></script>
</body>
</html>