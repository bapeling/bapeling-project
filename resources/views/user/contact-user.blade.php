@extends('navbar.navbar_user')
@section('context')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
    <div class="container">

        <div class="section-title mt-5" data-aos="fade-up">
            <h2>Hubungi Kami</h2>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>RR4Q+C76, Celukan Bawang, Kec. Gerokgak, Kabupaten Buleleng, Bali 81155</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+1 5589 55488 55s</p>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2020490.5215260698!2d112.95661926269528!3d-8.47305143446953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd179fd98ef94cb%3A0x6cc2ad94d69f587f!2sTPS%20Celukan%20Bawang!5e0!3m2!1sid!2sid!4v1668823148441!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <img class="wave" src="assets/img/wave.png">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Masukkan Name</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="name">Masukkan Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Keterangan</label>
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Pesan</label>
                        <textarea class="form-control" name="message" rows="10" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Kirim</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
@endsection