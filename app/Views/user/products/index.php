<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- HEADER 
            =================-->
<header id="content" class="header-cat" style="background-image: linear-gradient(rgba(4, 15, 40, 0.7), rgba(4, 15, 40, 0.7)), url('asset-user/images/IMG-20190711-WA0023.jpg');">
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

<!-- product 
            =================-->
            <style>
    .product-card img {
        transition: all 0.3s ease;
    }

    .product-card:hover img {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        transform: scale(1.05);
    }
</style>

<section id="blog" class="blog py-5">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-12 text-center">
                <div class="heading mb-4">
                    
                    <div class="border-bottom w-25 mx-auto"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($tbproduk as $produk) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card product-card h-100 shadow-sm wow fadeInUp" data-wow-delay="0.3s">
                        <img data-src="asset-user/images/<?= $produk->foto_produk; ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                                                                                                    echo $produk->nama_produk_en;
                                                                                                } ?>
                                    <?php if (lang('Blog.Languange') == 'in') {
                                        echo $produk->nama_produk_in;
                                    } ?>" class="card-img-top img-fluid lazyload">
                        <div class="card-body d-flex flex-column">
                            <a href="<?= base_url('product/detail/' . $produk->id_produk . '/' . url_title($produk->nama_produk_en) . '_' . url_title($produk->nama_produk_in)) ?>" class="btn btn-primary mt-auto" style="width: 100%; height: 50px; display: flex; justify-content: center; align-items: center;">
                                <?php if (lang('Blog.Languange') == 'en') {
                                    echo $produk->nama_produk_en;
                                } ?>
                                <?php if (lang('Blog.Languange') == 'in') {
                                    echo $produk->nama_produk_in;
                                } ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>



<?= $this->endSection('content'); ?>