<x-app-layout>
    <x-pages.header />

    <x-pages.sidebar />

    <main id="main" class="main">
        <div class="pagetitle mb-3">
            <h1>Edit Informasi Publikasi</h1>
        </div>
        <div class="card">
            <div class="mt-4 card-body">
                <p>Lengkapi informasi publikasi sesuai kebutuhan form di bawah ini.</p>

                <!-- Vertical Form -->
                <form class="row g-3" method="POST" action="{{ route('backend.publication.update', $publication->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="col-12">
                        <label for="title" class="form-label fw-bold">Judul Publikasi</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $publication->title }}">
                    </div>
                    <div class="col-12">
                        <label for="picture" class="form-label fw-bold">Cover Publikasi</label>
                        <br>
                        <img src="{{ secure_asset('storage/app/public/' . $publication->picture) }}" alt="" class="img-fluid mb-3 rounded" width="150">
                        <input type="file" class="form-control" id="picture" name="picture">
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label fw-bold">Tautan Unduh Publikasi</label>
                        <input type="text" class="form-control" id="url" name="url" value="{{ $publication->url }}">
                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <x-pages.footer />
</x-app-layout>
