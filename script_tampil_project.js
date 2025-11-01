document.addEventListener("DOMContentLoaded", function () {
  const data = JSON.parse(localStorage.getItem("projectData"));

  if (!data) {
    alert("Tidak ada data proyek ditemukan!");
    window.location.href = "upload_project.php";
    return;
  }

  document.getElementById("judulProyek").value = data.title;
  document.getElementById("jurusan").value = data.jurusan || "Belum diisi";
  document.getElementById("deskripsiProyek").value = data.description;
  document.getElementById("fotoProyek").src = data.photo;
  document.getElementById("tglMulai").textContent = "Tanggal Pembuatan: " + data.startDate;
  document.getElementById("tglSelesai").textContent = "Tanggal Selesai: " + data.endDate;

  // --- Tampilkan Video YouTube ---
  if (data.videoLink) {
    let videoSrc = data.videoLink;
    if (videoSrc.includes("youtube.com/watch?v=")) {
      const videoId = videoSrc.split("v=")[1].split("&")[0];
      videoSrc = "https://www.youtube.com/embed/" + videoId;
    }
    document.getElementById("videoProyek").src = videoSrc;
  } else {
    document.getElementById("videoProyek").style.display = "none";
  }
}); // ← tutup event di sini!

// Kembali
function goBack() {
  window.location.href = "upload_project.php";
}

// Ubah Data
function goBackUpload() {
  localStorage.setItem("editMode", "true");
  window.location.href = "upload_project.php";
}

// Hapus data
function hapusProyek() {
  if (confirm("Yakin ingin menghapus proyek ini?")) {
    localStorage.removeItem("projectData");
    window.location.href = "upload_project.php";
  }
}
