<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA Negeri 1 Surakarta</title>

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
<header class="top-header text-center">
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

<!-- Hero Section -->
<section id="home" class="hero d-flex align-items-center justify-content-center text-white">
    <div class="text-center p-5" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 3px;">
        <h1>Selamat Datang di SMA Negeri 1 Surakarta</h1>
    </div>
</section>

<style>
    .hero {
        height: 870px;
        background: url(https://www.sman1-slo.sch.id/upload/picture/98952326PELEPASAN3.jpg) center/cover no-repeat;
    }

    .hero h1 {
        font-size: 3rem;
        font-weight: bold;
    }
</style>

<!-- MPLS -->
<section id="MPLS" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Masa Pengenalan Lingkungan Sekolah</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <img src="https://i.imgur.com/xDybHUR.jpeg" alt="MPLS 1" class="img-fluid">
            </div>
            <div class="col-md-4 mb-3">
                <img src="https://i.imgur.com/BH8HZVj.jpeg" alt="MPLS 2" class="img-fluid">
            </div>
            <a href="https://drive.google.com/file/d/1GUH0ghGtL8KnNwcTw9uHxY4AvIef2v-S/view">Informasi Tentang Masa Pengenalan Lingkungan Sekolah</a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 SMA Negeri 1 Surakarta. All rights reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Form Validation -->
<script>
    document.getElementById('contact-form').addEventListener('submit', function (event) {
        event.preventDefault();
        alert('Terima kasih! Pesan Anda sudah terkirim.');
    });
</script>

</body>
</html>
