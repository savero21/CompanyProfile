<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- HEADER =================-->
<header id="content" class="header-cat" style="background-image: linear-gradient(rgba(4, 15, 40, 0.7), rgba(4, 15, 40, 0.7)), url('<?= base_url('asset-user/images/IMG-20210403-WA0003_1.jpg'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php foreach ($profil as $perusahaan) : ?>
                    <h1>
                        <?= lang('Blog.titleActivities') ?>
                        <?php if (!empty($perusahaan)) : ?>
                            <?= ' ' . $perusahaan->nama_perusahaan ?>
                        <?php endif; ?>
                    </h1>
                <?php endforeach; ?>
                <p class="text-white text-center">
                    <a href="<?= base_url('/') ?>"><?= lang('Blog.headerHome') ?></a>
                    <span class="mx-2">/</span>
                    <span><?= lang('Blog.headerActivities') ?></span>
                </p>
            </div>
        </div>
    </div>
</header>

<!-- BLOG SECTION =================-->
<style>
    .product-card img {
        transition: all 0.3s ease;
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .product-card:hover img {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        transform: scale(1.05);
    }
</style>

<section id="blog" class="blog py-5">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
               
            </div>
        </div>
        <div class="row">
            <?php foreach ($tbaktivitas as $aktivitas) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card product-card h-100 shadow-sm wow fadeInUp" data-wow-delay="0.3s">
                        <img data-src="asset-user/images/<?= $aktivitas->foto_aktivitas ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                            echo $aktivitas->nama_aktivitas_en;
                        } elseif (lang('Blog.Languange') == 'in') {
                            echo $aktivitas->nama_aktivitas_in;
                        } ?>" class="card-img-top img-fluid lazyload">
                        <div class="card-body d-flex flex-column">
                            <a href="<?= base_url('activities/detail/' . $aktivitas->id_aktivitas . '/' . url_title($aktivitas->nama_aktivitas_en) . '_' . url_title($aktivitas->nama_aktivitas_in)) ?>" class="btn btn-primary mt-auto" style="width: 100%; height: 50px; display: flex; justify-content: center; align-items: center;">
                                <?php if (lang('Blog.Languange') == 'en') {
                                    echo $aktivitas->nama_aktivitas_en;
                                } elseif (lang('Blog.Languange') == 'in') {
                                    echo $aktivitas->nama_aktivitas_in;
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
