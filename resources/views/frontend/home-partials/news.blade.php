<section id="berita" class="events">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Berita</h2>
            <p>Berita Terkini Wilayah Kasulampua</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach ($news as $newsItem)
                    <div class="swiper-slide">
                        <div class="row event-item">
                            <div class="col-lg-6">
                                <img src="{{ secure_asset('assets/img/news/' . $newsItem->picture) }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3>{{ $newsItem->title }}</h3>
                                {!! Str::limit($newsItem->description, 800) !!}
                                <p></p>
                                <a href="{{ route('news.details', $newsItem->id) }}" class="btn">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="text-center">
                <a href="./berita.php" class="btn">Lihat Berita Lainnya</a>
            </div>
        </div>
    </div>
</section>

@push('scripts')

@endpush
