<x-app-layout>
    <x-pages.header />

    <x-pages.sidebar />

    <main id="main" class="main">
        <div class="pagetitle mb-3">
            <h1>Unggah Tabel Statistik Baru</h1>
        </div>
        <div class="card">
            <div class="mt-4 card-body">
                <p>Pilih kategori tabel kemudian unggah berkas dengan ekstensi excel <code>(.xslx)</code></p>

                <!-- Vertical Form -->
                <form class="row g-3" method="POST" action="{{ route('backend.statistic.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label for="kategori" class="form-label fw-bold">Kategori Tabel</label>
                        <select class="form-control" id="kategori" name="kategori">
                            <option disabled selected>Pilih Salah Satu Kategori</option>
                            <option value="sosial">Sosial & Kependudukan</option>
                            <option value="ekonomi">Ekonomi & Perbankan</option>
                            <option value="pertanian">Pertanian & Industri</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label fw-bold">Berkas Excel Tabel Statistik</label>
                        <input type="file" name="file" class="form-control" id="tabel">
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
