<section id="statistik" class="tabel">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Statistik</h2>
            <p>Data Terkini Wilayah Kasulampua</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="input-group rounded" style="margin-bottom: 20px;">
                <input id="all-search" type="search" class="form-control rounded" placeholder="Cari Data"
                    aria-label="Search" aria-describedby="search-addon" />
            </div>
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Sosial & Kependudukan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Ekonomi & Perbankan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pertanian & Industri</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                    {{-- Tabel Sosial --}}
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-12 details order-2 order-lg-1">
                                <table class="table" id="myTable">
                                    <thead>
                                        <tr
                                            style="background-color: #cda45e; color: #fff; padding: 12px 15px; font-weight: 600; font-size: 15px;">
                                            <th scope="col">Indikator</th>
                                            <th scope="col">Tahun</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($socialTables as $key => $value)
                                        <tr>
                                            @php
                                                $nama_file = explode(".", $value, 2)[0];
                                                $tahun = explode(",", $nama_file, 2)[1];
                                                $nama_file = explode(",", $nama_file, 2)[0];
                                            @endphp
                                            <td>
                                                <a href={{ route('frontend.statistic.show', ['category'=> 'sosial', 'value' => $value]) }}>
                                                    {{ $nama_file }}
                                                </a>
                                            </td>
                                            <td width="10%">{{ $tahun }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{-- Tabel Ekonomi --}}
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-12 details order-2 order-lg-1">
                                <table class="table" id="myTable2">
                                    <thead>
                                        <tr
                                            style="background-color: #cda45e; color: #fff; padding: 12px 15px; font-weight: 600; font-size: 15px;">
                                            <th scope="col">Indikator</th>
                                            <th scope="col">Tahun</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($economyTables as $key => $value)
                                        <tr>
                                            @php
                                                $nama_file = explode(".", $value, 2)[0];
                                                $tahun = explode(",", $nama_file, 2)[1];
                                                $nama_file = explode(",", $nama_file, 2)[0];
                                            @endphp
                                            <td>
                                                <a href={{ route('frontend.statistic.show', ['category'=> 'ekonomi', 'value' =>
                                                    $value]) }}>
                                                    {{ $nama_file }}
                                                </a>
                                            </td>
                                            <td width="10%">{{ $tahun }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    {{-- Tabel Pertanian --}}
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-12 details order-2 order-lg-1">
                                <table class="table" id="myTable3">
                                    <thead>
                                        <tr
                                            style="background-color: #cda45e; color: #fff; padding: 12px 15px; font-weight: 600; font-size: 15px;">
                                            <th scope="col">Indikator</th>
                                            <th scope="col">Tahun</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($agricultureTables as $key => $value)
                                        <tr>
                                            @php
                                                $nama_file = explode(".", $value, 2)[0];
                                                $tahun = explode(",", $nama_file);
                                                $tahun = $tahun[count($tahun)-1];
                                            @endphp
                                            <td>
                                                <a href={{ route('frontend.statistic.show', ['category'=> 'pertanian', 'value' =>
                                                    $value]) }}>
                                                    {{ $nama_file }}
                                                </a>
                                            </td>
                                            <td width="10%">{{ $tahun }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
