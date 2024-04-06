<div>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <x-items.dashboard-card class="sales-card" cardtitle="Sosial & Kependudukan" subcardtitle="Tabel"
                            icon="bi-people" :tabel="$tabelSosDuk" />

                        <x-items.dashboard-card class="customers-card" cardtitle="Ekonomi & Perbankan" subcardtitle="Tabel"
                            icon="bi-currency-dollar" :tabel="$tabelEkoBank" />

                        <x-items.dashboard-card class="revenue-card" cardtitle="Pertanian & Industri" subcardtitle="Tabel"
                            icon="bi-buildings" :tabel="$tabelPertInd" />

                        <x-items.dashboard-card class="sales-card" cardtitle="Publikasi" subcardtitle="Buku"
                            icon="bi-book-half" :tabel="$publikasi" />

                        <x-items.dashboard-card class="customers-card" cardtitle="Infografis" subcardtitle="Gambar"
                            icon="bi-images" :tabel="$infografis" />
                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body pb-0">
                            <h5 class="card-title">Berita Terbaru <span>| Update</span></h5>

                            <div class="news">
                                @foreach ($berita as $item)
                                <div class="post-item clearfix">
                                    <img src="{{ secure_asset('storage/app/public/' . $item->picture) }}" alt="">
                                    <h4><a href="{{ route('frontend.news.details', $item->id) }}" target="_blank">{{
                                            $item->title }}</a></h4>
                                    <span class="text-secondary">{!! Str::limit($item->description,100) !!}</span>
                                </div>
                                @endforeach
                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div>
                </div><!-- End Right side columns -->
            </div>
        </section>
    </main>
</div>
