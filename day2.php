<?php require_once 'lang/lang.php'; ?>
<?php require_once 'inc/header.php'; ?>

<!-- About Section Start -->
<style>


/* SECTION 1 */
.section-one {
  display: flex;
  align-items: justify;
  justify-content: space-between;
  padding: 20px;
  gap: 40px;
  font-size: 18px;
}

.content-left {
  flex: 1;
}

.image-right {
  flex: 1;
  text-align: right;
}

.image-right img {
  max-width: 100%;
  height: auto;
}

/* SECTION 2 */
.section-two {
  text-align: justify;
  padding: 20px 20px;
  /* background: #f5f5f5; */
  font-size: 18px;
}

.btn-group {
  margin-top: 20px;
  text-align: center !important;
  justify-items: center;
}

/* BUTTONS */
.btn {
  padding: 12px 24px;
  background: #b33a31;
  color: #fff;
  border: none;
  cursor: pointer;
  margin: 5px;
  border-radius: 4px;
}

.btn-outline {
  background: transparent;
  color:#b33a31;
  border: 2px solid #007bff;
}

.btn:hover {
  /* opacity: 0.9; */
  color: #007bff;
  border: 2px solid #007bff;
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .section-one {
    flex-direction: column;
    text-align: center;
  }

  .image-right {
    text-align: center;
  }
}

.programme {
  max-width: 1000px;
  margin: 60px auto;
  font-family: Arial, sans-serif;
}

.programme-title {
  font-size: 26px;
  font-weight: bold;
  margin-bottom: 20px;
}

.programme-section {
  margin-bottom: 30px;
  border: 1px solid #000;
}

.section-header {
  background: #e5e5e5;
  padding: 12px 16px;
  font-weight: bold;
  border-bottom: 1px solid #000;
}

.programme-table {
  width: 100%;
  border-collapse: collapse;
}

.programme-table td {
  border: 1px solid #000;
  padding: 12px 16px;
  vertical-align: top;
}

.time {
  width: 160px;
  font-weight: bold;
  white-space: nowrap;
}
.text-align-center {
  text-align: center;
  margin: 40px 0;
}

.btn-row {
  display: flex;
  justify-content: center;
  gap: 12px;
  margin-top: 12px;
  
}
.btn{
  border-radius: 10px !important;
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
                <li><?= $MSG['day2']; ?></li>
            </ul>
            <h1 class="breadcrumb-title text-white "><?= $MSG['day2']; ?></h1>
        </div>
    </div>
</section>

 

  <section class="programme">

  <h2 class="programme-title"> Tentative Programme Schedule</h2>

  
  

  <!-- SECTION 5 -->
  <div class="programme-section">
     <div class="section-header">Friday, February 5th, 2026</div>
    <div class="section-header">
    Session 1: Eco-Labelling, Certification, Branding
    </div>

    <table class="programme-table">
      <tr>
        <td class="time"></td>
        <td>Organisational and business development of organic agriculture on the regional / state level: <strong>Rudolf Bühler</strong>, Hohenlohe, Germany <strong>(Confirmed)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>The Totgars' Co-Operative Sale Society Limited model, Sirsi Karnataka  <strong>(TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Public support schemes for the development of OA on the regional and state level.    <strong>Thomas Wehinger, Ecoland Germany Confirmed </strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Naturland – Organic Certification Scope in India:  Ms. Shamika Mone  <strong>(Confirmed) </strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Moringa – NPOP Organic certified organic value-added products  <strong>(Mr. Basaiah Hiremath, Nandi Organic Farmhouse Pvt. Ltd Karnataka (TBC))</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>TLife Cycle Assessment, Product Environmental Foodprint - Eco-labelling frameworks <strong>(TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Branding strategies for FPOs, SHGs, federations: <strong>Shri. N. Monappa, Nudge Foundation (TBC) </strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Demeter/ Fairtrade/ Rainforest Alliance/ Ecoland/ GLOBALG.A.P. GI  <strong>(TBC)</strong></td>
      </tr>
    </table>
  </div>

  <!-- SECTION 6 -->
  <div class="programme-section">
    <div class="section-header">
      Session 2: The Inclusive Business Ecosystem
    </div>

    <table class="programme-table">
      <tr>
        <td class="time"></td>
        <td>Keynote: The IB Blueprint Re-framing the private sector as a co-investor in social capital and setting the ‘Beyond Production’  <strong>– Kirti Mishra Ecociate, (TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Global Insights: Transcending Borders Comparative analysis of IB models in ASEAN   corridors with gender inclusion and smallholder engagement -<strong>2 International Speakers (TBC)</strong> </td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>The Karnataka Readiness Spotlight	Exploring the maturity of Karnataka’s FPO network and its capacity for high-value industrial partnerships - State Perspective: <strong> (TBC)</strong> 
Panel Discussion:  Moderator: Rajeev Ahal <strong>(TBC)</strong>
<strong>Speakers (TBC)</strong>
</td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>1.Rangu Rao, Safe Harvest (Safe Product – sourcing, processing and marketing), 2. Kishore Indukuri, Sids Farm, 3. Subhadeep Sanyal (Impact Investor), 4. Syamala Gowri, Jayanth Herbs (sourcing and marketing), 5. Raman Wadhw, NRLM (ecosystem actor), 6. Ms Rupa Chandra, UNESCAP, 7</td>
      </tr>
     
    </table>
  </div>
  <!-- SECTION 7 -->
  <div class="programme-section">
    <div class="section-header">
    <strong> Session 3: The roadmap to build an ecosystem perspective for agriculture beyond </strong><br>production: Mr. Emiliano Duch, Trustee, Foundation Clusters and Competitiveness
    </div>

    <table class="programme-table">
      <tr>
        <td class="time"></td>
        <td>Vote of Thanks: GIZ/SuATI Project</td>
      </tr>
     
     
    </table>
  </div>

</section>



<?php require_once 'inc/footer.php'; ?>