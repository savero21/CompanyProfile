<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- HEADER =================-->
<header id="content" class="header-cat" style="background-image: linear-gradient(rgba(4, 15, 40, 0.7), rgba(4, 15, 40, 0.7)), url('<?= base_url('asset-user/images/hero_4.jpg'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php foreach ($profil as $perusahaan) : ?>
                    <h1><?= lang('Blog.titleActivities') ?>
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

<!-- ABOUT =================-->
<section id="how-work" class="how-work py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="how-work-cont">
                    <h1>
                        <?php if (lang('Blog.Languange') == 'en') : ?>
                            <?= $tbaktivitas->nama_aktivitas_en ?>
                        <?php elseif (lang('Blog.Languange') == 'in') : ?>
                            <?= $tbaktivitas->nama_aktivitas_in ?>
                        <?php endif; ?>
                    </h1>
                    <p>
                        <?php if (lang('Blog.Languange') == 'en') : ?>
                            <?= $tbaktivitas->deskripsi_aktivitas_en ?>
                        <?php elseif (lang('Blog.Languange') == 'in') : ?>
                            <?= $tbaktivitas->deskripsi_aktivitas_in ?>
                        <?php endif; ?>
                    </p>
                    <a href="<?= base_url('activities') ?>" class="btn btn-secondary mt-3">Kembali</a>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 m-auto">
                <div class="how-work-img wow fadeInUp" data-wow-delay="0.3s">
                    <img data-src="<?= base_url('asset-user/images/' . $tbaktivitas->foto_aktivitas) ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                        echo $tbaktivitas->nama_aktivitas_en;
                    } elseif (lang('Blog.Languange') == 'in') {
                        echo $tbaktivitas->nama_aktivitas_in;
                    } ?>" class="img-fluid lazyload">
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content'); ?>
