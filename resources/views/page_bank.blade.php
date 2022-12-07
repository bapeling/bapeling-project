@extends('navbar.navbar')
@section('context')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title mt-4" data-aos="fade-up">
                <h2>Marketplace</h2>
            </div>

            <!-- <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Semua</li>
                            <li data-filter=".filter-app">Organik</li>
                            <li data-filter=".filter-card">Anorganik</li>
                            <li data-filter=".filter-web">B3</li>
                        </ul>
                    </div>
                </div> -->

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/market/market-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pot Bunga</h4>
                            <p>Harga Per Pot: RP 10.000</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/market/market-1.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Sampah Buah"><i class="bx bx-plus"></i></a>
                            <a href="https://shopee.co.id/search?keyword=kerajinan%20dari%20sampah" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/market/market-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Tas Dari Plastik</h4>
                            <p>Harga Per Tas: RP 20.000</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/market/market-2.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Sampah Daun"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/market/market-3.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Lukisan Kayu</h4>
                            <p>Harga Perlukisan: RP 30.000</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/market/market-3.jpeg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Sampah Kayu"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/market/market-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Tempat Pensil</h4>
                            <p>Harga Per Box: RP 5.000</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/market/market-4.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Sampah Botol"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/market/market-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Lampu Tidur</h4>
                            <p>Harga Per Lampu: RP 35.000</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/market/market-5.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Sampah Plastik"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/market/market-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Hiasan Cangkang</h4>
                            <p>Per buah : RP 10.000</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/market/market-6.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Sisa Produksi"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/market/market-7.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Hiasan Sepeda</h4>
                            <p>Per Paket : RP 25.000</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/market/market-7.jpeg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Sampah Besi"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/market/market-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Piring Raut</h4>
                            <p>Per Piring : RP 5.000</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/market/market-8.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Sampah Botol"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/market/market-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Kotak Pensil</h4>
                            <p>Per Kotak : RP 15.000</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/market/market-9.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Sampah B3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/market/market-10.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Celengan</h4>
                            <p>Per Box : RP 10.000</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/market/market-10.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Sampah Dinamo"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/market/market-11.jpeg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Peralatan Dapur dari Kelapa</h4>
                            <p>Tergantung Harga</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/market/market-11.jpeg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Sampah baterai"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/market/market-12.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pot Bunga Motik</h4>
                            <p>Per Pot : RP 15.000 </p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/market/market-12.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Perman Karet"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/market/market-13.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Tempat Sampah Botol</h4>
                            <p>Per Box : RP 50.000</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/market/market-13.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Sisa Pembersih"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/market/market-14.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Hiasan Lucu</h4>
                            <p>Per Buah : RP 5.000</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/market/market-14.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Sisa Pembersih"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/market/market-15.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Lampu Tidur</h4>
                            <p>Tergantung Motif dan Warna</p>
                        </div>
                        <div class="portfolio-links">
                            <a href="assets/img/market/market-15.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Sisa Pembersih"><i class="bx bx-plus"></i></a>
                            <a href="https://shopee.co.id/search?keyword=kerajinan%20dari%20sampah"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
        <div class="container">

            <div class="section-title mt-5" data-aos="fade-up">
                <h2>Harga Sampah</h2>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="box" data-aos="zoom-in">
                        <h3>Sampah Plastik</h3>
                        <h4><sup>$</sup>0<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li class="na">Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                    <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Sampah Alumunium</h3>
                        <h4><sup>$</sup>19<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                        <h3>Sampah Besi</h3>
                        <h4><sup>$</sup>29<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="300">
                        <span class="advanced">Advanced</span>
                        <h3>Sampah Tembaga</h3>
                        <h4><sup>$</sup>49<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Tutorial</h2>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><i class="bx bx-search-alt-2"></i></div>
                        <h4 class="title"><a href="">Cari Barang</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi
                            sint
                            occaecati cupiditate</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="100">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><i class="bx bx-shopping-bag"></i></div>
                        <h4 class="title"><a href="">Masuk Ke Shopee</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore
                            eu
                            fugiat nulla</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><i class="bx bx-cart-alt"></i></div>
                        <h4 class="title"><a href="">Ber Belanja</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt
                            mollit anim</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><i class="bx bx-check-square"></i></div>
                        <h4 class="title"><a href="">Selesai</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->
@endsection
