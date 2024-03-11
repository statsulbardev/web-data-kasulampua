<x-guest-layout>
    <section id="blank" class="specials"></section>

    <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">
        </div>

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-0">
                @foreach ($infographics as $infographic)
                    <div class="col-lg-2 col-md-4">
                        <div class="gallery-item">
                            <div class="gallery-lightbox" data-gall="gallery-item">
                                <img src="{{ secure_asset('storage/app/public/infographic/' . $infographic->getFilename()) }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center" style="margin: 20px 0;">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                    </a>
                </li>
                </ul>
            </nav> --}}
        </div>
    </section>
</x-guest-layout>
