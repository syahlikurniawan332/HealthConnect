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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="{{ asset('assets/js/tambah.js') }}"></script>
</head>

<body>

    @include('header')

    <!-- awal -->
    <div class="container">
        <h1 class="col-12 mt-4">Toko Kesehatan</h1>
        <div class="row mt-4">
            <div class="col-4">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Kategori</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Produk</a>
                </div>
            </div>
            <div class="col-8">
                <div class="" style="background-color: beige;">
                    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true"
                        class="scrollspy-example mx-3" tabindex="0">
                        <h4 id="list-item-1">Kategori</h4>
                        <div class="row">
                            <div class="col-md-3 col-12 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="#" style="text-decoration: none !important; color : black;">
                                            <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top"
                                                alt="...">
                                            <p class="my-2 mb-0 card-text">Vitamin</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-12 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        @foreach($kategoris as $kategori)
                                        <img src="{{ asset('storage/' . $kategori->image) }}" alt="{{ $kategori->nama_kat }}">
                                        <p>{{ $kategori->nama_kat }}</p>
                                        @endforeach
                                        <!-- <a href="#" style="text-decoration: none !important; color : black;">
                                            <img src="{{ asset('assets/img/tanya.jpg') }}" class="card-img-top"
                                                alt="...">
                                            <p class="my-2 mb-0 card-text">Kontrasepsi & Hormon</p>
                                        </a> -->
                                    </div>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <a href="#" class="btn btn-primary text-center mt-3 col-3" data-bs-toggle="modal"
                                    data-bs-target="#ModalDataIbu">Tambah Kategori</a>
                            </div>


                            <!-- modal  -->
                            <div class="modal fade" id="ModalDataIbu" tabindex="-1"
                                aria-labelledby="ModalTambahDataIbuLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalTambahDataIbuLabel">Masukkan Kategori Baru
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body lg-4">
                                            <form action="{{route('kategori.store1') }}" method="post" enctype="multipart/form-data>
                                                @csrf
                                                <div class="input-group mt-1">
                                                    <span class="input-group-text">Nama Kategori</span>
                                                    <input type="text" name="nama_kat" class="form-control"
                                                        placeholder="">
                                                </div>
                                                <div class="input-group mt-2">
                                                    <span class="input-group-text">Gambar</span>
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                            </form>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                                            <button type="button" class="btn btn-Danger" data-bs-dismiss="modal"
                                                id="btnBatal">Batal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end  -->

                        </div>
                        <h4 id="list-item-2" class="mt-2">Produk</h4>
                        <div class="row pb-3">
                            <div class="col-md-3 col-12 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('assets/img/penambah.jpg') }}" class="card-img-top"
                                            alt="...">
                                        <p class="my-2 mb-0 card-text">Appeton</p>
                                        <p class="my-2 mb-0 card-text">Harga</p>
                                        <p class="my-2 mb-0 card-text">299.000</p>
                                        <!-- <div class="qty mt-5">
                                            <span class="minus bg-dark">-</span>
                                            <input type="number" class="count" name="qty" value="1">
                                            <span class="plus bg-dark">+</span>
                                        </div> -->
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-12 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('assets/img/temu.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">nama produk</p>
                                        <p class="my-2 mb-0 card-text">Harga</p>
                                        <p class="my-2 mb-0 card-text">-</p>
                                        <div class="row">
                                            <a href="#" class="btn btn-primary text-center ms-auto mt-3">Tambah</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-12 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('assets/img/lab.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">nama produk</p>
                                        <p class="my-2 mb-0 card-text">Harga</p>
                                        <p class="my-2 mb-0 card-text">-</p>
                                        <div class="row">
                                            <a href="#" class="btn btn-primary text-center ms-auto mt-3">Tambah</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-12 d-grid gap-2 text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('assets/img/toko.jpg') }}" class="card-img-top" alt="...">
                                        <p class="my-2 mb-0 card-text">nama produk</p>
                                        <p class="my-2 mb-0 card-text">Harga</p>
                                        <p class="my-2 mb-0 card-text">-</p>
                                        <div class="row">
                                            <a href="#" class="btn btn-primary text-center ms-auto mt-3">Tambah</a>
                                        </div>
                                    </div>
                                </div>
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