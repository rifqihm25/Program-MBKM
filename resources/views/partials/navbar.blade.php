@php
    $data = Auth::user()
        ->where('id', Auth::user()->id)
        ->first();
@endphp
<header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #2C3639">
        <div class="container">
            <a class="navbar-brand">
                <img src="img/logo.png" alt="" width="60" height="35" class="d-inline-block align-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto text-center mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('cek-konversi') }}">Konversi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('profile') }}">{{ $data->name }}</a>
                    </li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn">Keluar</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
</header>
