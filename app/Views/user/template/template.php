<!DOCTYPE html>
<html class="no-js" prefix="og: http://ogp.me/ns#" lang="en-IN">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php echo $Title; ?> | <?php foreach ($profil as $descper) : ?><?= $descper->nama_perusahaan; ?><?php endforeach; ?></title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="<?php echo $Meta; ?>" />
  <?php foreach ($profil as $perusahaan) : ?>
    <link rel="shortcut icon" href="<?= base_url('asset-user/images/') ?><?= $perusahaan->favicon_website ?>">
  <?php endforeach; ?>

  <meta property="og:url" content="https://www.boostraptheme.com/demo/index.html" />
  <meta property="og:title" content="Startup - Business Free Bootstrap Template" />
  <meta property="og:locale" content="en_IN" />
  <meta property="og:site_name" content="Boostraptheme" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="BoostrapTheme" />
  <meta name="twitter:creator" content="BoostrapTheme" />

  <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/animate.min.css">
  <link rel="stylesheet" href="<?= base_url('asset-user') ?>/css/app.css">

  <script src="<?= base_url('asset-user') ?>/js/jquery.min.js"></script>
  <script>
    $(window).on('load', function() {
      $(".loader").fadeOut(2000);
    });
  </script>
</head>

<body>

  <?= $this->include('user/layout/nav'); ?>


  <!-- render halaman konten -->
  <?= $this->renderSection('content'); ?>
  
  <!-- WhatsApp Icons -->
  <div class="floating-container" style="position: fixed; bottom: 30px; right: 30px; z-index: 100;">
    <div class="element-container">
      <?php foreach ($profil as $iconwa) : ?>
        <a class="whats-app" href="<?= $iconwa->link_whatsapp ?>" target="" style="display: block; margin-bottom: 10px;">
          <img src="<?= base_url('asset-user/images/iconwa.png'); ?>" alt="WhatsApp" class="my-float" style="width: 60px; height: 60px; padding: 10px; transition: background-color 0.3s ease-in-out;">
        </a>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- footer -->
  <?= $this->include('user/layout/footer');  ?>


  <!-- loader -->
  <!-- <div id="loader" class="show fullscreen">
    <img src="/asset-user/images/loading.gif" alt="Loading" class="gif-loader">
  </div> -->

  <script src="<?= base_url('asset-user') ?>/js/popper.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/bootstrap.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/jquery.easing.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/owl.carousel.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/wow.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/app.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/lazysizes.min.js"></script>


  <script>
    // Fungsi untuk menandai tautan sebagai aktif berdasarkan data-page
    function markLinkAsActive(page) {
      // Dapatkan semua tautan dalam menu
      var menuLinks = document.querySelectorAll(".navbar-nav a.nav-link");

      // Hapus kelas "active" dari semua tautan
      menuLinks.forEach(function(link) {
        link.classList.remove("active");
      });

      // Temukan tautan yang sesuai dengan data-page dan tambahkan kelas "active" ke tautan terkait
      var linkToMark = document.querySelector('[data-page="' + page + '"]');
      linkToMark.classList.add("active");
    }

    // Panggil fungsi markLinkAsActive saat mengklik tautan
    document.addEventListener("DOMContentLoaded", function() {
      // Ambil URL halaman saat ini
      var currentURL = window.location.pathname;

      // Tentukan halaman saat ini berdasarkan URL
      var currentPage = 'home'; // Default: 'home'

      if (currentURL === window.location.origin + '/') {
        currentPage = 'home';
      } else if (currentURL.includes('/about')) {
        currentPage = 'about';
      } else if (currentURL.includes('/artikel')) {
        currentPage = 'artikel';
      } else if (currentURL.includes('/product')) {
        currentPage = 'product';
      } else if (currentURL.includes('/activities')) {
        currentPage = 'activities';
      } else if (currentURL.includes('/contact')) {
        currentPage = 'contact';
      }

      // Panggil fungsi markLinkAsActive dengan currentPage saat dokumen dimuat
      markLinkAsActive(currentPage);
    });

    // Panggil fungsi markLinkAsActive saat tautan di klik
    var menuLinks = document.querySelectorAll(".navbar-nav a.nav-link");
    menuLinks.forEach(function(link) {
      link.addEventListener("click", function() {
        var page = link.getAttribute("data-page");
        markLinkAsActive(page);
      });
    });
  </script>

  <!-- Template Javascript -->
  <script src="<?= base_url('asset-user') ?>/js/main.js"></script>


  <!-- untuk menambahkan class="active" pada <li> di navbar -->


</body>

</html>