<div class="loader"></div>
<!-- NAVIGATION 
            =================-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <?php foreach ($profil as $header) :  ?>
        <div class="container-fluid">
            <a class="navbar-brand js-scroll-trigger" href="<?= base_url('/') ?>"><img data-src="<?= base_url('asset-user/images/'); ?><?= $header->logo_perusahaan ?>" alt="<?= $header->nama_perusahaan ?>" style="max-height: 110px;" class="img-fluid lazyload"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?= base_url('/') ?>" data-page="home"><?php echo lang('Blog.headerHome'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?= base_url('about') ?>" data-page="about"><?php echo lang('Blog.headerAbout'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?= base_url('artikel') ?>" data-page="artikel"><?php echo lang('Blog.headerArticle'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?= base_url('product') ?>" data-page="product"><?php echo lang('Blog.headerProducts'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?= base_url('activities') ?>" data-page="activities"><?php echo lang('Blog.headerActivities'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?= base_url('contact') ?>" data-page="contact"><?php echo lang('Blog.headerContact'); ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo lang('Blog.headerLanguage'); ?></a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= site_url('lang/in') ?>" class="dropdown-item">Indonesia</a>
                            <a href="<?= site_url('lang/en') ?>" class="dropdown-item">English</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    <?php endforeach;  ?>
</nav>