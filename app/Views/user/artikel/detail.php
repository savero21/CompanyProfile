<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<style>
    .article-title {
        white-space: normal;
        word-wrap: break-word;
        overflow-wrap: break-word;
        width: 100%;
    }

    .article-item {
        display: flex;
        height: 110px;
        overflow: hidden;
        margin-bottom: 1rem; /* Added space between items */
    }

    .article-image {
        width: 110px;
        height: 110px;
        object-fit: cover;
    }

    .article-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex: 1;
        padding: 0 1rem;
        white-space: normal;
        overflow-wrap: break-word; /* Menambahkan properti ini */
        text-overflow: ellipsis;
    }

    .bg-white {
        background-color: #fff;
    }

    .text-body {
        color: #6c757d;
    }

    .display-5 {
        font-size: 2.5rem;
        word-break: break-word; /* Ensure long words break */
    }

    .display-7 {
        font-size: 1.25rem;
        overflow-wrap: break-word; /* Gunakan overflow-wrap untuk memastikan kata-kata panjang dipatahkan */
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        max-width: 100%; /* Constrain width to avoid excessive length */
        word-break: break-all; /* Break long words */
    }
    
    .section-title {
        border-bottom: 2px solid #007bff;
    }

    .border-primary {
        border-color: #007bff !important;
    }

    /* Responsive Adjustments */
    @media (max-width: 767.98px) {
        .display-5 {
            font-size: 1.5rem; /* Adjust the font size for smaller screens */
            padding: 0 1rem; /* Add padding to avoid edge overflow */
        }
        
        .display-7 {
            font-size: 1rem; /* Ukuran font yang lebih kecil untuk tampilan mobile */
            overflow: hidden; /* Menyembunyikan teks yang melebihi batas */
            text-overflow: ellipsis; /* Menampilkan tanda elipsis (...) untuk teks yang melebihi batas */
            word-break: break-word; /* Menggunakan word-break untuk memisahkan kata-kata panjang */
            max-width: 90%; /* Menetapkan lebar maksimum untuk judul */
        }

        .article-item {
            flex-direction: column;
            height: auto;
        }

        .article-image {
            width: 100%;
            height: auto;
        }

        .article-content {
            padding: 0.5rem 0;
        }
    }
</style>

<!-- HEADER 
=================-->
<header id="content" class="header-cat" style="background-image: linear-gradient(rgba(4, 15, 40, 0.7), rgba(4, 15, 40, 0.7)), url('<?= base_url('asset-user/images/hero_1.jpg'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php foreach ($profil as $perusahaan) : ?>
                    <h1><?php echo lang('Blog.titleArticles');
                        if (!empty($perusahaan)) {
                            echo ' ' . $perusahaan->nama_perusahaan;
                        } ?></h1>
                <?php endforeach; ?>
                <p class="text-white text-center">
                    <a href="<?= base_url('/') ?>"><?php echo lang('Blog.headerHome');  ?></a>
                    <span class="mx-2">/</span>
                    <span><?php echo lang('Blog.headerArticle');  ?></span>
                </p>
            </div>
        </div>
    </div>
</header>

<!-- News With Sidebar Start -->
<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="<?= base_url('asset-user/images/' . $artikel->foto_artikel); ?>" style="object-fit: cover;">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
                            <a class="text-uppercase mb-3 text-body"><?= date('d F Y', strtotime($artikel->created_at)); ?></a>
                        </div>
                        <h1 class="display-5 mb-2"><?= $artikel->judul_artikel; ?></h1>
                        <p class="fs-5"><?= $artikel->deskripsi_artikel; ?></p>
                    </div>
                </div>
                <!-- News Detail End -->
            </div>

            <div class="col-lg-4">
                <!-- Popular News Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary"><?php echo lang('Blog.Read');?></h5>
                    </div>
                    <br>
                    <div class="bg-white border border-top-0 p-3">
                        <?php foreach ($artikel_lain as $artikel_item) : ?>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" style="width: 110px; height: 110px;" src="<?= base_url('asset-user/images/' . $artikel_item->foto_artikel); ?>" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="text-body" href="<?= base_url('/artikel/detail/' . $artikel_item->id_artikel) ?>"><small><?= date('d F Y', strtotime($artikel_item->created_at)); ?></small></a>
                                    </div>
                                    <a class="h6 m-0 display-7" href="<?= base_url('/artikel/detail/' . $artikel_item->id_artikel) ?>"><?= substr($artikel_item->judul_artikel, 0, 20) ?>...</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Popular News End -->
            </div>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->

<?= $this->endSection('content'); ?>
