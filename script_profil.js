// --- Elemen utama ---
const simpanBtn = document.getElementById("simpanPerubahan");
const editBtn = document.getElementById("editProfil");
const kembaliBtn = document.getElementById("kembaliEdit");
const formSection = document.getElementById("formProfil");
const previewSection = document.getElementById("previewProfil");

// --- Data jurusan & prodi ---
const dataProdi = {
  "Teknik Informatika": [
    "D3 Teknik Informatika",
    "D4 Rekayasa Keamanan Siber",
    "D4 Rekayasa Perangkat Lunak",
    "D4 Teknologi Rekayasa Multimedia",
    "D4 Teknologi Rekayasa Sistem Elektronika",
    "S2 Terapan Teknologi Rekayasa Perangkat Lunak"
  ],
  "Teknik Elektro": [
    "D3 Elektronika",
    "D4 Teknik Elektronika",
    "D4 Teknologi Rekayasa Internet of Things (IoT)",
    "D4 Teknologi Rekayasa Sistem Elektronika"
  ],
  "Teknik Mesin": [
    "D3 Teknik Mesin",
    "D4 Teknologi Rekayasa Manufaktur",
    "D4 Teknologi Rekayasa Mekatronika",
    "D4 Teknologi Rekayasa Pengelasan"
  ],
  "Manajemen dan Bisnis": [
    "D3 Akuntansi",
    "D3 Administrasi Bisnis",
    "D4 Akuntansi Manajerial",
    "D4 Logistik Bisnis",
    "D4 Manajemen Rekayasa"
  ]
};

// --- Dropdown jurusan -> prodi ---
const jurusanSelect = document.getElementById("jurusan");
const prodiSelect = document.getElementById("prodi");

jurusanSelect.addEventListener("change", () => {
  const selectedJurusan = jurusanSelect.value;
  prodiSelect.innerHTML = '<option value="">-- Pilih Program Studi --</option>';

  if (dataProdi[selectedJurusan]) {
    dataProdi[selectedJurusan].forEach(prodi => {
      const option = document.createElement("option");
      option.value = prodi;
      option.textContent = prodi;
      prodiSelect.appendChild(option);
    });
  }
});

// --- Tombol Simpan Perubahan ---
simpanBtn.addEventListener("click", () => {
  document.getElementById("prevNama").textContent = document.getElementById("nama").value || "-";
  document.getElementById("prevNim").textContent = document.getElementById("nim").value || "-";
  document.getElementById("prevEmail").textContent = document.getElementById("email").value || "-";
  document.getElementById("prevJurusan").textContent = jurusanSelect.value || "-";
  document.getElementById("prevProdi").textContent = prodiSelect.value || "-";
  document.getElementById("prevDeskripsi").textContent = document.getElementById("deskripsi").value || "-";
  document.getElementById("prevSma").textContent = document.getElementById("sma").value || "-";
  document.getElementById("prevTahunLulus").textContent = document.getElementById("tahunLulus").value || "-";
  document.getElementById("prevKemampuan").textContent = document.getElementById("kemampuan").value || "-";

  formSection.classList.add("d-none");
  previewSection.classList.remove("d-none");
});

// --- Tombol Edit Profil ---
editBtn.addEventListener("click", () => {
  previewSection.classList.add("d-none");
  formSection.classList.remove("d-none");
});

// --- Tombol Kembali ke Edit Profil ---
kembaliBtn.addEventListener("click", () => {
  previewSection.classList.add("d-none");
  formSection.classList.remove("d-none");
});

// --- Unggah Foto ---
const uploadInput = document.getElementById("uploadFoto");
const btnUnggah = document.getElementById("btnUnggah");
const btnHapus = document.getElementById("btnHapus");
const previewFoto = document.getElementById("previewFoto");

btnUnggah.addEventListener("click", () => uploadInput.click());

uploadInput.addEventListener("change", () => {
  const file = uploadInput.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = e => {
      previewFoto.src = e.target.result;
      previewFoto.style.objectFit = "cover";
    };
    reader.readAsDataURL(file);
  }
});

btnHapus.addEventListener("click", () => {
  previewFoto.src = "";
  uploadInput.value = "";
});
