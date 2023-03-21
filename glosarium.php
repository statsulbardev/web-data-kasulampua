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
              <div class="input-group rounded" style="margin-bottom: 20px;">
                <input type="search" class="form-control rounded" placeholder="Cari Kata Kunci" aria-label="Search" aria-describedby="search-addon" />
              </div>
    
              <div class="table-responsive">
                <table class="table" style="font-size: 13px;">
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
    </main>

    <?php
      include "./_footer.php";
    ?>
</body>
</html>