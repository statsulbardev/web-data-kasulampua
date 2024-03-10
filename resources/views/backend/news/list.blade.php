<x-app-layout>
    <x-pages.header />

    <x-pages.sidebar />

    <main id="main" class="main">

        <div class="d-flex pagetitle justify-content-between mb-3 align-items-center">
            <h1>Daftar Berita Kasulampua</h1>
            <a href="{{ route('news.create') }}" class="btn" style="background-color: #012970">
                <i class="text-white bi bi-plus"></i>
                <span class="text-white">Berita</span>
            </a>
        </div>

        <section class="section">
            <div class="card">
                <div class="mt-4 card-body">
                    <p>Informasi dan berita terkait kegiatan konreg di wilayah <code>kasulampua</code>.</p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Judul Berita</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $newsItem)
                                <tr>
                                    <th scope="row">{{ $newsItem->updated_at->format('d M Y') }}</th>
                                    <td width="25%">{{ $newsItem->title }}</td>
                                    <td>{!! Str::limit($newsItem->description, 300) !!}</td>
                                    <td width="10%">
                                        <a href="{{ route('news.edit', $newsItem->id) }}" class="btn btn-primary mr-2">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <a href="" class="btn btn-secondary">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </main>

    <x-pages.footer />
</x-app-layout>
