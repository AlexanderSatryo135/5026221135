<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Halaman berita terbaru dari SMA Negeri 1 Surakarta. Dapatkan update berita dan informasi terkini dari sekolah.">
    <title>News - SMA Negeri 1 Surakarta</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .top-header { background-color: #004d61; color: white; padding: 10px 0; }
        .navbar-brand img { height: 50px; margin-right: 10px; }
        .hero { height: 400px; background: url('school-image.jpg') center/cover no-repeat; }
        .gallery img { width: 100%; border-radius: 5px; }
        .contact-form input, .contact-form textarea { margin-bottom: 10px; }
    </style>
</head>
<body>

<!-- Header Kontak -->
<header class="top-header text-center py-2">
    <div class="container">
        <i class="fas fa-phone"></i> (0271) 652975 |
        <i class="fas fa-map-marker-alt"></i> Jl. Monginsidi No.40, Gilingan, Kec. Banjarsari |
        <i class="fas fa-envelope"></i> surat@sman1-slo.sch.id
    </div>
</header>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="https://th.bing.com/th/id/R.9d3c3276cad7f258ccc8552f4e7cdf2b?rik=neTJFnUrIUfDHA&riu=http%3a%2f%2f3.bp.blogspot.com%2f_raOhhvZJibk%2fSUw1IJ3ch0I%2fAAAAAAAAAAo%2fXT975rpGdPM%2fS230%2f1_517846211l%5b1%5d.jpg&ehk=5XUE8CRzGFNIjlgKOM1u4KAAIN6BSWEB3vV69GGeCIk%3d&risl=&pid=ImgRaw&r=0" alt="Logo">
            <span>SMA Negeri 1 Surakarta</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('profile') }}">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('news') }}">News</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('gallery') }}">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('mpls') }}">MPLS</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('location') }}">Location</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('assignments') }}">Assignments</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- News -->
<section id="news" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Berita Terbaru</h2>
        <article class="mb-4 row">
            <div class="col-md-4 mb-3">
                <img src="https://www.sman1-slo.sch.id/upload/imagecache/12442629p5tekn-500x500.jpg" alt="Kegiatan 6" class="img-fluid">
            </div>
            <div class="col-md-8 mb-3">
                <h3>Pameran P5 "Berekayasa dengan Teknologi"</h3>
                <p>Tiada Hari Tanpa Prestasi! Berbicara dengan teknologi, tentu kita mengetahui betapa pesat perkembangannya di tengah kesibukan dunia yang memasuki fase serba</p>
                <a href="https://www.sman1-slo.sch.id/berita/detail/9/pameran-p-" class="btn btn-primary btn-sm">Baca selengkapnya</a>
            </div>
        </article>
        <article class="mb-4 row">
            <div class="col-md-4 mb-3">
                <img src="https://www.sman1-slo.sch.id/upload/imagecache/47604133PELEPASAN12-500x287.jpg" alt="Kegiatan 6" class="img-fluid">
            </div>
            <div class="col-md-8 mb-3">
                <h3>Penyerahan Siswa Kelas XII Kepada Orang Tua / Wali</h3>
                <p>Tiga tahun bukan waktu yang singkat dalam menempuh pendidikan. Saat pertama kali menjadi siswa SMA Negeri 1 Surakarta, masih lugu</p>
                <a href="https://www.sman1-slo.sch.id/berita/detail/8/penyerahan-siswa-kelas-xii-kepada-orang-tua--wali/" class="btn btn-primary btn-sm">Baca selengkapnya</a>
            </div>
        </article>
    </article>
    <article class="mb-4 row">
        <div class="col-md-4 mb-3">
            <img src="https://www.sman1-slo.sch.id/upload/imagecache/50356046GoldWhiteSimpleCongratulationsPostcard(1)-500x647.jpg" alt="Kegiatan 6" class="img-fluid">
        </div>
        <div class="col-md-8 mb-3">
            <h3>Siswa Lolos ke Perguruan Tinggi Negeri Jalur SNBP Tahun 2024</h3>
            <p>Sebanyak 85 siswa-siswi SMA Negeri 1 Surakarta dinyatakan lolos Seleksi Nasional Berdasarkan Prestasi (SNBP) Tahun 2024 di berbagai perguruan tinggi negeri sesuai dengan pilihan masing-masing siswa.</p>
            <a href="https://www.sman1-slo.sch.id/berita/detail/5/siswa-lolos-ke-perguruan-tinggi-negeri-jalur-snbp-tahun-2024/" class="btn btn-primary btn-sm">Baca selengkapnya</a>
        </div>
    </article>
</article>
<article class="mb-4 row">
    <div class="col-md-4 mb-3">
        <img src="https://www.sman1-slo.sch.id/upload/imagecache/10998964WhatsAppImage2024-01-28at11.53.21-500x500.jpeg" alt="Kegiatan 6" class="img-fluid">
    </div>
    <div class="col-md-8 mb-3">
        <h3>SACATO (SMANSA Campus Tour) 2024</h3>
        <p>SACATO (SMANSA Campus Tour) merupakan kegiatan kunjungan ke universitas yang dilaksanakan pada Hari Rabu, 24 Januari 2024. SACATO diikuti oleh seluruh siswa kelas XI, dengan didampingi oleh beberapa Bapak/Ibu Guru.</p>
        <a href="https://www.sman1-slo.sch.id/berita/detail/4/sacato-smansa-campus-tour-2024/" class="btn btn-primary btn-sm">Baca selengkapnya</a>
    </div>
</article>
</article>
<article class="mb-4 row">
    <div class="col-md-4 mb-3">
        <img src="https://www.sman1-slo.sch.id/upload/imagecache/65972924schools-82250679-b6b9-4022-a8ae-bbfae71208ff-1639990762018-500x368.jpg" alt="Kegiatan 6" class="img-fluid">
    </div>
    <div class="col-md-8 mb-3">
        <h3>Pelatihan Penulisan Soal HOTS</h3>
        <p>Pada hari Rabu, 24 November 2021 telah dilaksanakan Pelatihan Penulisan Soal HOTS bagi Bapak Ibu Guru SMA Negeri 1 Surakarta.</p>
        <a href="https://www.sman1-slo.sch.id/berita/detail/2/pelatihan-penulisan-soal-hots/" class="btn btn-primary btn-sm">Baca selengkapnya</a>
    </div>
</article>
</article>
        <article class="mb-4 row">
            <div class="col-md-4 mb-3">
                <img src="https://www.sman1-slo.sch.id/upload/imagecache/14943636WhatsAppImage2024-04-23at20.26.08-500x500.jpeg" alt="Kegiatan 6" class="img-fluid">
            </div>
            <div class="col-md-8 mb-3">
                <h3>Tim OSN Smansa lolos ke tingkat Provinsi</h3>
                <p>Tiada Hari Tanpa Prestasi!

                    Kami ucapkan selamat dan sukses kepada tim OSN yang lolos ke provinsi melalui pengumuman pada Rabu, 17 April 2024.

                    SMAN 1 Surakarta berhasil mengirimkan sejumlah perwakilan untuk beberapa bidang, antara lain:

                    1. Callista Vania Putri Kismantoro (Informatika)
                    2. Insan Rasyid Rayyana Jaya Putra (Informatika)
                    3. Reyvi Aryandra Al Firdaus (Matematika)
                    4. Irsa Arrasyad Wisnu Priarto (Matematika)
                    5. Chrisnata Adji Nanda Wiguna (Biologi)
                    6. Khansa Belva Maritza (Biologi)
                    7. Ashila Aiko Hamranani (Biologi)
                    8. Gladis Ratna Saputri (Ekonomi)
                    </p>
                <a href="https://www.sman1-slo.sch.id/berita/detail/6/tim-osn-smansa-lolos-ke-tingkat-provinsi/" class="btn btn-primary btn-sm">Baca selengkapnya</a>
            </div>
        </article>
        <!-- Tambah berita lagi -->
    </div>
</section>


<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 SMA Negeri 1 Surakarta. All rights reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
