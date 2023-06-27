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
        <h1 class="col-12 mb-4">Profile Dokter</h1>
        <div class="row row1">
            <div class="col-md-8 col-12 col-lg-8">
                <div class="border border-2">
                    <div class="d-flex gap-2">
                        <div class="mx-2 my-2">
                            <img src="{{ asset('assets/img/garam.jpg') }}" alt="" class="img-fluid"
                                style="width: 18rem;">
                        </div>
                        <div class="mx-2 my-2">
                            <p class="fs-5">Nama Dokter </p>
                            <p class="fs-6">Spesialis Dokter</p>
                        </div>
                    </div>
                    <div class="mx-2 my-2 mt-4">
                        <h3>Tipe Konsultasi</h3>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Konsultasi</option>
                            <option value="1">Konsultasi Via Chat</option>
                            <option value="2">Konsultasi Via Telephone</option>
                        </select>
                    </div>
                    <div class="mx-2 my-2 mt-4">
                        <h3>Jadwal</h3>
                        <input type="date" class="form-control" data-toggle="datetimepicker">
                    </div>
                    <div class="mx-2 my-2 mt-4 mb-4">
                        <h3>Waktu</h3>
                        <input type="time" class="form-control" data-toggle="datetimepicker">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 col-lg-4">
                <div class="border border-1">
                    <h3 class="text-center">Kode Voucher</h3>
                    <div class="d-flex gap-2">
                        <div class="input-group mb-3 mx-2 my-2">
                            <input type="text" class="form-control" placeholder="Kode Voucher" aria-label="Username"
                                aria-describedby="basic-addon1">
                            <p class="ms-2 mt-2">Masukan Kode Voucher</p>
                        </div>
                    </div>
                    <div class="mx-2">
                        <table class="table">
                            <tr>
                                <td>Biaya Konsultasi</td>
                                <td>Harga</td>
                            </tr>
                            <tr>
                                <td>promo</td>
                                <td>Potongan Harga</td>
                            </tr>
                            <tr>
                                <td>Total pembayaran</td>
                                <td>Harga</td>
                            </tr>
                        </table>
                    </div>
                    <div class="d-flex gap-2 mx-2 my-2 mb-3 justify-content-center">
                        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Bayar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir -->

    @include('modalpembayaran')

    @include('footer')

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</html>