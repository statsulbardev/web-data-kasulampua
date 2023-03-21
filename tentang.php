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
            <!-- Page content-->
            <div class="row text-dark">
              <div class="col-lg-12">
                <!-- Post content-->
                <article>
                      <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="./assets/img/logokasulampuax.png" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                          <p class="mb-4" style="font-size: medium; text-align: justify;">Konsultasi Regional Kalimantan, Sulawesi, Maluku, dan Papua (Kasulampua) merupakan forum bertukar pengetahuan tentang 
                            permasalahan dan pembangunan ekonomi di wilayah Kasulampua yang diinisiasi oleh Badan Pusat Statistik, Bappeda, dan Bank Indonesia. Konreg ini menitikberatkan pada 
                            pencapaian keselarasan, keserasian dan keterpaduan perencanaan pembangunan antar wilayah, antara pusat dan daerah serta antar sektor khususnya di wilayah Kasulampua. 
                            Konreg ini akan menjadi landasan dalam penyusunan kesepahaman/kesepakatan dan rencana tindak lanjut sekaligus menggerakkan perekonomian daerah sebagai upaya 
                            pencapaian pembangunan regional maupun nasional.</p>
                          
                </article>
            </div>
          </div>
          </section>
          
          <!-- End Berita Section -->

    </main>

    <?php
      include "./_footer.php";
    ?>
</body>
</html>