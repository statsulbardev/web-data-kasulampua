<div>
    <main id="main" class="main">
        <div class="d-flex pagetitle justify-content-between mb-3 align-items-center">
            <h1>Daftar Berita Kasulampua</h1>
            <a wire:navigate href="{{ route('backend.indicator.create') }}" class="btn" style="background-color: #012970">
                <i class="text-white bi bi-plus"></i>
                <span class="text-white">Indikator</span>
            </a>
        </div>
    </main>

    {{-- @if ($data->count() > 0)
        <section class="section">
            <div class="card">
                <div class="mt-4 card-body">
                    <p>Indikator Strategis {{ $judul[$indikator] }}</p>
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
                                <td width="25%">
                                    <img src="{{ secure_asset('storage/app/public/' . $newsItem->picture) }}" alt=""
                                        class="rounded" width="150">
                                    <div class="pt-2">{{ $newsItem->title }}</div>
                                </td>
                                <td width="60%">{!! Str::limit($newsItem->description, 300) !!}</td>
                                <td class="d-flex justify-content-between">
                                    <a wire:navigate href="{{ route('backend.news.edit', $newsItem->id) }}"
                                        class="btn btn-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button wire:click="$set('newsId', {{ $newsItem->id }})" type="button"
                                        class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    @else
    @endif --}}
</div>
