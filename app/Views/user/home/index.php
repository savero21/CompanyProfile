<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- TEST SLIDER img -->
<?= $this->include('user/home/slider'); ?>

<!-- ABOUT 
=================-->

<style>
    .product-card img {
        transition: all 0.3s ease;
    }
    .product-card:hover img {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        transform: scale(1.05);
    }

    .custom-btn {
        transition: all 0.3s ease;
    }
    .custom-btn:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        transform: scale(1.05);
    }

    .btn-wrapper {
        display: flex;
        justify-content: center;
        width: fit-content;
        margin: 0 auto;
    }

    .how-work {
        padding: 50px 0;
    }

    .how-work .how-work-img img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        object-fit: cover;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .how-work .how-work-img:hover img {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        transform: scale(1.05);
    }

    .how-work-cont {
        margin-top: 20px;
    }

    .how-work-cont h6 {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .how-work-cont h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .how-work-cont p {
        font-size: 1rem;
        line-height: 1.6;
        color: #555;
    }

    .how-work-cont .btn-wrapper {
        margin-top: 20px;
    }

    @media (max-width: 768px) {
        .how-work .how-work-cont {
            text-align: center;
        }
    }
</style>

<section id="how-work" class="how-work">
    <div class="container">
        <?php foreach ($profil as $descper) : ?>
            <div class="row align-items-center">
                <div class="col-md-5 m-auto">
                    <div class="how-work-img wow fadeInUp" data-wow-delay="0.3s">
                        <img data-src="asset-user\images\<?= $descper->foto_utama; ?>" alt="<?= $descper->nama_perusahaan; ?>" class="img-fluid lazyload">
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <div class="how-work-cont">
                        <h6 class="text-primary"><?php echo lang('Blog.titleAboutUs') ?></h6>
                        <h1><?= $descper->nama_perusahaan; ?></h1>
                        <p>
                            <?php 
                            if (lang('Blog.Languange') == 'en') {
                                echo character_limiter($descper->deskripsi_perusahaan_en, 700);
                            } else if (lang('Blog.Languange') == 'in') {
                                echo character_limiter($descper->deskripsi_perusahaan_in, 700);
                            } ?>
                        </p>
                        <div class="btn-wrapper">
                            <a class="btn btn-primary mt-auto custom-btn py-2 px-3" href="<?= base_url('about') ?>">
                                <?php echo lang('Blog.btnReadmore'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- END slider -->

<!-- END slider -->

<section id="how-work" class="how-work py-5 bg-light">
    <div class="container">
        <?php foreach ($profil as $title) :  ?>
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <div class="how-work-cont p-4 bg-white rounded shadow-sm">
                        <h1 class="display-4 text-primary"><?= $title->title_website; ?></h1>
                        <p class="lead text-muted">Exercise your hobby, your health by cycling.</p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>


<!-- Artikel
=================-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const scrollingWrapper = document.querySelector('.scrolling-wrapper');
        const scrollLeftButton = document.querySelector('.scroll-arrow.left');
        const scrollRightButton = document.querySelector('.scroll-arrow.right');

        scrollLeftButton.addEventListener('click', function() {
            scrollingWrapper.scrollBy({ left: -300, behavior: 'smooth' });
        });

        scrollRightButton.addEventListener('click', function() {
            scrollingWrapper.scrollBy({ left: 300, behavior: 'smooth' });
        });
    });
</script>

<style>
    .product-card img {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover img {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        transform: scale(1.05);
    }

    .scrolling-wrapper {
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
        position: relative;
        padding: 10px 0;
    }

    .scrolling-wrapper::-webkit-scrollbar {
        display: none;  /* Chrome, Safari, and Opera */
    }

    .scroll-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.6);
        border: none;
        color: white;
        font-size: 24px;
        padding: 10px;
        cursor: pointer;
        z-index: 10;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .scroll-arrow.left {
        left: 10px;
    }

    .scroll-arrow.right {
        right: 10px;
    }

    .scroll-arrow:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    @media (max-width: 768px) {
        .product-card {
            width: calc(100% / 2 - 15px); /* Adjust for smaller screens */
        }
    }

    @media (max-width: 576px) {
        .product-card {
            width: calc(100% - 15px); /* Full width for very small screens */
        }
    }

    .product-card {
        flex: 0 0 auto;
        width: calc(100% / 3 - 15px);
        margin-right: 15px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }
</style>

<section id="blog" class="blog py-5 position-relative">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-12 text-center">
                <div class="heading mb-4">
                    <h1 class="display-4"><?php echo lang('Blog.newsArticlesIndex'); ?></h1>
                    <div class="border-bottom w-25 mx-auto"></div>
                </div>
            </div>
        </div>
        <button class="scroll-arrow left">&lt;</button>
        <button class="scroll-arrow right">&gt;</button>
        <div class="scrolling-wrapper">
            <?php foreach ($artikelterbaru as $row) : ?>
                <div class="product-card shadow-sm wow fadeInUp" data-wow-delay="0.3s">
                    <img src="<?= base_url('asset-user/images/' . $row->foto_artikel); ?>" alt="Article Image" class="card-img-top img-fluid lazyload" style="object-fit: cover; height: 200px;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= substr(strip_tags($row->judul_artikel), 0, 20) ?>...</h5>
                        <p class="card-text"><?= substr(strip_tags($row->deskripsi_artikel), 0, 50) ?>...</p>
                        <div class="mt-auto">
                            <small class="text-muted"><?= date('d F Y', strtotime($row->created_at)); ?></small>
                            <a href="<?= base_url('/artikel/detail/' . $row->id_artikel) ?>" class="btn btn-primary btn-sm float-right">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>





<style>
    .product-card img {
        transition: all 0.3s ease;
    }

    .product-card:hover img {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        transform: scale(1.05);
    }

    .scrolling-wrapper {
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
        position: relative;
        padding: 10px 0;  /* Add padding to create space for the buttons */
    }

    .scrolling-wrapper::-webkit-scrollbar {
        display: none;  /* Chrome, Safari, and Opera */
    }

    .scroll-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        border: none;
        color: white;
        font-size: 24px;
        padding: 10px;
        cursor: pointer;
        z-index: 1;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .scroll-arrow.left {
        left: 10px;
    }

    .scroll-arrow.right {
        right: 10px;
    }

    .scroll-arrow:disabled {
        background-color: rgba(0, 0, 0, 0.3);
        cursor: not-allowed;
    }

    .scroll-arrow:hover:not(:disabled) {
        background-color: rgba(0, 0, 0, 0.8);
    }

    @media (max-width: 768px) {
        .product-card {
            width: calc(100% / 2 - 15px); /* Adjust for smaller screens */
        }
    }

    @media (max-width: 576px) {
        .product-card {
            width: calc(100% - 15px); /* Full width for very small screens */
        }
    }
</style>




<section id="blog" class="blog py-5 position-relative">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-12 text-center">
                <div class="heading mb-4">
                    <h1 class="display-4"><?php echo lang('Blog.btnOurproducts'); ?></h1>
                    <div class="border-bottom w-25 mx-auto"></div>
                </div>
            </div>
        </div>
        <button class="scroll-arrow left">&lt;</button>
        <button class="scroll-arrow right">&gt;</button>
        <div class="scrolling-wrapper">
            
            <?php foreach ($tbproduk as $produk) : ?>
                <div class="product-card h-100 shadow-sm wow fadeInUp" data-wow-delay="0.3s" style="flex: 0 0 auto; width: calc(100% / 3 - 15px); margin-right: 15px;">
                    <img src="asset-user/images/<?= $produk->foto_produk; ?>" alt="<?php echo lang('Blog.Languange') == 'en' ? $produk->nama_produk_en : $produk->nama_produk_in; ?>" class="card-img-top img-fluid lazyload">
                    <div class="card-body d-flex flex-column">
                        <a href="<?= base_url('product/detail/' . $produk->id_produk . '/' . url_title($produk->nama_produk_en) . '_' . url_title($produk->nama_produk_in)) ?>" class="btn btn-primary mt-auto">
                            <?php echo lang('Blog.Languange') == 'en' ? $produk->nama_produk_en : $produk->nama_produk_in; ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Artikel
=================-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const scrollingWrapper = document.querySelector('.scrolling-wrapper');
        const scrollLeftButton = document.querySelector('.scroll-arrow.left');
        const scrollRightButton = document.querySelector('.scroll-arrow.right');

        scrollLeftButton.addEventListener('click', function() {
            scrollingWrapper.scrollBy({ left: -300, behavior: 'smooth' });
        });

        scrollRightButton.addEventListener('click', function() {
            scrollingWrapper.scrollBy({ left: 300, behavior: 'smooth' });
        });
    });
</script>


<?= $this->endSection('content') ?>
