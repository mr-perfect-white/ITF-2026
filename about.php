<?php require_once 'lang/lang.php'; ?>
<?php require_once 'inc/header.php'; ?>
<style>
    .breadcrumb-wrapper::before {
        background: none;
    }

    .shapes-row {
        display: flex;
        align-items: center;
        gap: 500px;

    }

    .shapes-row img {
        display: block;
        margin: 0;
        padding: 0;
    }

    .about-wrapper .about-right-items .about-top-box {
        padding-bottom: 1px;
        padding: 40px 25px;
    }

    .about-wrapper {
        border-bottom: 0.1px dashed #5B8C51 !important;
        padding: 0px;
    }

    .organic-section {
        padding: 80px 0px;
    }

    .organic-text-content p {
        font-size: 18px;
        text-align: justify;
         line-height: 30px;

    }
    .organic-text-content ul li {
    list-style: disc;
    line-height: 30px;
    margin-bottom: 15px;
    font-size: 18px;
     text-align: justify;
}
.organic-text-content ul {
    padding-left: 32px;
    padding-top: 20px;
}

 /* KAR Map SECTION  */
.karnataka-section {
    position: relative;
    background: #f3f7f1;
    padding: 80px 0;
    overflow: hidden;
}


.ks-shape {
    position: absolute;
    z-index: 1;
    pointer-events: none;
    opacity: 0.8;
}

.ks-shape-1 {
    top: 5%;
    left: 2%;
}

.ks-shape-2 {
    top: 15%;
    right: 3%;
}

.ks-shape-3 {
    bottom: 8%;
    left: 10%;
}

@media (max-width: 767px) {
    .ks-shape {
        display: none;
    }
}

.karnataka-container {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}


.karnataka-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 50px;
}

.karnataka-text h2 {
    font-size: 40px;
    line-height: 1.2;
    font-weight: 700;
    color: #123b1c;
    margin-bottom: 25px;
}

.karnataka-text p {
    font-size: 20px;
    line-height: 1.7;
    color: #222;
    margin-bottom: 15px;
}

.karnataka-image {
    display: flex;
    align-items: center;
    justify-content: center;
}

.karnataka-image img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
    display: block;
}

@media (max-width: 767px) {

    .karnataka-grid {
        grid-template-columns: 1fr;
    }

    .karnataka-image {
        order: -1;
        margin-bottom: 30px;
    }

    .karnataka-text h2 {
        font-size: 26px;
    }

    .karnataka-text p {
        font-size: 17px;
    }
}
@keyframes floatY {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(15px); }
}

.ks-shape {
    animation: floatY 6s ease-in-out infinite;
}

</style>
<!-- Breadcrumb Section Start -->
<section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(frontend/img/aboutusbanner.jpg);">
    <div class="shape-1 float-bob-y">
        <img src="frontend/img/inner-page/shape-1.png" alt="img">
    </div>
    <div class="shape-2 float-bob-x">
        <img src="frontend/img/inner-page/shape-2.png" alt="img">
    </div>
    <div class="container">
        <div class="page-heading">
            <ul class="breadcrumb-list wow fadeInUp" style="color: black !important;">
                <li>Home</li>
                <li>//</li>
                <li>About Us</li>
            </ul>
            <h1 class="breadcrumb-title text-anim">About Us</h1>
        </div>
    </div>
</section>

<!-- About Section  -->
<section class="about-section section-padding fix pt-10">
    <div class="container">
        <div class="about-wrapper">
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="about-left-content">
                        <div class="section-title mb-0">
                            <!-- <span class="wow fadeInUp"><img src="frontend/img/sub-title.svg" alt="img">Our Theme</span> -->
                            <h2><?= $MSG['header_title']; ?></em></h2>
                        </div>
                        <div class="shapes-row">
                            <div class="shape-3 d-none d-xxl-block float-bob-x">
                                <img src="frontend/img/home-5/footer/shape-2.png" alt="img">
                            </div>
                            <div class="shape-1 d-none d-xxl-block float-bob-x">
                                <img src="frontend/img/home-5/footer/shape-4.png" alt="img">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-right-items">
                        <div class="about-top-box wow fadeInUp" data-wow-delay=".3s">
                            <p><?= $MSG['ab_expectedvisitors']; ?></p>
                            <h2><span class="odometer" data-count="300,000">00</span>+</h2>
                            <p class="text">
                                <?= $MSG['ab_empowering']; ?></p>
                        </div>
                        <div class="about-image wow fadeInUp" data-wow-delay=".5s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About us -->
<section class="organic-section section-padding fix pt-0">
    <div class="container">
        <div class="organic-wrapper">

            <!-- HEADING CENTER -->
            <div class="row">
                <div class="col-12">
                    <div class="organic-center-content text-center">
                        <div class="section-title mb-4">
                            <span class="wow fadeInUp">
                                <img src="frontend/img/sub-title.svg" alt="img"><?= $MSG['an_ourinitiatives']; ?>
                            </span>
                            <h2 class=""> <?= $MSG['ab_promotionalinitiata']; ?> 
                               
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TEXT TWO COLUMNS -->
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="organic-text-content">
                        <p>
                            <?= $MSG['ab_promotions']; ?> </p>

                        <p>
                            <?= $MSG['ab_promotions1']; ?> </p>
                        <p>
                            <?= $MSG['ab_promation_subtitle']; ?> </p>
                        <ul>
                            <li> <?= $MSG['ab_promation_li_1']; ?></li>
                            <li> <?= $MSG['ab_promation_li_2']; ?></li>
                            <li> <?= $MSG['ab_promation_li_3']; ?></li>
                            <li> <?= $MSG['ab_promation_li_4']; ?></li>
                            <li> <?= $MSG['ab_promation_li_5']; ?></li>
                            <li> <?= $MSG['ab_promation_li_6']; ?></li>
                            <li> <?= $MSG['ab_promation_li_7']; ?></li>
                            <li> <?= $MSG['ab_promation_li_8']; ?></li>
                          
                            
                        </ul>

                          <p>
                           <?= $MSG['ab_promation_last']; ?> </p>
                        
                    </div>
                </div>

              
            </div>

        </div>
    </div>
</section>
<!-- karnataka Section  -->
<section class="contact-section-3 section-padding fix section-map-bg">
    <div class="shape-1 d-none d-xl-block float-bob-y">
        <img src="frontend/img/home-3/contact/shape-1.png" alt="img">
    </div>
    <div class="shape-2 d-none d-xl-block float-bob-x">
        <img src="frontend/img/home-3/contact/shape-2.png" alt="img">
    </div>
    <div class="shape-3 d-none d-xl-block float-bob-y">
        <img src="frontend/img/home-3/contact/shape-3.png" alt="img">
    </div>
    <div class="container">
        <div class="contact-wrapper-3">
            <div class="row align-items-center g-10">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="section-title mb-0">
                            <span class="wow fadeInUp"></span>
                            <h2 class="text-white">
                               <?= $MSG['agri_title1']; ?>
                            </h2>
                        </div>
                        <p class="agri-text">
                            <p><?= $MSG['agri_stats']; ?></p>
                            <p>
                           <?= $MSG['agri_area']; ?></p>
                            <p>
                            <?= $MSG['agri_irrigation']; ?></p>
                            <p>
                            <?= $MSG['agri_climate']; ?></p>
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 ">
                    
                    <div class="contact-image d-none d-lg-block" style="padding-bottom: 100px;">
                        <img src="frontend/img/aboutkar.png" alt="img">
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Achievements Section  -->
<section class="news-section-4 section-padding fix pt-10">
    <div class="news-shape-1 d-none d-xxl-block float-bob-x">
        <img src="frontend/img/home-4/news/shape-1.png" alt="img">
    </div>
    <div class="news-shape-2 d-none d-xxl-block float-bob-y">
        <img src="frontend/img/home-4/news/shape-2.png" alt="img">
    </div>
    
    <div class="container">
        <div class="organic-center-content text-center">
            <div class="section-title">
                <span class="wow fadeInUp"><img src="frontend/img/sub-title.svg" alt="img">Our Achievements</span>
                <h2 class=""><?= $MSG['ab_achievements1']; ?> </h2>
            </div>
           
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="news-image-box-items-4">
                    <div class="news-image">
                        <img src="frontend/img/awd-1.jpg" alt="img">
                        
                    </div>
                    <div class="content">
                        <ul class="post-date">
                            

                        </ul>
                        <p class="fw-bold fs-5"><a href="#"><?= $MSG['ab_achievements_title_1']; ?></a></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="news-image-box-items-4">
                    <div class="news-image">
                        <img src="frontend/img/awd-2.png" alt="img">
                       
                    </div>
                    <div class="content">
                        <ul class="post-date">
                          

                        </ul>
                        <p class="fw-bold fs-5"><a href="#"><?= $MSG['ab_achievements_title_2']; ?></a></p>
                       
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="news-image-box-items-4">
                    <div class="news-image">
                        <img src="frontend/img/awd-3.png" alt="img">
                       
                    </div>
                    <div class="content">
                        <ul class="post-date">
                            
                        </ul>
                        <p class="fw-bold fs-5"><a href="#"><?= $MSG['ab_achievements_title_3']; ?></a></p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'inc/footer.php'; ?>