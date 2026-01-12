<?php require_once 'lang/lang.php'; ?>
<?php require_once 'inc/header.php'; ?>
<style>
    .breadcrumb-wrapper::before {
        background: none;
    }

    .contact-officers-section {
        background:#8b5a2b;
    }
    .contact-officers-section .section-title span, .contact-officers-section  .section-title h2 {
      color: #f8f9f8;
    }

    .forest-title {
        font-size: 34px;
        font-weight: 700;
        color: #0b3d2e;
        max-width: 900px;
        margin: 0 auto;
        line-height: 1.4;
    }

    .forest-card {
        background: #ffffff;
        border-radius: 12px;
        padding: 30px 25px;
        height: 100%;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        border-left: 5px solid #2f6f4e;
    }

    .event-title {
        font-weight: 600;
        color: #2f6f4e;
        margin-bottom: 5px;
    }

    .event-name {
        font-weight: 600;
        margin-bottom: 20px;
    }

    .forest-card h6 {
        font-weight: 600;
        margin-top: 20px;
        color: #1c4d38;
    }

    .forest-card p {
        line-height: 1.8;
        color: #555;
    }

    /* Responsive */
    @media (max-width: 991px) {
        .forest-title {
            font-size: 26px;
        }
    }

    .leaf-icon i {
        color: #5b8c51;
        font-size: 22px;
    }

    .forest-divider-with-leaf {
        position: relative;
        width: 100%;
        height: 2px;
        margin: 60px 0;
        background-image: repeating-linear-gradient(to right,
                #9fcbb0,
                #9fcbb0 6px,
                transparent 6px,
                transparent 12px);
    }

    .forest-divider-with-leaf .leaf-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #f7faf6;
        /* same as section bg */
        padding: 0 14px;
    }

    .forest-divider-with-leaf img {
        width: 26px;
        height: auto;
    }

    .section-title h2 {
        margin-bottom: 30px;
    }

    .section-title h3 {
        margin-top: 20px;

    }

    .shape-right {
        position: absolute;
        right: 0;
        transform: translateY(-50%);
    }

    .shape-left {
        position: absolute;
        left: 0;
        transform: translateY(-50%);
    }


    .gov-card-body p {
        font-size: 16px;
        line-height: 1.6;
        color: #333;
        margin-bottom: 15px;
    }

    .gov-card-body strong {
        color: #0f3d1f;
    }

    .gov-card-body a {
        color: #1b5e20;
        text-decoration: none;
    }

    .gov-card-body a:hover {
        text-decoration: underline;
    }

    /*MOBILE*/
    @media (max-width: 600px) {


        .gov-card-body p {
            font-size: 15px;
        }
    }
</style>
<section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(frontend/img/contactus.jpg);">
    <div class="shape-1 float-bob-y">
        <img src="frontend/img/inner-page/shape-1.png" alt="img">
    </div>
    <div class="shape-2 float-bob-x">
        <img src="frontend/img/inner-page/shape-2.png" alt="img">
    </div>
    <div class="container">
        <div class="page-heading">
            <ul class="breadcrumb-list wow fadeInUp">
                <li>Home</li>
                <li>//</li>
                <li>Contact Us</li>
            </ul>
            <h1 class="breadcrumb-title text-anim">Contact Us</h1>
        </div>
    </div>
</section>

<!-- Contact Section Start -->
<section class="contact-info-section section-padding fix">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="contact-info-box" style="border: 1px dashed;">
                    <div class="shape-1">
                        <img src="frontend/img/inner-page/contact-shape.png" alt="img">
                    </div>
                    <div class="contact-top">

                        <h3>📍ORGANIC FARMING DIVISION, KARNATAKA STATE DEPARTMENT OF AGRICULTURE</h3>
                    </div>
                    <div class="gov-card-body">
                        <p>
                            <strong>Address:</strong>
                            No. 1, Sheshadri Road,
                            Bengaluru, Karnataka – 560001
                        </p>

                        <p>
                            <strong>Phone:</strong>
                            080-22074111 / 22242746 / 22074101
                        </p>

                        <p>
                            <strong>Email:</strong>
                            <a href="mailto:itf2025organiccell@gmail.com">
                                itf2025organiccell@gmail.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="contact-info-box" style="border: 1px dashed;">
                    <div class="shape-1">
                        <img src="frontend/img/inner-page/contact-shape.png" alt="img">
                    </div>
                    <div class="contact-top">

                        <h3>📍KARNTAKA STATE AGRICULTURAL PRODUCE PROCESSING AND EXPORT CORPORATION LTD.</h3>
                    </div>
                    <div class="gov-card-body">
                        <p>
                            <strong>Address:</strong> No.17, Richmond Road, Bengaluru, Karnataka-560025.
                        </p>
                        <p> <strong>Phone:</strong>
                            080-22271194 / 22243082</p>
                        <p>
                            <strong>Email:</strong>
                            <a href="mailto:kappec1996@gmail.com">
                                kappec1996@gmail.com
                            </a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Contact officers Start -->
<section class="contact-officers-section section-padding">
    <div class="container">

        <!-- SECTION TITLE -->
        <div class="organic-center-content text-center">
            <div class="section-title mb-4">
                <span class="wow fadeInUp">
                    <img src="frontend/img/sub-title.svg" alt="img"> Our Officers
                </span>
                <h2 class="text-anim">
                    Details of Officers to Contact for Online Registration
                </h2>
            </div>
        </div>
        <div class="forest-divider-with-leaf">
            <span class="leaf-icon">
                <i class="fas fa-leaf"></i>
            </span>
        </div>
        <!-- CONTENT 1-->
        <div class="row g-5">

            <!-- COLUMN 1 -->
            <div class="col-lg-4">
                <div class="forest-card">
                    <h5 class="event-title">Event Name:</h5>
                    <p class="event-name">Millet Walkathon</p>

                    <h6>Contact Details:</h6>
                    <p>Ms. Mathura Pai,<br>
                        Assistant Director of Agriculture,<br>
                        Address: Banashankari, Bengaluru,<br>
                        Contact Number: 8277929923
                    </p>

                    <h6>Contact Details:</h6>
                    <p>Mr. Natesh N,<br>
                        Assistant Director of Agriculture,<br>
                        Address: Banashankari, Bengaluru,<br>
                        Contact Number: 8884006719
                    </p>
                </div>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-lg-4">
                <div class="forest-card">
                    <h5 class="event-title">Event Name:</h5>
                    <p class="event-name">Exhibition</p>

                    <h6>Contact Details:</h6>
                    <p>Mr. Kempegowda H,<br>
                        Joint Director of Agriculture (Fertiliser & PP),<br>
                        Contact Number: 8277929833
                    </p>

                    <h6>Contact Details:</h6>
                    <p>Mr. H.L. Govardhan,<br>
                        AIF – Consultant,<br>
                        Contact Number: 9900759335
                    </p>
                </div>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-lg-4">
                <div class="forest-card">
                    <h5 class="event-title">Event Name:</h5>
                    <p class="event-name">International Conference</p>

                    <h6>Contact Details:</h6>
                    <p>Ms. Shilpa S.K.,<br>
                        Deputy Director (Statistics),<br>
                        Contact Number: 8277929989
                    </p>

                    <h6>Contact Details:</h6>
                    <p>Ms. Saumya Sudan,<br>
                        Assistant Director of Agriculture,<br>
                        Contact Number: 8277929853
                    </p>
                </div>
            </div>

        </div>
        <div class="forest-divider-with-leaf">
            <span class="leaf-icon">
                <i class="fas fa-leaf"></i>
            </span>
        </div>
        <!-- CONTENT 2-->
        <div class="row g-5">

            <!-- COLUMN 1 -->
            <div class="col-lg-4">
                <div class="forest-card">
                    <h5 class="event-title">Event Name:</h5>
                    <p class="event-name">B2B Meet</p>

                    <h6>Contact Details:</h6>
                    <p>Mr. Naganagouda Reddy ,<br>
                        Deputy Director of Agriculture (Crop Survey) ,<br>

                        Contact Number: 7349092680
                    </p>

                    <h6>Contact Details:</h6>
                    <p>Mr. Chandrakumar,<br>
                        Assistant Director of Agriculture (KAPPEC),<br>

                        Contact Number: 9480316528
                    </p>
                </div>
            </div>

            <!-- COLUMN 2 -->
            <div class="col-lg-4">
                <div class="forest-card">
                    <h5 class="event-title">Event Name:</h5>
                    <p class="event-name">Farmer Workshop</p>

                    <h6>Contact Details:</h6>
                    <p>Ms . Bharathamma G.U. ,<br>
                        Deputy Director of Agriculture (Crop Insurance) ,<br>
                        Contact Number: 8088008151
                    </p>

                    <h6>Contact Details:</h6>
                    <p>Mr. Gopala R ,<br>
                        First Division Assistant ,<br>
                        Contact Number: 9844072489
                    </p>
                </div>
            </div>

            <!-- COLUMN 3 -->
            <div class="col-lg-4">
                <div class="forest-card">
                    <h5 class="event-title">Event Name:</h5>
                    <p class="event-name">Paid Food Stall</p>

                    <h6>Contact Details:</h6>
                    <p>Mr. Yogesh G. H. ,<br>
                        Deputy Director of Agriculture Micro Irrigation ,<br>
                        Contact Number: 8277929838
                    </p>

                    <h6>Contact Details:</h6>
                    <p>Ms. Pramila R. Gangal ,<br>
                        Assistant Director of Agriculture Watershed Development Department ,<br>
                        Contact Number: 6364794902
                    </p>
                </div>
            </div>

        </div>


    </div>
</section>


<!-- Contact Map Section Start -->
<div class="map-section-contact">
    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>


<section class="service-section-3 section-padding pb-0">
    <div class="shape-right  float-bob-x">
        <img src="frontend/img/home-3/service/shape-1.png" alt="img">
        <img src="frontend/img/home-3/service/shape-1.png" alt="img">
    </div>
    <div class="shape-left float-bob-x">
        <img src="frontend/img/home-3/delivery/right-shape.png" alt="img">
        <img src="frontend/img/home-5/footer/shape-4.png" alt="img">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp"></span>
            <h2 class="text-anim">#AFITF2026</h2>
            <h3 class="text-anim">
                Agriculture beyond cultivation and empowering Farmers International Trade Fair 2026
            </h3>
        </div>

    </div>

</section>

<?php require_once 'inc/footer.php'; ?>