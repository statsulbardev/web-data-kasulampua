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
        <section id="blank" class="d-flex align-items-center"></section>

          <!-- Berita Section -->
          <section id="berita" class="events">
          <div class="container" data-aos="fade-up">
            <div class="row gx-5">
              
              <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <!-- News block -->
                <div>
                  <!-- Featured image -->
                  <div class="bg-image hover-overlay shadow-1-strong ripple mb-4" data-mdb-ripple-color="light">
                    <img src="assets/img/img1_new.jpg" class="img-fluid" />
                      <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </a>
                  </div>

                  <!-- Article data -->
                  <div class="row mb-3">
                    <div class="col-6">
                      <a href="" style="color:rgb(158, 158, 158)">
                        <i class="fas fa-calendar"></i>
                          01.03.2023
                      </a>
                    </div>
                  </div>

                  <!-- Article title and description -->
                  <a href="./berita-page-1.php" style="color: #cda45e">
                    <h5>Di Tanah Papua, Konreg PDRB Sulampua Digelar</h5>

                    <p class="text-dark">
                    “Disparitas kemiskinan memang masih tinggi. Oleh karena itu, diskusi yang interaktif dan positif di antara kita diharapkan jadi solusi pembangunan” ucap Kepala BPS, Kecuk Suhariyanto ketika menjadi pembicara kunci dalam acara “Kegiatan Konsultasi Regional PDRB Sulampua 2019” yang bertemakan “Mendorong Pertumbuhan Ekonomi Wilayah Sulampua yang Berkeadilan dan Berkelanjutan melalui Peningkatan Daya Saing dan Pemanfaatan Sumber Daya Unggulan Daerah”.
                    </p>
                  </a>
                  <a href="./berita-page-1.php" class="btn">Selengkapnya</a>
                  <!-- News block -->
                </div>
              </div>

              <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <!-- News block -->
                <div>
                  <!-- Featured image -->
                  <div class="bg-image hover-overlay shadow-1-strong ripple mb-4" data-mdb-ripple-color="light">
                    <img src="assets/img/img2_new.jpg" class="img-fluid" />
                      <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </a>
                  </div>

                  <!-- Article data -->
                  <div class="row mb-3">
                    <div class="col-6">
                      <a href="" style="color:rgb(158, 158, 158)">
                        <i class="fas fa-calendar"></i>
                          01.03.2023
                      </a>
                    </div>
                  </div>

                  <!-- Article title and description -->
                  <a href="./berita-page-2.php" style="color: #cda45e">
                    <h5>Penguatan Pusat Pertumbuhan Wilayah Kalimantan</h5>

                    <p class="text-dark">
                    “Rekomendasi dan pemikiran yang dihasilkan dalam Rapat Koordinasi Regional Produk Domestik Regional Bruto se-Kalimantan diharapkan dapat menjadi masukan dalam merumuskan arah kebijakan pembangunan ekonomi Indonesia, khususnya Regional Kalimantan”, demikian kiranya disampaikan Gubernur Kalimantan Timur Dr. Ir. H. Isran Noor, M.Si dalam acara Rapat Koordinasi Regional Produk Domestik Regional Bruto se-Kalimantan di Kota Balikpapan yang diselenggarakan Badan Perencanaan ...
                    </p>
                  </a>
                  <a href="./berita-page-2.php" class="btn">Selengkapnya</a>
                  <!-- News block -->
                </div>
              </div>

              <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <!-- News block -->
                <div>
                  <!-- Featured image -->
                  <div class="bg-image hover-overlay shadow-1-strong ripple mb-4" data-mdb-ripple-color="light">
                    <img src="assets/img/img3_new.jpg" class="img-fluid" />
                      <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </a>
                  </div>

                  <!-- Article data -->
                  <div class="row mb-3">
                    <div class="col-6">
                      <a href="" style="color:rgb(158, 158, 158)">
                        <i class="fas fa-calendar"></i>
                          08.02.2023
                      </a>
                    </div>
                  </div>

                  <!-- Article title and description -->
                  <a href="./berita-page-3.php" style="color: #cda45e">
                    <h5>Rapat Rancangan Rencana Pembangunan Daerah Prov. Sultra Tahun 2024-2026 </h5>

                    <p class="text-dark">
                    Pada Hari, Selasa 7 Februari 2023. Bappeda Prov. Sultra menyelenggarakan Rapat Rancangan Rencana Pembangunan Daerah Prov. Sultra Tahun 2024-2026 (Finalisasi Tujuan, Sasaran, Strategi dan Arah Kebijakan Pembangunan Daerah Serta Program Perangkat Daerah) yang dilaksanakan di Hotel Azizah Syariah Kendari.
                    </p>
                    <p class="text-dark">
                    Kegiatan ini bertujuan untuk mendiskusikan Tujuan ...
                    </p>
                  </a>
                  <a href="./berita-page-3.php" class="btn">Selengkapnya</a>
                  <!-- News block -->
                </div>
              </div>
            
            </div>
          </div>
          <!-- <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center" style="margin-top: 40px">
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
          </section>
          
          <!-- End Berita Section -->

    </main>

    <?php
      include "./_footer.php";
    ?>
</body>
</html>