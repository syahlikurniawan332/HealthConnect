<!-- header.blade.php -->
<nav class="navbar navbar-expand-lg bg-success sticky-top">
    <div class="container">
        <a class="navbar-brand nav-link fw-bold text-white" href="{{ url('/index') }}">HealthConnect</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <span class="close-icon" aria-label="Close"></span> <!-- Tambahkan baris ini -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ url('/index') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/topik') }}">Topik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/tentangkami') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/riwayat') }}">Riwayat</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="btn btn-light nav-link fw-bold" data-bs-toggle="modal"
                        data-bs-target="#loginModal">LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Modal -->
@include('login')
<!-- end modal -->