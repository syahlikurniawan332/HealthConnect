<div class="row pb-3">
    <div class="col-md-3 col-12 d-grid gap-2 text-center">
        <div class="card">
            <div class="card-body">
                <img src="{{ asset('assets/img/penambah.jpg') }}" class="card-img-top" alt="...">
                <p class="my-2 mb-0 card-text">Appeton</p>
                <p class="my-2 mb-0 card-text">Harga</p>
                <p class="my-2 mb-0 card-text">299.000</p>
                <!-- <div class="qty mt-5">
                    <span class="minus bg-dark">-</span>
                    <input type="number" class="count" name="qty" value="1">
                    <span class="plus bg-dark">+</span>
                </div> -->
                <div class="row">
                    <a href="#" class="btn btn-primary text-center ms-auto mt-3">Masukan Keranjang</a>
                </div>
            </div>

        </div>

    </div>
    <div class="col-md-3 col-12 d-grid gap-2 text-center">
        <div class="card">
            <div class="card-body">
                @foreach($menus as $menu)
                <div class="col-md-3 col-12 d-grid gap-2 text-center">
                    <div class="card shadow-sm bg-white" style="background-color: white !important ">
                        <div class="d-flex flex-column bg-white  justify-content-between align-items-center rounded-4">
                            <img src="{{asset('storage/' . $menu->gambar  ) }}" alt="" width="100%" height="100%">
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
                <div class="row">
                    <a href="#" class="btn btn-primary text-center ms-auto mt-3">Masukan Keranjang</a>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row d-flex justify-content-center">
    <a href="#" class="btn btn-primary text-center mt-3 col-3" data-bs-toggle="modal"
        data-bs-target="#ModalTambahDataMenu">Tambah Kategori</a>
</div>

<!-- modal  -->
<div class="modal fade" id="ModalTambahDataMenu" tabindex="-1" aria-labelledby="ModalTambahDataMenuLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTambahDataMenuLabel">Masukkan Data Menu
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body lg-4">
                <form action="{{route('menu.store') }}" method="post" enctype="multipart/form-data">
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
                        <input type="text" name="keterangan" class="form-control" placeholder="">
                    </div>
                    <div class="input-group mt-2">
                        <span class="input-group-text">Gambar</span>
                        <input type="file" name="gambar" class="form-control" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                <button type="button" class="btn btn-Danger" data-bs-dismiss="modal" id="btnBatal">Batal</button>
            </div>
        </div>
    </div>
</div>
<!-- end  -->