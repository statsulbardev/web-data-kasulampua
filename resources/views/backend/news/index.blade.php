<x-app-layout>
    <x-pages.header />

    <x-pages.sidebar />

    <main id="main" class="main">

        <div class="d-flex pagetitle justify-content-between mb-3 align-items-center">
            <h1>Daftar Berita Kasulampua</h1>
            <a href="{{ route('backend.news.create') }}" class="btn" style="background-color: #012970">
                <i class="text-white bi bi-plus"></i>
                <span class="text-white">Berita</span>
            </a>
        </div>

        <section class="section">
            <div class="card">
                <div class="mt-4 card-body">
                    <p>Informasi dan berita terkait kegiatan konreg di wilayah <code>kasulampua</code>.</p>

                    <table class="table table-bordered">
                        <thead class="table-dark">
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
                                    <td width="60%">{!! Str::limit($newsItem->description, 300) !!}</td>
                                    <td class="d-flex justify-content-between">
                                        <a href="{{ route('backend.news.edit', $newsItem->id) }}" class="btn btn-primary">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form method="post" action="{{ route('backend.news.delete') }}">
                                            @csrf
                                            <input type="hidden" name="newsid" value="{{ $newsItem->id }}">
                                            <button type="submit" class="btn btn-secondary" name="btnsubmit">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
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
