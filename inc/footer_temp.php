<!-- Footer Section Start -->

<style>
    i.fa-solid.fa-phone {
    padding: 10px;
    color: #f3fff6;
}
.footer-bottom {
    background-color: rgb(139, 90, 43, 1);
    padding: 18px 0;
    color: white;
}
.footer-content.text-white.fw-bold p {
    color: #fff !important;
}
    @media (max-width: 575px) {
    .mobile_res{
        width: 75px !important;
    }
    .mobile_loc{
        width: 165px !important;
    }
}
</style>


<footer class="footer-section-5 section-padding section-bg pb-0 pt-5">
    <div class="shape-1 d-none d-xxl-block float-bob-x">
        <img src="frontend/img/home-5/footer/shape-1.png" alt="img">
    </div>
    <div class="shape-2 d-none d-xxl-block float-bob-y">
        <img src="frontend/img/home-5/footer/shape-2.png" alt="img">
    </div>
    <div class="shape-3 d-none d-xxl-block float-bob-x">
        <img src="frontend/img/home-5/footer/shape-3.png" alt="img">
    </div>
    <div class="shape-4 d-none d-xxl-block float-bob-y">
        <img src="frontend/img/home-5/footer/shape-4.png" alt="img">
    </div>
    <div class="container">
        <!-- <div class="footer-widget-top-5 wow fadeInUp text-white ">
                <h2 class="text-white"></h2>
            </div> -->
        <div class="footer-widget-wrapper-4">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay=".2s">
                    <div class="footer-widget-items">
                        <div class="widget-head">
                            <a href="index.html" class="footer-logo">
                               <img class="brand-logo" src="../ITF/frontend/img/logo/english_itf_logo.png" alt="img">
                            </a>
                        </div>
                        <div class="footer-content text-white fw-bold">
                            <p><?= $MSG['footer_title']; ?></p>
                            <!-- <form action="#">
                                    <input type="email" id="email12" placeholder="Enter your email">
                                    <button class="icon-btn" type="submit"><i class="fas fa-paper-plane"></i></button>
                                </form> -->
                            <div class="social-icon">
                                <a href="https://www.facebook.com/MilletsOrganics" class="text-white"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://x.com/organicmillets" class="text-white"><i
                                        class="fa-brands fa-x-twitter"></i></i></a>
                                <a href="https://www.youtube.com/@organicmilletsitf" class="text-white"> <i
                                        class="fab fa-youtube"></i></a>
                                <a href="https://www.instagram.com/organicsmillets2023/" class="text-white"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="javascript:void(0)" class="text-white">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-8 col-sm-4 col-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="footer-widget-items">
                        <div class="widget-head">
                            <h4 class="text-white">
                                <?= $MSG['footer_useful_link']; ?>
                            </h4>
                        </div>
                        <ul class="list-area">
                            <li>
                                <a href="index.php" class="text-white">
                                    <i class="fa-solid fa-angles-right theme2"></i> <?= $MSG['home']; ?>
                                </a>
                            </li>
                            <li>
                                <a href="about.php" class="text-white">
                                    <i class="fa-solid fa-angles-right theme2"></i><?= $MSG['about-itf']; ?>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-white">
                                    <i class="fa-solid fa-angles-right theme2"></i><?= $MSG['registrations']; ?>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="" class="text-white">
                                   <i class="fa-solid fa-angles-right theme2"></i> <?= $MSG['resources']; ?>
                                </a>
                            </li> -->
                            
                            <li>
                                <a href="#" class="text-white">
                                    <i class="fa-solid fa-angles-right theme2"></i> <?= $MSG['gallery']; ?>
                                </a>
                            </li>
                            <li>
                                <a href="contact.php" class="text-white">
                                    <i class="fa-solid fa-angles-right theme2"></i></i> <?= $MSG['contact']; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-8 ps-xl-5 wow fadeInUp" data-wow-delay=".8s">
                    <div class="footer-widget-items">
                        <div class="widget-head">
                            <h5 class="text-white">KSSC</h5>
                        </div>
                        <ul class="contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h5 class="text-white"><?= $MSG['foot_email_us']; ?>:</h5>
                                    <p><a href="mailto:kssc.manager.acct@gmail.com"
                                            class="text-white">kssc.manager.acct@gmail.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon mobile_loc" style="width: 140px;">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    <h5 class="text-white"><?= $MSG['foot_location']; ?>:</h5>
                                    <p class="text-white"><?= $MSG['foot_address']; ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h5 class="text-white"><?= $MSG['foot_phone']; ?>:</h5>
                                    <p><a href="tel:+ 080-22271194 / 22243082" class="text-white"> 080-22271194 /
                                            22243082</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-8 ps-xl-5 wow fadeInUp" data-wow-delay=".8s">
                    <div class="footer-widget-items">
                        <div class="widget-head">
                            <h5 class="text-white"><?= $MSG['contact']; ?></h5>
                        </div>
                        <ul class="contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h5 class="text-white"><?= $MSG['foot_email_us']; ?>:</h5>
                                    <p><a href="mailto:kssc.manager.acct@gmail.com"
                                            class="text-white">organiccell@gmail.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon  mobile_res" style="width:100px">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    <h5 class="text-white"><?= $MSG['foot_location']; ?>:</h5>
                                    <p class="text-white"> <?= $MSG['foot_addressitf']; ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                  <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h5 class="text-white"><?= $MSG['foot_phone']; ?>:</h5>
                                    <p><a href="tel:+ 080-22271194 / 22243082" class="text-white">080-22074111</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-wrapper">
                <p class="text-1 wow fadeInUp"><?= $MSG['foot_reserved']; ?></p>
                <div class="bottom-img wow fadeInUp" data-wow-delay=".4s">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>
<!--<< All JS Plugins >>-->
<script src="https://itf2025.organics-millets.in/itf-2026-dev/frontend/js/jquery-3.7.1.min.js"></script>
<!--<< Bootstrap Js >>-->
<script src="https://itf2025.organics-millets.in/itf-2026-dev/frontend/js/bootstrap.bundle.min.js"></script>
<!--<< Nice Select Js >>-->
<script src="https://itf2025.organics-millets.in/itf-2026-dev/frontend/js/jquery.nice-select.min.js"></script>
<!--<< Odometer Js >>-->
<script src="https://itf2025.organics-millets.in/itf-2026-dev/frontend/js/odometer.min.js"></script>
<!--<< Appear Js >>-->
<script src="https://itf2025.organics-millets.in/itf-2026-dev/frontend/js/jquery.appear.min.js"></script>
<!--<< Swiper Slider Js >>-->
<script src="https://itf2025.organics-millets.in/itf-2026-dev/frontend/js/swiper-bundle.min.js"></script>
<!--<< MeanMenu Js >>-->
<script src="https://itf2025.organics-millets.in/itf-2026-dev/frontend/js/jquery.meanmenu.min.js"></script>
<!--<< Magnific Popup Js >>-->
<script src="https://itf2025.organics-millets.in/itf-2026-dev/frontend/js/jquery.magnific-popup.min.js"></script>
<!--<< Wow Animation Js >>-->
<script src="https://itf2025.organics-millets.in/itf-2026-dev/frontend/js/wow.min.js"></script>
<!--<< Gsap Animation Js >>-->
<script src="https://itf2025.organics-millets.in/itf-2026-dev/frontend/js/gsap.min.js"></script>
<!--<< ScrollTrigger Js >>-->
<script src="https://itf2025.organics-millets.in/itf-2026-dev/frontend/js/ScrollTrigger.min.js"></script>
<!--<< SplitText Js >>-->
<script src="https://itf2025.organics-millets.in/itf-2026-dev/frontend/js/SplitText.min.js"></script>
<!--<< splitType Js >>-->
<script src="https://itf2025.organics-millets.in/itf-2026-dev/frontend/js/splitType.js"></script>
<!--<< Main.js >>-->
<script src="https://itf2025.organics-millets.in/itf-2026-dev/frontend/js/main.js"></script>
</body>

</html>