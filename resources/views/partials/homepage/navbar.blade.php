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
                            <img src="{{ asset('images/logo.png') }}" style="width:114px;height:30px;" alt="Brand Logo"/>
                        </a>
                    </div>
                    <div>
                        <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                                <div class="nav-item active">
                                    <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <form class="d-flex" role="search" action="{{ route('search')}}" method="GET">
                            <input class="form-control form-control-sm" type="search" id="search" name="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
  </header>
