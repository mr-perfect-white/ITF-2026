<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="modinatheme">
    <meta name="description" content="Agron - Agriculture & Organic Farm Html Template">
    <!-- ======== Page title ============ -->
    <title>Agriculture beyond Production-"Empowering farmers"</title>
    <!--<< Favicon >>-->
    <link rel="shortcut icon" href="<?= $MSG['itf_Banner']; ?>">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="../ITF/frontend/css/bootstrap.min.css">
    <!--<< Font Awesome.css >>-->
    <link rel="stylesheet" href="../ITF/frontend/css/font-awesome.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="../ITF/frontend/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="../ITF/frontend/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="../ITF/frontend/css/meanmenu.css">
    <!--<< Odometer.css >>-->
    <link rel="stylesheet" href="../ITF/frontend/css/odometer.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="../ITF/frontend/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="../ITF/frontend/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="../ITF/frontend/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <style>
    .mb_btn {
        display: none;
    }

    @media (max-width: 575px) {

        .nice-select.single-select.w-100 {
            display: block !important;
            z-index: 999;
        }

        .mb_btn {
            display: block !important;
        }

        .offcanvas__logo {
            margin-left: -23px;
        }

        .nice-select:after {
            border-bottom: 2px solid #6E6E6E;
            border-right: 2px solid #6E6E6E;
            content: '';
            display: block;
            height: 6px;
            margin-top: -20px;
            pointer-events: none;
            position: absolute;
            right: 16px;
            top: 48%;
            -webkit-transform-origin: 66% 66%;
            -ms-transform-origin: 66% 66%;
            transform-origin: 66% 66%;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-transition: all 0.15s ease-in-out;
            transition: all 0.15s ease-in-out;
            width: 6px;
        }

    }
    </style>

</head>

<body class="counter-scroll">
    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span class="letters-loading" data-text-preloader="I">I</span>
                <span class="letters-loading" data-text-preloader="T">T</span>
                <span class="letters-loading" data-text-preloader="F">F</span>
            </div>

            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-solid fa-arrow-up"></i>

    </button>
    <!-- MouseCursor Start -->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"></div>
    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.php">
                                <img class="brand-logo" src="<?= $MSG['itf_Banner']; ?>" alt="img"
                                    style="width: 200px;">
                            </a>

                        </div>
                        <div class="offcanvas__logo   mb_btn">

                            <!-- <form method="post" action="set-language.php">
    <?php
    $currentLang = $_SESSION['lang'] ?? 'en';

    if ($currentLang === 'en') {
        $nextLang = 'ka';
        $btnText  = 'ಕನ್ನಡ';
    } else {
        $nextLang = 'en';
        $btnText  = 'English';
    }
    ?>

    <button type="submit"
            name="lang"
            value="<?= $nextLang ?>"
            class="lang-btn">
        <?= $btnText ?>
    </button>
</form> -->


                        </div>

                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <!-- <h3 class="offcanvas-title">Hello There!</h3> -->
                    <p class="fw-bold" style="font-size: 22px;"> <?= $MSG['footer_title']; ?></p>
                    <div class="mobile-menu fix mt-15"></div>
                    <div class="social-icon d-flex align-items-center">
                        <a href="javascript:void(0)">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="javascript:void(0)">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="javascript:void(0)">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="javascript:void(0)">
                            <i class="fa-brands fa-instagram"></i>


                        </a>

                        <a href="javascript:void(0)">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <div class="offcanvas__contact">
                        <h3><?= $MSG['contact']; ?></h3>
                        <ul class="contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>

                                </div>
                                <div class="content">
                                    <p><?= $MSG['foot_phone']; ?></p>
                                    <h4>
                                        <a href="tel:+080-22074111">
                                            080-22074111
                                        </a>
                                    </h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>

                                </div>
                                <div class="content">
                                    <p><?= $MSG['foot_email_us']; ?></p>
                                    <h4>
                                        <a href="mailto:organiccell@gmail.com">
                                            organiccell@gmail.com
                                        </a>
                                    </h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon" style="width: 84px;">
                                    <i class="fa-solid fa-location-dot"></i>

                                </div>
                                <div class="content">
                                    <p><?= $MSG['foot_location']; ?></p>
                                    <h4>
                                        <?= $MSG['foot_addressitf']; ?>
                                    </h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="theme-btn">
                        <?= $MSG['departmentlogin']; ?>
                        <i class="fa-solid fa-arrow-right"></i>

                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <!-- Header Top Start -->
    <div class="header-top-section">
        <div class="container">
            <div class="header-top-wrapper">
                <ul class="header-contact-list">
                    <li>
                        <i class="fa-solid fa-envelope theme2"></i>

                        <a href="mailto:organiccell@gmail.com">
                            organiccell@gmail.com
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone theme2"></i>

                        <a href="tel:+ 080-22074111">
                            + 080-22074111
                        </a>
                    </li>
                </ul>

                <div class="head-right">
                    <div class="flag-wrap">

                        <!-- <select class="single-select w-100">-->
                        <!--    <option>EN</option>-->
                        <!--    <option>KA</option>-->

                        <!--</select>-->
                        <form method="post" action="set-language.php" class="lang-form">
                            <?php
    // Current language from session
    $currentLang = $_SESSION['lang'] ?? 'en';
    
    // Determine which language to switch to
    if ($currentLang == 'en') {
        $toggleLang = 'ka';
        $buttonText = 'ಕನ್ನಡ'; // Kannada text
    } else {
        $toggleLang = 'en';
        $buttonText = 'English'; // English text
    }
    ?>
                            <button type="submit" name="lang" value="<?= $toggleLang ?>" class="lang-toggle-btn">
                                <?= $buttonText ?>
                            </button>
                        </form>


                    </div>
                    <div class="line-shape"></div>
                    <div class="social-icon">
                        <a href="https://www.facebook.com/MilletsOrganics">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://x.com/organicmillets">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="https://www.youtube.com/@organicmilletsitf">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://www.instagram.com/organicsmillets2023/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="javascript:void(0)">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <a href="index.php" class="top-logo">
                        <img class="brand-logo" src="<?= $MSG['itf_Banner']; ?>" alt="img">
                    </a>

                    <form method="post" action="set-language.php" class="lang-sticky-btn">
                        <?php
    $currentLang = $_SESSION['lang'] ?? 'en';

    if ($currentLang === 'en') {
        $nextLang = 'ka';
        $btnText  = 'ಕನ್ನಡ';
    } else {
        $nextLang = 'en';
        $btnText  = 'English';
    }
    ?>
                        <button type="submit" name="lang" value="<?= $nextLang ?>">
                            <?= $btnText ?>
                        </button>
                    </form>

                    <!--<div>-->
                    <!--    <form method="post" class="mb_btn" action="set-language.php">-->
                    <!--            <select class="single-select w-100" name="lang" onchange="this.form.submit()" style="display: none;">-->

                    <!--                    <option value="en" selected="">-->
                    <!--                        EN-->
                    <!--                    </option>-->

                    <!--                    <option value="ka">-->
                    <!--                        KA-->
                    <!--                    </option>-->

                    <!--                </select>-->
                    <!--            </form>-->
                    <!--</div>-->
                    <!-- <a href="index.php" class="header-logo">
                            <img src="../ITF/frontend/img/logo/black-logo.svg" alt="img">
                        </a> -->
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown menu-thumb">
                                        <a href="index.php">
                                            <?= $MSG['home']; ?>

                                        </a>
                                    </li>
                                    <li class="has-dropdown active d-xl-none">
                                        <a href="home.php" class="border-none">
                                            <?= $MSG['home']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <?= $MSG['about-itf']; ?>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="about.php"> <?= $MSG['itf']; ?></a>
                                            </li>
                                            <li>
                                                <a href="journey.php"> <?= $MSG['journey']; ?></a>
                                            </li>
                                            <!-- <li>
                                                    <a href="#">Event Schedule</a>
                                                </li> -->
                                            <!-- <li>
                                                    <a href="#">Farmer Workshop</a>
                                                </li> -->
                                            <!-- <li>
                                                    <a href="#">International Conference</a>
                                                </li> -->
                                            <!-- <li>
                                                    <a href="#">Exhibitors</a>
                                                </li> -->
                                            <!-- <li>
                                                    <a href="#">Karnataka Pavilion Participants</a>
                                                </li> -->
                                            <!-- <li>
                                                    <a href="#">B2B Buyers & Sellers</a>
                                                </li> -->
                                            <li>
                                                <a href="#"> <?= $MSG['tour']; ?></a>
                                                <ul class="submenu">
                                                    <li><a href="https://karnatakatourism.org/en/">
                                                            <?= $MSG['explorekarnataka']; ?></a></li>
                                                    <li><a
                                                            href="https://karnatakatourism.org/en/destinations/bengaluru/">
                                                            <?= $MSG['explorebengaluru']; ?></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="javascript:void(0)">
                                            <?= $MSG['registrations']; ?>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <ul class="submenu">

                                            <!-- <li>
                                                    <a href="#">B2B Buyer Registration</a>
                                                </li> -->
                                            <!-- <li>
                                                    <a href="#">B2B Seller Registration</a>
                                                </li> -->
                                            <!--<li>-->
                                            <!--    <a href="#"><?= $MSG['milletrunregistration']; ?></a>-->
                                            <!--</li>-->
                                            <!-- <li>
                                                    <a href="#">Farmer Workshop Registration</a>
                                                </li> -->
                                            <!--<li>-->
                                            <!--    <a href="#"><?= $MSG['publicregistration']; ?></a></a>-->
                                            <!--</li>-->
                                            <li>
                                                <a
                                                    href="https://itf2026.organics-millets.in/Exhibitionform.php"><?= $MSG['exhibitionstallbooking']; ?></a></a>
                                            </li>
                                            <!--<li>-->
                                            <!--    <a href="#"><?= $MSG['internationalconference']; ?></a></a>-->
                                            <!--</li>-->
                                            <!--<li>-->
                                            <!--    <a href="#"><?= $MSG['paidfoodstallbooking']; ?></a></a>-->
                                            <!--</li>-->
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0)">
                                            <?= $MSG['gallery']; ?>
                                            <!-- <i class="fas fa-chevron-down"></i> -->
                                        </a>
                                        <!-- <ul class="submenu">
                                                <li>
                                                    <a href="#">Images</a>
                                                </li>
                                                <li>
                                                    <a href="#">video</a>
                                                </li>
                                                <li>
                                                    <a href="#">Media Coverage</a>
                                                </li>
                                                <li>
                                                    <a href="#">Culinary Competition</a>
                                                </li>
                                                <li>
                                                    <a href="#">Promotional Videos</a>
                                                </li>
                                                <li>
                                                    <a href="#">District Activities</a>
                                                </li>
                                                <li>
                                                    <a href="#">Publications</a>
                                                </li>
                                                <li>
                                                    <a href="#">Event</a>
                                                </li>
                                            </ul> -->
                                    </li>
                                    <li>
                                        <a href="contact.php">
                                            <?= $MSG['contact']; ?>
                                            <!-- <i class="fas fa-chevron-down"></i> -->
                                        </a>
                                        <!-- <ul class="submenu">
                                                <li>
                                                    <a href="shop.php">Shop Page</a>
                                                </li>
                                                <li>
                                                    <a href="shop-details.php">Shop Details</a>
                                                </li>
                                                <li>
                                                    <a href="shop-cart.php">Shop Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.php">CheckOut</a>
                                                </li>
                                            </ul> -->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <a href="contact.php" class="theme-btn">
                            <?= $MSG['departmentlogin']; ?><i class="fa-solid fa-arrow-right"></i></a>


                        </a>
                        <div class="header__hamburger my-auto">
                            <div class="sidebar__toggle">
                                <div class="header-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>