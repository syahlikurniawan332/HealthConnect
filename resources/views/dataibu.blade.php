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

    <div class="col-lg-9-center px-4 " style="margin-top: 100px;">
        <div class="card">
            <div class="card-header">
                Data Ibu
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDataIbu">Tambah
                            Data</button>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Ibu</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No BPJS</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ibus as $ibu)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ibu->nama }}</td>
                                <td>{{ $ibu->alamat }}</td>
                                <td>{{ $ibu->no_bpjs }}</td>
                                <td>{{ $ibu->status }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                        data-bs-target="#ModalView"><a>View</a></button>
                                    <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal"
                                        data-bs-target="#ModalDelete"><a>Delete</a></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>

    <!-- Modal tambah data-->
    <div class="modal fade" id="ModalDataIbu" tabindex="-1" aria-labelledby="ModalTambahDataIbuLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTambahDataIbuLabel">Masukkan Data Ibu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body lg-4">
                    <form action="{{route('ibu.store2') }}" method="post">
                        @csrf
                        <div class="input-group mt-1">
                            <span class="input-group-text">Nama</span>
                            <input type="text" name="nama" class="form-control" placeholder="">
                        </div>
                        <div class="input-group mt-2">
                            <span class="input-group-text">Tempat,Tanggal Lahir</span>
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="">
                        </div>

                        <div class="input-group mt-2">
                            <span class="input-group-text">Alamat</span>
                            <input type="text" name="alamat" class="form-control" placeholder="">
                        </div>
                        <div class="input-group mt-2">
                            <span class="input-group-text">Status</span>
                            <input type="text" name="status" class="form-control" placeholder="">
                        </div>
                        <div class="input-group mt-2">
                            <span class="input-group-text">No KK</span>
                            <input type="text" name="no_kk" class="form-control" placeholder="">
                        </div>

                        <div class="input-group mt-2">
                            <span class="input-group-text">No BPJS</span>
                            <input type="text" name="no_bpjs" class="form-control" placeholder="">
                        </div>

                        <div class="input-group mt-2">
                            <span class="input-group-text">No HP</span>
                            <input type="text" name="no_hp" class="form-control" placeholder="">
                        </div>

                        <div class="input-group mt-2">
                            <span class="input-group-text">Keterangan</span>
                            <input type="text" name="keterangan" class="form-control" placeholder="">
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                    <button type="button" class="btn btn-Danger" data-bs-dismiss="modal" id="btnBatal">Batal</button>
                </div>
            </div>
        </div>
    </div>
    </form>
    <script>
    $(document).ready(function() {
        // Mengaktifkan tindakan saat tombol "Simpan" diklik
        $("#btnSimpan").click(function() {
            // Tambahkan tindakan yang sesuai di sini
            console.log("Tombol Simpan diklik");
            // Contoh: Mengirim data ke server menggunakan AJAX
            $.ajax({
                url: "/simpan-data-ibu",
                method: "POST",
                data: {
                    nama: $("#inputNama").val()
                }, // Contoh mengambil nilai input dengan id "inputNama"
                success: function(response) {
                    console.log("Data berhasil disimpan");
                    // Lakukan tindakan lain setelah data berhasil disimpan
                },
                error: function() {
                    console.log("Terjadi kesalahan saat menyimpan data");
                    // Lakukan tindakan lain jika terjadi kesalahan
                }
            });
        });

        // Mengaktifkan tindakan saat tombol "Batal" diklik
        $("#btnBatal").click(function() {
            // Tambahkan tindakan yang sesuai di sini
            console.log("Tombol Batal diklik");
            // Contoh: Mengosongkan nilai input
            $("#inputNama").val("");
        });
    });
    </script>
    <!-- akhir -->

    @include('footer')

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

</html>