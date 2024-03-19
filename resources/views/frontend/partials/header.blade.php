<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top" @if (!request()->routeIs('frontend.home')) style="background-color: black" @endif>
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="topnav-info d-flex align-items-center">
            <i class="nav-link d-flex align-items-center">
                <a href="{{ route('frontend.glosarium.index') }}"><span>Glosarium</span></a>
            </i>
            <i class="nav-link d-flex align-items-center ms-4">
                <a href="{{ route('frontend.sitemap.index') }}"><span>Peta Situs</span></a>
            </i>
        </div>
        <div class="languages d-none d-md-flex align-items-center">
            <ul>
                <li>ID</li>
                <li><a href="#">EN</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Start Header -->
<header id="header" class="fixed-top d-flex align-items-center" @if (!request()->routeIs('frontend.home')) style="background-color: black" @endif>
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
        <a href="index.php" class="logo me-auto me-lg-0">
            <img src="{{ secure_asset('assets/img/kasulampualogo.svg') }}" alt="" class="img-fluid">
        </a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="{{ route('frontend.home') }}">Beranda</a></li>
                <li><a href="{{ route('frontend.news.index') }}">Berita</a></li>
                <li><a href="{{ route('frontend.statistic.index') }}">Statistik</a></li>
                <li><a href="{{ route('frontend.publication.index') }}">Publikasi</a></li>
                <li><a href="{{ route('frontend.infographic.index') }}">Infografis</a></li>
                <li><a href="{{ route('frontend.about.index') }}">Tentang</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <a href="https://wa.me/6282293382522" target="_blank" class="book-a-table-btn d-none d-lg-flex">Hubungi Kami</a>
    </div>
</header>
<!-- End Header -->
