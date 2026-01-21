<?php require_once 'lang/lang.php'; ?>
<?php require_once 'inc/header.php'; ?>

<!-- About Section Start -->
<style>
 .tab-btn {
  cursor: pointer;
  border: 1px solid #b33a31;
  border-radius: 10px;
  padding: 10px;
  transition: all 0.3s ease; /* smooth hover effect */
}

/* Hover effect */
.tab-btn:hover {
  background-color: #8b2a23; /* brown color */
  color: white;
  border: 1px solid #8b2a23;
}

/* Active button */
.tab-btn.active {
  background-color: #b33a31;
  color: white;
  border: 1px solid white;
}

/* Images */
.image-box img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
}

.district-scroll {
  max-height: 500px;      
  overflow-y: auto;
  padding-right: 5px;
}

/* Optional: nicer scrollbar */
.district-scroll::-webkit-scrollbar {
  width: 6px;
}
.district-scroll::-webkit-scrollbar-thumb {
  background: #6c757d;
  border-radius: 10px;
}
/* Default (desktop): vertical list */
.district-scroll .list-group {
    display: flex;
    flex-direction: column;
}

/* Small screens: horizontal scroll */
@media (max-width: 768px) {
    .district-scroll {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .district-scroll .list-group {
        flex-direction: row;
        flex-wrap: nowrap;
        gap: 10px;
        padding-bottom: 10px;
    }

    .district-scroll .tab-btn {
        white-space: nowrap;
        flex: 0 0 auto;
        margin-bottom: 0 !important;
    }
}


</style>

  
<section class="breadcrumb-wrapper bg-cover fix hero-height" style="background-image: url(<?= $MSG['common_banner']; ?>);">
    <div class="shape-1 float-bob-y">
        <img src="frontend/img/inner-page/shape-1.png" alt="img">
    </div>
    <div class="shape-2 float-bob-x">
        <img src="frontend/img/inner-page/shape-2.png" alt="img">
    </div>
    <div class="container">
        <div class="page-heading">
            <ul class="breadcrumb-list wow fadeInUp tex">
                <li><?= $MSG['home']; ?></li>
                <li>//</li>
                <li><?= $MSG['pre_events6']; ?></li>
            </ul>
            <h1 class="breadcrumb-title text-white "><?= $MSG['pre_events6']; ?></h1>
        </div>
    </div>
</section>
<div class="container mt-5 mb-5">
  <div class="row">

    <!-- Vertical District Buttons -->
    <div class="col-md-3">
     <div class="district-scroll">
  <div class="list-group">
    <!-- <button class="tab-btn btn active mb-3" onclick="showDistrict('bagalkote', this)"><?= $MSG['bagalkote']; ?></button> -->
    <button class="tab-btn btn active mb-3" onclick="showDistrict('ballari', this)"><?= $MSG['ballari']; ?></button>
    <button class="tab-btn btn mb-3" onclick="showDistrict('belagavi', this)"><?= $MSG['belagavi']; ?></button>
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('bengaluru_south', this)"><?= $MSG['bengaluru_south']; ?></button> -->
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('bengaluru_urban', this)"><?= $MSG['bengaluru_urban']; ?></button> -->
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('bidar', this)"><?= $MSG['bidar']; ?></button> -->
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('bidar', this)">Bijapur</button> -->
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('chamarajanagar', this)"><?= $MSG['chamarajanagar']; ?></button> -->
    <button class="tab-btn btn mb-3" onclick="showDistrict('chikkaballapura', this)"><?= $MSG['chikkaballapura']; ?></button>
    <button class="tab-btn btn mb-3" onclick="showDistrict('chikkamagaluru', this)"><?= $MSG['chikkamagaluru']; ?></button>
    <button class="tab-btn btn mb-3" onclick="showDistrict('chitradurga', this)"><?= $MSG['chitradurga']; ?></button>
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('dakshina_kannada', this)"><?= $MSG['dakshina_kannada']; ?></button> -->
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('davanagere', this)"><?= $MSG['davanagere']; ?></button> -->
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('dharwad', this)"><?= $MSG['dharwad']; ?></button> -->
    <button class="tab-btn btn mb-3" onclick="showDistrict('gadag', this)"><?= $MSG['gadag']; ?></button>
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('hassan', this)"><?= $MSG['hassan']; ?></button> -->
    <button class="tab-btn btn mb-3" onclick="showDistrict('haveri', this)"><?= $MSG['haveri']; ?></button>
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('kalaburagi', this)"><?= $MSG['kalaburagi']; ?></button> -->
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('kodagu', this)"><?= $MSG['kodagu']; ?></button> -->
    <button class="tab-btn btn mb-3" onclick="showDistrict('kolar', this)"><?= $MSG['kolar']; ?></button>
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('koppal', this)"><?= $MSG['koppal']; ?></button> -->
    <button class="tab-btn btn mb-3" onclick="showDistrict('mandya', this)"><?= $MSG['mandya']; ?></button>
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('mysuru', this)"><?= $MSG['mysuru']; ?></button> -->
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('raichur', this)"><?= $MSG['raichur']; ?></button> -->
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('ramanagara', this)"><?= $MSG['ramanagara']; ?></button> -->
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('shivamogga', this)"><?= $MSG['shivamogga']; ?></button> -->
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('tumakuru', this)"><?= $MSG['tumakuru']; ?></button> -->
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('udupi', this)"><?= $MSG['udupi']; ?></button> -->
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('uttara_kannada', this)"><?= $MSG['uttara_kannada']; ?></button> -->
    <button class="tab-btn btn mb-3" onclick="showDistrict('vijayapur', this)"><?= $MSG['vijayapura']; ?></button>
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('vijayapur', this)"><?= $MSG['yadgir']; ?></button> -->
  </div>
</div>


    </div>

    <!-- Image Content -->
    <div class="col-md-9">

  <!-- Bagalkote -->
  <!-- <div id="bagalkote" class="district-content">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/bagacul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/bagacul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/bagacul2.jpg"></div>
    </div>
  </div> -->

  <!-- Ballari -->
  <div id="ballari" class="district-content">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ballaridist1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ballaridist2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ballaridist3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ballaridist4.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ballaridist5.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ballaridist6.jpg"></div>

    </div>
  </div>

  <!-- Belagavi -->
  <div id="belagavi" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/belagavidist.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/belagavidist1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/belagavidist2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/belagavidist3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/belagavidist4.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/belagavidist5.jpg"></div>
    </div>
  </div>

  <!-- Bengaluru South -->
  <!-- <div id="bengaluru_south" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/bengasouthcul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/bengasouthcul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/bengasouthcul2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/bengasouthcul3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/bengasouthcul4.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/bengasouthcul5.jpg"></div>
    </div>
  </div> -->
  <!-- Bengaluru Urban -->
  <!-- <div id="bengaluru_urban" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/bengasouthcul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/bengasouthcul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/bengasouthcul2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/bengasouthcul3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/bengasouthcul4.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/bengasouthcul5.jpg"></div>
    </div>
  </div> -->

  <!-- Bidar -->
  <!-- <div id="bidar" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ballaricul.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ballaricul1.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ballaricul2.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ballaricul3.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ballaricul4.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ballaricul5.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ballaricul6.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ballaricul7.jpeg"></div>
    </div>
  </div> -->

  <!-- Chamarajanagar -->
  <!-- <div id="chamarajanagar" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?16"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?17"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?18"></div>
    </div>
  </div> -->

  <!-- Chikkaballapura -->
  <div id="chikkaballapura" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/chikkabadist.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/chikkabadist1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/chikkabadist2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/chikkabadist3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/chikkabadist4.jpg"></div>
    </div>
  </div>

  <!-- Chikkamagaluru -->
  <div id="chikkamagaluru" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/chikkamagadist.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/chikkamagadist1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/chikkamagadist2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/chikkamagadist3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/chikkamagadist4.jpg"></div>
    </div>
  </div>

  <!-- Chitradurga -->
  <div id="chitradurga" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/chithradist.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/chithradist1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/chithradist2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/chithradist3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/chithradist4.jpg"></div>
    </div>
  </div>

  <!-- Dakshina Kannada -->
  <!-- <div id="dakshina_kannada" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/dkdist.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/dkdist1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/dkdist2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/dkdist3.jpg"></div>
      
    </div>
  </div> -->

  <!-- Davanagere -->
  <div id="davanagere" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/davanacul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/davanacul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/davanacul2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/davanacul3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/davanacul4.jpg"></div>
    </div>
  </div>

  <!-- Dharwad -->
  <!-- <div id="dharwad" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?34"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?35"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?36"></div>
    </div>
  </div> -->

  <!-- Gadag -->
  <div id="gadag" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/gadagdist.jpg"></div>
      <!-- <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/gadagcul1.jpeg"></div> -->
      <!-- <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/gadagcul2.jpeg"></div> -->
    </div>
  </div>

  <!-- Hassan -->
  <!-- <div id="hassan" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?40"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?41"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?42"></div>
    </div>
  </div> -->

  <!-- Haveri -->
  <div id="haveri" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/haveridist.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/haveridist1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/haveridist2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/haveridist3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/haveridist4.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/haveridist5.jpg"></div>
    </div>
  </div>

  <!-- Kalaburagi -->
  <!-- <div id="kalaburagi" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?46"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?47"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?48"></div>
    </div>
  </div> -->

  <!-- Kodagu -->
  <!-- <div id="kodagu" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?49"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?50"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?51"></div>
    </div>
  </div> -->

  <!-- Kolar -->
  <div id="kolar" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/kolardist.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/kolardist1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/kolardist2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/kolardist3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/kolardist4.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/kolardist5.jpg"></div>
    </div>
  </div>

  <!-- Koppal -->
  <!-- <div id="koppal" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?55"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?56"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?57"></div>
    </div>
  </div> -->

  <!-- Mandya -->
  <div id="mandya" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/mandyadist.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/mandyadist1.jpeg"></div>
      <!-- <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/mandyacul2.jpeg"></div> -->
      <!-- <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/mandyacul3.jpeg"></div> -->
      <!-- <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/mandyacul4.jpeg"></div> -->
      <!-- <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/mandyacul5.jpeg"></div> -->
    </div>
  </div>

  <!-- Mysuru -->
  <!-- <div id="mysuru" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?61"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?62"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?63"></div>
    </div>
  </div> -->

  <!-- Raichur -->
  <!-- <div id="raichur" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?64"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?65"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?66"></div>
    </div>
  </div> -->

  <!-- Ramanagara -->
  <!-- <div id="ramanagara" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?67"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?68"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?69"></div>
    </div>
  </div> -->

  <!-- Shivamogga -->
  <!-- <div id="shivamogga" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?70"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?71"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?72"></div>
    </div>
  </div> -->

  <!-- Tumakuru -->
  <!-- <div id="tumakuru" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?73"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?74"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?75"></div>
    </div>
  </div> -->

  <!-- Udupi -->
  <!-- <div id="udupi" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/udapicul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/udapicul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/udapicul2.jpg"></div>
    </div>
  </div> -->

  <!-- Uttara Kannada -->
  <!-- <div id="uttara_kannada" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ukcul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ukcul1.png"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ukcul2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ukcul3.png"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ukcul4.png"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/ukcul5.png"></div>
    </div>
  </div> -->

  <!-- Vijayapur -->
  <div id="vijayapur" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/vijayadist.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/vijayadist1.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/vijayadist2.jpeg"></div>
      <!-- <div class="col-md-4 image-box"><img src="frontend/img/districtlevelfarmersfestival/vijayacul4.jpeg"></div> -->
    </div>
  </div>

</div>


  </div>
</div>

<script>
function showDistrict(id, btn) {
  // Hide all districts
  document.querySelectorAll('.district-content').forEach(d => {
    d.classList.add('d-none');
  });

  // Remove active from buttons
  document.querySelectorAll('.tab-btn').forEach(b => {
    b.classList.remove('active');
  });

  // Show selected district
  document.getElementById(id).classList.remove('d-none');

  // Activate button
  btn.classList.add('active');
}
</script>


<?php require_once 'inc/footer.php'; ?>