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
                <li><?= $MSG['pre_events3']; ?></li>
            </ul>
            <h1 class="breadcrumb-title text-white "><?= $MSG['pre_events3']; ?></h1>
        </div>
    </div>
</section>
<div class="container mt-5 mb-5">
  <div class="row">

    <!-- Vertical District Buttons -->
    <div class="col-md-3">
     <div class="district-scroll">
  <div class="list-group">
    <button class="tab-btn btn active mb-3" onclick="showDistrict('bagalkote', this)"><?= $MSG['bagalkote']; ?></button>
    <button class="tab-btn btn mb-3" onclick="showDistrict('ballari', this)"><?= $MSG['ballari']; ?></button>
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('belagavi', this)"><?= $MSG['belagavi']; ?></button> -->
    <button class="tab-btn btn mb-3" onclick="showDistrict('bengaluru_south', this)"><?= $MSG['bengaluru_south']; ?></button>
    <button class="tab-btn btn mb-3" onclick="showDistrict('bengaluru_urban', this)"><?= $MSG['bengaluru_urban']; ?></button>
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('bidar', this)"><?= $MSG['bidar']; ?></button> -->
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('chamarajanagar', this)"><?= $MSG['chamarajanagar']; ?></button> -->
    <button class="tab-btn btn mb-3" onclick="showDistrict('chikkaballapura', this)"><?= $MSG['chikkaballapura']; ?></button>
    <button class="tab-btn btn mb-3" onclick="showDistrict('chikkamagaluru', this)"><?= $MSG['chikkamagaluru']; ?></button>
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('chitradurga', this)"><?= $MSG['chitradurga']; ?></button> -->
    <button class="tab-btn btn mb-3" onclick="showDistrict('dakshina_kannada', this)"><?= $MSG['dakshina_kannada']; ?></button>
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
    <button class="tab-btn btn mb-3" onclick="showDistrict('uttara_kannada', this)"><?= $MSG['uttara_kannada']; ?></button>
    <button class="tab-btn btn mb-3" onclick="showDistrict('vijayapur', this)"><?= $MSG['vijayapura']; ?></button>
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('vijayapur', this)"><?= $MSG['yadgir']; ?></button> -->
  </div>
</div>


    </div>

    <!-- Image Content -->
    <div class="col-md-9">

  <!-- Bagalkote -->
  <div id="bagalkote" class="district-content">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/bagamill.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/bagamill1.jpg"></div>
      <!-- <div class="col-md-4 image-box"><img src="frontend/img/milletrun/bagamill2.jpg"></div> -->
    </div>
  </div>

  <!-- Ballari -->
  <div id="ballari" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ballamill.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ballamill1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ballamill2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ballamill3.jpg"></div>
    </div>
  </div>

  <!-- Belagavi -->
  <!-- <div id="belagavi" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/belamill.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/belamill1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/belamill2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/belamill3.jpg"></div>
    </div>
  </div> -->

  <!-- Bengaluru South -->
  <div id="bengaluru_south" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/bengasouthmill.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/bengasouthmill1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/bengasouthmill2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/bengasouthmill3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/bengasouthmill4.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/bengasouthmill5.jpg"></div>
    </div>
  </div>
  <!-- Bengaluru Urban -->
  <div id="bengaluru_urban" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/bengaurbanmill.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/bengaurbanmill1.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/bengaurbanmill2.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/bengaurbanmill3.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/bengaurbanmill4.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/bengaurbanmill5.jpeg"></div>
    </div>
  </div>

  <!-- Bidar -->
  <!-- <div id="bidar" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ballarimill.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ballarimill1.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ballarimill2.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ballarimill3.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ballarimill4.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ballarimill5.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ballarimill6.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ballarimill7.jpeg"></div>
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
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/chikkabamill.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/chikkabamill1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/chikkabamill2.jpg"></div>
    </div>
  </div>

  <!-- Chikkamagaluru -->
  <div id="chikkamagaluru" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/chikkamagamill.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/chikkamagamill1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/chikkamagamill2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/chikkamagamill3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/chikkamagamill4.jpg"></div>
    </div>
  </div>

  <!-- Chitradurga -->
  <div id="chitradurga" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/chithramill.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/chithramill1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/chithramill2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/chithramill3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/chithramill4.jpg"></div>
    </div>
  </div>

  <!-- Dakshina Kannada -->
  <div id="dakshina_kannada" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/dkmill.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/dkmill1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/dkmill2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/dkmill3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/dkmill4.jpg"></div>
      
    </div>
  </div>

  <!-- Davanagere -->
  <!-- <div id="davanagere" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/davanamill.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/davanamill1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/davanamill2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/davanamill3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/davanamill4.jpg"></div>
    </div>
  </div> -->

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
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/gadagmill.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/gadagmill1.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/gadagmill2.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/gadagmill3.jpeg"></div>
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
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/haverimill.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/haverimill1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/haverimill2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/haverimill3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/haverimill4.jpg"></div>
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
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/kolarmill.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/kolarmill1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/kolarmill2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/kolarmill3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/kolarmill4.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/kolarmill5.jpg"></div>
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
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/mandyamill.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/mandyamill1.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/mandyamill2.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/mandyamill3.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/mandyamill4.jpeg"></div>
      <!-- <div class="col-md-4 image-box"><img src="frontend/img/milletrun/mandyamill5.jpeg"></div> -->
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
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/udapimill.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/udapimill1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/udapimill2.jpg"></div>
    </div>
  </div> -->

  <!-- Uttara Kannada -->
  <div id="uttara_kannada" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ukmill.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ukmill1.png"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ukmill2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ukmill3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ukmill4.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ukmill5.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ukmill6.png"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/ukmill7.jpg"></div>
    </div>
  </div>

  <!-- Vijayapur -->
  <div id="vijayapur" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/vijayamill.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/vijayamill1.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/milletrun/vijayamill2.jpeg"></div>
      <!-- <div class="col-md-4 image-box"><img src="frontend/img/milletrun/vijayamill4.jpeg"></div> -->
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