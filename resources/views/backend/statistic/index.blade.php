<x-app-layout>
    <x-pages.header />

    <x-pages.sidebar />

    <main id="main" class="main">
        <div class="d-flex pagetitle justify-content-between mb-3 align-items-center">
            <h1>Tabel Indikator Kasulampua</h1>
            <a href="{{ route('backend.statistic.create') }}" class="btn" style="background-color: #012970">
                <i class="text-white bi bi-plus"></i>
                <span class="text-white">Tabel</span>
            </a>
        </div>

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-sosial-kependudukan-tab" data-bs-toggle="pill" data-bs-target="#pills-sosial-kependudukan"
                    type="button" role="tab" aria-controls="pills-sosial-kependudukan" aria-selected="true">Sosial & Kependudukan <span class="fw-bold">{{ '(' . count($socialFiles) . ')' }}</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-ekonomi-perbankan-tab" data-bs-toggle="pill" data-bs-target="#pills-ekonomi-perbankan"
                    type="button" role="tab" aria-controls="pills-ekonomi-perbankan" aria-selected="false">Ekonomi & Perbankan <span class="fw-bold">{{ '(' . count($economyFiles) . ')' }}</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-pertanian-industri-tab" data-bs-toggle="pill" data-bs-target="#pills-pertanian-industri"
                    type="button" role="tab" aria-controls="pills-pertanian-industri" aria-selected="false">Pertanian & Industri <span class="fw-bold">{{ '(' . count($agricultureFiles) . ')' }}</span></button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-sosial-kependudukan" role="tabpanel" aria-labelledby="pills-sosial-kependudukan-tab" tabindex="0">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Judul Tabel</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($socialFiles as $socialFile)
                            <tr>
                                <td width="10%">
                                    {{ date('d M Y', $socialFile->getMTime()) }}
                                </td>
                                <td>
                                    {{ $socialFile->getBasename() }}
                                </td>
                                <td>
                                    <form method="post" action="{{ route('backend.statistic.delete') }}">
                                        @csrf
                                        <input type="hidden" name="filepath" value="{{ $socialFile->getRealPath() }}">
                                        <button type="submit" class="btn btn-secondary" name="btnsubmit"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="pills-ekonomi-perbankan" role="tabpanel" aria-labelledby="pills-ekonomi-perbankan-tab" tabindex="0">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Judul Tabel</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($economyFiles as $economyFile)
                            <tr>
                                <td width="10%">
                                    {{ date('d M Y', $economyFile->getMTime()) }}
                                </td>
                                <td>
                                    {{ $economyFile->getBasename() }}
                                </td>
                                <td>
                                    <form method="post" action="{{ route('backend.statistic.delete') }}">
                                        @csrf
                                        <input type="hidden" name="filepath" value="{{ $economyFile->getRealPath() }}">
                                        <button type="submit" class="btn btn-secondary" name="btnsubmit"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="pills-pertanian-industri" role="tabpanel" aria-labelledby="pills-pertaninan-industri-tab" tabindex="0">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Judul Tabel</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agricultureFiles as $agricultureFile)
                            <tr>
                                <td width="10%">
                                    {{ date('d M Y', $agricultureFile->getMTime()) }}
                                </td>
                                <td>
                                    {{ $agricultureFile->getBasename() }}
                                </td>
                                <td>
                                    <form method="post" action="{{ route('backend.statistic.delete') }}">
                                        @csrf
                                        <input type="hidden" name="filepath" value="{{ $agricultureFile->getRealPath() }}">
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
    </main>

    <x-pages.footer />
</x-app-layout>
