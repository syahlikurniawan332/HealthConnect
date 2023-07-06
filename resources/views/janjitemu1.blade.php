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

    <div class="container mt-3">
        <h2 class="col-12">Hasil Pencarian Untuk layanan / Spesialis medis</h2>
        <p class="col-12">menampilkan jumlah hasil</p>
        <div class="row row1">
            <div class="col-md-4 col-12">
                <div class="border border-2">
                    <div class="d-flex gap-1">
                        <i class="bi bi-geo-alt ms-2 fs-5"></i>
                        <p>Lokasi</p>
                        <a href="" class="btn btn-outline-primary ms-auto me-2">Ubah Lokasi</a>
                    </div>
                    <div class="border border-secondary"></div>
                    <div class="mx-2 overflow-auto" style="max-height: 400px;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Semua Lokasi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Terdekat
                            </label>
                        </div>

                        <div class="border border-secondary"></div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                                value="option3">
                            <label class="form-check-label" for="exampleRadios3">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4"
                                value="option4">
                            <label class="form-check-label" for="exampleRadios4">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5"
                                value="option5">
                            <label class="form-check-label" for="exampleRadios5">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6"
                                value="option6">
                            <label class="form-check-label" for="exampleRadios6">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios7"
                                value="option7">
                            <label class="form-check-label" for="exampleRadios7">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios8"
                                value="option8">
                            <label class="form-check-label" for="exampleRadios8">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios9"
                                value="option9">
                            <label class="form-check-label" for="exampleRadios9">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios10"
                                value="option10">
                            <label class="form-check-label" for="exampleRadios10">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11"
                                value="option11">
                            <label class="form-check-label" for="exampleRadios11">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios12"
                                value="option12">
                            <label class="form-check-label" for="exampleRadios12">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios13"
                                value="option13">
                            <label class="form-check-label" for="exampleRadios13">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios14"
                                value="option14">
                            <label class="form-check-label" for="exampleRadios14">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios15"
                                value="option15">
                            <label class="form-check-label" for="exampleRadios15">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios15"
                                value="option15">
                            <label class="form-check-label" for="exampleRadios15">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios15"
                                value="option15">
                            <label class="form-check-label" for="exampleRadios15">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios15"
                                value="option15">
                            <label class="form-check-label" for="exampleRadios15">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios15"
                                value="option15">
                            <label class="form-check-label" for="exampleRadios15">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios15"
                                value="option15">
                            <label class="form-check-label" for="exampleRadios15">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios15"
                                value="option15">
                            <label class="form-check-label" for="exampleRadios15">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios15"
                                value="option15">
                            <label class="form-check-label" for="exampleRadios15">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios15"
                                value="option15">
                            <label class="form-check-label" for="exampleRadios15">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios15"
                                value="option15">
                            <label class="form-check-label" for="exampleRadios15">
                                Nama Provinsi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios15"
                                value="option15">
                            <label class="form-check-label" for="exampleRadios15">
                                Nama Provinsi
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <div class="border border-2">
                    <div class="border border-2 my-1 mx-1">
                        <div class="d-flex gap-2 overflow-auto" style="max-width: 100%;">
                            <div class="col-md-3 col-4">
                                <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top img-fluid" alt="">
                            </div>
                            <div class="col-md-6 col-8">
                                <p class="fw-bold fs-5">Nama Dokter</p>
                                <p>Spesialis Dokter</p>
                                <p class="fw-bold">Nama Klinik / Rumah Sakit</p>
                                <p>Lokasi Tempat</p>
                            </div>
                            <div class="ms-auto my-auto">
                                <p class="ms-auto">Bayar di Rumah Sakit</p>
                                <a href="waktujanji" class="btn btn-primary text-center ms-auto">Bayar Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-2 my-1 mx-1">
                        <div class="d-flex gap-2 overflow-auto" style="max-width: 100%;">
                            <div class="col-md-3 col-4">
                                <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top img-fluid" alt="">
                            </div>
                            <div class="col-md-6 col-8">
                                <p class="fw-bold fs-5">Nama Dokter</p>
                                <p>Spesialis Dokter</p>
                                <p class="fw-bold">Nama Klinik / Rumah Sakit</p>
                                <p>Lokasi Tempat</p>
                            </div>
                            <div class="ms-auto my-auto">
                                <p class="ms-auto">Bayar di Rumah Sakit</p>
                                <a href="waktujanji" class="btn btn-primary text-center ms-auto">Bayar Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-2 my-1 mx-1">
                        <div class="d-flex gap-2 overflow-auto" style="max-width: 100%;">
                            <div class="col-md-3 col-4">
                                <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top img-fluid" alt="">
                            </div>
                            <div class="col-md-6 col-8">
                                <p class="fw-bold fs-5">Nama Dokter</p>
                                <p>Spesialis Dokter</p>
                                <p class="fw-bold">Nama Klinik / Rumah Sakit</p>
                                <p>Lokasi Tempat</p>
                            </div>
                            <div class="ms-auto my-auto">
                                <p class="ms-auto">Bayar di Rumah Sakit</p>
                                <a href="waktujanji" class="btn btn-primary text-center ms-auto">Bayar Sekarang</a>
                            </div>
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