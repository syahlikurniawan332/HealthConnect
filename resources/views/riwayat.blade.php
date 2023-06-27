<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
</head>

<body>
    @include('header')

    <!-- mulai kontent pengguna -->
    <div class="container">
        <h5 class="mt-3 md-5 col-12">pengguna</h5>
        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                pilih pengguna
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>
    </div>
    <!-- akhir kontent -->

    <!-- mulai riwayat -->
    <div class="container">
        <h2 class="mt-5 mb-3 col-12">Riwayat</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Riwayat</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>john die</td>
                    <td>2020-09-13</td>
                    <td>20.00</td>
                    <td>$100</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>john die</td>
                    <td>2020-09-13</td>
                    <td>20.00</td>
                    <td>$80</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>john die</td>
                    <td>2020-09-13</td>
                    <td>20.00</td>
                    <td>$50</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>jeremi dorli</td>
                    <td>2020-09-13</td>
                    <td>21.00</td>
                    <td>$50</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>yedd epep</td>
                    <td>2020-09-13</td>
                    <td>20.00</td>
                    <td>$350</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>yed epep</td>
                    <td>2020-09-13</td>
                    <td>20.00</td>
                    <td>$250</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>

    <!-- akhir riwayat -->

    @include('footer')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

</html>