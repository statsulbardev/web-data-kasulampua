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
      <section id="blank" class="tabel"></section>

        <!-- ======= Statistik Section ======= -->
        <section id="statistik" class="tabel">
          <div class="container" data-aos="fade-up">

            <div class="row" data-aos="fade-up" data-aos-delay="100">
    
              <div class="table-responsive">
                <table class="table" style="font-size: 13px;">
                  <thead style="background-color: #cda45e; color: #fff; padding: 12px 15px; font-weight: 600;
                  font-size: 15px;">
                   <tr>
                     <th style="width: 200px;" scope="col">Laman</th>
                     <th style="width: 200px;" scope="col">Tautan</th>
                   </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Glosarium</td>
                      <td><a href="/glosarium.html">Site Link</a</td>
                    </tr>
                    <tr>
                      <td>Peta Situs</td>
                      <td><a href="/sitemap.html">Site Link</a</td>
                    </tr>
                    <tr>
                      <td>Beranda</td>
                      <td><a href="/index.html">Site Link</a</td>
                    </tr>
                    <tr>
                      <td>Berita</td>
                      <td><a href="/berita.html">Site Link</a</td>
                    </tr>
                    <tr>
                      <td>Statistik</td>
                      <td><a href="/statistik.html">Site Link</a</td>
                    </tr>
                    <tr>
                      <td>Publikasi</td>
                      <td><a href="/publikasi.html">Site Link</a</td>
                    </tr>
                    <tr>
                      <td>Infografis</td>
                      <td><a href="/infografis.html">Site Link</a</td>
                    </tr>
                    <tr>
                      <td>Tentang</td>
                      <td><a href="/tentang.html">Site Link</a</td>
                    </tr>
                    <tr>
                      <td>Hubungi Kami</td>
                      <td><a href="https://wa.me/6281231007474">Site Link</a</td>
                    </tr>
                  </tbody>
               </table>
              </div>
          </div>
        </section>
        <!-- End Statistik Section -->
    </main>

    <?php
      include "./_header.php";
    ?>
</body>
</html>