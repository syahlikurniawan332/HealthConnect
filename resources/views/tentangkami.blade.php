<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Coneect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
</head>

<body>
    @include('header')

    <div class="container">
        <h1 class="col-12 mb-3 mt-3">Tentang Kami</h1>
        <div class="row">
            <div class="card text-bg-dark">
                <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.922); opacity: 0.8;">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h3 class="card-title text-center mb-3 text-sm-center text-lg-center"
                            style="font-size: 2rem; font-size: clamp(24px, 5vw, 28px);">
                            Bersama Health Connect kesehatan dalam genggaman</h3>
                        <p class="card-text text-center text-sm-center text-lg-center"
                            style="font-size: 1.5rem; font-size: clamp(16px, 3vw, 20px);">
                            Mari bersama-sama menciptakan kebiasaan hidup sehat. Ajak teman, keluarga, dan orang-orang
                            terdekatmu untuk berkomitmen menjaga kesehatan tubuh dan pikiran. Bersama kita bisa
                            melakukannya!</p>
                    </div>
                </div>
                <img src="{{ asset('assets/img/dok.jpg') }}" class="card-img" alt="...">
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="col-12 mb-3 mt-3">Tentang Kami</h1>
        <div class="row row2 border border-3 p-3">
            <h5 class="col-12 mb-2">Latar Terbentuknya</h5>
            <p>
                Latar belakang terbentuknya web kesehatan berbasis konsultasi virtual berkaitan erat dengan perkembangan
                teknologi digital dan kebutuhan masyarakat akan akses kesehatan yang lebih mudah, cepat, dan efisien.
                Beberapa faktor yang mempengaruhi terbentuknya web kesehatan berbasis konsultasi virtual antara lain:
            </p>
            <ul class="ms-3">
                <li>Perkembangan Teknologi: Kemajuan teknologi informasi dan komunikasi telah mengubah cara kita
                    berinteraksi dan mengakses informasi.</li>
                <li>Keterbatasan Fisik dan Geografis: Konsultasi medis tradisional seringkali terkendala oleh batasan
                    fisik dan geografis.</li>
                <li>Kemudahan Akses dan Waktu: Konsultasi medis tradisional seringkali membutuhkan waktu yang lama dalam
                    hal membuat janji, antre, dan transportasi.</li>
                <li>Penyebaran Pengetahuan dan Edukasi Kesehatan: Web kesehatan berbasis konsultasi virtual juga dapat
                    berfungsi sebagai sumber informasi dan edukasi kesehatan yang mudah diakses.</li>
                <li>Pandemi COVID-19: Pandemi global COVID-19 telah menjadi pendorong utama bagi perkembangan web
                    kesehatan berbasis konsultasi virtual.</li>
            </ul>
            <p>
                Dengan latar belakang ini, web kesehatan berbasis konsultasi virtual terbentuk untuk memenuhi kebutuhan
                dan tantangan dalam memberikan akses kesehatan yang lebih luas, praktis, dan efisien bagi masyarakat.
            </p>

            <h5 class="col-12 mb-2">Visi & Misi Health Connect</h5>
            <p>
                <strong>Visi:</strong> Menjadi platform kesehatan yang terkemuka dalam memberikan akses
                mudah, cepat, dan berkualitas tinggi untuk konsultasi medis virtual, meningkatkan kesehatan
                dan kesejahteraan masyarakat secara luas.
            </p>
            <p>
                <strong>Misi:</strong>
            </p>
            <ul class="ms-3">
                <li>Memberikan akses mudah dan terjangkau ke layanan konsultasi medis virtual yang
                    berkualitas tinggi, sehingga memungkinkan individu untuk memperoleh nasihat dan
                    penanganan medis tanpa batasan geografis.</li>
                <li>Menyediakan platform yang aman, terpercaya, dan privasi terjamin untuk berkomunikasi
                    dengan profesional kesehatan yang berkualifikasi.</li>
                <li>Menghadirkan tim medis yang berpengalaman dan terlatih, yang siap memberikan penjelasan
                    dan saran medis yang akurat dan terpercaya.</li>
                <li>Menyediakan beragam layanan konsultasi, mulai dari diagnosis awal, pengobatan jangka
                    pendek, hingga manajemen penyakit kronis.</li>
                <li>Mendorong edukasi kesehatan dan pencegahan penyakit melalui informasi yang akurat dan
                    terkini, untuk meningkatkan kesadaran dan memotivasi individu dalam mengadopsi gaya
                    hidup sehat.</li>
                <li>Berinovasi dalam teknologi dan solusi digital untuk memastikan pengalaman konsultasi
                    virtual yang lancar dan interaktif bagi pengguna.</li>
                <li>Bermitra dengan profesional kesehatan, rumah sakit, dan lembaga kesehatan lainnya untuk
                    memperluas jangkauan dan mendukung kolaborasi dalam penyediaan layanan kesehatan
                    virtual.</li>
            </ul>
        </div>
    </div>

    <div class="container">
        <h1 class="col-12 mt-3 mb-3 text-center">Apakah Anda Seorang Dokter ?</h1>
        <div class="row">
            <p class="d-grid gap-2 col-md-10 mx-auto" style="font-size: 20px; font-style:italic;">Bergabung bersama kami
                di health connect untuk menjadi bagian dalam membantu masyarakat untuk bisa sehat
                kapanpun dan dimanapun.</p>
        </div>
    </div>
    <div class="d-grid gap-2 col-md-2 mx-auto my-3 shadow">
        <a class="btn btn-primary" href="#" role="button">Bergabung Sekarang</a>
    </div>

    @include('footer')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</html>