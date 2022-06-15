<header id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">
                </div>
            </div>
            <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('images/logo.png') }}" style="width:114px;height:30px;"
                                alt="Brand Logo" />
                        </a>
                    </div>
                    <div>
                        <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
                            <div class="navbar-nav d-lg-flex justify-content-between align-items-center">
                                <div>
                                    <button class="navbar-close">
                                        <i class="mdi mdi-close"></i>
                                    </button>
                                </div>
                                <div class="nav-item active">
                                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
                                </div>
                                <div class="nav-item active">
                                    <a class="nav-link" href="{{ url('/berita') }}">Berita</a>
                                </div>
                                <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Kategori
                                    </a>
                                    @php
                                        $kategori = App\Models\KategoriBerita::orderBy('nama_kategori', 'ASC')->get();
                                    @endphp
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach ($kategori as $key => $kategori)
                                            <a class="dropdown-item"
                                                href="{{ route('kategoriShow', [$kategori->id_kategori]) }}">{{ $kategori->nama_kategori }}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="nav-item active">
                                    <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
                                </div>
                                <div class="pos-f-t">
                                    <div class="collapse" id="navbarToggleExternalContent">
                                        <div class="p-4">
                                            <form class="form-inline my-2 my-lg-0" role="search"
                                                action="{{ route('search') }}" method="GET">
                                                <input class="form-control mr-sm-2" type="search" id="search"
                                                    name="search" placeholder="Search" aria-label="Search">
                                                <button class="btn btn-outline-success my-2 my-sm-0 mr-auto"
                                                    type="submit">Search</button>
                                            </form>
                                            @if ($message = Session::get('success'))
                                                <div class="alert alert-success">
                                                    <p>{{ $message }}</p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-media">
                        <form class="d-flex" role="search" action="{{ route('search') }}" method="GET">
                            <input class="form-control form-control-sm" type="search" id="search" name="search"
                                placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
