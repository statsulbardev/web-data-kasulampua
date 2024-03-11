<x-app-layout>
    <x-pages.header />

    <x-pages.sidebar />

    <main id="main" class="main">
        <div class="d-flex pagetitle justify-content-between mb-3 align-items-center">
            <h1>Publikasi</h1>
            <a href="{{ route('backend.publication.create') }}" class="btn" style="background-color: #012970">
                <i class="text-white bi bi-plus"></i>
                <span class="text-white">Publikasi</span>
            </a>
        </div>

        @if ($publications->count() > 0)
            <section class="section">
                <div class="card">
                    <div class="mt-4 card-body">
                        <p>Publikasi resmi yang telah diterbitkan untuk dapat diakses secara bebas.</p>

                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Judul Publikasi</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($publications as $index => $publication)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td width="75%">
                                            <div class="d-flex my-2">
                                                <img src="{{ secure_asset('/storage/app/public/' . $publication->picture) }}" height="150" class="rounded" alt="">
                                                <div class="ms-4">
                                                    <small>Judul Publikasi</small>
                                                    <p class="fw-bold">{{ $publication->title }}</p>
                                                    <a href="{{ $publication->url }}" target="_blank" class="btn btn-info rounded text-white"><small>Unduh Publikasi</small></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td width="15%">{{ $publication->created_at->format('d M Y') }}</td>
                                        <td class="d-flex justify-content-between">
                                            <a href="{{ route('backend.publication.edit', $publication->id) }}" class="btn btn-primary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form method="post" action="{{ route('backend.publication.delete') }}">
                                                @csrf
                                                <input type="hidden" name="publicationId" value="{{ $publication->id }}">
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
        @else
            <div class="text-center p-4 rounded bg-info text-white">
                <h2 class="mt-5">Belum Ada Informasi Publikasi yang Diunggah !</h2>
                <p class="mb-5" style="color: #012970">Silahkan unggah publikasi anda.</p>
            </div>
        @endif
    </main>

    <x-pages.footer />
</x-app-layout>
