<section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Infografis</h2>
            <p>Galeri Infografis Indikator Statistik Kasulampua</p>
        </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0">
            @foreach($infographics as $index => $infographic)
                @if ($index > 11)
                    @break
                @else
                    <div class="col-lg-2 col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-lightbox" data-gall="gallery-item">
                                <img src="{{ secure_asset('storage/app/public/infographic/' . $infographic->getFilename()) }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="text-center" style="margin-top: 20px;">
            <a href="{{ route('frontend.infographic.index') }}" class="btn">Infografis Selengkapnya</a>
        </div>
    </div>
</section
