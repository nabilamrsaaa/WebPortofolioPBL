// --- Mode Edit ---
document.addEventListener("DOMContentLoaded", function () {
  if (localStorage.getItem("editMode") === "true") {
    const savedData = JSON.parse(localStorage.getItem("projectData"));
    if (savedData) {
      fields.judul.value = savedData.title;
      fields.deskripsi.value = savedData.description;
      fields.mulai.value = savedData.startDate;
      fields.selesai.value = savedData.endDate;

      // tampilkan preview foto lama
      if (savedData.photo) {
        const img = document.createElement("img");
        img.src = savedData.photo;
        preview.innerHTML = "";
        preview.appendChild(img);
      }

      // isi ulang link video kalau ada
      const videoInput = document.getElementById('link');
      if (videoInput && savedData.videoLink) {
        videoInput.value = savedData.videoLink;
      }

      updateChecklist();
    }
  }
});

// --- Checklist Otomatis ---
const form = document.getElementById('projectForm');
const checklistItems = document.querySelectorAll('#checklist input[type="checkbox"]');
const fields = {
  judul: document.getElementById('judul'),
  deskripsi: document.getElementById('deskripsi'),
  foto: document.getElementById('foto'),
  mulai: document.getElementById('mulai'),
  selesai: document.getElementById('selesai')
};

function updateChecklist() {
  const savedData = JSON.parse(localStorage.getItem("projectData"));
  checklistItems[0].checked = fields.judul.value.trim() !== '';
  checklistItems[1].checked = fields.deskripsi.value.trim() !== '';
  checklistItems[2].checked = fields.foto.files.length > 0 || (savedData && savedData.photo);
  checklistItems[3].checked = fields.mulai.value !== '';
  checklistItems[4].checked = fields.selesai.value !== '';
}

Object.values(fields).forEach(f => {
  f.addEventListener('input', updateChecklist);
});

// --- Upload Box Interaktif ---
const uploadBox = document.getElementById('uploadBox');
const fotoInput = document.getElementById('foto');
const preview = document.getElementById('preview');

uploadBox.addEventListener('click', () => fotoInput.click());
uploadBox.addEventListener('dragover', e => {
  e.preventDefault();
  uploadBox.style.borderColor = '#0d2850';
});
uploadBox.addEventListener('dragleave', () => {
  uploadBox.style.borderColor = '#ccc';
});
uploadBox.addEventListener('drop', e => {
  e.preventDefault();
  uploadBox.style.borderColor = '#ccc';
  fotoInput.files = e.dataTransfer.files;
  if (fotoInput.files.length > 0) {
    showPreview(fotoInput.files[0]);
  }
  updateChecklist();
});

// --- Preview Gambar ---
function showPreview(file) {
  const reader = new FileReader();
  reader.onload = function (e) {
    preview.innerHTML = ""; // hapus preview lama
    const img = document.createElement('img');
    img.src = e.target.result;
    preview.appendChild(img);
  };
  reader.readAsDataURL(file);
}

fotoInput.addEventListener('change', () => {
  if (fotoInput.files.length > 0) {
    showPreview(fotoInput.files[0]);
    updateChecklist();
  }
});

// --- Simpan Form ---
form.addEventListener('submit', e => {
  e.preventDefault();

  const videoInput = document.getElementById('link');
  let videoLink = videoInput ? videoInput.value.trim() : "";

  // 🔧 ubah link YouTube otomatis jadi format embed
  if (videoLink.includes("youtube.com/watch?v=")) {
    const videoId = videoLink.split("v=")[1].split("&")[0];
    videoLink = `https://www.youtube.com/embed/${videoId}`;
  } else if (videoLink.includes("youtu.be/")) {
    const videoId = videoLink.split("youtu.be/")[1].split("?")[0];
    videoLink = `https://www.youtube.com/embed/${videoId}`;
  }


  // --- Ambil semua data form ---
  const projectData = {
    title: fields.judul.value.trim(),
    description: fields.deskripsi.value.trim(),
    photo: preview.querySelector('img') ? preview.querySelector('img').src : '',
    startDate: fields.mulai.value,
    endDate: fields.selesai.value,
    jurusan: "Teknik Informatika",
    videoLink: videoLink
  };

  // Simpan data ke localStorage
  localStorage.setItem("projectData", JSON.stringify(projectData));
  localStorage.removeItem("editMode");

  // Pindah ke halaman tampil project
  window.location.href = "tampil_project.php";
});

