<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <img src="{{ asset('images/logo.png') }}" width="100"
             class="c-sidebar-brand-full" alt="Brand Logo">
        <img src="{{ asset('images/favicon.png') }}" width="46" height="46"
             class="c-sidebar-brand-minimized" alt="Brand Logo">
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-title">Home</li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('dashboard') }}">
                <i class="c-sidebar-nav-icon cil-home"></i>Dashboard
            </a>
        </li>

        <li class="c-sidebar-nav-title">Berita</li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('news.index') }}">
                <i class="c-sidebar-nav-icon cil-newspaper"></i>Berita
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('kategori.index') }}">
                <i class="c-sidebar-nav-icon cil-library"></i>Kategori
            </a>
        </li>

        @can('role-list')
            <li class="c-sidebar-nav-title">User</li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('user.index') }}">
                    <i class="c-sidebar-nav-icon cil-user"></i>User
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('role.index') }}">
                    <i class="c-sidebar-nav-icon cib-adguard"></i>Role
                </a>
            </li>
        @endcan

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 692px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 369px;"></div>
        </div>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
            data-class="c-sidebar-minimized"></button>
</div>
