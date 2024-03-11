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
            <a class="nav-link {{ !request()->routeIs('backend.news.*') ? 'collapsed' : '' }}" href="{{ route('backend.news.index') }}">
                <i class="bi bi-newspaper"></i>
                <span>Berita</span>
            </a>
        </li>

        {{-- Statistik --}}
        <li class="nav-item">
            <a class="nav-link {{ !request()->routeIs('backend.statistic.*') ? 'collapsed' : '' }}" href="{{ route('backend.statistic.index') }}">
                <i class="bi bi-bar-chart-steps"></i>
                <span>Statistik</span>
            </a>
        </li>

        {{-- Publikasi --}}
        <li class="nav-item">
            <a class="nav-link {{ !request()->routeIs('backend.publication.*') ? 'collapsed' : '' }}" href="{{ route('backend.publication.index') }}">
                <i class="bi bi-book-half"></i>
                <span>Publikasi</span>
            </a>
        </li>

        {{-- Infografis --}}
        <li class="nav-item">
            <a class="nav-link {{ !request()->routeIs('backend.infographic.*') ? 'collapsed' : '' }}" href="{{ route('backend.infographic.index') }}">
                <i class="bi bi-images"></i>
                <span>Infografis</span>
            </a>
        </li>

        <li class="nav-heading">Pengaturan</li>

        {{-- Pengguna --}}
        <li class="nav-item">
            <a class="nav-link {{ !request()->routeIs('backend.user.index') ? 'collapsed' : '' }}" href="{{ route('backend.user.index') }}">
                <i class="bi bi-person-fill-gear"></i>
                <span>Pengguna</span>
            </a>
        </li>
    </ul>
</aside>
