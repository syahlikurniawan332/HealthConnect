<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
</head>

<body>
    @include('header')

    <!-- topik terkini -->
    <div class="container mt-3">
        <h1 class="col-12 mb-3">Topik Terkini</h1>
        <button type="button" class="btn btn-outline-primary mx-1 my-1" disabled>Olahraga</button>
        <button type="button" class="btn btn-outline-primary mx-1 my-1" disabled>Makanan untuk yang Diet</button>
        <button type="button" class="btn btn-outline-primary mx-1 my-1" disabled>Diet</button>
        <button type="button" class="btn btn-outline-primary mx-1 my-1" disabled>Kehamilan</button>
    </div>
    <!-- paling populer -->
    <div class="container mt-3">
        <h1 class="col-12 mb-3">Paling Populer</h1>
        <div class="row row2">
            <div class="col-lg-8">
                <div class="card mb-3">
                    <a href="{{ url('#') }}">
                        <img src="{{ asset('assets/img/family.jpg') }}" class="card-img-top" alt="Gambar Populer">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ url('#') }}" style="text-decoration: none !important; color: black;">
                                Kunci awet muda dan hidup sehat
                            </a>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 overflow-auto" style="max-height: 550px;">
                <div class="row mb-4">
                    <div class="col-4">
                        <a href="{{ url('#') }}">
                            <img src="{{ asset('assets/img/garam.jpg') }}" class="img-fluid" alt="Gambar Populer">
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="{{ url('#') }}" style="text-decoration: none !important; color: black;">
                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4">
                        <a href="{{ url('#') }}">
                            <img src="{{ asset('assets/img/pil.webp') }}" class="img-fluid" alt="Gambar Populer">
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="{{ url('#') }}" style="text-decoration: none !important; color: black;">
                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4">
                        <a href="{{ url('#') }}">
                            <img src="{{ asset('assets/img/otak.jpg') }}" class="img-fluid" alt="Gambar Populer">
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="{{ url('#') }}" style="text-decoration: none !important; color: black;">
                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4">
                        <a href="{{ url('#') }}">
                            <img src="{{ asset('assets/img/temu.jpg') }}" class="img-fluid" alt="Gambar Populer">
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="{{ url('#') }}" style="text-decoration: none !important; color: black;">
                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4">
                        <a href="{{ url('#') }}">
                            <img src="{{ asset('assets/img/sayur.jpg') }}" class="img-fluid" alt="Gambar Populer">
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="{{ url('#') }}" style="text-decoration: none !important; color: black;">
                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4">
                        <a href="{{ url('#') }}">
                            <img src="{{ asset('assets/img/lari.jpg') }}" class="img-fluid" alt="Gambar Populer">
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="{{ url('#') }}" style="text-decoration: none !important; color: black;">
                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4">
                        <a href="{{ url('#') }}">
                            <img src="{{ asset('assets/img/sayur.jpg') }}" class="img-fluid" alt="Gambar Populer">
                        </a>
                    </div>
                    <div class="col-8">
                        <a href="{{ url('#') }}" style="text-decoration: none !important; color: black;">
                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir -->

    <!-- Artikel terbaru  -->
    <div class="container">
        <h1 class="col-12 mb-3">Artikel Terbaru</h1>
        <div class="row row2">
            <div class="col-md-3">
                <div class="card mb-3" style="max-width: 25rem;">
                    <div class="row g-0">
                        <div class="col-4 col-md-12">
                            <img src="{{ asset('assets/img/sayur.jpg') }}" class="img-fluid rounded-start" alt="..."
                                style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-8 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" style="max-width: 25rem;">
                    <div class="row g-0">
                        <div class="col-4 col-md-12">
                            <img src="{{ asset('assets/img/sayur.jpg') }}" class="img-fluid rounded-start" alt="..."
                                style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-8 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" style="max-width: 25rem;">
                    <div class="row g-0">
                        <div class="col-4 col-md-12">
                            <img src="{{ asset('assets/img/kepala.jpg') }}" class="img-fluid rounded-start" alt="..."
                                style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-8 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" style="max-width: 25rem;">
                    <div class="row g-0">
                        <div class="col-4 col-md-12">
                            <img src="{{ asset('assets/img/otak.jpg') }}" class="img-fluid rounded-start" alt="..."
                                style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-8 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row2">
            <div class="col-md-3">
                <div class="card mb-3" style="max-width: 25rem;">
                    <div class="row g-0">
                        <div class="col-4 col-md-12">
                            <img src="{{ asset('assets/img/sayur.jpg') }}" class="img-fluid rounded-start" alt="..."
                                style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-8 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" style="max-width: 25rem;">
                    <div class="row g-0">
                        <div class="col-4 col-md-12">
                            <img src="{{ asset('assets/img/sayur.jpg') }}" class="img-fluid rounded-start" alt="..."
                                style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-8 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" style="max-width: 25rem;">
                    <div class="row g-0">
                        <div class="col-4 col-md-12">
                            <img src="{{ asset('assets/img/sayur.jpg') }}" class="img-fluid rounded-start" alt="..."
                                style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-8 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" style="max-width: 25rem;">
                    <div class="row g-0">
                        <div class="col-4 col-md-12">
                            <img src="{{ asset('assets/img/sayur.jpg') }}" class="img-fluid rounded-start" alt="..."
                                style="height: 100%; object-fit: cover;">
                        </div>
                        <div class="col-8 col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-grid gap-2 col-md-1 mx-auto my-3">
        <a class="btn btn-primary" href="#" role="button">selanjutnya</a>
    </div>
    <!-- akhir -->

    @include('footer')

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</html>