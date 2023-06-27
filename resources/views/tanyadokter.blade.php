<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
</head>

<body>

    @include('header')

    <div class="container mt-3">
        <h1 class="col-12">Konsultasi dengan Dokter</h1>
        <p class="col-12">Konsultasi dengan Dokter rekomendasi kami</p>
        <div class="card mt-3" style="max-width: auto;">
            <div class="row1 d-flex align-items-center">
                <div class="col-md-2">
                    <img src="{{ asset('assets/img/tanya.jpg') }}" class="img-fluid rounded-circle ms-2"
                        style="width: 10rem;" alt="...">
                </div>
                <div class="col-md-10">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="mx-1">
                            <p class="card-title fw-bold fs-5">Nama Dokter</p>
                            <p class="card-text fs-6">Dokter Umum</p>
                            <p class="card-text fs-6">Harga</p>
                        </div>
                        <div>
                            <a href="profiledokter" class="btn btn-primary">Konsultasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3" style="max-width: auto;">
            <div class="row1 d-flex align-items-center">
                <div class="col-md-2">
                    <img src="{{ asset('assets/img/tanya.jpg') }}" class="img-fluid rounded-circle ms-2"
                        style="width: 10rem;" alt="...">
                </div>
                <div class="col-md-10">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="mx-1">
                            <p class="card-title fw-bold fs-5">Nama Dokter</p>
                            <p class="card-text fs-6">Dokter Umum</p>
                            <p class="card-text fs-6">Harga</p>
                        </div>
                        <div>
                            <a href="profiledokter" class="btn btn-primary">Konsultasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cari spesialis -->
    <div class="container mt-5">
        <h1 class="col-12">Cari Spesialis</h1>
        <div class="border border-2">
            <div class="row mt-4 ms-2 me-2">
                <div class="col-md-2 col-5 text-center">
                    <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top rounded-circle" alt="...">
                    <p class="my-2 mb-0 card-text">Cari Spesialis</p>
                </div>
                <div class="col-md-2 col-5 text-center">
                    <img src="{{ asset('assets/img/temu.jpg') }}" class="card-img-top rounded-circle" alt="...">
                    <p class="my-2 mb-0 card-text">Cari Spesialis</p>
                </div>
                <div class="col-md-2 col-5 text-center">
                    <img src="{{ asset('assets/img/lab.jpg') }}" class="card-img-top rounded-circle" alt="...">
                    <p class="my-2 mb-0 card-text">Cari Spesialis</p>
                </div>
                <div class="col-md-2 col-5 text-center">
                    <img src="{{ asset('assets/img/toko.jpg') }}" class="card-img-top rounded-circle" alt="...">
                    <p class="my-2 mb-0 card-text">Cari Spesialis</p>
                </div>
                <div class="col-md-2 col-5 text-center">
                    <img src="{{ asset('assets/img/toko.jpg') }}" class="card-img-top rounded-circle" alt="...">
                    <p class="my-2 mb-0 card-text">Cari Spesialis</p>
                </div>
                <div class="col-md-2 col-5 text-center">
                    <img src="{{ asset('assets/img/toko.jpg') }}" class="card-img-top rounded-circle" alt="...">
                    <p class="my-2 mb-0 card-text">Cari Spesialis</p>
                </div>
            </div>
            <div class="row mt-5 mb-4 ms-2 me-2">
                <div class="col-md-2 col-5 text-center">
                    <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top rounded-circle" alt="...">
                    <p class="my-2 mb-0 card-text">Cari Spesialis</p>
                </div>
                <div class="col-md-2 col-5 text-center">
                    <img src="{{ asset('assets/img/temu.jpg') }}" class="card-img-top rounded-circle" alt="...">
                    <p class="my-2 mb-0 card-text">Cari Spesialis</p>
                </div>
                <div class="col-md-2 col-5 text-center">
                    <img src="{{ asset('assets/img/lab.jpg') }}" class="card-img-top rounded-circle" alt="...">
                    <p class="my-2 mb-0 card-text">Cari Spesialis</p>
                </div>
                <div class="col-md-2 col-5 text-center">
                    <img src="{{ asset('assets/img/toko.jpg') }}" class="card-img-top rounded-circle" alt="...">
                    <p class="my-2 mb-0 card-text">Cari Spesialis</p>
                </div>
                <div class="col-md-2 col-5 text-center">
                    <img src="{{ asset('assets/img/toko.jpg') }}" class="card-img-top rounded-circle" alt="...">
                    <p class="my-2 mb-0 card-text">Cari Spesialis</p>
                </div>
                <div class="col-md-2 col-5 text-center">
                    <img src="{{ asset('assets/img/toko.jpg') }}" class="card-img-top rounded-circle" alt="...">
                    <p class="my-2 mb-0 card-text">Cari Spesialis</p>
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