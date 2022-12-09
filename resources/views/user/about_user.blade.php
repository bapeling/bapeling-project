@extends('navbar.navbar_user')
@section('context')
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="row">
            <div class="col-lg-6" data-aos="zoom-in">
                <video autoplay muted src="assets/video/video.mp4" class="video-about" alt="">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                <div class="content pt-4 pt-lg-0">
                    <h3>Tentang Kami</h3>
                    <p class="fst-italic">
                        Teknologi TPS3R adalah sistem pengolahan sampah dengan inovasi teknologi mesin pencacah
                        sampah dan pengayak kompos yang
                        lebih efektif dan efesien.Teknologi TPS 3R memiliki keunggulan sebagai berikut :
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i>Mesin pencacah sampah dengan modifikasi pada pisau
                            pencacah sehingga lebih mudah untuk mencacah sampah organik yang
                            bentuknya panjang dan tidak mudah macet.</li>
                        <li><i class="bi bi-check-circle"></i>Mesin pengayak kompos dengan modifikasi berupa
                            ulir yang digunakan untuk mempermudah alur pengayakan sampah tanpa harus
                            di dorong secara manual. Terdapat pilihan roda engkol dimana dapat digunakan secara
                            manual apabila mesin diesel rusak.</li>
                        <li><i class="bi bi-check-circle"></i>Kompos cacing (Kascing) : bahan-bahan mudah
                            didapatkan, peralatan yang digunakan sederhana, cepat memanen hasilnya dan
                            menghasilkan kompos berkualitas tinggi.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section><!-- End About Section -->


<!-- ======= Features Section ======= -->
<section id="features" class="features">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item" data-aos="fade-up">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                            <h4>Reduce</h4>
                            <p>Reduce sendiri memiliki arti mengurangi sampah. Maksud dari langkah ini adalah
                                mengurangi
                                penggunaan produk yang
                                nantinya berpotensi menjadi sampah</p>
                        </a>
                    </li>
                    <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                            <h4>Reuse</h4>
                            <p>Langkah atau tahap kedua adalah Reuse yang berarti menggunakan kembali. Tahap ini
                                mengajak untuk
                                menggunakan kembali
                                produk yang sudah terpakai. Dengan menggunakannya kembali maka sampah yang
                                timbul dari
                                produk-produk
                                tersebut dapat
                                berkurang</p>
                        </a>
                    </li>
                    <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                            <h4>Recycle</h4>
                            <p>Tahap terakhir dari konsep 3R adalah Recycle yang berarti mendaur ulang. Langkah
                                ini
                                paling banyak
                                dilakukan mengingat
                                sudah banyaknya sampah yang tersebar di berbagai lokasi seperti laut, tanah, dan
                                udara
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <figure>
                            <img src="assets/img/reduce.jpg" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <figure>
                            <img src="assets/img/reuse.jpg" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <figure>
                            <img src="assets/img/recycle.jpg" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Features Section -->
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Sampah</h2>
            <p>Sampah adalah sisa kegiatan sehari-hari manusia dan/atau proses alam yang berbentuk padat.
                Sampah seringkali mengacu
                kepada material sisa yang tidak diinginkan atau tidak bermanfaat bagi manusia setelah
                berakhirnya suatu kegiatan atau
                proses domestik.Sampah dibagi menjadi 3 jenis yaitu Sampah Organik,Sampah Anorganik,Sampah
                B3.</p>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-app">Organik</li>
                    <li data-filter=".filter-card">Anorganik</li>
                    <li data-filter=".filter-web">B3</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-o1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Organik</h4>
                        <p>Sampah Buah</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-o1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sampah Buah"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-o3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Organik</h4>
                        <p>Sampah Daun</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-o3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-o4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Organik</h4>
                        <p>Sampah Kayu</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-o4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sampah Kayu"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-a2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Anorganik</h4>
                        <p>Sampah Botol</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-a2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sampah Botol"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-a1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Anorganik</h4>
                        <p>Sampah Plastik</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-a1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sampah Plastik"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-o2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Organik</h4>
                        <p>Sisa Produksi</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-o2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sisa Produksi"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-a3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Anorganik</h4>
                        <p>Sampah Besi</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-a3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sampah Besi"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-a4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Anorganik</h4>
                        <p>Sampah Botol</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-a4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sampah Botol"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-b1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>B3</h4>
                        <p>Sisa Baterai</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-b1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sampah B3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-b2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>B3</h4>
                        <p>Sampah Dinamo</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-b2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sampah Dinamo"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-b3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>B3</h4>
                        <p>Sampah Baterai</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-b3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sampah baterai"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-b4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>B3</h4>
                        <p>Sisa Permen Karet</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-b4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Perman Karet"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-b5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>B3</h4>
                        <p>Sampah Sisa Pembersih</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-b5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sisa Pembersih"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->
@endsection