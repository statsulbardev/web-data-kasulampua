<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="topnav-info d-flex align-items-center">
            <i class="nav-link d-flex align-items-center">
                <a href="{{ route('frontend.glosarium') }}"><span>Glosarium</span></a>
            </i>
            <i class="nav-link d-flex align-items-center ms-4">
                <a href="{{ route('frontend.sitemap') }}"><span>Peta Situs</span></a>
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
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
        <a href="index.php" class="logo me-auto me-lg-0">
            <img src="{{ secure_asset('assets/img/kasulampualogo.svg') }}" alt="" class="img-fluid">
        </a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a href="{{ route('frontend.home') }}">Beranda</a></li>
                <li><a href="{{ route('frontend.news') }}">Berita</a></li>
                <li><a href="{{ route('frontend.statistic') }}">Statistik</a></li>
                <li><a href="{{ route('frontend.publication') }}">Publikasi</a></li>
                <li><a href="{{ route('frontend.infographic') }}">Infografis</a></li>
                <li><a href="{{ route('frontend.about') }}">Tentang</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <a href="https://wa.me/6282293382522" target="_blank" class="book-a-table-btn d-none d-lg-flex">Hubungi Kami</a>
    </div>
</header>
<!-- End Header -->
