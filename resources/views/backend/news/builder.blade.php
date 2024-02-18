<x-app-layout>
    <x-pages.header />

    <x-pages.sidebar />

    <main id="main" class="main">
        <div class="pagetitle mb-3">
            <h1>Membuat Berita Baru</h1>
        </div>
        <div class="card">
            <div class="mt-4 card-body">
                <p>Lengkapi informasi berita yang anda tulis sesuai dengan form yang disediakan di bawah ini.</p>

                <!-- Vertical Form -->
                <form class="row g-3" method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                        <label for="title" class="form-label fw-bold">Judul Berita</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="col-12">
                        <label for="picture" class="form-label fw-bold">Link Cover Berita</label>
                        <input type="file" class="form-control" id="picture" name="picture">
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label fw-bold">Isi Berita</label>
                        <textarea class="tinymce-editor" name="description"></textarea>
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
