<section id="publikasi" class="publikasi">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Publikasi</h2>
            <p>Publikasi Statistik</p>
        </div>

        <div class="row g-0">
            <div class="input-group rounded" style="margin-bottom: 20px;">
                <input type="search" class="form-control rounded" placeholder="Cari Publikasi" aria-label="Search"
                    aria-describedby="search-addon" />
            </div>

            @foreach ($publications as $publication)
                <div class="col-lg-2 col-md-6">
                    <div class="buku" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ secure_asset('storage/app/public/' . $publication->picture) }}" class="img-fluid" alt="">
                        <div class="buku-info">
                            <div class="buku-info-content">
                                <span>{{ $publication->title }}</span>
                            </div>
                            <div class="social">
                                <a target="_blank"
                                    href="{{ $publication->url }}"
                                    class="btn">Unduh</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="text-center" style="margin-top: 20px;">
                <a href="{{ route('frontend.publication.index') }}" class="btn">Publikasi Selengkapnya</a>
            </div>

        </div>


    </div>
</section>
