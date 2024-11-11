<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA Negeri 1 Surakarta</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!---AOS-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

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

<!-- Profil -->
<section id="profil" class="py-5">
    <div class="container" data-aos="zoom-in-up"
    data-aos-delay="300"
    data-aos-duration="2000">
        <h2 class="text-center mb-4">Profil Sekolah</h2>
        <p class="text-left">Awal berdirinya Sekolah Lanjutan Atas Negeri pertama dimulai bulan Agustus 1943. Dalam masa pendudukan Jepang itu, Mr. Widodo Sastrodiningrat sebagai Kepala Bagian Pendidikan Kasunanan Surakarta dan Soetopo Adisepoetro sebagai Kepala Pendidikan Keresidenan Surakarta atas persetujuan pembesar Jepang membuka sekolah yang sederajat dengan AMS (Algemene Middlebaar School).</p>
        <p class="text-left">Pada tanggal 3 Nopember 1943, diresmikan pembukaan sebuah Sekolah Lanjutan Atas yang diberi nama Sekolah Menengah Tinggi Negeri (SMT Negeri) bertempat di gedung yang sekarang dipakai Sekolah SMP Negeri 1 Surakarta dengan Kepala Sekolah pertama Mr. Widodo Sastrodiningrat dengan Wakilnya S. Djajeng Soegianto. SMT Negeri ini mempunyai dua kelas yaitu: Kelas IA jurusan Sastra Budaya dengan 33 siswa; Kelas IB Jurusan Pasti Alam mempunyai 34 siswa. Kedua kelas itu diampu oleh 12 orang guru.</p>
        <p class="text-left">Agustus 1944 jabatan Kepala sekolah diserahterimakan dari Mr. Widodo Sastrodiningrat kepada S. Djajeng Soegianto sebagai kepala sekolah kedua. April 1945 jabatan Kepala Sekolah diserahterimakakan kepada N. Barnami karena S. Djajeng Soegianto diangkat menjadi Kepala Sekolah SMP Puteri di Pasar Legi Sala.</p>
        <p class="text-left">Akhir dari Perang Dunia II ketika Indonesia memerdekakan diri tanggal 17 Agustus 1945, SMT Negeri Surakarta diserahkan kepada Kantor Pendidikan Mangkunegaran Surakarta di bawah Kantor Baraya–Wiyata. Nopember 1945 para pelajar berjuang di garis depan serta gedung sekolah SMT Manahan ditutup dan gedungnya digunakan untuk asrama Barisan Polisi Istimewa (BPI) yang anggotanya terdiri dari pelajar SMT sendiri, sedangkan para guru dipekerjakan di Kantor Baraya–Wiyata dan diserahi tugas menerjemahkan Encyclopedia 16 volume.</p>
        <p class="text-left">Maret 1946 - Sekolah dibuka lagi dengan Kepala Sekolah keempat, yaitu Bapak Roespandji Atmowirogo. Bulan Juni 1946 untuk pertama kalinya SMT Negeri menyelenggarakan ujian akhir (istilah saat itu adalah ujian penghabisan) dengan hasil yang dinyatakan lulus pertama kali diantaranya Ny. Djatikusumo dan Omar Dhani.</p>
        <p class="text-left">April 1946 - Bapak Soepandam menjadi kepala sekolah kelima karena Bapak Roespandji Atmowirogo diangkat menjadi Pejabat Residen Surakarta. Juni 1947 diselenggarakan ujian penghabisan yang kedua dan Alumnus dinyatakan lulus antara lain: Prakoso, Achmadi, Suhendro, Padmosurasmo, dan Singgih Prawoto.</p>
        <p class="text-left">Juli 1947 - Terjadi Clash 1 sehingga membuat pelajar kembali meninggalkan bangku sekolah dengan kembali berjuang memanggul senjata. Gedung sekolah SMT Negeri yang digunakan Angkatan Laut di bawah pimpinan Achmad Yadau, sedang pelajar putri yang tidak berjuang belajar di pendapa rumah Bapak Parjatmo di Jl. Punggawan No. 10 Sala.</p>
        <p class="text-left">September 1947 - Sekolah mulai dibuka kembali dengan menggunakan gedung SMP Negeri II yang terletak di sudut barat daya Kraton Mangkunegaran. Para murid masuk siang hari pukul 13.30 sampai pukul 17.30</p>
        <p class="text-left">April 1948 - Gedung Sekolah SMT Negeri Manahan diserahkan kembali oleh Angkatan Laut. Juni 1948 dilaksanakan ujian penghabisan yang ketiga dan siswa dinyatakan lulus diantaranya: Baiquni, Sihiman, Sri Hartati, dan Siti Aminah.</p>
        <p class="text-left">18 Desember 1948 - Saat Clash II pecah, ada instruksi dari komandan Komando Militer Kota yang dijabat oleh Achmadi (mantan pelajar SMT Negeri Sala) untuk membakar gedung sekolah namun yang terbakar hanya sebagian sekolah saja. Para murid kembali berjuang memanggul senjata.</p>
        <p class="text-left">November 1949 - Kepala Sekolah SMT Negeri Bp. Soepandam mendapat perintah dari Menteri Pendidikan dan Kebudayaan untuk membuka kembali SMA Negeri A/B Sala, sedangkan Bp. Parjatmo dan Bp. Soemitro ditugaskan mencari gedung baru serta guru-gurunya. Ibu Awalin ditugaskan untuk menyelenggarakan pendaftaran para murid baik dari sekolah negeri maupun swasta.</p>
        <p class="text-left">Pada tanggal 15 Desember 1949 dibuka dengan resmi SMA Negeri A/B di Margoyudan Sala yang terdiri dari dua bagian, yaitu SMA Negeri A/B I dengan 12 kelas untuk murid biasa dan masuk pada pagi hari. SMA Negeri A/B II dengan 2 kelas untuk murid bekas pejuang dan masuk pada siang/sore hari.</p>
        <p class="text-left">Juni 1950 - Diadakan ujian penghabisan yang keempat atau yang pertama, di gedung Margoyudan, sedang murid yang dinyatakan lulus antara lain: Muso, Marsaid, dan Suripto. Nopember 1950 para pelajar bekas pejuang mendesak dan memohon untuk dibukanya enam kelas baru tambahan malam hari. Sebutan “Enam Kelas Baru” akhirnya dibuka dan digabungkan dengan SMA Negeri A/B II.</p>
        <p class="text-left">Pada tanggal 17 Agustus 1951 dibuka secara resmi SMA A/B Malam dengan nama SMA Negeri I Bagian malam yang terdiri dari 6 kelas. Maka sejak itu di Sala terdapat 3 SMA Negeri A/B II. SMA Negeri A/B di bawah satu pimpinan, yaitu SMA Negeri A/B, yang sekarang dikenal dengan nama SMA Negeri 1 Sala; dan SMA Negeri A/B II, yang dikenal dengan nama SMA Negeri 2 Sala; SMA Negeri A/B I bagian malam, atau sekarang SMA Negeri 3 Sala.</p>
        <p class="text-left">Untuk memperkuat pengajaran Sekolah ini mendapat tenaga pengajar sebanyak 16 orang serta mendapat bantuan tenaga pengajar dari Mahasiswa Universitas Gadjah Mada sebanyak 9 (sembilan) orang mahasiswa. Pada tahun 1952 mulai dirintis pendidikan dengan menggunakan laboratorium kimia, fisika, anatomi, dan fisiologi.</p>
        <p class="text-left">Tanggal 1 Agustus 1958 secara resmi dipecah ketiga sekolah inti dan diganti namanya:</p>
        <p class="text-left">1. SMA Negeri A/B I menjadi SMA Negeri IB di pimpin oleh Bp. Soepandam.</p>
        <p class="text-left">2. SMA Negeri A/B II menjadi SMA Negeri IIA di pimpin oleh Bp. Pajatmo.</p>
        <p class="text-left">3. SMA Negeri A/B I bagian malam menjadi SMA Negeri IIIB dipimpin oleh Bp. Rospandji Atmowirogo.</p>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 SMA Negeri 1 Surakarta. All rights reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
      AOS.init();
    </script>

<!-- Form Validation -->
<script>
    document.getElementById('contact-form').addEventListener('submit', function (event) {
        event.preventDefault();
        alert('Terima kasih! Pesan Anda sudah terkirim.');
    });
</script>

</body>
</html>
