<?= $this->extend('user/template/template') ?>
<?= $this->section('content'); ?>

<!-- HEADER 
            =================-->
            <header id="content" class="header-cat" style="background-image: linear-gradient(rgba(4, 15, 40, 0.7), rgba(4, 15, 40, 0.7)), url('<?= base_url('asset-user/images/hero_1.jpg'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php foreach ($profil as $perusahaan) : ?>
                    <h1><?php echo lang('Blog.titleOurarticle');
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
<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary"><?php echo lang('Blog.newsArticles'); ?></h5>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <?php foreach ($artikelterbaru as $row) : ?>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img class="card-img-top" style="object-fit: cover; height: 200px;" src="<?= base_url('asset-user') ?>/images/<?= $row->foto_artikel; ?>" loading="lazy" alt="Article Image">
                        <div class="card-body">
                            <h5 class="card-title"><?= substr(strip_tags($row->judul_artikel), 0, 20) ?>...</h5>
                            <p class="card-text"><?= substr(strip_tags($row->deskripsi_artikel), 0, 50) ?>...</p>
                        </div>
                        <div class="card-footer text-muted">
                            <small><?= date('d F Y', strtotime($row->created_at)); ?></small>
                            <a href="<?= base_url('/artikel/detail/' . $row->id_artikel) ?>" class="btn btn-primary btn-sm float-right">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<style>
    .card-img-top:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }
    .card {
        border-radius: 15px;
        overflow: hidden;
    }
</style>

<?= $this->endSection('content'); ?>
