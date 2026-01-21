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
                <li><?= $MSG['pre_events5']; ?></li>
            </ul>
            <h1 class="breadcrumb-title text-white "><?= $MSG['pre_events5']; ?></h1>
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
    <button class="tab-btn btn mb-3" onclick="showDistrict('belagavi', this)"><?= $MSG['belagavi']; ?></button>
    <button class="tab-btn btn mb-3" onclick="showDistrict('bengaluru_south', this)"><?= $MSG['bengaluru_south']; ?></button>
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('bengaluru_urban', this)"><?= $MSG['bengaluru_urban']; ?></button> -->
    <button class="tab-btn btn mb-3" onclick="showDistrict('bidar', this)"><?= $MSG['bidar']; ?></button>
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('chamarajanagar', this)"><?= $MSG['chamarajanagar']; ?></button> -->
    <button class="tab-btn btn mb-3" onclick="showDistrict('chikkaballapura', this)"><?= $MSG['chikkaballapura']; ?></button>
    <button class="tab-btn btn mb-3" onclick="showDistrict('chikkamagaluru', this)"><?= $MSG['chikkamagaluru']; ?></button>
    <!-- <button class="tab-btn btn mb-3" onclick="showDistrict('chitradurga', this)"><?= $MSG['chitradurga']; ?></button> -->
    <button class="tab-btn btn mb-3" onclick="showDistrict('dakshina_kannada', this)"><?= $MSG['dakshina_kannada']; ?></button>
    <button class="tab-btn btn mb-3" onclick="showDistrict('davanagere', this)"><?= $MSG['davanagere']; ?></button>
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
    <button class="tab-btn btn mb-3" onclick="showDistrict('udupi', this)"><?= $MSG['udupi']; ?></button>
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
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/bagacul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/bagacul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/bagacul2.jpg"></div>
    </div>
  </div>

  <!-- Ballari -->
  <div id="ballari" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ballacul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ballacul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ballacul2.jpg"></div>
    </div>
  </div>

  <!-- Belagavi -->
  <div id="belagavi" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/belacul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/belacul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/belacul2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/belacul3.jpg"></div>
    </div>
  </div>

  <!-- Bengaluru South -->
  <div id="bengaluru_south" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/bengasouthcul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/bengasouthcul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/bengasouthcul2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/bengasouthcul3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/bengasouthcul4.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/bengasouthcul5.jpg"></div>
    </div>
  </div>
  <!-- Bengaluru Urban -->
  <!-- <div id="bengaluru_urban" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/bengasouthcul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/bengasouthcul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/bengasouthcul2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/bengasouthcul3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/bengasouthcul4.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/bengasouthcul5.jpg"></div>
    </div>
  </div> -->

  <!-- Bidar -->
  <div id="bidar" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ballaricul.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ballaricul1.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ballaricul2.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ballaricul3.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ballaricul4.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ballaricul5.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ballaricul6.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ballaricul7.jpeg"></div>
    </div>
  </div>

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
      <!-- <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/chikkaballlacul.jpg"></div> -->
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/chikkaballlacul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/chikkaballlacul2.jpg"></div>
    </div>
  </div>

  <!-- Chikkamagaluru -->
  <div id="chikkamagaluru" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/chikkamagacul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/chikkamagacul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/chikkamagacul2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/chikkamagacul3.jpg"></div>
    </div>
  </div>

  <!-- Chitradurga -->
  <!-- <div id="chitradurga" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?25"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?26"></div>
      <div class="col-md-4 image-box"><img src="https://picsum.photos/400/300?27"></div>
    </div>
  </div> -->

  <!-- Dakshina Kannada -->
  <div id="dakshina_kannada" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/dkcul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/dkcul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/dkcul2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/dkcul3.jpg"></div>
      
    </div>
  </div>

  <!-- Davanagere -->
  <div id="davanagere" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/davanacul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/davanacul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/davanacul2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/davanacul3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/davanacul4.jpg"></div>
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
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/gadagcul.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/gadagcul1.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/gadagcul2.jpeg"></div>
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
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/havericul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/havericul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/havericul2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/havericul3.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/havericul4.jpg"></div>
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
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/kolarcul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/kolarcul1.jpg"></div>
      <!-- <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/kolarcul.jpg"></div> -->
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
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/mandyacul.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/mandyacul1.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/mandyacul2.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/mandyacul3.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/mandyacul4.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/mandyacul5.jpeg"></div>
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
  <div id="udupi" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/udapicul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/udapicul1.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/udapicul2.jpg"></div>
    </div>
  </div>

  <!-- Uttara Kannada -->
  <div id="uttara_kannada" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ukcul.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ukcul1.png"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ukcul2.jpg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ukcul3.png"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ukcul4.png"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/ukcul5.png"></div>
    </div>
  </div>

  <!-- Vijayapur -->
  <div id="vijayapur" class="district-content d-none">
    <div class="row g-3">
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/vijayacul.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/vijayacul1.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/vijayacul3.jpeg"></div>
      <div class="col-md-4 image-box"><img src="frontend/img/CulinaryCompetition/vijayacul4.jpeg"></div>
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