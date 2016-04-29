<div class="jumbotron">
    <div class="container">
        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;">

            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                     background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url('loading.gif') no-repeat center center;

                     top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>

            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;
                 overflow: hidden;">
                <div>
                    <img u="image" src="assets/img/home/01.jpg" />
                </div>
                <div>
                    <img u="image" src="assets/img/home/02.jpg" />
                </div>
                <div>
                    <img u="image" src="assets/img/home/03.jpg" />
                </div>
                <div>
                    <img u="image" src="assets/img/home/04.jpg" />
                </div>
                div>
                    <img u="image" src="assets/img/home/05.jpg" />
                </div>
            </div>

            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/tutorial/set-bullet-navigator.html -->
            <style>
                /* jssor slider bullet navigator skin 05 css */
                /*
                .jssorb05 div           (normal)
                .jssorb05 div:hover     (normal mouseover)
                .jssorb05 .av           (active)
                .jssorb05 .av:hover     (active mouseover)
                .jssorb05 .dn           (mousedown)
                */
                .jssorb05 {
                    position: absolute;
                }
                .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 16px;
                    height: 16px;
                    background: url('assets/img/b05.png') no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
                .jssorb05 div { background-position: -7px -7px; }
                .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
                .jssorb05 .av { background-position: -67px -7px; }
                .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
            </style>
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->

            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/tutorial/set-arrow-navigator.html -->
            <style>
                /* jssor slider arrow navigator skin 11 css */
                /*
                .jssora11l                  (normal)
                .jssora11r                  (normal)
                .jssora11l:hover            (normal mouseover)
                .jssora11r:hover            (normal mouseover)
                .jssora11l.jssora11ldn      (mousedown)
                .jssora11r.jssora11rdn      (mousedown)
                */
                .jssora11l, .jssora11r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 37px;
                    height: 37px;
                    cursor: pointer;
                    background: url('assets/img/a11.png') no-repeat;
                    overflow: hidden;
                }
                .jssora11l { background-position: -11px -41px; }
                .jssora11r { background-position: -71px -41px; }
                .jssora11l:hover { background-position: -131px -41px; }
                .jssora11r:hover { background-position: -191px -41px; }
                .jssora11l.jssora11ldn { background-position: -251px -41px; }
                .jssora11r.jssora11rdn { background-position: -311px -41px; }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">Bootstrap Carousel</a>
        </div>
    </div>
</div>

<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Tentang Kami</h2>
                    <hr class="primary">
                    <p>
                    Yoenapratama.com adalah bengkel mobil yang menyediakan platform booking servis online yang tersedia cabang kami di penjuru kota se-Indonesia.
                    </p><br/
                </div>
                
            </div>
        </div>
    </section>
<section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Flow Service at Website</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary" style="visibility: visible; animation-name: bounceIn;"></i>
                        <h3>Booking Service </h3>
                        <p class="text-muted">Anda diharuskan memesan jam dan tanggal servis terlebih dahulu.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i data-wow-delay=".1s" class="fa fa-4x fa-paper-plane wow bounceIn text-primary" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;"></i>
                        <h3>Datang ke Bengkel</h3>
                        <p class="text-muted">Anda langsung datang ke bengkel tanpa harus mengantri.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i data-wow-delay=".2s" class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted"> Lakukan pembayaran tanpa harus ke kasir.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i data-wow-delay=".3s" class="fa fa-4x fa-heart wow bounceIn text-primary" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceIn;"></i>
                        <h3>Feedback</h3>
                        <p class="text-muted">Berikan nilai pelayanan bengkel ke website kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Kontak Kami</h2>
                    <hr class="primary">
                    <p><b>Tahukah Anda ?</b><br/>
Dengan menservice melalui kami selaku bengkel mobil yoenapratama maka anda mendapat gratis servis ganti oli 4 kali dan garansi yang bisa digunakan diseluruh cabang bengkel resmi yoenapratama di Indonesia.
                    </p><br/
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn" style="visibility: visible; animation-name: bounceIn;"></i>
                    <p>+6221 2551 0000</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i data-wow-delay=".1s" class="fa fa-envelope-o fa-3x wow bounceIn" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;"></i>
                    <p><a href="mailto:your-email@your-domain.com">serviceoil@yoenapratama.com</a></p>
                </div>
            </div>
        </div>
    </section>
<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Kontak Kami</h2>
                    <hr class="primary">
                    <p><b>Tahukah Anda ?</b><br/>
Dengan menservice melalui kami selaku bengkel mobil yoenapratama maka anda mendapat gratis servis ganti oli 4 kali dan garansi yang bisa digunakan diseluruh cabang bengkel resmi yoenapratama di Indonesia.
                    </p><br/
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn" style="visibility: visible; animation-name: bounceIn;"></i>
                    <p>+6221 2551 0000</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i data-wow-delay=".1s" class="fa fa-envelope-o fa-3x wow bounceIn" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceIn;"></i>
                    <p><a href="mailto:your-email@your-domain.com">serviceoil@yoenapratama.com</a></p>
                </div>
            </div>
        </div>
    </section>

<script>
    $(document).ready(function () {
        $(".nav-tabs a").click(function () {
            $(this).tab('show');
        });
        $('.nav-tabs a').on('shown.bs.tab');
    });
</script>