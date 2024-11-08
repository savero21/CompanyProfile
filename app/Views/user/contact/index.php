<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- HEADER 
            =================-->
<header id="content" class="header-cat" style="background-image: linear-gradient(rgba(4, 15, 40, 0.7), rgba(4, 15, 40, 0.7)), url('<?= base_url('asset-user/images/hero_3.jpg'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php foreach ($profil as $perusahaan) : ?>
                    <h1><?php echo lang('Blog.titleOurContact');
                        if (!empty($perusahaan)) {
                            echo ' ' . $perusahaan->nama_perusahaan;
                        } ?></h1>
                <?php endforeach; ?>
                <p class="text-white text-center">
                    <a href="<?= base_url('/') ?>"><?php echo lang('Blog.headerHome');  ?></a>
                    <span class="mx-2">/</span>
                    <span><?php echo lang('Blog.headerContact'); ?></span>
                </p>
            </div>
        </div>
    </div>
</header>

<div class="container py-3">
    <div class="row py-5">
        <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
            <div class="testimonial">
                <div class="map">
                    <div class="embed-responsive embed-responsive-16by9" style="width: 100%;">
                        <?php foreach ($profil as $maps) :  ?>
                            <?php echo $maps->link_maps ?>
                        <?php endforeach;  ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row px-3">
                <div class="col-12 p-0">
                    <?php foreach ($profil as $desc) : ?>

                        <p>
                            <?php if (lang('Blog.Languange') == 'en') {
                                echo $desc->deskripsi_kontak_en;
                            } ?>
                            <?php if (lang('Blog.Languange') == 'in') {
                                echo $desc->deskripsi_kontak_in;
                            } ?>
                        </p>

                    <?php endforeach;  ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>