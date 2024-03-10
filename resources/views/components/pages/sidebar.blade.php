<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-heading">Utama</li>

        {{-- Dashboard --}}
        <li class="nav-item">
            <a class="nav-link {{ !request()->routeIs('dashboard') ? 'collapsed' : '' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        {{-- Berita --}}
        <li class="nav-item">
            <a class="nav-link {{ !request()->routeIs('news.*') ? 'collapsed' : '' }}" href="{{ route('news.list') }}">
                <i class="bi bi-newspaper"></i>
                <span>Berita</span>
            </a>
        </li>

        {{-- Statistik --}}
        <li class="nav-item">
            <a class="nav-link {{ !request()->routeIs('statistics.*') ? 'collapsed' : '' }}" href="{{ route('statistics.list') }}">
                <i class="bi bi-bar-chart-steps"></i>
                <span>Statistik</span>
            </a>
        </li>

        {{-- Publikasi --}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
                <i class="bi bi-book-half"></i>
                <span>Publikasi</span>
            </a>
        </li>

        <li class="nav-heading">Pengaturan</li>

        {{-- Pengguna --}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-person-fill-gear"></i>
                <span>Pengguna</span>
            </a>
        </li>
    </ul>
</aside>
