<section id="grafik" class="grafik section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Statistik</h2>
            <p>Indikator Strategis</p>
        </div>

        <div class="card text-center" style="padding: 10px; margin-bottom: 15px; color: #cda45e; font-weight: bold;">
            Jumlah Penduduk Miskin di Kawasan Kasulampua, September 2022
            <div class="chart" id="miskin"></div>
            <div style="color:rgb(129, 129, 129); font-size: small; font-weight: 300;">
                Sumber: <span>BPS, Susenas September 2022</span>
            </div>
        </div>

        <div class="card text-center" style="padding: 10px; margin-bottom: 15px; color: #cda45e; font-weight: bold;">
            Indeks Pembangunan Manusia di Kawasan Kasulampua, 2022
            <div class="chart" id="ipm"></div>
            <div style="color:rgb(129, 129, 129); font-size: small; font-weight: 300;">
                Sumber: <span>BPS, berbagai sensus dan survei</span>
            </div>
        </div>

        <script>
            var options = {
                    series: [{
                        data: [356.51, 144.52, 201.95, 242.30, 50.58, 187.33, 389.71, 782.32, 314.74, 187.35, 169.26, 296.66, 82.13, 936.32, 222.36]
                    }],
                    chart: {
                        type: ' bar', height: 450 }, plotOptions: { bar: { borderRadius: 4, horizontal: true, } },
                            dataLabels: { enabled: true }, xaxis: { categories:
                            ["Kalimantan Barat", "Kalimantan Tengah"
                                                    , "Kalimantan Selatan" , "Kalimantan Timur"
                                                    , "Kalimantan Utara" , "Sulawesi Utara" , "Sulawesi Tengah"
                                                    , "Sulawesi Selatan" , "Sulawesi Tenggara" , "Gorontalo"
                                                    , "Sulawesi Barat" , "Maluku" , "Maluku Utara" , "Papua"
                                                    , "Papua Barat" ], } }; var chart=new
                                                    ApexCharts(document.querySelector("#miskin"), options);
                                                    chart.render();
        </script>

        <script>
            var options = {
                series: [{
                data: [68.63, 71.63, 71.84, 77.44, 71.83, 73.81, 70.28, 72.82, 72.23, 69.81, 66.92, 70.22, 69.47, 61.39, 65.89]
                    }],
                chart: {
                    type: 'bar',
                    height: 450
                },
                plotOptions: {
                    bar: {
                    borderRadius: 4,
                    horizontal: true,
                    }
                },
                fill: {
                    colors: ['#22b3c1']
                },
                dataLabels: {
                    enabled: true
                },
                xaxis: {
                    categories: ["Kalimantan Barat", "Kalimantan Tengah", "Kalimantan Selatan", "Kalimantan Timur", "Kalimantan Utara", "Sulawesi Utara", "Sulawesi Tengah", "Sulawesi Selatan", "Sulawesi Tenggara", "Gorontalo", "Sulawesi Barat", "Maluku", "Maluku Utara", "Papua", "Papua Barat"],
                }
                };
                var chart = new ApexCharts(document.querySelector("#ipm"), options);
                chart.render();
        </script>
    </div>
</section>
