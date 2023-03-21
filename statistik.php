<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Statistik Kasulampua</title>

    <meta content="Website Resmi BPS se-Kasulampua (Kalimantan, Sulawesi, Maluku, dan Papua)" name="description">
    <meta content="data, statistik, konreg, kasulampua, kalimantan, sulawesi, maluku, papua" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

     <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Tambahan CSS -->
    <link rel="stylesheet" href="assets/css/style.css"> 
    <link rel="stylesheet" href="assets/css/chart.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/v4-shims.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet"href="assets/css/pagination.css"/>
    <!-- <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css"> -->
    <!-- <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap4.min.css"> -->

    <script>
    window.Promise ||
      document.write(
        '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
      )
    window.Promise ||
      document.write(
        '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
      )
    window.Promise ||
      document.write(
        '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
      )
    </script>

  
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    
    <!-- <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script> -->
  

    <script>
    // Replace Math.random() with a pseudo-random number generator to get reproducible results in e2e tests
    // Based on https://gist.github.com/blixt/f17b47c62508be59987b
    var _seed = 42;
    Math.random = function() {
      _seed = _seed * 16807 % 2147483647;
      return (_seed - 1) / 2147483646;
    };
    </script>
</head>

<body>
  <?php
    include "./_header.php";
  ?>

    <main>
      <section id="blank" class="tabel"></section>

        <!-- ======= Statistik Section ======= -->
        <section id="statistik" class="tabel">
          <div class="container" data-aos="fade-up">

            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="input-group rounded" style="margin-bottom: 20px;">
                <input type="search" class="form-control rounded" placeholder="Cari Data" aria-label="Search" aria-describedby="search-addon" id="all-search" />
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
                <!-- <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Energi & Konstruksi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Perencanaan & Lainnya</a>
                </li> -->
              </ul>
             </div>
            
             <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                
                <div class="tab-pane active show" id="tab-1">
                  <div class="row">
                    <div class="col-lg-12 details order-2 order-lg-1">
                      <!-- <div class="table-responsive"> -->
                      <div class="">
                       <table class="table" id="myTable">
                         <thead>
                          <tr style="background-color: #cda45e; color: #fff; padding: 12px 15px; font-weight: 600;
                         font-size: 15px;">
                            <th scope="col">Indikator</th>
                            <th scope="col">Tahun</th>
                          </tr>
                         </thead>
                         
                         <tbody>
                          <?php 
                            // list data sosial
                            $dir    = './data/sosial';
                            $files = array_diff(scandir($dir), array('.', '..'));

                          ?>

                          <?php foreach ($files as $key => $value): ?>
                          <tr>
                              <?php
                                $nama_file = explode(".", $value, 2)[0]; 
                                $tahun = explode(",", $nama_file, 2)[1];
                                $nama_file = explode(",", $nama_file, 2)[0];

                              ?>
                              <td><a href=<?php echo "'"."./detail-statistik.php?kategori=sosial&nama_file=".$value."'"; ?> ><?= $nama_file; ?></a></td>
                              <td><?php echo $tahun; ?></td>
                          </tr>
                          <?php endforeach; ?>
                         </tbody>
                      </table>
                     </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="tab-2">
                  <div class="row">
                    <div class="col-lg-12 details order-2 order-lg-1">
                      <!-- <div class="table-responsive"> -->
                      <div class="">
                       <table class="table" id="myTable2">
                         <thead>
                          <tr style="background-color: #cda45e; color: #fff; padding: 12px 15px; font-weight: 600;
                         font-size: 15px;">
                            <th scope="col">Indikator</th>
                            <th scope="col">Tahun</th>
                          </tr>
                         </thead>
                         <tbody>
                          <?php 
                            // list data sosial
                            $dir    = './data/ekonomi';
                            $files = array_diff(scandir($dir), array('.', '..'));

                          ?>

                          <?php foreach ($files as $key => $value): ?>
                          <tr>
                              <?php
                                $nama_file = explode(".", $value, 2)[0]; 
                                $tahun = explode(",", $nama_file, 2)[1];
                                $nama_file = explode(",", $nama_file, 2)[0];

                              ?>
                              <td><a href=<?php echo "'"."./detail-statistik.php?kategori=ekonomi&nama_file=".$value."'"; ?> ><?= $nama_file; ?></a></td>
                              <td><?php echo $tahun; ?></td>
                          </tr>
                          <?php endforeach; ?>
                         </tbody>
                      </table>
                     </div>
                    </div>
                  </div>
                </div>


                <div class="tab-pane" id="tab-3">
                  <div class="row">
                    <div class="col-lg-12 details order-2 order-lg-1">
                      <!-- <div class="table-responsive"> -->
                      <div class="">
                       <table class="table" id="myTable3">
                         <thead>
                          <tr style="background-color: #cda45e; color: #fff; padding: 12px 15px; font-weight: 600;
                         font-size: 15px;">
                            <th scope="col">Indikator</th>
                            <th scope="col">Tahun</th>
                          </tr>
                         </thead>
                         <tbody>
                          <?php 
                            // list data sosial
                            $dir    = './data/pertanian';
                            $files = array_diff(scandir($dir), array('.', '..'));

                          ?>

                          <?php foreach ($files as $key => $value): ?>
                          <tr>
                              <?php
                                $nama_file = explode(".", $value, 2)[0]; 
                                // $tahun = explode(",", $nama_file, 2)[1];
                                $tahun = explode(",", $nama_file);
                                $tahun = $tahun[count($tahun)-1];
                                // $nama_file = explode(",", $nama_file);

                              ?>
                              <td><a href=<?php echo "'"."./detail-statistik.php?kategori=pertanian&nama_file=".$value."'"; ?> ><?= $nama_file; ?></a></td>
                              <td><?php echo $tahun; ?></td>
                          </tr>
                          <?php endforeach; ?>
                         </tbody>
                      </table>
                     </div>
                    </div>
                  </div>
                </div>
              
              </div>
             </div>
            </div>
              <!-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center" style="margin: 20px 0 50px 0;">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav> -->

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
                     <td>Indeks Pembangunan Manusia (IPM) adalah ukuran ringkas rata-rata capaian/ keberhasilan dimensi utama pembangunan manusia, yaitu: umur panjang dan hidup sehat, mempunyai pengetahuan, dan memiliki standar hidup yang layak.</td>
                   </tr>
                   <tr>
                     <td><a href="#">Rasio Gini</a></td>
                     <td>Merupakan suatu ukuran kemerataan yang dihitung dengan membandingkan luas antara diagonal dan kurva lorenz (daerah A) dibagi dengan luas segitiga di bawah diagonal. Kegunaan: Untuk mengukur derajat ketidakmerataan distribusi penduduk. Keterangan : Rasio Gini bernilai antara 0 dan 1. Nilai 1 grafiknjukkan complete inequality atau perfectly inequal, di mana seluruh penduduk menempati satu lokasi di suatu negara dan tidak ada penduduk di lokasi lainnya. Nilai 0 grafiknjukkan perfectly equal, yaitu penduduk terdistribusikan sempurna di seluruh wilayah suatu negara. Jadi, semakin besar nilai rasio konsentrasi Gini, semakin besar ketidakmerataan antara distribusi penduduk dan jumlah lokasi.</td>
                   </tr>
                   <tr>
                     <td><a href="#">Penduduk Miskin</a></td>
                     <td>Penduduk miskin adalah penduduk yang memiliki rata-rata pengeluaran per kapita per bulan di bawah Garis Kemiskinan.</td>
                   </tr>
                  </tbody>
               </table>
              </div>
          </div>
        </section>
        <!-- End Statistik Section -->
        

        <!-- Data Section -->
        <section id="grafik" class="grafik section-bg">
          <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Komponen Bar Chart</h2>
              </div>
                  
                  <div class="card text-center" style="padding: 10px; margin-bottom: 15px; color: #cda45e; font-weight: bold;">
                    Multiple Bar
                    <div class="chart" id="miskin"></div>
                    <div style="color:rgb(129, 129, 129); font-size: small; font-weight: 300;">
                      Sumber: <span>BPS, Susenas September 2022</span></div>
                  </div>

                  <div class="card text-center" style="padding: 10px; margin-bottom: 15px; color: #cda45e; font-weight: bold;">
                    Single Bar
                    <div class="chart" id="ipm"></div>
                    <div style="color:rgb(129, 129, 129); font-size: small; font-weight: 300;">
                      Sumber: <span>BPS, berbagai sensus dan survei</span></div>
                  </div>

                    <script> //Multiple Bar Chart
                      var options = {
                        series: [{
                          name: "2017",
                          data: [356.51, 144.52, 201.95, 242.30, 50.58, 187.33, 389.71, 782.32, 314.74, 187.35, 169.26, 296.66, 82.13, 936.32, 222.36]
                         },{
                          name: "2018",
                          data: [356.51, 144.52, 201.95, 242.30, 50.58, 187.33, 389.71, 782.32, 314.74, 187.35, 169.26, 296.66, 82.13, 936.32, 222.36]
                         },{
                          name: "2019",
                          data: [356.51, 144.52, 201.95, 242.30, 50.58, 187.33, 389.71, 782.32, 314.74, 187.35, 169.26, 296.66, 82.13, 936.32, 222.36]
                         },{
                          name: "2020",
                          data: [356.51, 144.52, 201.95, 242.30, 50.58, 187.33, 389.71, 782.32, 314.74, 187.35, 169.26, 296.66, 82.13, 936.32, 222.36]
                         },
                         {
                          name: "2021",
                          data: [356.51, 144.52, 201.95, 242.30, 50.58, 187.33, 389.71, 782.32, 314.74, 187.35, 169.26, 296.66, 82.13, 936.32, 222.36]
                         }],
                        chart: {
                          type: 'bar',
                          height: 1500
                        },
                        plotOptions: {
                          bar: {
                          borderRadius: 4,
                          horizontal: true, 
                          }
                        },
                        dataLabels: {
                          enabled: true //false biar tanpa label
                        },
                        xaxis: {
                          categories: ["Kalimantan Barat", "Kalimantan Tengah", "Kalimantan Selatan", "Kalimantan Timur", "Kalimantan Utara", "Sulawesi Utara", "Sulawesi Tengah", "Sulawesi Selatan", "Sulawesi Tenggara", "Gorontalo", "Sulawesi Barat", "Maluku", "Maluku Utara", "Papua", "Papua Barat"],
                        }
                      };
                      var chart = new ApexCharts(document.querySelector("#miskin"), options);
                      chart.render();
                    </script>

                    <script> //Single Bar, chart lainnya: https://apexcharts.com/docs/
                      var options = {
                        series: [{
                          name: "2022",
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
        <!-- End Data Section -->

    </main>

    <?php
      include "./_footer.php";
    ?>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
      // $('#myTable').dataTable( {
      //     "paging": true
      // } );
      let table = new DataTable('#myTable', {
          // options
          pageLength: 5,
          // searching: false, 
          bLengthChange: false,
          info: false
      });
      let table2 = new DataTable('#myTable2', {
          // options
          pageLength: 5,
          // searching: false, 
          bLengthChange: false,
          info: false
      });
      let table3 = new DataTable('#myTable3', {
          // options
          pageLength: 5,
          // searching: false, 
          bLengthChange: false,
          info: false
      });
      
      // $('#myTable').removeClass( 'display' ).addClass('table table-striped table-bordered');
      // $('#myTable_paginate').removeClass( 'display' ).addClass('pagination justify-content-center');
      
      // let searchbar = document.getElamentById
      $('#all-search').keyup(function(){
          table.search($(this).val()).draw();
          table2.search($(this).val()).draw() ;
          table3.search($(this).val()).draw() ;
      });
      
      // table.search("angka").draw();
    </script>


    
</body>
</html>