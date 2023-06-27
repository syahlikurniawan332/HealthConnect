<!-- header.blade.php -->
<nav class="navbar navbar-expand-lg bg-success sticky-top">
    <div class="container">
        <img src="{{ asset('assets/img/HC.png') }}" class="img-fluid me-2" alt="logo" style="max-width: 3rem;">
        <a class="navbar-brand nav-link fw-bold text-white" href="{{ url('/index') }}">HealthConnect</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            </button> -->
            <!-- <span class="close-icon" aria-label="Close"></span> Tambahkan baris ini -->
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
                <!-- <li class="nav-item dropdown">
                    <a href="#" class="btn btn-light nav-link fw-bold" data-bs-toggle="modal"
                        data-bs-target="#loginModal">LOGIN</a>
                </li> -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item dropdown">
                    <a class="nav-link btn btn-light nav-link fw-bold"
                        href="{{ route('login') }} ">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item dropdown">
                    <a class="nav-link btn btn-light nav-link fw-bold"
                        href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-light nav-link fw-bold" href="#"
                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item btn btn-light nav-link fw-bold" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="d-none btn btn-light nav-link fw-bold">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- Modal -->
@include('login')
<!-- end modal -->