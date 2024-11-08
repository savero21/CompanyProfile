<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- CSS Tambahan -->
<style>
    .how-work-cont h1 {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
    }
    .how-work-cont p {
        font-size: 1.1rem;
        line-height: 1.8;
    }
    .how-work-img img {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
    }
    .text-white {
        color: #fff !important;
    }
    .my-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important;
    }
    .how-work-row {
        align-items: flex-start; /* Align the image and content row items to the top */
    }
</style>

<!-- HEADER -->
<header id="content" class="header-cat" style="background-image: linear-gradient(rgba(4, 15, 40, 0.7), rgba(4, 15, 40, 0.7)), url('asset-user/images/SEpeda.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1><?php echo lang('Blog.titleAboutUs'); ?></h1>
                <p class="text-white text-center">
                    <a href="<?= base_url('/') ?>"><?php echo lang('Blog.headerHome'); ?></a>
                    <span class="mx-2">/</span>
                    <span><?php echo lang('Blog.headerAbout'); ?></span>
                </p>
            </div>
        </div>
    </div>
</header>

<!-- ABOUT -->
<section id="how-work" class="how-work">
    <div class="container">
        <?php foreach ($profil as $descper) : ?>
            <div class="row how-work-row">
                <div class="col-md-5">
                    <div class="how-work-img wow fadeInUp" data-wow-delay="0.3s">
                        <img data-src="asset-user/images/<?= $descper->foto_utama; ?>" alt="<?= $descper->nama_perusahaan; ?>" class="img-fluid lazyload">
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <div class="how-work-cont">
                        <h1><?= $descper->nama_perusahaan; ?></h1>
                        <p>
                            <?php if (lang('Blog.Languange') == 'en') {
                                echo $descper->deskripsi_perusahaan_en;
                            } elseif (lang('Blog.Languange') == 'in') {
                                echo $descper->deskripsi_perusahaan_in;
                            } ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?= $this->endSection('content'); ?>
