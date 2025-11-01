// --- Elemen ---
const simpanBtn = document.getElementById("simpanPerubahan");
const editBtn = document.getElementById("editProfil");
const kembaliBtn = document.getElementById("kembaliEdit");
const formSection = document.getElementById("formProfil");
const previewSection = document.getElementById("previewProfil");

// --- Tombol Simpan Perubahan ---
simpanBtn.addEventListener("click", () => {
  document.getElementById("prevNama").textContent = document.getElementById("nama").value || "-";
  document.getElementById("prevJurusan").textContent = document.getElementById("jurusan").value || "-";
  document.getElementById("prevNim").textContent = document.getElementById("nim").value || "-";
  document.getElementById("prevEmail").textContent = document.getElementById("email").value || "-";
  document.getElementById("prevDeskripsi").textContent = document.getElementById("deskripsi").value || "-";
  document.getElementById("prevSma").textContent = document.getElementById("sma").value || "-";
  document.getElementById("prevTahunLulus").textContent = document.getElementById("tahunLulus").value || "-";
  document.getElementById("prevUniv").textContent = document.getElementById("univ").value || "-";
  document.getElementById("prevProdi").textContent = document.getElementById("prodi").value || "-";
  document.getElementById("prevKemampuan").textContent = document.getElementById("kemampuan").value || "-";

  formSection.style.display = "none";
  previewSection.style.display = "block";
});

// --- Tombol Edit Profil (balik ke form edit) ---
editBtn.addEventListener("click", () => {
  previewSection.style.display = "none";
  formSection.style.display = "block";
});

// --- Tombol Kembali ke Edit Profil di Preview ---
kembaliBtn.addEventListener("click", () => {
  previewSection.style.display = "none";
  formSection.style.display = "block";
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
