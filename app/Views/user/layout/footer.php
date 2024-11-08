<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer with Icons</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <style>
        /* Styling untuk footer agar tidak bertabrakan */
        .footer-container {
            background-color: #343a40; /* Warna latar belakang gelap */
            color: white; /* Warna teks putih */
            border-top: 2px solid #007bff; /* Border atas berwarna biru */
            padding: 2rem 0; /* Padding atas dan bawah */
        }

        .footer-content {
            padding: 1.5rem 2rem;
        }

        .footer-info {
            padding: 1rem 0;
        }

        .footer-info .icon {
            font-size: 2.5rem; /* Ukuran ikon disesuaikan dengan dua baris teks */
            color: #007bff; /* Warna ikon biru */
        }

        .footer-info h6 {
            font-size: 1rem; /* Ukuran teks heading */
            font-weight: bold;
            margin-bottom: 0.5rem; /* Jarak bawah heading */
        }

        .footer-info span {
            font-size: 0.875rem; /* Ukuran teks tambahan */
        }

        .footer-info .row {
            margin-bottom: 1rem; /* Jarak bawah antar baris */
        }

        .footer-info .col-lg-4 {
            display: flex;
            align-items: center; /* Vertikal align items ke tengah */
            justify-content: center; /* Memusatkan konten secara horizontal */
            text-align: left; /* Mengubah teks ke kiri */
        }

        .footer-info .d-inline-flex {
            align-items: center; /* Vertikal align items ke tengah */
        }

        .footer-info .icon + div {
            margin-left: 1rem; /* Jarak antara ikon dan teks */
        }

        /* Menambahkan padding untuk menyamakan jarak */
        .footer-info .d-inline-flex div h6,
        .footer-info .d-inline-flex div span {
            padding-top: 0.25rem; /* Padding atas untuk elemen h6 dan span */
            padding-bottom: 0.25rem; /* Padding bawah untuk elemen h6 dan span */
        }

        /* Styling untuk copyright */
        .footer-copyright {
            background-color: #23272b; /* Warna latar belakang sedikit lebih gelap */
            color: #adb5bd; /* Warna teks lebih terang */
            padding: 1rem 0; /* Padding atas dan bawah */
            text-align: center; /* Memusatkan teks secara horizontal */
            font-size: 0.875rem; /* Ukuran teks sedikit lebih kecil */
        }

        .footer-copyright i {
            color: #ff4757; /* Warna ikon hati merah */
        }

        /* Media query untuk tampilan mobile */
        @media (max-width: 991px) { /* Tampilkan footer-info pada ukuran layar lebih kecil dari 992px */
            .footer-info {
                text-align: center; /* Memusatkan teks pada tampilan mobile */
            }

            .footer-info .row {
                flex-direction: column; /* Mengubah arah baris menjadi kolom */
            }

            .footer-info .col-lg-4 {
                margin-bottom: 1rem; /* Jarak bawah antar kolom */
            }

            .footer-info .d-inline-flex {
                flex-direction: column; /* Mengatur ikon dan teks menjadi kolom */
                text-align: center; /* Memusatkan teks di dalam d-inline-flex */
            }

            .footer-info .icon + div {
                margin-left: 0; /* Menghapus jarak pada tampilan mobile */
            }
        }
    </style>
</head>
<body>
    <!-- Footer Start -->
    <div class="container-fluid footer-container px-0">
        <div class="footer-content">
            <div class="container-fluid footer-info">
                <?php foreach ($profil as $header) : ?>
                    <div class="row gx-5">
                        <div class="col-lg-4 py-3">
                            <div class="d-inline-flex align-items-center">
                                <i class="bi bi-geo-alt icon"></i>
                                <div>
                                    <h6 class="text-uppercase fw-bold mb-1">Indonesia</h6>
                                    <span><?= $header->alamat; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="d-inline-flex align-items-center">
                                <i class="bi bi-envelope-open icon"></i>
                                <div>
                                    <h6 class="text-uppercase fw-bold mb-1"><?= $header->email; ?></h6>
                                    <span><?php echo lang('Blog.email'); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="d-inline-flex align-items-center">
                                <i class="bi bi-phone-vibrate icon"></i>
                                <div>
                                    <h6 class="text-uppercase fw-bold mb-1"><?= $header->no_hp; ?></h6>
                                    <span><?php echo lang('Blog.notelp'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Footer Copyright -->
    <div class="footer-copyright">
        &copy;<script>
            document.write(new Date().getFullYear());
        </script>. All Rights Reserved. Designed with <i class="bi bi-heart-fill"></i> by Me
    </div>
</body>
</html>
