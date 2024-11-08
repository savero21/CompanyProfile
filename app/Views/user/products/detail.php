<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- HEADER 
            =================-->
<header id="content" class="header-cat" style="background-image: linear-gradient(rgba(4, 15, 40, 0.7), rgba(4, 15, 40, 0.7)), url('<?= base_url('asset-user/images/hero_4.jpg'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php foreach ($profil as $perusahaan) : ?>
                    <h1><?php echo lang('Blog.titleOurproducts');
                        if (!empty($perusahaan)) {
                            echo ' ' . $perusahaan->nama_perusahaan;
                        } ?></h1>
                <?php endforeach; ?>
                <p class="text-white text-center">
                    <a href="<?= base_url('/') ?>"><?php echo lang('Blog.headerHome');  ?></a>
                    <span class="mx-2">/</span>
                    <span><?php echo lang('Blog.headerProducts');  ?></span>
                </p>
            </div>
        </div>
    </div>
</header>

<!-- ABOUT 
            =================-->
<section id="how-work" class="how-work">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="how-work-cont">
                    <h1><?php if (lang('Blog.Languange') == 'en') {
                            echo $tbproduk->nama_produk_en;
                        } elseif (lang('Blog.Languange') == 'in') {
                            echo $tbproduk->nama_produk_in;
                        } ?></h1>
                    <p><?php if (lang('Blog.Languange') == 'en') {
                            echo $tbproduk->deskripsi_produk_en;
                        } elseif (lang('Blog.Languange') == 'in') {
                            echo $tbproduk->deskripsi_produk_in;
                        } ?></p>

                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 m-auto">
                <div class="how-work-img wow fadeInUp" data-wow-delay="0.3s">
                    <img data-src="/asset-user/images/<?= $tbproduk->foto_produk ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                                                                                                echo $tbproduk->nama_produk_en;
                                                                                            } ?>
                                    <?php if (lang('Blog.Languange') == 'in') {
                                        echo $tbproduk->nama_produk_in;
                                    } ?>" class="img-fluid lazyload">
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection('content'); ?>