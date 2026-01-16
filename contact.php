<?php require_once 'lang/lang.php'; ?>
<?php require_once 'inc/header.php'; ?>
<style>
.breadcrumb-wrapper::before {
    background: none;
}

.contact-officers-section {
    background: #8b5a2b;
}

.contact-officers-section .section-title span,
.contact-officers-section .section-title h2 {
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
    border-left: 5px solid #8b5a2b;
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

@media (max-width: 575px) {
    br {
        display: block;
    }
}
</style>
<section class="breadcrumb-wrapper bg-cover fix hero-height" style="background-image: url(frontend/img/commonbanner.jpeg);">
    <div class="shape-1 float-bob-y">
        <img src="frontend/img/inner-page/shape-1.png" alt="img">
    </div>
    <div class="shape-2 float-bob-x">
        <img src="frontend/img/inner-page/shape-2.png" alt="img">
    </div>
    <div class="container">
        <div class="page-heading">
            <ul class="breadcrumb-list wow fadeInUp">
                <li><?= $MSG['home']; ?></li>
                <li>//</li>
                <li><?= $MSG['contact']; ?></li>
            </ul>
            <h1 class="breadcrumb-title text-white "><?= $MSG['contact']; ?></h1>
        </div>
    </div>
</section>

<!-- Contact Section Start -->
<section class="contact-info-section section-padding fix ">
    <div class="container">

        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-8 col-md-8 wow fadeInUp" data-wow-delay=".7s">
    <div class="contact-info-box" style="border: 1px dashed;">
        <div class="shape-1">
            <img src="frontend/img/inner-page/contact-shape.png" alt="img">
        </div>

        <div class="contact-top">
            <h3 class="text-center">
                <?= $MSG['organic_farming_division']; ?>
            </h3>
        </div>

        <div class="gov-card-body text-center">
            <p>
                <strong><?= $MSG['address_label']; ?>:</strong>
                <?= $MSG['organic_address']; ?>
            </p>

            <p>
                <strong><?= $MSG['phone_label']; ?>:</strong>
                080-22074111 / 22242746 / 22074101
            </p>

            <p>
                <strong><?= $MSG['email_label']; ?>:</strong>
                <a href="mailto:itf2025organiccell@gmail.com">
                    organiccell@gmail.com

        </div>

        <!-- <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="contact-info-box" style="border: 1px dashed;">
                    <div class="shape-1">
                        <img src="frontend/img/inner-page/contact-shape.png" alt="img">
                    </div>
                    <div class="contact-top">

                        <h3>KARNTAKA STATE SEEDS CORPORATION LIMITED(KSSCL)</h3>
                    </div>
                    <div class="gov-card-body">
                        <p>
                            <strong>Address:</strong> Karnataka State Seeds Corporation Limited (KSSCL) Beej Bhavan, Bellary Road, Hebbal, Bengaluru-560024, India.
                        </p>
                        <p> <strong>Phone:</strong>
                             080-22271194 / 22243082</p>
                        <p>
                            <strong>Email:</strong>
                            <a href="mailto:kappec1996@gmail.com">
                               kssc.manager.acct@gmail.com
                            </a>

                        </p>
                    </div>
                </div>
            </div> -->
    </div>
    </div>
</section>



<!-- Contact officers Start -->
<section class="contact-officers-section section-padding1">
    <div class="container">

        <!-- SECTION TITLE -->
        <div class="organic-center-content text-center">
            <div class="section-title mb-4">
                <span class="wow fadeInUp">
                    <img src="frontend/img/sub-title.svg" alt="img">
                    <?= $MSG['our_officers']; ?>
                </span>
                <h2 class="text-white">
                    <?= $MSG['officers_subtitle']; ?>
                </h2>
            </div>
        </div>

        <div class="forest-divider-with-leaf">
            <span class="leaf-icon"><i class="fas fa-leaf"></i></span>
        </div>

        <!-- CONTENT 1 -->
        <div class="row g-5">

            <!-- Millet Run -->
            <div class="col-lg-4">
                <div class="forest-card">
                    <h5 class="event-title"><?= $MSG['event_name']; ?>:</h5>
                    <h4 class="event-name fw-bold"><?= $MSG['event_millet_run']; ?></h4>

                    <h6><?= $MSG['contact_details']; ?>:</h6>
                    <p>
                        <?= $MSG['name_mathura_pai']; ?><br>
                        <?= $MSG['assistant_director_agri']; ?><br>
                        <?= $MSG['address']; ?>: <?= $MSG['banashankari_bangalore']; ?><br>
                        <?= $MSG['contact_number']; ?>: 8277929923
                    </p>

                    <h6><?= $MSG['contact_details']; ?>:</h6>
                    <p>
                        <?= $MSG['name_natesh_n']; ?><br>
                        <?= $MSG['assistant_director_agri']; ?><br>
                        <?= $MSG['address']; ?>: <?= $MSG['banashankari_bangalore']; ?><br>
                        <?= $MSG['contact_number']; ?>: 8884006719
                    </p>
                </div>
            </div>

            <!-- Exhibition -->
            <div class="col-lg-4">
                <div class="forest-card">
                    <h5 class="event-title"><?= $MSG['event_name']; ?>:</h5>
                    <h4 class="event-name fw-bold"><?= $MSG['event_exhibition']; ?></h4>

                    <h6><?= $MSG['contact_details']; ?>:</h6>
                    <p>
                        <?= $MSG['name_raju_hsb']; ?><br>
                        <?= $MSG['itf_consultant']; ?><br>
                        <?= $MSG['contact_number']; ?>: 9845999859
                    </p>

                    <h6><?= $MSG['contact_details']; ?>:</h6>
                    <p>
                        <?= $MSG['name_vidhyanand']; ?><br>
                        <?= $MSG['joint_director_agri']; ?><br>
                        <?= $MSG['contact_number']; ?>: 9480611958
                    </p>
                </div>
            </div>

            <!-- International Conference -->
            <div class="col-lg-4">
                <div class="forest-card">
                    <h5 class="event-title"><?= $MSG['event_name']; ?>:</h5>
                    <h4 class="event-name fw-bold"><?= $MSG['event_conference']; ?></h4>

                    <h6><?= $MSG['contact_details']; ?>:</h6>
                    <p>
                        <?= $MSG['name_shilpa_sk']; ?><br>
                        <?= $MSG['deputy_director_statistics']; ?><br>
                        <?= $MSG['contact_number']; ?>: 8277929989
                    </p>

                    <h6><?= $MSG['contact_details']; ?>:</h6>
                    <p>
                        <?= $MSG['name_saumya_sudan']; ?><br>
                        <?= $MSG['assistant_director_agri']; ?><br>
                        <?= $MSG['contact_number']; ?>: 8277929853
                    </p>
                </div>
            </div>

        </div>

        <div class="forest-divider-with-leaf">
            <span class="leaf-icon"><i class="fas fa-leaf"></i></span>
        </div>

        <!-- CONTENT 2 -->
        <div class="row g-5">

            <!-- Public Registration -->
            <div class="col-lg-4">
                <div class="forest-card">
                    <h5 class="event-title"><?= $MSG['event_name']; ?>:</h5>
                    <h4 class="event-name fw-bold"><?= $MSG['event_public_registration']; ?></h4>

                    <h6><?= $MSG['contact_details']; ?>:</h6>
                    <p>
                        <?= $MSG['name_raju_hsb']; ?><br>
                        <?= $MSG['itf_consultant']; ?><br>
                        <?= $MSG['contact_number']; ?>: 9845999859
                    </p>

                    <h6><?= $MSG['contact_details']; ?>:</h6>
                    <p>
                        <?= $MSG['name_bhanuprakash_c']; ?><br>
                        <?= $MSG['first_division_assistant']; ?><br>
                        <?= $MSG['contact_number']; ?>: 7795627445
                    </p>
                </div>
            </div>

            <!-- Paid Food Stall -->
            <div class="col-lg-4">
                <div class="forest-card">
                    <h5 class="event-title"><?= $MSG['event_name']; ?>:</h5>
                    <h4 class="event-name fw-bold"><?= $MSG['event_paid_food_stall']; ?></h4>

                    <h6><?= $MSG['contact_details']; ?>:</h6>
                    <p>
                        <?= $MSG['name_yogesh_gh']; ?><br>
                        <?= $MSG['deputy_director_micro_irrigation']; ?><br>
                        <?= $MSG['contact_number']; ?>: 8277929838
                    </p>

                    <h6><?= $MSG['contact_details']; ?>:</h6>
                    <p>
                        <?= $MSG['name_latha']; ?><br>
                        <?= $MSG['agriculture_officer']; ?><br>
                        <?= $MSG['contact_number']; ?>: 8277929852
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>



<!-- Contact Map Section Start -->
<div class="map-section-contact">
    <div class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.388090641313!2d77.5815229735898!3d13.010940214017547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17d4309c27e9%3A0x174c852910f84fcf!2sTripura%20Vasini%20Fabricana!5e0!3m2!1sen!2sin!4v1768204535796!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>


<!-- <section class="service-section-3 section-padding pb-0">
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
            <h2 class="text-anim">#ITF2026</h2>
            <h3 class="text-anim">
                Agriculture beyond Production- <em>"Empowering Farmers:</em> International Trade Fair 2026
            </h3>
            <div class="row g-4">
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div>
                    <div class="shape-1">
                        <img src="frontend/img/inner-page/contact-shape.png" alt="img">
                    </div>
                    <div class="contact-top">

                        <h3>ORGANIC FARMING DIVISION, KARNATAKA STATE DEPARTMENT OF AGRICULTURE</h3>
                    </div>
                    <div>
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
                <div>
                    <div class="shape-1">
                        <img src="frontend/img/inner-page/contact-shape.png" alt="img">
                    </div>
                    <div class="contact-top">

                        <h3>KARNTAKA STATE SEEDS CORPORATION LIMITED(KSSCL)</h3>
                    </div>
                    <div >
                        <p>
                            <strong>Address:</strong> Karnataka State Seeds Corporation Limited (KSSCL) Beej Bhavan, Bellary Road, Hebbal, Bengaluru-560024, India.
                        </p>
                        <p> <strong>Phone:</strong>
                             080-22271194 / 22243082</p>
                        <p>
                            <strong>Email:</strong>
                            <a href="mailto:kappec1996@gmail.com">
                               kssc.manager.acct@gmail.com
                            </a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>

</section> -->

<?php require_once 'inc/footer.php'; ?>