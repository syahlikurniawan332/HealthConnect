<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    @include('header')

    <!-- awal -->
    <div class="container-fluid mt-4">
        <h1 class="col-12">Temu Dokter</h1>
        <div class="row row1">
            <div class="col-md-8 col-12">
                <div class="border border-2">
                    <div class="d-flex gap-2">
                        <div class="my-1 mx-2">
                            <img src="{{ asset('assets/img/family.jpg') }}" class="fluid" alt=""
                                style="max-width: 14rem;">
                        </div>
                        <div class="d-grid gap-1 my-2 mx-2">
                            <h4>Nama Dokter</h4>
                            <h5>Spesialis Dokter</h5>
                            <h4>Nama Klinik / Rumah Sakit</h4>
                            <h5>Lokasi</h5>
                            <h5>Harga</h5>
                        </div>
                    </div>
                    <div class="mt-2 mx-2">
                        <h1>Tentang Dokter</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur maiores nemo minus ratione
                            pariatur incidunt quae sapiente ea, accusantium dicta nulla facilis enim deserunt velit!
                            Veniam, exercitationem culpa! Repudiandae maiores ipsa fugiat voluptatum porro error maxime
                            quibusdam ab cum nulla sit magnam soluta, possimus repellat voluptate eligendi. Culpa
                            mollitia vel, reiciendis quos suscipit corporis eaque optio, ea at, expedita voluptatum.</p>

                        <h1>Informasi Lainnya</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur maiores nemo minus ratione
                            pariatur incidunt quae sapiente ea, accusantium dicta nulla facilis enim deserunt velit!
                            Veniam, exercitationem culpa! Repudiandae maiores ipsa fugiat voluptatum porro error maxime
                            quibusdam ab cum nulla sit magnam soluta, possimus repellat voluptate eligendi. Culpa
                            mollitia vel, reiciendis quos suscipit corporis eaque optio, ea at, expedita voluptatum.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="border border-2">
                    <div class="justify-content-center align-items-center my-4">
                        <div class="text-center">
                            <h5>Pilih tanggal dan waktu kunjungan</h5>
                        </div>
                        <div class="d-flex gap-2 mt-4">
                            <a href="" class="btn btn-outline-primary mx-auto">
                                <i class="bi bi-calendar2-fill"></i>
                            </a>
                            <a href="" class="btn btn-outline-primary text-center mx-auto">hari ini,<br>tanggal</a>
                            <a href="" class="btn btn-outline-primary text-center mx-auto">besok,<br>tanggal</a>
                            <a href="" class="btn btn-outline-primary text-center mx-auto">lusa,<br>tanggal</a>
                        </div>
                    </div>
                    <div class="border border-1"></div>
                    <div class="d-grid gap-2 mx-3">
                        <div class="d-flex gap-2">
                            <i class="bi bi-brightness-alt-high-fill fs-1"></i>
                            <p class="mt-3 ">Pagi</p>
                        </div>
                        <p>-</p>
                        <div class="d-flex gap-2">
                            <i class="bi bi-sun-fill fs-1"></i>
                            <p class="mt-3">Siang</p>
                        </div>
                        <p>15.00</p>
                        <div class="d-flex gap-2">
                            <i class="bi bi-moon-fill fs-3"></i>
                            <p class="mt-3">Malam</p>
                        </div>
                        <p>19.00</p>
                        <a href="" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Bayar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir -->

    @include('footer')

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</html>