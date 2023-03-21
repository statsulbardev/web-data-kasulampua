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
    <!-- Hero Start -->
        <section id="section-1" class="d-flex align-items-center">
            <div class="content-slider">
              <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
              <input type="radio" id="banner2" class="sec-1-input" name="banner">
              <input type="radio" id="banner3" class="sec-1-input" name="banner">
              <input type="radio" id="banner4" class="sec-1-input" name="banner">
              <div class="slider">
                <div id="top-banner-1" class="banner">
                  <div class="banner-inner-wrapper header-text" data-aos="zoom-in" data-aos-delay="100">
                    <div class="main-caption">
                      <h2>Selamat Datang di KASULAMPUA:</h2>
                      <h1 style="color: #cda45e">KALIMANTAN</h1>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="more-info">
                            <div class="row">
                              <div class="col-lg-3 col-sm-6 col-6">
                                <i class="fa fa-user"></i>
                                <h4><span>Jumlah Penduduk Hasil SP2020:</span><br>17,05 juta jiwa</h4>
                              </div>
                              <div class="col-lg-3 col-sm-6 col-6">
                                <i class="fa fa-globe"></i>
                                <h4><span>Luas Wilayah:</span><br>534.698.5 KM<em>2</em></h4>
                              </div>
                              <div class="col-lg-3 col-sm-6 col-6">
                                <i class="fa fa-coins"></i>
                                <h4><span>Pertumbuhan Ekonomi 2022:</span><br>4,94%</h4>
                              </div>
                              <div class="col-lg-3 col-sm-6 col-6">
                                <i class="fa fa-chart-pie"></i>
                                <h4><span>Kontribusi PDRB 2022:</span><br>9,23%</h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="top-banner-2" class="banner">
                  <div class="banner-inner-wrapper header-text">
                    <div class="main-caption">
                      <h2>Selamat Datang di KASULAMPUA:</h2>
                      <h1 style="color: #cda45e">SULAWESI</h1>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="more-info">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-6">
                                  <i class="fa fa-user"></i>
                                  <h4><span>Jumlah Penduduk Hasil SP2020:</span><br>20,30 juta jiwa</h4>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-6">
                                  <i class="fa fa-globe"></i>
                                  <h4><span>Luas Wilayah:</span><br>186.216.1 km<em>2</em></h4>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-6">
                                  <i class="fa fa-coins"></i>
                                  <h4><span>Pertumbuhan Ekonomi 2022:</span><br>7,05%</h4>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-6">
                                  <i class="fa fa-chart-pie"></i>
                                  <h4><span>Kontribusi PDRB 2022:</span><br>7,03%</h4>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="top-banner-3" class="banner">
                  <div class="banner-inner-wrapper header-text">
                    <div class="main-caption">
                      <h2>Selamat Datang di KASULAMPUA:</h2>
                      <h1 style="color: #cda45e">MALUKU</h1>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="more-info">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-6">
                                  <i class="fa fa-user"></i>
                                  <h4><span>Jumlah Penduduk Hasil SP2020:</span><br>3,20 juta jiwa</h4>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-6">
                                  <i class="fa fa-globe"></i>
                                  <h4><span>Luas Wilayah:</span><br>79.157,0 KM<em>2</em></h4>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-6">
                                  <i class="fa fa-coins"></i>
                                  <h4><span>Pertumbuhan Ekonomi 2022:</span><br>14,17%</h4>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-6">
                                  <i class="fa fa-chart-pie"></i>
                                  <h4><span>Kontribusi PDRB 2022:</span><br>0,65%</h4>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="top-banner-4" class="banner">
                  <div class="banner-inner-wrapper header-text">
                    <div class="main-caption">
                      <h2>Selamat Datang di KASULAMPUA:</h2>
                      <h1 style="color: #cda45e">PAPUA</h1>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="more-info">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-6">
                                  <i class="fa fa-user"></i>
                                  <h4><span>Jumlah Penduduk Hasil SP2020:</span><br>5,60 juta jiwa</h4>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-6">
                                  <i class="fa fa-globe"></i>
                                  <h4><span>Luas Wilayah:</span><br>182.079,2 KM<em>2</em></h4>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-6">
                                  <i class="fa fa-coins"></i>
                                  <h4><span>Pertumbuhan Ekonomi 2022:</span><br>7,03%</h4>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-6">
                                  <i class="fa fa-chart-pie"></i>
                                  <h4><span>Kontribusi PDRB 2022:</span><br>1,85%</h4>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <nav>
                <div class="controls">
                  <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">Kalimantan</span></label>
                  <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">Sulawesi</span></label>
                  <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">Maluku</span></label>
                  <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">Papua</span></label>
                </div>
              </nav>
            </div>
          </section>
          <!-- Hero End -->

          <!-- Berita Section -->
          <section id="berita" class="events">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Berita</h2>
                <p>Berita Terkini Wilayah Kasulampua</p>
            </div>

            <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide"><!-- Start berita item -->
                  <div class="row event-item">
                    <div class="col-lg-6">
                      <img src="assets/img/img1_new.jpg" class="img-fluid" alt="">
                    </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Di Tanah Papua, Konreg PDRB Sulampua Digelar</h3>
                      <p class="fst-italic">
                      “Disparitas kemiskinan memang masih tinggi. Oleh karena itu, diskusi yang interaktif dan positif di antara kita diharapkan jadi solusi pembangunan” ucap Kepala BPS, Kecuk Suhariyanto ketika menjadi pembicara kunci dalam acara “Kegiatan Konsultasi Regional PDRB Sulampua 2019” yang bertemakan “Mendorong Pertumbuhan Ekonomi Wilayah Sulampua yang Berkeadilan dan Berkelanjutan melalui Peningkatan Daya Saing dan Pemanfaatan Sumber Daya Unggulan Daerah”.
                      </p>
                      <!-- <ul>
                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                      </ul> -->
                      <p>
                        Dalam sambutannya, Dominggus menjelaskan bahwa untuk mendukung keberhasilan program pembangunan daerah harus memanfaatkan data statistik. Hal ini penting untuk mewujudkan impian Papua Barat menjadi provinsi konservasi alam. Setiap usaha peningkatan perekonomian memang selayaknya berasaskan berkelanjutan agar menghindari pencemaran dan kerusakan lingkungan di Papua. “Kita jaga alam, alam jaga kita. Kita jaga hutan, hutan jaga kita,” tutur Dominggus.
                      </p>
                      <a href="./berita-page-1.php" class="btn">Selengkapnya</a>
                   </div>
                 </div>
               </div><!-- End berita item -->

               <div class="swiper-slide"><!-- Start berita item -->
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img src="assets/img/img2_new.jpg" class="img-fluid" alt="">
                  </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Penguatan Pusat Pertumbuhan Wilayah Kalimantan</h3>
                    <p class="fst-italic">
                    “Rekomendasi dan pemikiran yang dihasilkan dalam Rapat Koordinasi Regional Produk Domestik Regional Bruto se-Kalimantan diharapkan dapat menjadi masukan dalam merumuskan arah kebijakan pembangunan ekonomi Indonesia, khususnya Regional Kalimantan”, demikian kiranya disampaikan Gubernur Kalimantan Timur Dr. Ir. H. Isran Noor, M.Si dalam acara Rapat Koordinasi Regional Produk Domestik Regional Bruto se-Kalimantan di Kota Balikpapan yang diselenggarakan Badan Perencanaan Pembangunan Daerah Provinsi Kalimantan Timur bekerjasama dengan Badan Pusat Statistik Provinsi Kalimantan Timur.
                    </p>
                    <!-- <ul>
                      <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                      <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                      <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    </ul> -->
                    <p>
                    Acara ini dihadiri oleh 400 orang peserta terdiri dari Kepala Badan Pusat Statistik (BPS) Republik Indonesia, Kepala Bappeda Provinsi se Kalimantan, Kepala BPS Provinsi se Kalimantan, Kepala Bappeda Kabupaten/Kota se Kalimantan dan Kepala BPS Kabupaten/Kota se Kalimantan.
                    </p>
                    <a href="./berita-page-2.php" class="btn">Selengkapnya</a>
                 </div>
               </div>
             </div><!-- End berita item -->

             <div class="swiper-slide"><!-- Start berita item -->
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/img3_new.jpg" class="img-fluid" alt="">
                </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Rapat Rancangan Rencana Pembangunan Daerah Prov. Sultra Tahun 2024-2026 </h3>
                  <p class="fst-italic">
                  Pada Hari, Selasa 7 Februari 2023. Bappeda Prov. Sultra menyelenggarakan Rapat Rancangan Rencana Pembangunan Daerah Prov. Sultra Tahun 2024-2026 (Finalisasi Tujuan, Sasaran, Strategi dan Arah Kebijakan Pembangunan Daerah Serta Program Perangkat Daerah) yang dilaksanakan di Hotel Azizah Syariah Kendari.
                  </p>
                  <!-- <ul>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  </ul> -->
                  <p>
                  Kegiatan ini bertujuan untuk mendiskusikan Tujuan, Sasaran, Strategi dan Arah Kebijakan Pembangunan Daerah Serta Program Perangkat Daerah dengan seluruh OPD Lingkup Pemprov. Sultra.
                  </p>
                  <a href="./berita-page-3.php" class="btn">Selengkapnya</a>
               </div>
             </div>
           </div><!-- End berita item -->

          </div>
            <div class="swiper-pagination"></div>
            <div class="text-center">  
              <a href="./berita.php" class="btn">Lihat Berita Lainnya</a>
            </div>
          </div>

          </div>
          </section>
          <!-- End Berita Section -->

          <!-- ======= Statistik Section ======= -->
          <section id="statistik" class="tabel">
            <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Statistik</h2>
              <p>Data Terkini Wilayah Kasulampua</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="input-group rounded" style="margin-bottom: 20px;">
                <input id="all-search" type="search" class="form-control rounded" placeholder="Cari Data" aria-label="Search" aria-describedby="search-addon" />
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
           </div>
          </section><!-- End Statistik Section -->

        <!-- Data Section -->
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
                      Sumber: <span>BPS, Susenas September 2022</span></div>
                  </div>

                  <div class="card text-center" style="padding: 10px; margin-bottom: 15px; color: #cda45e; font-weight: bold;">
                    Indeks Pembangunan Manusia di Kawasan Kasulampua, 2022
                    <div class="chart" id="ipm"></div>
                    <div style="color:rgb(129, 129, 129); font-size: small; font-weight: 300;">
                      Sumber: <span>BPS, berbagai sensus dan survei</span></div>
                  </div>

                    <script>
                      var options = {
                        series: [{
                        data: [356.51, 144.52, 201.95, 242.30, 50.58, 187.33, 389.71, 782.32, 314.74, 187.35, 169.26, 296.66, 82.13, 936.32, 222.36]
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
                        dataLabels: {
                          enabled: true
                        },
                        xaxis: {
                          categories: ["Kalimantan Barat", "Kalimantan Tengah", "Kalimantan Selatan", "Kalimantan Timur", "Kalimantan Utara", "Sulawesi Utara", "Sulawesi Tengah", "Sulawesi Selatan", "Sulawesi Tenggara", "Gorontalo", "Sulawesi Barat", "Maluku", "Maluku Utara", "Papua", "Papua Barat"],
                        }
                      };
                      var chart = new ApexCharts(document.querySelector("#miskin"), options);
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
        <!-- End Data Section -->

        <!-- Publikasi Section -->
        <section id="publikasi" class="publikasi">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Publikasi</h2>
              <p>Publikasi Statistik</p>
            </div>

          <div class="row g-0">
            <div class="input-group rounded" style="margin-bottom: 20px;">
              <input type="search" class="form-control rounded" placeholder="Cari Publikasi" aria-label="Search" aria-describedby="search-addon" />
            </div>
          <div class="col-lg-2 col-md-6">
            <div class="buku" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/publikasi1.png" class="img-fluid" alt="">
              <div class="buku-info">
                <div class="buku-info-content">
                  <span>Statistik Penduduk Lanjut Usia Sulawesi Tenggara 2021</span>
                </div>
                <div class="social">
                  <a target="_blank" href="https://sultra.bps.go.id/publication.html?Publikasi%5BtahunJudul%5D=&Publikasi%5BkataKunci%5D=Statistik+Penduduk+Lanjut+Usia+Sulawesi+Tenggara&Publikasi%5BcekJudul%5D=0&yt0=Tampilkan" class="btn">Unduh</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <div class="buku" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/publikasi2.png" class="img-fluid" alt="">
              <div class="buku-info">
                <div class="buku-info-content">
                  <span>Sulawesi Tenggara Dalam Angka 2023</span>
                </div>
                <div class="social">
                  <a target="_blank" href="https://sultra.bps.go.id/publication.html?Publikasi%5BtahunJudul%5D=2023&Publikasi%5BkataKunci%5D=sulawesi+tenggara+dalam+angka&Publikasi%5BcekJudul%5D=0&yt0=Tampilkan" class="btn">Unduh</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <div class="buku" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/publikasi3.png" class="img-fluid" alt="">
              <div class="buku-info">
                <div class="buku-info-content">
                  <span>Sulawesi Tenggara dalam Infografis 2022</span>
                </div>
                <div class="social">
                  <a target="_blank" href="https://sultra.bps.go.id/publication.html?Publikasi%5BtahunJudul%5D=2022&Publikasi%5BkataKunci%5D=sulawesi+tenggara+dalam+infografis&Publikasi%5BcekJudul%5D=0&Publikasi%5BcekJudul%5D=1&yt0=Tampilkan" class="btn">Unduh</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <div class="buku" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/publikasi1.png" class="img-fluid" alt="">
              <div class="buku-info">
                <div class="buku-info-content">
                  <span>Statistik Penduduk Lanjut Usia Sulawesi Tenggara 2021</span>
                </div>
                <div class="social">
                  <a target="_blank" href="https://sultra.bps.go.id/publication.html?Publikasi%5BtahunJudul%5D=&Publikasi%5BkataKunci%5D=Statistik+Penduduk+Lanjut+Usia+Sulawesi+Tenggara&Publikasi%5BcekJudul%5D=0&yt0=Tampilkan" class="btn">Unduh</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <div class="buku" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/publikasi2.png" class="img-fluid" alt="">
              <div class="buku-info">
                <div class="buku-info-content">
                  <span>Sulawesi Tenggara Dalam Angka 2023</span>
                </div>
                <div class="social">
                  <a target="_blank" href="https://sultra.bps.go.id/publication.html?Publikasi%5BtahunJudul%5D=2023&Publikasi%5BkataKunci%5D=sulawesi+tenggara+dalam+angka&Publikasi%5BcekJudul%5D=0&yt0=Tampilkan" class="btn">Unduh</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <div class="buku" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/publikasi3.png" class="img-fluid" alt="">
              <div class="buku-info">
                <div class="buku-info-content">
                  <span>Sulawesi Tenggara dalam Infografis 2022</span>
                </div>
                <div class="social">
                  <a target="_blank" href="https://sultra.bps.go.id/publication.html?Publikasi%5BtahunJudul%5D=2022&Publikasi%5BkataKunci%5D=sulawesi+tenggara+dalam+infografis&Publikasi%5BcekJudul%5D=0&Publikasi%5BcekJudul%5D=1&yt0=Tampilkan" class="btn">Unduh</a>
                </div>
              </div>
            </div>
          </div>

          <div class="text-center" style="margin-top: 20px;">  
            <a href="./publikasi.php" class="btn">Publikasi Selengkapnya</a>
          </div>
          
          </div>
          

        </div>
        </section>
        <!-- End Publikasi Section -->

        <!-- ======= Infografis Section ======= -->
        <section id="gallery" class="gallery">

          <div class="container" data-aos="fade-up">
            <div class="section-title">
              <h2>Infografis</h2>
              <p>Galeri Infografis Indikator Statistik Kasulampua</p>
            </div>
          </div>

          <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-0">

            <div class="col-lg-2 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/infografis1.png" class="gallery-lightbox" data-gall="gallery-item">
                  <img src="assets/img/infografis1.png" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/infografis2.png" class="gallery-lightbox" data-gall="gallery-item">
                  <img src="assets/img/infografis2.png" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/infografis3.png" class="gallery-lightbox" data-gall="gallery-item">
                  <img src="assets/img/infografis3.png" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/infografis4.png" class="gallery-lightbox" data-gall="gallery-item">
                  <img src="assets/img/infografis4.png" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/infografis5.png" class="gallery-lightbox" data-gall="gallery-item">
                  <img src="assets/img/infografis5.png" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/infografis6.png" class="gallery-lightbox" data-gall="gallery-item">
                  <img src="assets/img/infografis6.png" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/infografis7.png" class="gallery-lightbox" data-gall="gallery-item">
                  <img src="assets/img/infografis7.png" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/infografis8.png" class="gallery-lightbox" data-gall="gallery-item">
                  <img src="assets/img/infografis8.png" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/infografis9.png" class="gallery-lightbox" data-gall="gallery-item">
                  <img src="assets/img/infografis9.png" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/infografis10.png" class="gallery-lightbox" data-gall="gallery-item">
                  <img src="assets/img/infografis10.png" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/infografis2.png" class="gallery-lightbox" data-gall="gallery-item">
                  <img src="assets/img/infografis2.png" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/infografis1.png" class="gallery-lightbox" data-gall="gallery-item">
                  <img src="assets/img/infografis1.png" alt="" class="img-fluid">
                </a>
              </div>
            </div>            

            </div>
            <div class="text-center" style="margin-top: 20px;">  
              <a href="./infografis.php" class="btn">Infografis Selengkapnya</a>
            </div>

          </div>
        </section><!-- End gallery Section -->

    </main>
    
    <?php
      // ini_set( 'error_reporting', E_ALL );
      // ini_set( 'display_errors', true );
      // phpinfo();
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

      $('#all-search').keyup(function(){
          table.search($(this).val()).draw();
          table2.search($(this).val()).draw() ;
          table3.search($(this).val()).draw() ;
      });
    </script>
</body>
</html>