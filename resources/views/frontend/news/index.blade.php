<x-guest-layout>
    <section id="blank" class="d-flex align-items-center"></section>

    <!-- Berita Section -->
    <section id="berita" class="events">
        <div class="container" data-aos="fade-up">
            <div class="row gx-5">

                @foreach ($news as $newsItem)
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <!-- News block -->
                        <div>
                            <!-- Featured image -->
                            <div class="bg-image hover-overlay shadow-1-strong ripple mb-4" data-mdb-ripple-color="light">
                                <img src="{{ secure_asset('storage/app/public/' . $newsItem->picture) }}" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>

                            <!-- Article data -->
                            <div class="row mb-3">
                                <div class="col-6">
                                    <a href="" style="color:rgb(158, 158, 158)">
                                        <i class="fas fa-calendar"></i>
                                        {{ $newsItem->created_at->format('d M Y') }}
                                    </a>
                                </div>
                            </div>

                            <!-- Article title and description -->
                            <div style="color: #cda45e">
                                <h5>{{ $newsItem->title }}</h5>

                                <p class="text-dark">
                                    {!! Str::limit($newsItem->description, 400) !!}
                                </p>
                            </div>
                            <a href="{{ route('frontend.news.details', $newsItem->id) }}" class="btn">Selengkapnya</a>
                            <!-- News block -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Berita Section -->
</x-guest-layout>
