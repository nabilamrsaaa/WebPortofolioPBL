document.getElementById('registerForm').addEventListener('submit', function (event) {
  event.preventDefault();

  let nim = document.getElementById('nim').value.trim();
  let email = document.getElementById('email').value.trim();
  let password = document.getElementById('password').value.trim();

  let valid = true;

  // Validasi input
  if (nim === '') {
    document.getElementById('nimError').style.display = 'block';
    valid = false;
  } else {
    document.getElementById('nimError').style.display = 'none';
  }

  let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  if (!emailPattern.test(email)) {
    document.getElementById('emailError').style.display = 'block';
    valid = false;
  } else {
    document.getElementById('emailError').style.display = 'none';
  }

  if (password.length < 6) {
    document.getElementById('passwordError').style.display = 'block';
    valid = false;
  } else {
    document.getElementById('passwordError').style.display = 'none';
  }

  // Simpan data ke localStorage
  if (valid) {
    let users = JSON.parse(localStorage.getItem('users')) || [];

    // Cek apakah NIM sudah digunakan
    let existingUser = users.find(u => u.nim === nim);
    if (existingUser) {
      alert('NIM sudah terdaftar! Silakan login.');
      return;
    }

    // Simpan data baru
    users.push({ nim: nim, email: email, password: password });
    localStorage.setItem('users', JSON.stringify(users));

    alert('Pendaftaran berhasil! Silakan login.');
    window.location.href = 'login_page.php';  // pastikan nama file sesuai
  }
});
