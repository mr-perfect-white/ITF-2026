<?php require_once 'lang/lang.php'; ?>
<?php require_once 'inc/header.php'; ?>

<style>
/* ================= TAB BUTTON ================= */

.tab-btn {
    cursor: pointer;
    border: 1px solid #b33a31;
    border-radius: 10px;
    padding: 10px;
    transition: all 0.3s ease;
    width: 100%;
    background: white;
}

.tab-btn:hover {
    background-color: #8b2a23;
    color: white;
}

.tab-btn.active {
    background-color: #b33a31;
    color: white;
    border: 1px solid white;
}


/* ================= TAB CONTAINER ================= */

.tab-container {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

/* Mobile Horizontal */
@media (max-width: 768px) {

    .tab-container {
        flex-direction: row;
        overflow-x: auto;
        white-space: nowrap;
        padding-bottom: 10px;
    }

    .tab-btn {
        min-width: 120px;
        flex-shrink: 0;
    }
}


/* ================= VIDEO GRID ================= */

.media-box img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-radius: 8px;
}


/* ================= SCROLL ================= */

.district-scroll {
    max-height: 400px;
    overflow-y: auto;
}


/* ================= VIDEO MODAL ================= */

.video-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    inset: 0;
    background: rgba(0, 0, 0, 0.85);
    justify-content: center;
    align-items: center;
}

.video-modal-content {
    position: relative;
    width: 90%;
    max-width: 850px;
    background: #000;
    border-radius: 12px;
    padding: 12px;
}

.video-modal iframe {
    width: 100%;
    height: 480px;
    border-radius: 8px;
}

.video-close {
    position: absolute;
    top: -12px;
    right: -12px;
    background: red;
    color: white;
    border: none;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    font-size: 18px;
    cursor: pointer;
}


/* ================= PLAY ICON ================= */

.media-box {
    position: relative;
    cursor: pointer;
}

.play-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 60px;
    height: 60px;
    background: rgba(0, 0, 0, 0.6);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    pointer-events: none;
}

.play-icon::before {
    content: "";
    border-style: solid;
    border-width: 12px 0 12px 20px;
    border-color: transparent transparent transparent white;
    margin-left: 4px;
}

.media-box:hover .play-icon {
    background: rgba(179, 58, 49, 0.9);
}

.image-box img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
}
</style>


<!-- ================= BANNER ================= -->

<section class="breadcrumb-wrapper bg-cover fix hero-height"
    style="background-image: url(<?= $MSG['common_banner']; ?>);">

    <div class="container">
        <div class="page-heading">
            <h1 class="breadcrumb-title text-white">
                Promotional Videos
            </h1>
        </div>
    </div>

</section>


<!-- ================= MAIN ================= -->

<div class="container mt-5 mb-5">

    <div class="row">

        <!-- ===== LEFT TABS ===== -->

        <div class="col-md-3">

            <div class="district-scroll tab-container">

                <button class="tab-btn active" onclick="showDistrict('district1', this)">
                    Videos
                </button>

                <button class="tab-btn" onclick="showDistrict('district2', this)">
                    Promotional
                </button>

                <!-- <button class="tab-btn"
                    onclick="showDistrict('district3', this)">
                    Belagavi
                </button> -->

            </div>

        </div>


        <!-- ===== RIGHT CONTENT ===== -->

        <div class="col-md-9">


            <!-- ===== District 1 ===== -->

            <div id="district1" class="district-content">

                <div class="row g-3">

                    <!-- VIDEO 1 -->

                    <div class="col-md-4 media-box" onclick="openVideo('https://www.youtube.com/watch?v=u45CQh8arlQ')">

                        <img src="frontend/img/hqdefault.jpg">

                        <div class="play-icon"></div>

                    </div>


                    <!-- VIDEO 2 -->

                    <div class="col-md-4 media-box" onclick="openVideo('https://www.youtube.com/watch?v=z_wennWJp5k')">

                        <img src="frontend/img/hqdefault1.jpg">

                        <div class="play-icon"></div>

                    </div>


                </div>

            </div>


            <!-- ===== District 2 ===== -->

            <div id="district2" class="district-content d-none">

                <div class="row g-3">
                    <div class="col-md-4 image-box"><img src="frontend/img/auto/promotinal.jpeg"></div>
                    <div class="col-md-4 image-box"><img src="frontend/img/auto/promotinal1.jpeg"></div>
                    <div class="col-md-4 image-box"><img src="frontend/img/auto/promotinal2.jpeg"></div>
                    <div class="col-md-4 image-box"><img src="frontend/img/auto/promotinal3.jpeg"></div>
                    <div class="col-md-4 image-box"><img src="frontend/img/auto/promotinal4.jpeg"></div>
                    <div class="col-md-4 image-box"><img src="frontend/img/auto/promotinal5.jpeg"></div>
                    <div class="col-md-4 image-box"><img src="frontend/img/auto/promotinal6.jpeg"></div>
                    <div class="col-md-4 image-box"><img src="frontend/img/auto/promotinal7.jpeg"></div>
                    <div class="col-md-4 image-box"><img src="frontend/img/auto/promotinal8.jpeg"></div>
                    <div class="col-md-4 image-box"><img src="frontend/img/auto/promotinal9.jpeg"></div>
                </div>

            </div>


            <!-- ===== District 3 ===== -->

            <!-- <div id="district3"
                 class="district-content d-none">

                <div class="row g-3">


                    <div class="col-md-4 media-box"
                         onclick="openVideo('https://www.youtube.com/watch?v=z_wennWJp5k')">

                        <img src="https://img.youtube.com/vi/l482T0yNkeo/hqdefault.jpg">

                        <div class="play-icon"></div>

                    </div>


                </div>

            </div> -->


        </div>

    </div>

</div>


<!-- ================= VIDEO MODAL ================= -->

<div id="videoModal" class="video-modal">

    <div class="video-modal-content">

        <button class="video-close" onclick="closeVideo()">×</button>

        <iframe id="popupFrame" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
        </iframe>

    </div>

</div>


<!-- ================= JAVASCRIPT ================= -->

<script>
/* TAB SWITCH */

function showDistrict(id, btn) {

    document.querySelectorAll('.district-content')
        .forEach(div => div.classList.add('d-none'));

    document.querySelectorAll('.tab-btn')
        .forEach(b => b.classList.remove('active'));

    document.getElementById(id).classList.remove('d-none');

    btn.classList.add('active');
}


/* OPEN YOUTUBE VIDEO */

function openVideo(url) {

    let modal = document.getElementById('videoModal');
    let frame = document.getElementById('popupFrame');

    let videoId = "";

    if (url.includes("youtube.com")) {
        videoId = url.split("v=")[1].split("&")[0];
    } else if (url.includes("youtu.be")) {
        videoId = url.split("youtu.be/")[1];
    }

    let embed = "https://www.youtube.com/embed/" +
        videoId + "?autoplay=1";

    frame.src = embed;

    modal.style.display = "flex";
}


/* CLOSE VIDEO */

function closeVideo() {

    let modal = document.getElementById('videoModal');
    let frame = document.getElementById('popupFrame');

    frame.src = "";

    modal.style.display = "none";
}


/* CLICK OUTSIDE */

document.getElementById('videoModal')
    .addEventListener('click', function(e) {

        if (e.target === this) {
            closeVideo();
        }

    });


/* ESC KEY */

document.addEventListener('keydown', function(e) {

    if (e.key === "Escape") {
        closeVideo();
    }

});
</script>


<?php require_once 'inc/footer.php'; ?>