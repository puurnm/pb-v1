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
