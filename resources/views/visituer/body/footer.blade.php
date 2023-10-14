<style>
    /* تغيير لون الصور باستخدام محدد filter */
    li img {
        filter: brightness(0) saturate(100%) invert(83%) sepia(92%) saturate(7481%) hue-rotate(285deg) brightness(84%) contrast(91%);
    }

    /* أو يمكنك استخدام محدد fill إذا كانت الصورة SVG */
    /* li img {
        fill: #c3a082;
    } */

    /* أو يمكنك تعيين لون النص الذي يتبع الصورة */
    li strong {
        color: #c3a082;
    }

    .banner-icon img {
        background-color: #c3a082; /* لون الصور */
        padding: 10px; /* اختياري: يمكنك زيادة أو تقليل هذه القيمة حسب رغبتك لتعديل حجم الصورة */
        border-radius: 50%; /* اختياري: يمكنك إضافة تدرج دائري للصور إذا كنت تريد */
    }

    /* تغيير لون الحدود (الإطار) لحقول النموذج إلى اللون البني */
    input[type="text"],
    input[type="email"],
    textarea {
        border: 1px solid #c3a08273; /* يُمكن تغيير هذا اللون إلى البني الذي تفضله */
    }
    /* قوم بتطبيق max-width: 350px فقط عند العرض على الهواتف الذكية */
    @media only screen and (max-width: 768px){
.footer-mid .logo img {
    max-width: 550px;
}
}
</style>


 <footer class="main">
        <section class="newsletter mb-15 wow animate__animated animate__fadeIn" id="About">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="position-relative newsletter-inner" style="width: 100%;height:500px">
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" style="background: #f6e9ce;
                        " data-wow-delay="0">
                            <div class="banner-icon">
                                <img src="{{asset('visituer/assets/imgs/theme/icons/icon-1.svg')}}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Best prices & offers</h3>
                                <p>Orders $50 or more</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" style="background: #f6e9ce;
                        " data-wow-delay=".1s">
                            <div class="banner-icon">
                                <img src="{{asset('visituer/assets/imgs/theme/icons/icon-2.svg')}}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Free delivery</h3>
                                <p>24/7 amazing services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"style="background: #f6e9ce;
                        " data-wow-delay=".2s">
                            <div class="banner-icon">
                                <img src="{{asset('visituer/assets/imgs/theme/icons/icon-3.svg')}}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Great daily deal</h3>
                                <p>When you sign up</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" style="background: #f6e9ce;
                        "data-wow-delay=".3s">
                            <div class="banner-icon">
                                <img src="{{asset('visituer/assets/imgs/theme/icons/icon-4.svg')}}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Wide assortment</h3>
                                <p>Mega Discounts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp"style="background: #f6e9ce;
                        " data-wow-delay=".4s">
                            <div class="banner-icon">
                                <img src="{{asset('visituer/assets/imgs/theme/icons/icon-5.svg')}}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Easy returns</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-xl-none">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" style="background: #f6e9ce;
                        "data-wow-delay=".5s">
                            <div class="banner-icon">
                                <img src="{{asset('visituer/assets/imgs/theme/icons/icon-6.svg')}}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Safe delivery</h3>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid" id="contact">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col-md-6">
                        <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="logo mb-30">
                                <img src="{{asset('admin/assets/images/visite-icon.png')}}" class="logo-icon" alt="logo icon" style="width:100%; height: 600px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-us ">
                            <h4 class="text-center">Contactez nous</h4>
                            <form action="process-contact.php" method="post">
                                <label for="subject">Sujet:</label>
                                <input type="text" id="subject" name="subject" required>
        
                                <label for="name">Nom:</label>
                                <input type="text" id="name" name="name" required>
        
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
        
                                <label for="message">Message:</label>
                                <textarea id="message" name="message" required></textarea>
        
                                <div class="text-center">
                                    <input type="submit" value="Envoyer">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        
        
        <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
            <div class="row align-items-center">
                <div class="col-12 mb-30">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <p class="font-sm mb-0">&copy; 2023, <strong class="text-brand">Deca Brica</strong> - Pierres Dècoratives Intérieures & Extérieures <br />All rights reserved</p>
                </div>
                <div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">
                     
                    <div class="hotline d-lg-inline-flex">
                        <img src="{{asset('visituer/assets/imgs/theme/icons/icon-headphone.svg')}}" alt="hotline" />
                        <p>+213549927773<span>24/7 Support Center</span></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                    <div class="mobile-social-icon">
                        <h6>Follow Us</h6>
                        <a href="#"><img src="{{asset('visituer/assets/imgs/theme/icons/icon-facebook-white.svg')}}" alt="" /></a>
                        <a href="#"><img src="{{asset('visituer/assets/imgs/theme/icons/icon-twitter-white.svg')}}" alt="" /></a>
                        <a href="#"><img src="{{asset('visituer/assets/imgs/theme/icons/icon-instagram-white.svg')}}" alt="" /></a>
                        <a href="#"><img src="{{asset('visituer/assets/imgs/theme/icons/icon-pinterest-white.svg')}}" alt="" /></a>
                        <a href="#"><img src="{{asset('visituer/assets/imgs/theme/icons/icon-youtube-white.svg')}}" alt="" /></a>
                    </div>
                    <p class="font-sm">Up to 15% discount on your first subscribe</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{asset('visituer/assets/imgs/theme/loading.gif')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="{{asset('visituer/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/slick.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/jquery.syotimer.min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/waypoints.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/wow.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/magnific-popup.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/select2.min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/counterup.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/images-loaded.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/isotope.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/jquery.vticker-min.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/jquery.theia.sticky.js')}}"></script>
    <script src="{{asset('visituer/assets/js/plugins/jquery.elevatezoom.js')}}"></script>
    <!-- Template  JS -->
    <script src="{{asset('visituer/assets/js/main.js?v=5.3')}}"></script>
    <script src="{{asset('visituer/assets/js/shop.js?v=5.3')}}"></script>
</body>

</html>