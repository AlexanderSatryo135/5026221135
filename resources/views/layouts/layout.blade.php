<!DOCTYPE html>
<html lang="en">
<head>
    <title>Alexander Satryo Pinandhito Yudho Pratomo - 5026221135</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Laravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/js/fontawesome.js"></script>
    <script src="/js/js/solid.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="d-flex justify-content-center mt-3">
            @if (!request()->is(['pegawai/edit*', 'pegawai/tambah*', 'kertashvs/edit*', 'kertashvs/create*']))
                <a href="/pegawai"
                    class="btn {{ request()->is('pegawai*') ? 'btn-primary' : 'btn-secondary' }} me-2">
                    Data Pegawai
                </a>
                <a href="/"
                    class="btn {{ request()->is('welcome*') ? 'btn-primary' : 'btn-secondary' }} me-2">
                    Dashboard
                </a>
                <a href="/kertashvs"
                    class="btn {{ request()->is('kertashvs*') ? 'btn-primary' : 'btn-secondary' }}">
                    Data Kertas HVS
                </a>
                <a href="/pagecounter"
                    class="btn {{ request()->is('kertashvs*') ? 'btn-primary' : 'btn-secondary' }}">
                    Page Counter
                </a>
            @endif
        </div>
    </nav>

    <!-- Kontainer Utama -->
    <div class="container">
        <h2>Alexander Satryo Pinandhito Yudho Pratomo - 5026221135</h2>
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>

    </footer>
</body>
</html>
