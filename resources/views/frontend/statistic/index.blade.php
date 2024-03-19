<x-guest-layout>
    <section id="blank" class="tabel"></section>

    <!-- ======= Statistik Section ======= -->
    <section id="statistik" class="tabel">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="input-group rounded" style="margin-bottom: 20px;">
                    <input type="search" class="form-control rounded" placeholder="Cari Data" aria-label="Search"
                        aria-describedby="search-addon" id="all-search" />
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
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-12 details order-2 order-lg-1">
                                    <table class="table" id="myTable">
                                        <thead>
                                            <tr style="background-color: #cda45e; color: #fff; padding: 12px 15px; font-weight: 600; font-size: 15px;">
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

                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div class="col-lg-12 details order-2 order-lg-1">
                                    <table class="table" id="myTable2">
                                        <thead>
                                            <tr style="background-color: #cda45e; color: #fff; padding: 12px 15px; font-weight: 600; font-size: 15px;">
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
                                                        <a href={{ route('frontend.statistic.show', ['category'=> 'ekonomi', 'value' => $value]) }}>
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

                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div class="col-lg-12 details order-2 order-lg-1">
                                    <table class="table" id="myTable3">
                                        <thead>
                                            <tr style="background-color: #cda45e; color: #fff; padding: 12px 15px; font-weight: 600; font-size: 15px;">
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
                                                        <a href={{ route('frontend.statistic.show', ['category'=> 'pertanian', 'value' => $value]) }}>
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

            <div class="table-responsive">
                <table class="table" style="font-size: 13px; margin-top: 50px">
                    <thead style="background-color: #cda45e; color: #fff; padding: 12px 15px; font-weight: 600;
                      font-size: 15px;">
                        <tr>
                            <th style="width: 200px;" scope="col">Indikator</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#">IPM</a></td>
                            <td>Indeks Pembangunan Manusia (IPM) adalah ukuran ringkas rata-rata capaian/ keberhasilan
                                dimensi utama pembangunan manusia, yaitu: umur panjang dan hidup sehat, mempunyai
                                pengetahuan, dan memiliki standar hidup yang layak.</td>
                        </tr>
                        <tr>
                            <td><a href="#">Rasio Gini</a></td>
                            <td>Merupakan suatu ukuran kemerataan yang dihitung dengan membandingkan luas antara diagonal
                                dan kurva lorenz (daerah A) dibagi dengan luas segitiga di bawah diagonal. Kegunaan: Untuk
                                mengukur derajat ketidakmerataan distribusi penduduk. Keterangan : Rasio Gini bernilai
                                antara 0 dan 1. Nilai 1 grafiknjukkan complete inequality atau perfectly inequal, di mana
                                seluruh penduduk menempati satu lokasi di suatu negara dan tidak ada penduduk di lokasi
                                lainnya. Nilai 0 grafiknjukkan perfectly equal, yaitu penduduk terdistribusikan sempurna di
                                seluruh wilayah suatu negara. Jadi, semakin besar nilai rasio konsentrasi Gini, semakin
                                besar ketidakmerataan antara distribusi penduduk dan jumlah lokasi.</td>
                        </tr>
                        <tr>
                            <td><a href="#">Penduduk Miskin</a></td>
                            <td>Penduduk miskin adalah penduduk yang memiliki rata-rata pengeluaran per kapita per bulan di
                                bawah Garis Kemiskinan.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-guest-layout>
