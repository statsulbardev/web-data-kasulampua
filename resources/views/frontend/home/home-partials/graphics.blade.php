<section id="grafik" class="grafik section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Statistik</h2>
            <p>Indikator Strategis</p>
        </div>

        <div class="card text-center" style="padding: 10px; margin-bottom: 15px; color: #cda45e; font-weight: bold;">
            Jumlah Penduduk Miskin di Kawasan Kasulampua, September {{ $kemiskinan[0]->tahun }}
            <div class="chart" id="miskin"></div>
            <div style="color:rgb(129, 129, 129); font-size: small; font-weight: 300;">
                Sumber: <span>{{ $kemiskinan[0]->keterangan ?? 'Sumber belum terisi' }}</span>
            </div>
        </div>

        <div class="card text-center" style="padding: 10px; margin-bottom: 15px; color: #cda45e; font-weight: bold;">
            Indeks Pembangunan Manusia di Kawasan Kasulampua, {{ $ipm[0]->tahun }}
            <div class="chart" id="ipm"></div>
            <div style="color:rgb(129, 129, 129); font-size: small; font-weight: 300;">
                Sumber: <span>{{ $ipm[0]->keterangan ?? 'Sumber belum terisi' }}</span>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    let prov= [];

    let datamiskin = [];
    let dataipm = [];

    let miskin = @json($kemiskinan);
    let ipm = @json($ipm);

    for(let i = 0; i < {{ $kemiskinan->count() }}; i++) {
        datamiskin.push(miskin[i]['data']);
        dataipm.push(ipm[i]['data']);
        prov.push(miskin[i]['region']['nama_wilayah']);
    }

    var optmiskin = {
        series: [{ data: datamiskin }],
        chart: { type: 'bar', height: 450 },
        plotOptions: { bar: { borderRadius: 4, horizontal: true, } },
        fill: { colors: ['#ff3333'] },
        dataLabels: { enabled: true },
        xaxis: { categories: prov }
    };

    var optipm = {
        series: [{ data: dataipm }],
        chart: { type: 'bar', height: 450 },
        plotOptions: { bar: { borderRadius: 4, horizontal: true, } },
        fill: { colors: ['#22b3c1'] },
        dataLabels: { enabled: true },
        xaxis: { categories: prov }
    };

    let chartmiskin = new ApexCharts(document.querySelector("#miskin"), optmiskin);
    let chartipm = new ApexCharts(document.querySelector("#ipm"), optipm);

    chartmiskin.render();
    chartipm.render();
</script>
@endpush
