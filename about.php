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
        line-height: 1.9;
        text-align: justify;

    }

    /*karmap section*/
    /* Increase paragraph size and readability */
    .agri-text {
        font-size: 25px;
        /* Increase text size */
        line-height: 1.7;
        /* Better spacing */
        font-weight: 500;
        /* Slightly bold */
        color: #2a2a2a;
        /* Rich readable color */
    }
.contact-content p {
    font-size: 25px;
    line-height: 1.7;
}
    /* Make columns visually balanced */
    .contact-wrapper-3 .row {
        align-items: stretch;
        /* equal visual height feel */
    }

    /* Make image visible fully and responsive */
    .contact-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        /* Shows full image without cutting */
    }
    .contact-wrapper-3 .row {
    align-items: stretch;
    
}

/* Force text column to fill height & center text vertically */
.contact-content {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;   /* middle alignment */
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
                            <span class="wow fadeInUp"><img src="frontend/img/sub-title.svg" alt="img">Our Theme</span>
                            <h2 class="text-anim">Agriculture beyond cultivation and empowering farmers</h2>
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
                            <p>Expected Visitor</p>
                            <h2><span class="odometer" data-count="200,000">00</span>+</h2>
                            <p class="text">
                                “Empowering farmers through technology, awareness, and support to redefine agriculture beyond traditional cultivation.” </p>
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
                                <img src="frontend/img/sub-title.svg" alt="img"> Our Theme
                            </span>
                            <h2 class="text-anim">
                                Promotional Initiatives of Government of Karnataka
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TEXT TWO COLUMNS -->
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="organic-text-content">
                        <p>
                            The Government of Karnataka, realising the importance of organic agriculture as early as in 2004 brought out a State policy on organic farming and has implemented several schemes and programmes under the policy to promote organic farming in the State.
                        </p>

                        <p>
                            Several programmes were initiated as organic farming addresses sustainable food production, soil health, nature conservation, rural development and mitigation of drought situation.
                        </p>
                        <p>
                            The Government of Karnataka, realising the importance of organic agriculture as early as in 2004 brought out a State policy on organic farming and has implemented several schemes and programmes under the policy to promote organic farming in the State.
                        </p>

                        <p>
                            Several programmes were initiated as organic farming addresses sustainable food production, soil health, nature conservation, rural development and mitigation of drought situation.
                        </p>
                        <p>
                            The Government of Karnataka, realising the importance of organic agriculture as early as in 2004 brought out a State policy on organic farming and has implemented several schemes and programmes under the policy to promote organic farming in the State.
                        </p>

                        <p>
                            Several programmes were initiated as organic farming addresses sustainable food production, soil health, nature conservation, rural development and mitigation of drought situation.
                        </p>
                        <p>The Government of Karnataka, realising the importance of organic agriculture as early as in 2004 brought out a State policy on organic farming.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="organic-text-content">
                        <p>
                            Market Based Specific Crop Organic Cluster Development Programme was implemented in certified Savayava Bhagya Yojane project areas with a focus on organic market based specific crops or commodity in order to provide bulk & continuous supply to meet the market demand. Further, focus was provided to develop proper linkages between producers and consumers by strengthening the supply chain mechanism on value chain mode by supporting activities related to production, collection, grading, value addition, processing, packing, brand development, whole sale and retail marketing of organic produce.

                            Presently, Karnataka ranks tenth in the country in terms of certified organic area and fourth in terms of total certified organic annual production (APEDA Statistics).

                            Savayava Siri Programme was implemented for the promotion of organic farming. Under the scheme, capacity building in organic farming is provided to the eligible farmers of the state, along with the development of model organic farms and organic seed production farms, desi vegetable seed production and local/forest fruit seeds/seedling production in the state agriculture/ horticultural universities.

                            The Scientific Validation of Zero Budget Natural Farming (ZBNF) System was implemented as experimental trials through the concerned State Agriculture/ Horticulture Universities in 10 Research Stations on Operational Research Project (ORP) mode. Also, Chief Ministers Natural Farming scheme was implemented through State’s Agri/horticultural Universities as farmers participatory research in 1000 acres farmer's fields under each of the five Agri/Horticultural Universities </p>



                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- karnataka Section  -->
<section class="contact-section-3 section-padding fix section-bg">
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
                            <h2 class="text-anim">
                                “Empowering Karnataka’s Agriculture: Managing Diversity, Drought & Growth Potential”
                            </h2>
                        </div>
                        <p class="agri-text">
                            <p>31 Districts, 236 Taluks, 850 Hoblies, 5965 Gram Panchayaths & 32499 Villages.</p>
                            <p>
                            Total area 190.50 lakh ha. Cultivable area 118.05 lakh ha. (64%).</p>
                            <p>
                            Only 33% area under irrigation. Most Drought Prone state after Rajasthan.</p>
                            <p>
                            10 Agro-climatic zones with rich crop diversity & 5 major soil types.</p>
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
        <div class="section-title-area">
            <div class="section-title">
                <span class="wow fadeInUp"><img src="frontend/img/sub-title.svg" alt="img">Our Achievements</span>
                <h2 class="text-anim">Our Achievements and Recognitions</h2>
            </div>
            <a href="news.html" class="theme-btn wow fadeInUp" data-wow-delay=".2s">
                View All <i class="far fa-arrow-right"></i>
            </a>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="news-image-box-items-4">
                    <div class="news-image">
                        <img src="frontend/img/resize-1767866168415690983aboutaward (1).png" alt="img">
                        <div class="post-date">
                            <h4>27</h4>
                            <p>MAY 2025</p>
                        </div>
                    </div>
                    <div class="content">
                        <ul class="post-date">
                            <li>
                                Agricultural
                            </li>

                        </ul>
                        <h3><a href="news-details.html">Award By Central Government.</a></h3>
                        <a href="news-details.html" class="link-btn">More Details
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="news-image-box-items-4">
                    <div class="news-image">
                        <img src="frontend/img/resize-1767866168415690983aboutaward (1).png" alt="img">
                        <div class="post-date">
                            <h4>29</h4>
                            <p>MAY 2025</p>
                        </div>
                    </div>
                    <div class="content">
                        <ul class="post-date">
                            <li>
                                Agricultural
                            </li>

                        </ul>
                        <h3><a href="news-details.html">Award By Central Government?</a></h3>
                        <a href="news-details.html" class="link-btn">More Details
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'inc/footer.php'; ?>