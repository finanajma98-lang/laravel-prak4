<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Pemerintah Desa Jalatrang')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* =========================
   TOP BAR
========================= */

        .top-info {
            background: #101827;
            height: 52px;
            color: #ffffff;
            border-bottom: 1px solid rgba(255, 255, 255, .08);
        }

        .top-info .container-fluid {
            height: 100%;
        }

        .info-badge {
            display: inline-flex;
            align-items: center;
            background: linear-gradient(90deg, #f5a000, #f04b3e);
            color: #ffffff;
            font-size: 14px;
            font-weight: 700;
            padding: 7px 16px;
            border-radius: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, .25);
        }

        .info-date {
            color: #aeb7c7;
            font-size: 14px;
        }


        /* =========================
   HEADER
========================= */

        .main-header {
            background: #202a40;
            border-bottom: 1px solid rgba(255, 255, 255, .08);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .main-content {
            padding-top: 40px;
        }

        .header-inner {
            min-height: 76px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }


        /* =========================
   BRAND DESA
========================= */

        .brand-desa {
            display: flex;
            align-items: center;

            background: rgba(255, 255, 255, .07);

            border: 1px solid rgba(255, 255, 255, .15);

            border-radius: 16px;

            padding: 7px 18px;

            text-decoration: none;

            color: #ffffff;

            min-width: 420px;
        }

        .brand-logo {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: #ffc400;
            font-size: 27px;
        }

        .brand-title {
            color: #ffffff;
            font-size: 17px;
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: -.2px;
        }

        .brand-subtitle {
            margin-top: 3px;

            color: #8d96a8;

            font-size: 11px;

            font-weight: 500;

            letter-spacing: .1px;
        }


        /* =========================
    NAVBAR
    ========================= */

        .navbar-desa {
            padding: 0;
            background: transparent;
        }

        .navbar-desa .navbar-nav {
            gap: 3px;
        }

        .navbar-desa .nav-link {
            color: #f0f1f5 !important;

            font-size: 14px;

            font-weight: 700;

            padding: 11px 13px !important;

            border-radius: 25px;

            white-space: nowrap;

            transition: all .2s ease;
        }

        .navbar-desa .nav-link:hover {
            color: #ffc400 !important;
        }


        /* BERITA AKTIF */

        .navbar-desa .nav-link.active {
            background: rgba(245, 160, 0, .12);

            border: 1px solid #c89400;

            color: #ffc400 !important;

            box-shadow: 0 0 12px rgba(245, 160, 0, .08);
        }


        /* HOME */

        .nav-home {
            width: 52px;
            height: 52px;

            display: flex !important;

            align-items: center;
            justify-content: center;

            background: rgba(239, 74, 74, .20);

            border-radius: 50% !important;

            font-size: 19px !important;
        }

        .nav-home:hover {
            background: rgba(239, 74, 74, .30);
        }


        /* GRID MENU */

        .nav-grid {
            width: 54px;
            height: 54px;

            display: flex;

            align-items: center;
            justify-content: center;

            margin-left: 8px;

            border-radius: 50%;

            border: 1px solid rgba(245, 160, 0, .5);

            color: #ffc400;

            font-size: 21px;

            transition: .2s ease;
        }

        .nav-grid:hover {
            background: rgba(245, 160, 0, .12);

            color: #ffc400;
        }


        /* MOBILE */

        .navbar-toggler {
            border: 1px solid rgba(255, 255, 255, .25);

            color: #ffffff;

            padding: 8px 12px;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }


        @media (max-width: 1400px) {

            .brand-desa {
                min-width: 350px;
            }

            .navbar-desa .nav-link {
                font-size: 12px;
                padding-left: 9px !important;
                padding-right: 9px !important;
            }

        }


        @media (max-width: 1100px) {

            .header-inner {
                flex-wrap: wrap;
                padding: 10px 0;
            }

            .brand-desa {
                min-width: auto;
            }

            .navbar-desa {
                margin-top: 8px;
                width: 100%;
            }

            .navbar-desa .navbar-nav {
                padding: 10px 0;
            }

        }


        @media (max-width: 576px) {

            .top-info {
                height: auto;
                padding: 8px 0;
            }

            .info-badge {
                font-size: 11px;
                padding: 6px 10px;
            }

            .info-date {
                font-size: 10px;
            }

            .brand-desa {
                min-width: 360px;
                padding: 6px 15px;
            }

            .brand-title {
                font-size: 15px;
            }

            .brand-subtitle {
                font-size: 9px;
            }

        }

        /* =========================
   FOOTER
========================= */

        footer.footer-desa {
            background: #111827 !important;
            color: #dce9e5 !important;
            margin-top: 60px;
        }

        footer.footer-desa h5 {
            color: #ffffff !important;
        }

        footer.footer-desa .footer-brand {
            color: #ffffff !important;
        }

        footer.footer-desa .footer-label {
            color: #9fc9bd !important;
        }

        footer.footer-desa p {
            color: #dce9e5 !important;
        }

        footer.footer-desa a {
            color: #dce9e5 !important;
            text-decoration: none;
        }

        footer.footer-desa a:hover {
            color: #ffffff !important;
        }

        footer.footer-desa ul {
            list-style: none;
            padding-left: 0;
        }

        footer.footer-desa li {
            margin-bottom: 8px;
        }

        footer.footer-desa .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, .12);
            color: #aac1bb !important;
            margin-top: 35px;
            padding-top: 20px;
        }

        footer.footer-desa .footer-icon {
            width: 32px;
            height: 32px;
            border: 1px solid rgba(255, 255, 255, .2);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 6px;
            color: #dce9e5 !important;
        }

        footer.footer-desa .footer-icon:hover {
            background: rgba(255, 255, 255, .1);
            color: #ffffff !important;
        }
    </style>
</head>

<body>

    <!-- =========================
     TOP INFO BAR
========================== -->
    <div class="top-info">
        <div class="container-fluid px-4 d-flex justify-content-between align-items-center">

            <span class="info-badge">
                <i class="bi bi-megaphone-fill me-2"></i>
                INFO TERKINI
            </span>

            <span class="info-date">
                <i class="bi bi-clock me-2"></i>
                Sabtu, 3 Oktober 2026
            </span>

        </div>
    </div>


    <!-- =========================
     HEADER + NAVBAR
========================== -->
    <header class="main-header">

        <div class="container-fluid px-4">

            <div class="header-inner">

                <!-- IDENTITAS DESA -->
                <a href="{{ route('berita.index') }}" class="brand-desa">

                    <div class="brand-logo">
                        <i class="bi bi-building-fill"></i>
                    </div>

                    <div class="brand-text">
                        <div class="brand-title">
                            PEMERINTAH DESA JALATRANG
                        </div>

                        <div class="brand-subtitle">
                            KECAMATAN CIPAKU KABUPATEN CIAMIS
                        </div>
                    </div>

                </a>


                <!-- NAVIGASI -->
                <nav class="navbar navbar-expand-lg navbar-desa">

                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarDesa">

                        <i class="bi bi-list"></i>

                    </button>

                    <div class="collapse navbar-collapse" id="navbarDesa">

                        <ul class="navbar-nav align-items-center">

                            <!-- BERANDA -->
                            <li class="nav-item">
                                <a href="{{ route('berita.index') }}"
                                    class="nav-link nav-home">

                                    <i class="bi bi-house-fill"></i>

                                </a>
                            </li>

                            <!-- PROFIL -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Profil
                                </a>
                            </li>

                            <!-- KEPENDUDUKAN -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Kependudukan
                                </a>
                            </li>

                            <!-- BERITA -->
                            <li class="nav-item">
                                <a href="{{ route('berita.index') }}"
                                    class="nav-link active">
                                    Berita
                                </a>
                            </li>

                            <!-- POTENSI WISATA -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Potensi Wisata
                                </a>
                            </li>

                            <!-- IDM -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    IDM & SDGs
                                </a>
                            </li>

                            <!-- KETAHANAN PANGAN -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Ketahanan Pangan
                                </a>
                            </li>

                            <!-- KEUANGAN -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Keuangan
                                </a>
                            </li>

                            <!-- DOWNLOAD -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Download
                                </a>
                            </li>

                            <!-- MENU GRID -->
                            <li class="nav-item">
                                <a href="#" class="nav-grid">
                                    <i class="bi bi-grid-3x3-gap-fill"></i>
                                </a>
                            </li>

                        </ul>

                    </div>

                </nav>

            </div>

        </div>

    </header>

    <!-- =========================
         CONTENT
    ========================== -->
    <main class="main-content">

        <div class="container">

            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <div class="main-content">
                @yield('content')
            </div>

        </div>

    </main>


    <!-- =========================
         FOOTER
    ========================== -->
    <footer class="footer-desa">

        <div class="container py-5">

            <div class="row g-4">

                <!-- Identitas Desa -->
                <div class="col-lg-5 col-md-6">

                    <div class="footer-brand mb-3">
                        PEMERINTAH DESA<br>
                        JALATRANG
                    </div>

                    <div class="footer-label">
                        ALAMAT KANTOR DESA
                    </div>

                    <p>
                        Jalan Raya Cipaku Nomor 181<br>
                        Desa Jalatrang, Kecamatan Cipaku<br>
                        Kabupaten Ciamis
                    </p>

                    <p>
                        <i class="bi bi-envelope me-2"></i>
                        Email Pemerintah Desa Jalatrang
                    </p>

                </div>


                <!-- Menu -->
                <div class="col-lg-3 col-md-3">

                    <h5>Menu</h5>

                    <ul>
                        <li>
                            <a href="{{ route('berita.index') }}">
                                Beranda
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('berita.index') }}">
                                Berita
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Struktural
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                APBDes
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Prestasi
                            </a>
                        </li>
                    </ul>

                </div>


                <!-- Link Terkait -->
                <div class="col-lg-4 col-md-3">

                    <h5>Link Terkait</h5>

                    <ul>
                        <li>
                            <a href="#">
                                Kemendesa
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Kabupaten Ciamis
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Pemerintah Provinsi Jawa Barat
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Panel Admin
                            </a>
                        </li>
                    </ul>

                    <h5 class="mt-4">Media Sosial</h5>

                    <div>
                        <a href="#" class="footer-icon">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="#" class="footer-icon">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="#" class="footer-icon">
                            <i class="bi bi-youtube"></i>
                        </a>

                        <a href="#" class="footer-icon">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                    </div>

                </div>

            </div>


            <!-- Copyright -->
            <div class="footer-bottom text-center">

                © 2026 Pemerintah Desa Jalatrang —
                Semua hak dilindungi.

            </div>

        </div>

    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>