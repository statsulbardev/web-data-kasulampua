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
             <div class="col-lg-12">
              <div style="width:100%; display:flex; justify-content: flex-end;">
                <a href=<?php echo "'".sprintf("./data/%s/%s", $_GET["kategori"], $_GET["nama_file"])."'"?> class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Download Excel</a>

              </div>
              <div>
                <?php
                  require_once('./lib/upload.php');
                  $path = sprintf("./data/%s/%s", $_GET["kategori"], $_GET["nama_file"]);
                  // echo $path;
                  // echo excelToHtml("./data/sosial/[Metode Baru] Indeks Pembangunan Manusia menurut Provinsi, 2019-2022.xlsx")
                  echo excelToHtml($path);
                  // echo "<iframe srcdoc='".
                  //   excelToHTML("./data/sosial/[Metode Baru] Indeks Pembangunan Manusia menurut Provinsi, 2019-2022.xlsx")
                  //   ."'/>";

                ?>
              </div>


              <!-- <iframe
                style="width: 100%; height:500px;"

                src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS2PEr7jqAdkjZzZMfZiKgeVxG6YCQba1tEJIxTVOufIQJe0_gLMb3Hqz6uF83mGQ/pubhtml?gid=348307456&amp;single=true&amp;widget=true&amp;headers=false"></iframe> -->
             </div>
            
             
            </div>
        </section>
        <!-- End Statistik Section -->

    </main>

    <?php
      include "./_footer.php";
    ?>
</body>
</html>