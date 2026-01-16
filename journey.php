<?php require_once 'lang/lang.php'; ?>
<?php require_once 'inc/header.php'; ?>

<!-- About Section Start -->
<style>
    .section-journey{
        background-color:#8b5a2b;
        margin-top:15px !important;
    }
    .section-journey .section-title span,
    .section-journey h2.text-anim, 
    .section-journey p.wow.fadeInUp{
       color:#fff;
    }
    .jour_con{
      text-align: justify !important;
    }
    
</style>

  <!-- Service Section Start -->
        <section class="service-section section-padding section-journey mb-5">
            <div class="service-left-shape d-none d-xxl-block float-bob-y">
                <img src="../ITF/frontend/img/home-1/service/left-shape.png" alt="img">
            </div>
            <div class="service-right-shape d-none d-xxl-block float-bob-x">
                <img src="../ITF/frontend/img/home-1/service/right-shape.png" alt="img">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="wow fadeInUp"><img src="../ITF/frontend/img/sub-title.svg" alt="img"> <?= $MSG['our_journey']; ?></span>
                    <h2 class="text-white"><?= $MSG['itf_journey']; ?></h2>
                    <p class="wow fadeInUp more-cont  jour_con" data-wow-delay=".2s" >
                      <?= $MSG['itf_journey_para']; ?></p>
                </div>
                <div class="service-wrapper">
                     <ul class="nav">
                        <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
                            <a href="#thumb1" data-bs-toggle="tab" class="nav-link active">
                           <?= $MSG['itf_journey_2017']; ?>
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".4s">
                            <a href="#thumb2" data-bs-toggle="tab" class="nav-link">
                               <?= $MSG['itf_journey_2018']; ?>
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".6s">
                            <a href="#thumb3" data-bs-toggle="tab" class="nav-link">
                          <?= $MSG['itf_journey_2019']; ?>
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".8s">
                            <a href="#thumb4" data-bs-toggle="tab" class="nav-link">
                           <?= $MSG['itf_journey_2023']; ?>
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".8s">
                            <a href="#thumb5" data-bs-toggle="tab" class="nav-link ">
                           <?= $MSG['itf_journey_2024']; ?>
                            </a>
                        </li>
                         <li class="nav-item wow fadeInUp" data-wow-delay=".8s">
                            <a href="#thumb6" data-bs-toggle="tab" class="nav-link">
                           <?= $MSG['itf_journey_2025']; ?>
                            </a>
                        </li> 
                    </ul>
                     <div class="tab-content">
                        <div id="thumb1" class="tab-pane fade show active">
                            <div class="row align-items-center g-4">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="service-content-area">
                                        <div class="icon">
                                            <i class="flaticon-agriculture"></i>
                                        </div>
                                        <div class="content">
                                            <h3><a href="service-details.html"><?= $MSG['organics_and_millets']; ?></a></h3>
                                            <p><?= $MSG['itf_journey_2017_content']; ?></p>
                                            <!-- <a href="service-details.html" class="theme-btn">
                                                View Details <i class="far fa-arrow-right"></i>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="service-image">
                                        <img src="../ITF/frontend/img/ITF-2017.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="thumb2" class="tab-pane fade">
                            <div class="row align-items-center g-4">
                                <div class="col-lg-6">
                                    <div class="service-content-area">
                                        <div class="icon">
                                            <i class="flaticon-agriculture"></i>
                                        </div>
                                        <div class="content">
                                            <h3><a href="service-details.html"><?= $MSG['organics_and_millets']; ?></a></h3>
                                            <p><?= $MSG['itf_journey_2018_content']; ?></p>
                                            <!-- <a href="service-details.html" class="theme-btn">
                                                View Details <i class="far fa-arrow-right"></i>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-image">
                                        <img src="../ITF/frontend/img/ITF-2108.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="thumb3" class="tab-pane fade">
                             <div class="row align-items-center g-4">
                                <div class="col-lg-6">
                                    <div class="service-content-area">
                                        <div class="icon">
                                            <i class="flaticon-agriculture"></i>
                                        </div>
                                        <div class="content">
                                            <h3><a href="service-details.html"><?= $MSG['organics_and_millets']; ?></a></h3>
                                            <p><?= $MSG['itf_journey_2019_content']; ?></p>
                                            <!-- <a href="service-details.html" class="theme-btn">
                                                View Details <i class="far fa-arrow-right"></i>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-image">
                                        <img src="../ITF/frontend/img/history19.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="thumb4" class="tab-pane fade">
                            <div class="row align-items-center g-4">
                                <div class="col-lg-6">
                                    <div class="service-content-area">
                                        <div class="icon">
                                            <i class="flaticon-agriculture"></i>
                                        </div>
                                        <div class="content">
                                            <h3><a href="https://itf2023.organics-millets.in/"><?= $MSG['millets_and_organics']; ?></a></h3>
                                           <p><?= $MSG['itf_journey_2023_content']; ?></p>
                                            <!-- <a href="service-details.html" class="theme-btn">
                                                View Details <i class="far fa-arrow-right"></i>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-image">
                                        <img src="../ITF/frontend/img/ITF-2023.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="thumb5" class="tab-pane fade">
                            <div class="row align-items-center g-4">
                                <div class="col-lg-6">
                                    <div class="service-content-area">
                                        <div class="icon">
                                            <i class="flaticon-agriculture"></i>
                                        </div>
                                        <div class="content">
                                            <h3><a href="https://itf2024.organics-millets.in/"><?= $MSG['millets_and_organics']; ?></a></h3>
                                            <p><?= $MSG['itf_journey_2024_content']; ?></p>
                                            <!-- <a href="service-details.html" class="theme-btn">
                                                View Details <i class="far fa-arrow-right"></i>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-image">
                                        <img src="../ITF/frontend/img/ITF-2024.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="thumb6" class="tab-pane fade">
                            <div class="row align-items-center g-4">
                                <div class="col-lg-6">
                                    <div class="service-content-area">
                                        <div class="icon">
                                            <i class="flaticon-agriculture"></i>
                                        </div>
                                        <div class="content">
                                            <h3><a href="service-details.html"><?= $MSG['organics_and_millets']; ?></a></h3>
                                            <p><?= $MSG['itf_journey_2025_content']; ?></p>
                                            <!-- <a href="service-details.html" class="theme-btn">
                                                View Details <i class="far fa-arrow-right"></i>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-image">
                                        <img src="../ITF/frontend/img/day1img.png" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php require_once 'inc/footer.php'; ?>