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
                        <div class="row ">
                            @foreach($menus as $menu)
                            <div class="col-md-3 col-12 d-grid gap-2 text-center">
                                <div class="card shadow-sm bg-white" style="background-color: white !important ">
                                    <div
                                        class="d-flex flex-column bg-white  justify-content-between align-items-center rounded-4">
                                        <img src="{{asset('storage/' . $menu->gambar  ) }}" alt="" width="100%"
                                            height="100%">
                                        <h5 class="bg-white">{{$menu->nama_menu}}</h5>
                                        <h4 class="bg-white">Rp. {{number_format($menu->harga) }}</h4>
                                        <p class="bg-white ">{{$menu->keterangan}}</p>
                                        <div class="bg-white d-flex justify-content-between align-items-center">
                                            <div class="btn-group my-3">
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    href="/order">Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="row d-flex justify-content-center">
                            <a href="#" class="btn btn-primary text-center mt-3 col-3" data-bs-toggle="modal"
                                data-bs-target="#ModalTambahDataMenu">Tambah Kategori</a>
                        </div>
                        <!-- modal  -->
                        <div class="modal fade" id="ModalTambahDataMenu" tabindex="-1"
                            aria-labelledby="ModalTambahDataMenuLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalTambahDataMenuLabel">Masukkan Data Menu
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body lg-4">
                                        <form action="{{route('menu.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group mt-1">
                                                <span class="input-group-text">Nama</span>
                                                <input type="text" name="nama_menu" class="form-control" placeholder="">
                                            </div>
                                            <div class="input-group mt-2">
                                                <span class="input-group-text">Harga</span>
                                                <input type="text" name="harga" class="form-control" placeholder="">
                                            </div>

                                            <div class="input-group mt-2">
                                                <span class="input-group-text">Keterangan</span>
                                                <input type="text" name="keterangan" class="form-control"
                                                    placeholder="">
                                            </div>
                                            <div class="input-group mt-2">
                                                <span class="input-group-text">Gambar</span>
                                                <input type="file" name="gambar" class="form-control" placeholder="">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                                        <button type="button" class="btn btn-Danger" data-bs-dismiss="modal"
                                            id="btnBatal">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        <!-- end  -->
                        <h4 id="list-item-2" class="mt-2">Produk</h4>
                            <div class="row ">
                                @foreach($menus as $menu)
                                <div class="col-md-3 col-12 d-grid gap-2 text-center">
                                    <div class="card shadow-sm bg-white" style="background-color: white !important ">
                                        <div
                                            class="d-flex flex-column bg-white  justify-content-between align-items-center rounded-4">
                                            <img src="{{ asset('storage/' . $menu->gambar) }}" alt="" width="100%"
                                                height="100%">
                                            <h5 class="bg-white">{{$menu->nama_menu}}</h5>
                                            <h4 class="bg-white">Rp. {{number_format($menu->harga) }}</h4>
                                            <p class="bg-white ">{{$menu->keterangan}}</p>
                                            <div class="bg-white d-flex justify-content-between align-items-center">
                                                <div class="btn-group my-3">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        href="/order">Order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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