<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoliKarya - Portofolio PBL Polibatam</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #fff;
            overflow-x: hidden;
            background-color: whitesmoke;
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(0, 0, 60, 0.8);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 60px;
            z-index: 1000;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
        }

        .nav-links {
            list-style: none;
            display: flex;
            align-items: center;
        }

        .nav-links li {
            margin-left: 25px;
            position: relative;
        }

        .nav-links a {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #00ffff;
        }

        /* Dropdown */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgba(0, 0, 70, 0.95);
            min-width: 180px;
            top: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
        }

        .dropdown-content a {
            display: block;
            padding: 10px;
            color: #fff;
        }

        .dropdown-content a:hover {
            background-color: rgba(0, 255, 255, 0.2);
        }

        .dropdown.show .dropdown-content {
            display: block;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: url('bg-gedung.jpg') no-repeat center center/cover;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 30, 100, 0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            top: 45%;
            text-align: center;
            transform: translateY(-50%);
        }

        .hero-content h1 {
            font-size: 2.8rem;
            margin-bottom: 10px;
        }

        .hero-content span {
            color: #55bddd;
            text-decoration: underline;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .cta-btn {
            background: #00bcd4;
            color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s;
        }

        .cta-btn:hover {
            background: #0097a7;
        }

        /* Tentang */
        .about {
            background: whitesmoke;
            color: #333;
            text-align: center;
            padding: 60px 100px;
        }

        .about h2 {
            color: #003366;
            margin-bottom: 15px;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px 20px;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
                margin-top: 10px;
            }

            .about,
            .profil-section,
            .projek-section {
                padding: 40px 20px;
            }

            .hero-content h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">WorkPiece</div>
        <ul class="nav-links">
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="login_Page.php">Login</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>Halo! Selamat datang di <span>WorkPiece</span></h1>
            <p>Temukan proyek yang menarik!</p>
        </div>
    </section>

    <!-- Tentang Section -->
    <section id="tentang" class="about">
        <div class="container">
            <h2>Tentang</h2>
            <p>Platform ini bertujuan untuk menjadi wadah utama bagi mahasiswa Polibatam dalam menampilkan karya dan
                proyek
                mereka, serta memberikan akses mudah bagi pengunjung untuk menjelajahi berbagai inovasi menarik.</p>
        </div>
    </section>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const dropdown = document.querySelector(".dropdown");
            const dropbtn = document.querySelector(".dropbtn");

            if (dropbtn) {
                dropbtn.addEventListener("click", (e) => {
                    e.preventDefault();
                    dropdown.classList.toggle("show");
                });

                window.addEventListener("click", (e) => {
                    if (!dropdown.contains(e.target)) {
                        dropdown.classList.remove("show");
                    }
                });
            }
        });
    </script>
</body>

</html>