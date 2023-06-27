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
                    <div class="mx-2 my-2">
                        <h2>Tentang Dokter</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam necessitatibus corrupti
                            cupiditate sed voluptate corporis quibusdam quisquam magnam vel cum dolorum repellat,
                            maiores voluptatum tempore ab. Officia sit asperiores vel soluta, itaque ab iste vitae
                            doloremque totam! Reiciendis consequatur quisquam, optio vel porro molestias dolore? Cum
                            minus iure saepe ducimus!</p>
                        <h2>Pengalaman Praktik</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde pariatur doloribus eos
                            dolores
                            consequatur, sed minus hic, optio maiores sequi laboriosam ullam neque beatae architecto
                            commodi quam cumque fugit id cum iure vel rerum tempore autem. Neque vel, velit dolor
                            quia
                            aut consequuntur, deserunt sit repudiandae labore sint tempora corrupti ipsa non
                            perspiciatis consequatur facere beatae aperiam voluptatem. Earum, ut!</p>
                        <h2>Pendidikan Terakhir</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit et provident eaque
                            voluptate impedit delectus nihil sint. Officiis, eius libero.</p>
                        <h2>Tindakan Medis</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptatibus praesentium
                            culpa nihil totam officia doloribus eos, quaerat error accusamus soluta non iure ratione
                            saepe unde asperiores molestiae. Consectetur beatae consequuntur quibusdam numquam,
                            illum aut nemo dolor, eveniet minus pariatur ab repellat sed inventore! Culpa,
                            recusandae deleniti! Fuga quaerat, vitae, sed eius in consequuntur ducimus assumenda
                            mollitia praesentium commodi, odio deleniti tenetur labore. Rem natus, facilis quas
                            fugiat illo temporibus reprehenderit sint ipsa at corporis voluptate sequi dicta quos
                            nulla.</p>
                        <h2>Nomor STR</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, placeat?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 col-lg-4">
                <div class="border border-1">
                    <div class="d-grid gap-2 mx-2 my-2 justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/toko.jpg') }}" class="card-img-top border border-success" alt="...">
                    </div>
                    <p class="text-center fw-bold fs-2">Nama Dokter</p>
                    <p class="text-center fs-4">Spesialis Dokter</p>
                    <div class="d-flex gap-2 mx-2 my-2 justify-content-center">
                        <i class="bi bi-hand-thumbs-up-fill fs-5"></i>
                        <p class="mt-1">96 %</p>
                        <i class="bi bi-calendar-check-fill fs-5"></i>
                        <p class="mt-1">3 Tahun</p>
                    </div>
                    <div class="d-flex gap-2 mx-2 my-2 justify-content-center">
                        <i class="bi bi-sun fs-4"></i>
                        <p class="mt-1">Pagi</p>
                        <p class="mt-1">09:00 - 12:00</p>
                    </div>
                    <div class="d-flex gap-2 mx-2 my-2 justify-content-center">
                        <i class="bi bi-moon-fill fs-5"></i>
                        <p class="mt-1">Malam</p>
                        <p class="mt-1">19:30 - 22:30</p>
                    </div>
                    <div class="d-flex gap-2 mx-2 my-2 justify-content-center">
                        <a href="pembayaran" class="btn btn-primary">Konsultasi Sekarang</a>
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