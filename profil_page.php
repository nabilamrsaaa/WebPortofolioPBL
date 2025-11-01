<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PBL Polibatam - Profil</title>
  <link rel="stylesheet" href="style_profil.css" />
</head>

<body>
  <header class="navbar">
    <h1>WorkPiece</h1>
    <nav>
      <a href="home_page.php">Beranda</a>
      <a href="#" class="active">Profil</a>
      <a href="landing_page.php">Logout</a>
    </nav>
  </header>

  <main class="container">
    <!-- KIRI -->
    <section class="sidebar">
      <div class="foto-profil">
        <img id="previewFoto" class="circle" src="" alt="Foto Profil">
        <input type="file" id="uploadFoto" accept="image/*" hidden />
        <button id="btnUnggah">Unggah Foto</button>
        <button id="btnHapus">Hapus Foto</button>
      </div>

      <div class="kontrol">
        <button id="editProfil">Edit Profil</button>
        <button id="simpanPerubahan">Simpan</button>
      </div>
    </section>

    <!-- KANAN -->
    <section class="konten">
      <!-- FORM PROFIL -->
      <div class="card" id="formProfil">
        <h2>Informasi Profil</h2>
        <div class="form-row">
          <label>Nama</label>
          <input type="text" id="nama" placeholder="Nama Mahasiswa" />
        </div>
        <div class="form-row">
          <label>Jurusan</label>
          <input type="text" id="jurusan" placeholder="Teknik Informatika" />
        </div>
        <div class="form-row">
          <label>NIM</label>
          <input type="text" id="nim" placeholder="4342101234" />
        </div>
        <div class="form-row">
          <label>Email</label>
          <input type="email" id="email" placeholder="contoh@polibatam.ac.id" />
        </div>

        <h2>Informasi Lainnya</h2>
        <div class="form-row">
          <label>Deskripsi Diri</label>
          <textarea id="deskripsi" placeholder="Ceritakan tentang diri Anda..."></textarea>
        </div>

        <h2>Riwayat Pendidikan</h2>
        <div class="form-row">
          <label>SMA</label>
          <input type="text" id="sma" placeholder="Nama SMA" />
        </div>
        <div class="form-row">
          <label>Tahun Lulus</label>
          <input type="text" id="tahunLulus" placeholder="2020" />
        </div>
        <div class="form-row">
          <label>Universitas/Politeknik</label>
          <input type="text" id="univ" placeholder="Politeknik Negeri Batam" />
        </div>
        <div class="form-row">
          <label>Program Studi</label>
          <input type="text" id="prodi" placeholder="Teknik Informatika" />
        </div>
        <div class="form-row">
          <label>Kemampuan</label>
          <input type="text" id="kemampuan" placeholder="Hard Skills/Soft Skills" />
        </div>
      </div>

      <!-- PREVIEW PROFIL -->
      <div class="card" id="previewProfil" style="display:none;">
        <h2>Informasi Profil</h2>
        <p><strong>Nama:</strong> <span id="prevNama"></span></p>
        <p><strong>NIM:</strong> <span id="prevNim"></span></p>
        <p><strong>Jurusan:</strong> <span id="prevJurusan"></span></p>
        <p><strong>Email:</strong> <span id="prevEmail"></span></p>

        <h2>Informasi Lainnya</h2>
        <p><strong>Deskripsi Diri:</strong> <span id="prevDeskripsi"></span></p>

        <h2>Riwayat Pendidikan</h2>
        <p><strong>SMA:</strong> <span id="prevSma"></span></p>
        <p><strong>Tahun Lulus:</strong> <span id="prevTahunLulus"></span></p>
        <p><strong>Universitas/Politeknik:</strong> <span id="prevUniv"></span></p>
        <p><strong>Program Studi:</strong> <span id="prevProdi"></span></p>
        <p><strong>Kemampuan:</strong> <span id="prevKemampuan"></span></p>

        <button id="kembaliEdit">Kembali ke Edit Profil</button>
      </div>
    </section>
  </main>

  <footer>
    <p>© 2025 PBL Polibatam | Tentang | Kontak | Kebijakan Privasi</p>
  </footer>

  <script src="style_profil.js"></script>
</body>
</html>