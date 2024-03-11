<x-app-layout>
    <x-pages.header />

    <x-pages.sidebar />

    <main id="main" class="main">
        <div class="d-flex pagetitle justify-content-between mb-3 align-items-center">
            <h1>Galeri Infografis</h1>
            <a href="{{ route('backend.infographic.create') }}" class="btn" style="background-color: #012970">
                <i class="text-white bi bi-plus"></i>
                <span class="text-white">Infografis</span>
            </a>
        </div>

        @if (!is_null($infographics))
            <section class="section">
                <div class="card">
                    <div class="mt-4 card-body">
                        <p>Galeri infografis yang dapat ditampilkan.</p>
                        <div class="row g-4">
                            @foreach ($infographics as $infographic)
                                <div class="col-lg-2 col-md-4">
                                    <div class="gallery-item">
                                        <div class="gallery-lightbox" data-gall="gallery-item">
                                            <img src="{{ secure_asset('storage/app/public/infographic/' . $infographic->getFilename())  }}" alt="" class="img-fluid rounded mb-2">
                                            <form method="post" action="{{ route('backend.infographic.delete') }}" class="text-center">
                                                @csrf
                                                <input type="hidden" name="filepath" value="{{ $infographic->getRealPath() }}">
                                                <button type="submit" class="btn btn-secondary" class="btnsubmit">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @else
            <div class="text-center p-4 rounded bg-info text-white">
                <h2 class="mt-5">Belum Ada Galeri Infografis yang Diunggah !</h2>
                <p class="mb-5" style="color: #012970">Silahkan unggah infografis anda.</p>
            </div>
        @endif
    </main>

    <x-pages.footer />
</x-app-layout>
