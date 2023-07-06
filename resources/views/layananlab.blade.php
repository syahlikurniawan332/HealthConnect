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
    <div class="container">
        <h1 class="col-12 mt-2">Layanan Lab</h1>
        <div class="row">
            <div class="col-12">
                <div class="border border-secondary border-1">
                    <h3 class="col-12 mx-3 mt-3 ms-4">Layanan</h3>
                    <div class="row mx-3 mt-4">
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">Vaksinasi</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">Covid-19</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">MCU</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">Tes Laboratorium</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">Kecantikan</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">Gigi dan Mulut</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mx-3 mt-3">
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">Kehamilan</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">kulit & kelamin</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">Pemeriksaan kesehatan</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">Keluarga Berencana</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">Imunisasi</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">THT</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mx-3 mt-3">
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">Suntik</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">Terapi</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">Tindakan Medis</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">Bedah Minor</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">Alat Reproduksi</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-6 d-grid gap-2 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                        <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">Akupuntur</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="detailKonten" class="collapse">
                        <div class="row mx-3 mt-3">
                            <div class="col-md-2 col-6 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                            <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top"
                                                alt="...">
                                            <p class="my-2 mb-0 card-text">Mata</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                            <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top"
                                                alt="...">
                                            <p class="my-2 mb-0 card-text">Persalinan</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                            <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top"
                                                alt="...">
                                            <p class="my-2 mb-0 card-text">Kesehatan</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                            <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top"
                                                alt="...">
                                            <p class="my-2 mb-0 card-text">Non Laboratorium</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                            <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top"
                                                alt="...">
                                            <p class="my-2 mb-0 card-text">Perawatan</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                            <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top"
                                                alt="...">
                                            <p class="my-2 mb-0 card-text">Skrinning</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-3 mt-3">
                            <div class="col-md-2 col-6 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                            <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top"
                                                alt="...">
                                            <p class="my-2 mb-0 card-text">Radiologi & Elektromedik</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                            <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top"
                                                alt="...">
                                            <p class="my-2 mb-0 card-text">Home Care</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                            <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top"
                                                alt="...">
                                            <p class="my-2 mb-0 card-text">Hewan Peliharaan</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                            <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top"
                                                alt="...">
                                            <p class="my-2 mb-0 card-text">Relaksasi</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                            <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top"
                                                alt="...">
                                            <p class="my-2 mb-0 card-text">Penunjang</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-6 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="tanyadokter" style="text-decoration: none !important; color : black;">
                                            <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top"
                                                alt="...">
                                            <p class="my-2 mb-0 card-text">Tes Genomik</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 ms-3 my-3 d-flex justify-content-center ">
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#detailKonten" aria-expanded="false" aria-controls="detailKonten">
                                Lihat Selengkapnya
                            </button>
                        </div>
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