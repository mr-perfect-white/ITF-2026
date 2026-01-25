<?php require_once 'lang/lang.php'; ?>
<?php require_once 'inc/header.php'; ?>

<style>
    .array-prev,
    .array-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.4);
        border: none;
        padding: 12px 16px;
        cursor: pointer;
        z-index: 10;
        border-radius: 50px;
        color: brown;
    }

    .array-prev {
        left: 30px;
    }

    .array-next {
        right: 30px;
    }

    .array-prev:hover,
    .array-next:hover {
        background: rgba(0, 0, 0, 0.7);
    }

    .array-prev svg,
    .array-next svg {
        display: block;
        width: 30px;
        height: 30px;
        fill: currentColor;
    }


    @media (max-width: 768px) {

        .array-prev,
        .array-next {
            background: rgba(0, 0, 0, 0.4);
            padding: 6px;
            border-radius: 0;
            color: brown;
            border-radius: 50px;
        }

        .array-prev {
            left: 10px;
        }

        .array-next {
            right: 10px;
        }

        .array-prev svg,
        .array-next svg {
            width: 25px;
            height: 20px;
        }

        .array-prev:hover,
        .array-next:hover {
            background: none;
        }
    }
</style>

<!-- Hero Section Start -->
<section class="hero-section hero-1 fix">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                class="active"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= $MSG['banner_1']; ?>" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?= $MSG['banner_2']; ?>" class="d-block w-100" alt="">
            </div>
        </div>

        <!-- PREV BUTTON -->
        <button class="array-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <svg width="55" height="28" viewBox="0 0 55 28">
                <path
                    d="M0.36 12.93L12.86 0.43C13.31-0.08 14.1-0.14 14.62 0.3C15.15 0.75 15.21 1.53 14.76 2.06L4.26 12.57H53.75C54.44 12.57 55 13.13 55 13.82C55 14.51 54.44 15.07 53.75 15.07H4.26L14.62 25.43C15.15 25.88 15.21 26.67 14.76 27.19C14.31 27.72 13.52 27.78 13 27.33L0.36 14.69C-0.12 14.21 -0.12 13.42 0.36 12.93Z"
                    fill="white" />
            </svg>
        </button>

        <!-- NEXT BUTTON -->
        <button class="array-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <svg width="55" height="28" viewBox="0 0 55 28">
                <path
                    d="M54.63 12.93L42.13 0.43C41.68-0.08 40.89-0.14 40.37 0.3C39.85 0.75 39.78 1.53 40.23 2.06L50.73 12.57H1.24C0.55 12.57 0 13.13 0 13.82C0 14.51 0.55 15.07 1.24 15.07H50.73L40.37 25.43C39.85 25.88 39.78 26.67 40.23 27.19C40.68 27.72 41.47 27.78 42 27.33L54.63 14.69C55.12 14.21 55.12 13.42 54.63 12.93Z"
                    fill="white" />
            </svg>
        </button>

    </div>
</section>
<div class="announcement-banner">
    <div class="scrolling-text">
        📢 Online registrations are open until 2nd February
    </div>
</div>
<!-- Brand Section Start -->
<!-- <div class="brand-section-3 mt-5 section-padding pt-0">
    <div class="row align-items-center g-4 justify-content-between">
        <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="video-wrapper-3 bg-cover" style="background-image: url('../ITF/frontend/img/sddefault.webp');">
                <a href="https://youtu.be/42NhT56-6gA" class="video-btn video-popup">
                    <i class="fas fa-play"></i>
                </a>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="top-text text-center mb-2 wow fadeInUp">
                <h3>Agriculture beyond cultivation <br>and empowering farmers</h3>
            </div>
            <div class="col-md-6" style="margin-left: 10rem !important;">
                <div class="about-right-items">
                    <div class="about-wrapper about-top-box card wow fadeInUp" data-wow-delay=".3s">
                        <div class="card-body d-flex flex-column justify-content-center text-center">
                            <p class="mb-1">Trust By Clients</p>

                            <h2 class="my-3">
                                <span class="odometer" data-count="1286644">00</span>+
                            </h2>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div> -->

<section class="product-section-2 section-padding1 fix pt-0 mb-0">
    <!-- <div class="shape-1 d-none d-xl-block float-bob-y">
        <img src="frontend/img/home-2/product/shape-01.png" alt="img">
    </div> -->
    <div class="shape-2 d-none d-xl-block float-bob-x">
        <img src="frontend/img/home-2/product/shape-02.png" alt="img">
    </div>
    <div class="shape-3 d-none d-xl-block float-bob-x">
        <img src="frontend/img/home-2/product/shape-03.png" alt="img">
    </div>
    <div class="brand-section-3 mt-5 pt-0">
        <div class="container">
            <div class="row g-4 align-items-stretch text-center">

                <!-- VIDEO 1 -->
                <div class="col-lg-4 col-md-4">
                    <div class="video-wrapper-3 bg-cover equal-box"
                        style="background-image: url('../ITF/frontend/img/sddefault.webp');">
                        <a href="https://www.youtube.com/watch?v=42NhT56-6gA" class="video-btn video-popup">
                            <i class="fas fa-play"></i>
                        </a>

                    </div>
                </div>


                <!-- VIDEO 2 -->
                <div class="col-lg-4 col-md-4">
                    <div class="video-wrapper-3 bg-cover equal-box"
                        style="background-image: url('../ITF/frontend/img/sddefault1.png');">
                        <a href="https://www.youtube.com/watch?v=4C4_AlC0OR0" class="video-btn video-popup">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>


                <!-- COUNTER -->
                <!-- <div class="col-lg-4 col-md-4">
                    <div class="top-text mb-3 wow fadeInUp">
                        <h3><?= $MSG['agri_title']; ?></h3>
                    </div>
                    <div class="about-wrapper about-top-box card equal-box wow fadeInUp">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <p class="mb-1"><?= $MSG['trust_clients']; ?></p>
                            <h2 class="my-3">
                                <span class="odometer" data-count="300000">00</span>+
                            </h2>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-4">
                    <div class="video-wrapper-3 bg-cover equal-box"
                        style="background-image: url('../ITF/frontend/img/hqdefault.jpg');">
                        <a href="https://www.youtube.com/watch?v=u45CQh8arlQ" class="video-btn video-popup">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<!-- Choose Us Section Start -->
<section class="choose-us-section-3  fix">
    <div class="container-fluid">
        <div class="choose-us-wrapper-3">
            <div class="row  g-4">

                <!-- RIGHT SIDE CONTENT -->
                <div class="col-lg-12">
                    <div class="choose-us-content">

                        <div class="section-title mb-3">
                            <span class="text-white text">
                                <img src="frontend/img/sub-title.svg" alt="img">
                                <?= $MSG['why_choose_us']; ?>
                            </span>
                            <h2 class="text-white"><?= $MSG['glimpse_title']; ?></h2>
                        </div>

                        <!-- Default visible paragraph -->
                        <div class="row">

                            <!-- COLUMN 1 -->
                            <div class="col-lg-6 col-md-6">
                                <p class="choose-text mb-4 text-white">
                                    <?= $MSG['about_content']; ?>
                                </p>
                            </div>

                            <!-- COLUMN 2 -->
                            <div class="col-lg-6 col-md-6">
                                <div class="choose-text mb-3 text-white">

                                    <!-- <p><?= $MSG['about_more_content']; ?></p> -->

                                    <ul>
                                        <!-- <li><?= $MSG['about_more_content1']; ?></li> -->
                                        <li><?= $MSG['about_more_content2']; ?></li>
                                        <li><?= $MSG['about_more_content3']; ?></li>
                                    </ul>

                                    <p><?= $MSG['about_more_content4']; ?></p>
                                    <p><?= $MSG['about_more_content5']; ?></p>

                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- Hidden Content -->
                    <!-- <div class="more-content text-white" >


                            <p>
                                <?= $MSG['about_more_content']; ?>
                            </p>

                            <ul>
                                <li>
                                    <?= $MSG['about_more_content1']; ?>
                                </li>

                                <li>
                                    <?= $MSG['about_more_content2']; ?>
                                </li>

                                <li>
                                    <?= $MSG['about_more_content3']; ?>
                                </li>
                            </ul>

                            <p>
                                <?= $MSG['about_more_content4']; ?>
                            </p>

                            <p>
                                <?= $MSG['about_more_content5']; ?>
                            </p>


                        </div> -->

                    <!-- Read More Button -->
                    <!-- <div>
                            <button class="btn btn-sm btn-brown text-white" id="readMoreBtn" onclick="toggleContent()">
                                <?= $MSG['read_more']; ?>
                            </button>
                        </div> -->


                </div>
            </div>

            <!-- LEFT SIDE IMAGE -->
            <div class="col-lg-6">
                <!-- <div class=" choose-us-image white-style">
                        <img src="frontend/img/glimseseng.png" class="reduce-img-height" alt="Choose Us Image">
                    </div> -->
            </div>


        </div>
    </div>
    </div>
</section>
<!-- Brand Section Start -->
<div class="brand-section section-padding pt-5" style="background-color: #f7f7f7;">
    <div class="container">
        <div class="top-text text-center wow fadeInUp">
            <h2> <?= $MSG['highlights_content']; ?></h2>
        </div>
        <div class="swiper brand-slide">
            <div class="swiper-wrapper">


                <div class="swiper-slide1">
                    <div class="brand-image text-center">
                        <img src="<?= $MSG['product']; ?>" alt="img">
                        <p class="brand-text"><?= $MSG['product_exhibition']; ?></p>
                    </div>
                </div>


                <div class="swiper-slide1">
                    <div class="brand-image text-center">
                        <img src="<?= $MSG['agro_ecolog']; ?>" alt="img">
                        <p class="brand-text"><?= $MSG['agro_ecology']; ?></p>
                    </div>

                </div>
                <div class="swiper-slide1">
                    <div class="brand-image text-center">
                        <img src="<?= $MSG['value_addition1']; ?>" alt="img">
                        <p class="brand-text"><?= $MSG['value_addition']; ?></p>
                    </div>
                </div>


                <div class="swiper-slide1">
                    <div class="brand-image text-center">
                        <img src="<?= $MSG['branding']; ?>" alt="img">
                        <p class="brand-text"><?= $MSG['branding_marketing']; ?></p>
                    </div>
                </div>
                <div class="swiper-slide1">
                    <div class="brand-image text-center">
                        <img src="<?= $MSG['food']; ?>" alt="img">
                        <p class="brand-text"><?= $MSG['food_court']; ?></p>
                    </div>
                </div>
                <div class="swiper-slide1">
                    <div class="brand-image text-center">
                        <img src="<?= $MSG['consumer']; ?>" alt="img">
                        <p class="brand-text"><?= $MSG['consumer_connect']; ?></p>
                    </div>
                </div>
                <div class="swiper-slide1">
                    <div class="brand-image text-center">
                        <img src="<?= $MSG['cultural']; ?>" alt="img">
                        <p class="brand-text"><?= $MSG['cultural_events']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service Section Start -->
<section class="achievements-section-4 section-padding fix section-bg">
    <div class="shape-1 float-bob-y">
        <img src="../ITF/frontend/img/home-4/achievement/shape-1.png" alt="img">
    </div>
    <div class="shape-2 float-bob-x">
        <img src="../ITF/frontend/img/home-4/achievement/shape-2.png" alt="img">
    </div>
    <div class="container">
        <div class="achievments-wrapper-4">
            <div class="row g-4">
                <div class="col-xl-6 col-lg-6">
                    <div class="achievments-content">
                        <div class="section-title mb-0">
                            <!-- <span class="wow fadeInUp text-white"><img src="../ITF/frontend/img/sub-title.svg"
                                    alt="img">weeks
                                highlights</span> -->
                            <h2 class=" text-white"> <?= $MSG['header_title']; ?></h2>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="counter-box-area">

                        <!-- Venue -->
                        <a href="https://maps.app.goo.gl/PqLBGASUjp1fEJPk7" target="_blank"
                            class="counter-box-items wow fadeInUp text-white" data-wow-delay=".3s"
                            style="display:block; text-decoration:none;">

                            <div class="icon">
                                <i class="fa fa-map-marker theme1"></i>
                            </div>

                            <div class="content">
                                <h4 class="text-white"><?= $MSG['venue_location']; ?></h4>
                                <p class="text-white"><?= $MSG['venue_address']; ?></p>
                            </div>
                        </a>


                        <!-- Date -->
                        <div class="counter-box-items wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon">
                                <i class="fa fa-calendar theme1"></i>
                            </div>
                            <div class="content text-white">
                                <h4 class="text-white"><?= $MSG['venue_date']; ?></h4>
                                <p class="text-white"><?= $MSG['venue_event_date']; ?></p>
                            </div>
                        </div>

                        <!-- Time -->
                        <div class="counter-box-items wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon">
                                <i class="fa fa-clock theme1"></i>
                            </div>
                            <div class="content text-white">
                                <h4 class="text-white"><?= $MSG['venue_time']; ?></h4>
                                <p class="text-white">09:30 AM to 8:00 PM</p>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- Service Section Start -->
<section class="service-section-4 section-padding fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp"><img src="../ITF/frontend/img/sub-title.svg"
                    alt="img"><?= $MSG['pre_events']; ?></span>
            <h2><?= $MSG['pre_events_state']; ?></h2>

        </div>
    </div>
    <div class="service-wrapper-4">
        <div class="swiper service-slide-4">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="service-box-items-4">
                        <div class="thumb">
                            <img src="<?= $MSG['walk']; ?>" alt="img">
                        </div>
                        <div class="service-content-area">
                            <div class="icon">
                                <i class="fa fa-trophy"></i>


                            </div>
                            <div class="content">
                                <h4><a
                                        href="https://itf2026.organics-millets.in/smartrun.php"><?= $MSG['pre_events4']; ?></a>
                                </h4>
                                <!-- <p>
                                            Lorem ipsum dolor sit amet, porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                                        </p> -->
                                <!-- <a href="service-details.html" class="link-btn"> <i class="far fa-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service-box-items-4">
                        <div class="thumb">
                            <img src="<?= $MSG['international']; ?>" alt="img">
                        </div>
                        <div class="service-content-area">
                            <div class="icon">
                                <i class="fa-solid fa-globe"></i>


                            </div>
                            <div class="content">
                                <h4><a
                                        href="https://itf2026.organics-millets.in/smartrun.php"><?= $MSG['pre_events2']; ?></a>
                                </h4>
                                <!-- <p>
                                            Lorem ipsum dolor sit amet, porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                                        </p> -->
                                <!-- <a href="service-details.html" class="link-btn">More Details <i class="far fa-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="service-box-items-4">
                        <div class="thumb">
                            <img src="<?= $MSG['panel']; ?>" alt="img">
                        </div>
                        <div class="service-content-area">
                            <div class="icon">
                                <i class="fa fa-comments"></i>

                            </div>
                            <div class="content">
                                <h4><a
                                        href="https://itf2026.organics-millets.in/smartrun.php"><?= $MSG['pre_events1']; ?></a>
                                </h4>
                                <!-- <p>
                                            Lorem ipsum dolor sit amet, porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                                        </p> -->
                                <!-- <a href="service-details.html" class="link-btn">More Details <i class="far fa-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>


                <!-- <div class="swiper-slide">
                            <div class="service-box-items-4">
                                <div class="thumb">
                                    <img src="assets/img/home-4/service/service-04.jpg" alt="img">
                                </div>
                                <div class="service-content-area">
                                    <div class="icon">
                                        <i class="flaticon-dairy-products"></i>
                                    </div>
                                    <div class="content">
                                        <h4><a href="service-details.html">Dairy Products</a></h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                                        </p>
                                        <a href="service-details.html" class="link-btn">More Details <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-box-items-4">
                                <div class="thumb">
                                    <img src="assets/img/home-4/service/service-05.jpg" alt="img">
                                </div>
                                <div class="service-content-area">
                                    <div class="icon">
                                        <i class="flaticon-dairy-products"></i>
                                    </div>
                                    <div class="content">
                                        <h4><a href="service-details.html">Dairy Products</a></h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                                        </p>
                                        <a href="service-details.html" class="link-btn">More Details <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
            </div>
        </div>
    </div>
</section>

<!-- Counter Section Start -->
<section class="counter-section  sectionbg pt-5 fix">

    <div class="container">
        <div class="row g-4 justify-content-center " style="padding: 2.5rem 0 1.5rem 0;">

            <div class="col-xl col-lg col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">

                <div class="counter-box-items-area text-center">
                    <div class="icon"><i class="fa-solid fa-building section1"></i></div>
                    <div class="content">
                        <h2 class="text-white"><span class="odometer text-white" data-count="300">00</span>+</h2>
                        <p class="fw-bold fs-5 text-white"><?= $MSG['counter1_title']; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-xl col-lg col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">

                <div class="counter-box-items-area text-center">
                    <div class="icon"><i class="fa-solid fa-industry section1"></i></i></div>
                    <div class="content">
                        <h2 class="text-white"><span class="odometer text-white" data-count="68">00</span>+</h2>
                        <p class="fw-bold fs-5 text-white"><?= $MSG['counter2_title']; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-xl col-lg col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">

                <div class="counter-box-items-area text-center">
                    <div class="icon"><i class="fa-solid fa-seedling section1"></i></div>
                    <div class="content">
                        <h2 class="text-white"><span class="odometer text-white" data-count="30">00</span>+</h2>
                        <p class="fw-bold fs-5 text-white"><?= $MSG['counter3_title']; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-xl col-lg col-md-6 col-12 wow fadeInUp" data-wow-delay=".8s">

                <div class="counter-box-items-area text-center">
                    <div class="icon"><i class="fa-solid fa-bullhorn section1"></i></div>
                    <div class="content">
                        <h2 class="text-white"><span class="odometer text-white" data-count="30">00</span>+</h2>
                        <p class="fw-bold fs-5 text-white"><?= $MSG['counter4_title']; ?></p>
                    </div>
                </div>
            </div>

            <div class="col-xl col-lg col-md-6 col-12 wow fadeInUp" data-wow-delay=".10s">

                <div class="counter-box-items-area text-center">
                    <div class="icon"><i class="fa-solid fa-utensils section1"></i></div>
                    <div class="content">
                        <h2 class="text-white"><span class="odometer text-white" data-count="20">00</span>+</h2>
                        <p class="fw-bold fs-5 text-white"><?= $MSG['counter5_title']; ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>


<!-- image Section Start -->
<section class="product-section-2 section-padding fix pt-0 mb-0">
    <div class="shape-1 d-none d-xl-block float-bob-y">
        <img src="frontend/img/home-2/product/shape-01.png" alt="img">
    </div>
    <div class="shape-2 d-none d-xl-block float-bob-x">
        <img src="frontend/img/home-2/product/shape-02.png" alt="img">
    </div>
    <div class="shape-3 d-none d-xl-block float-bob-x">
        <img src="frontend/img/home-2/product/shape-03.png" alt="img">
    </div>
    <div class="container">
        <div class="letter-image">
            <?= $MSG['header_title']; ?></em></span>
        </div>


    </div>
</section>
<!-- promotion Section Start -->
<section class="news-section section-bg section-padding1 fix mb-5">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp text-white"><img src="frontend/img/sub-title.svg"
                    alt="img"><?= $MSG['pre_events']; ?></span>
            <h2 class=" text-white"><?= $MSG['pre_events_district']; ?></h2>

        </div>
        <div class="row">

            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="news-box-items">
                    <div class="news-image">
                        <img src="<?= $MSG['news_2']; ?>" alt="img">

                    </div>
                    <div class="news-content">
                        <h3><a href="culinarycompetition.php" class="text-white"><?= $MSG['pre_events5']; ?></a></h3>
                        <!-- <p class="text-white">
                            Celebration of World Soil Day on 5th December 2024 at Department of
                            Agriculture Bengaluru.
                        </p> -->

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="news-box-items">
                    <div class="news-image">
                        <img src="<?= $MSG['news_5']; ?>" alt="img">

                    </div>
                    <div class="news-content text-white">
                        <h3><a href="milletrun.php" class="text-white"><?= $MSG['pre_events3']; ?></a></h3>
                        <!-- <p class="text-white"> Participation in ISSF – 2024 on 10-11, November 2024 held at
                            Bhubaneshwar, Odisha.</p> -->

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="news-box-items">
                    <div class="news-image">
                        <img src="<?= $MSG['news_3']; ?>" alt="img">

                    </div>
                    <div class="news-content">

                        <h3><a href="districtlevelfarmersfestival.php"
                                class="text-white"><?= $MSG['pre_events6']; ?></a></h3>
                        <!-- <p class="text-white">
                            Organic World Congress held in Taiwan from November 29-December 4th 2024.
                        </p> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- gallery Section Start -->
<!-- <section class="project-section-2 section-padding1 fix mb-0">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp"><img src="frontend/img/sub-title.svg" alt="img">
                <?= $MSG['footer_title']; ?></span>
            <h2 class="text-anim"> <?= $MSG['footer_title']; ?></h2>
        </div>
    </div>
    <div class="project-wrapper-2">
        <div class="swiper project-slide-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="project-image-items-2">
                        <img src="frontend/img/millet1.jpg" alt="img">
                        <div class="content">
                            <span>Agriculture beyond cultivation and empowering farmers</span>
                            <h3><a href="project-details.html">
                                    World Soil Day
                                </a></h3>
                            
                            <a href="project-details.html" class="circle-icon">
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-image-items-2">
                        <img src="frontend/img/millet2.jpg" alt="img">
                        <div class="content">
                            <span>Agriculture beyond cultivation and empowering farmers</span>
                            <h3><a href="project-details.html">World Soil Day</a></h3>
                            
                            <a href="project-details.html" class="circle-icon">
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project-image-items-2">
                        <img src="frontend/img/millet3.jpg" alt="img">
                        <div class="content">
                            <span>Agriculture beyond cultivation and empowering farmers</span>
                            <h3><a href="project-details.html">
                                    Organic World Congress
                                </a></h3>
                            
                            <a href="project-details.html" class="circle-icon">
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-dot">
                <div class="dot2"></div>
            </div>
        </div>
    </div>
</section> -->
<!-- Faq Section Start -->
<section class="faq-section-5 fix">
    <div class="shape-1 float-bob-y">
        <img src="frontend/img/home-5/faq-shape.png" alt="img">
    </div>
    <div class="container">
        <div class="faq-wrapper-2">
            <!-- FAQ Heading Centered -->
            <div class="section-title text-center mb-5" style="padding-top: 0 !important;">
                <span class="wow fadeInUp">
                    <img src="frontend/img/sub-title.svg" alt="Sub Title"> <?= $MSG['faq_title']; ?>
                </span>
                <h2><?= $MSG['faq_subtitle']; ?></h2>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="faq-page-items mt-0">
                        <ul class="accordion-box">
                            <!-- FAQ Block 1 -->
                            <li class="accordion block active-block wow fadeInUp">
                                <div class="acc-btn active">
                                    <?= $MSG['faq_q1']; ?>
                                    <div class="icon fa-solid fa-chevron-down"></div>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">
                                            <?= $MSG['faq_a1']; ?>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- FAQ Block 2 -->
                            <li class="accordion block wow fadeInUp" data-wow-delay=".2s">
                                <div class="acc-btn">
                                    <?= $MSG['faq_q2']; ?>
                                    <div class="icon fa-solid fa-chevron-down"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <?= $MSG['faq_a2']; ?>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- FAQ Block 3 -->
                            <li class="accordion block wow fadeInUp" data-wow-delay=".4s">
                                <div class="acc-btn">
                                    <?= $MSG['faq_q3']; ?>
                                    <div class="icon fa-solid fa-chevron-down"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <?= $MSG['faq_a3']; ?>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- FAQ Block 4 -->
                            <li class="accordion block wow fadeInUp" data-wow-delay=".6s">
                                <div class="acc-btn">
                                    <?= $MSG['faq_q4']; ?>
                                    <div class="icon fa-solid fa-chevron-down"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <?= $MSG['faq_a4']; ?>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- FAQ Block 5 -->
                            <li class="accordion block wow fadeInUp" data-wow-delay=".8s">
                                <div class="acc-btn">
                                    <?= $MSG['faq_q5']; ?>
                                    <div class="icon fa-solid fa-chevron-down"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <?= $MSG['faq_a5']; ?>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- brand Section Start -->
<div class="brand-section-3 mt-5 section-padding pt-0 mb-0">
    <div class="row align-items-center g-4 justify-content-between">

        <div class="col-12">

            <div class="top-text text-center mb-0 wow fadeInUp">
                <p></p>
            </div>
            <div class="swiper brand-slide3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-image text-center">
                            <img src="<?= $MSG['logo_primary']; ?>" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image text-center">
                            <img src="<?= $MSG['logo_govt_kar']; ?>" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image text-center">
                            <img src="<?= $MSG['logo_ksda']; ?>" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image text-center">
                            <img src="<?= $MSG['logo_secondary']; ?>" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image text-center">
                            <img src="<?= $MSG['logo_kssc']; ?>" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image text-center">
                            <img src="<?= $MSG['logo_kappec']; ?>" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image text-center">
                            <img src="<?= $MSG['logo_nfsm']; ?>" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image text-center">
                            <img src="<?= $MSG['logo_giz']; ?>" alt="img">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleContent() {
        const content = document.getElementById("moreContent");
        const btn = document.getElementById("readMoreBtn");

        if (content.style.display === "none" || content.style.display === "") {
            content.style.display = "block";
            btn.innerText = "Read Less";
        } else {
            content.style.display = "none";
            btn.innerText = "Read More";
        }
    }
</script>
<script>
    $('.video-popup').magnificPopup({
        type: 'iframe',
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                }
            }
        }
    });
</script>

<script>
    var swiper = new Swiper(".brand-slide", {
        loop: true,
        spaceBetween: 20,

        speed: 3000,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
            pauseOnMouseEnter: false
        },

        allowTouchMove: true,
        freeMode: true,
        freeModeMomentum: false,

        breakpoints: {
            320: {
                slidesPerView: 1.5,
                spaceBetween: 15,
            },
            576: {
                slidesPerView: 2.5,
            },
            768: {
                slidesPerView: 3.5,
                autoplay: false
            },
            992: {
                slidesPerView: 5,
                autoplay: false
            }
        }
    });
</script>




<!-- Footer Section Start -->



<?php require_once 'inc/footer.php'; ?>