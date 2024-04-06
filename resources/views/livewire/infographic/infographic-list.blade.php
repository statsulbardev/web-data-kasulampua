<div>
    <main id="main" class="main">
        <div class="d-flex pagetitle justify-content-between mb-3 align-items-center">
            <h1>Galeri Infografis</h1>
            <a wire:navigate href="{{ route('backend.infographic.create') }}" class="btn" style="background-color: #012970">
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
                                        <img src="{{ secure_asset('storage/app/public/infographic/' . $infographic->getFilename())  }}"
                                            alt="" class="img-fluid rounded mb-2">
                                        <div class="text-center">
                                            <button
                                                wire:click="$set('infographicName', '{{ $infographic->getFilename() }}')"
                                                type="button" class="btn btn-secondary"
                                                data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
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

    <x-inputs.confirmation-modal message="Apakah anda ingin menghapus infografis ini ?" />
</div>
