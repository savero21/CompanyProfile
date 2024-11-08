
<!-- Slider =================-->
 
<header id="content">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php foreach ($tbslider as $key => $slider) : ?>
                <div class="carousel-item <?php echo $key === 0 ? 'active' : ''; ?>">
                    <img style="height: auto; max-height: 100%;" data-src="asset-user/images/<?= $slider->file_foto_slider; ?>" <?php foreach ($profil as $perusahaan) : ?> alt="<?= $perusahaan->nama_perusahaan; ?>" <?php endforeach; ?> class="d-block w-100 lazyload">
                </div>
            <?php endforeach; ?>
        </div>
        <div class="page">
            <?php for ($a = 0; $a < count($tbslider); $a++) : ?>
                <span class="dot" data-bs-slide-to="<?= $a ?>" data-bs-target="#header-carousel"></span>
            <?php endfor; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="arrow-sliders"><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="arrow-sliders"><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
</header>
