<x-app-layout>
    <x-pages.header />

    <x-pages.sidebar />

    <main id="main" class="main">
        <div class="pagetitle mb-3">
            <h1>Unggah Infografis Baru</h1>
        </div>

        <div class="card">
            <div class="mt-4 card-body">
                <p>Berkas infografis yang diizinkan adalah <code>.png dan .jpg</code></p>

                <!-- Vertical Form -->
                <form class="row g-3" method="POST" action="{{ route('backend.infographic.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label for="file" class="form-label fw-bold">Gambar Infografis</label>
                        <input type="file" name="file" class="form-control" id="file">
                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn btn-primary">Unggah</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <x-pages.footer />
</x-app-layout>
