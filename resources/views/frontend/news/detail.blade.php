<x-guest-layout>
    <section id="blank" class="d-flex align-items-center"></section>

    <!-- Berita Section -->
    <section id="berita" class="events">
        <div class="container" data-aos="fade-up">
            <div class="row gx-5" style="display:flex; justify-content:center;">

                <div class="col-lg-12 col-md-12 mb-12 mb-lg-12" style="max-width:75%;">
                    <!-- News block -->
                    <div>
                        <!-- Featured image -->
                        <h5 style="color:black;">{{ $news->title }}</h5>
                        <div class="bg-image hover-overlay shadow-1-strong ripple mb-4" data-mdb-ripple-color="light">
                            <img src="{{ secure_asset('storage/app/public/' . $news->picture) }}" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>

                        <!-- Article data -->
                        <div class="row mb-3">
                            <div class="col-6">
                                <a href="" style="color:rgb(158, 158, 158)">
                                    <i class="fas fa-calendar"></i>
                                    {{ $news->updated_at->format('d M Y') }}
                                </a>
                            </div>
                        </div>

                        {!! $news->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
