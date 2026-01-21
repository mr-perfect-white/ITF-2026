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
                <li><?= $MSG['day1']; ?></li>
            </ul>
            <h1 class="breadcrumb-title text-white "><?= $MSG['day1']; ?></h1>
        </div>
    </div>
</section>

 

  <section class="programme">

  <h2 class="programme-title"> Tentative Programme Schedule</h2>

  <!-- SECTION 1 -->
  <div class="programme-section">
    <div class="section-header">Thursday, February 4th, 2026</div>

    <table class="programme-table">
      <tr>
        <td class="time">9:00 – 09:45</td>
        <td>Registration of the participants</td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Welcome note by Mr Selva Kumar, I.A.S, Secretary to Govt, Agriculture Department, Government of Karnataka,Agriculture <strong>(TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Prayer, Farmer song, Lighting of the Lamp</td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Address by German Consulate <strong>(TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Address by Cluster Coordinator/Project Head – SuATI  <strong>(TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Introduction note on the conference: Hans Jurgen Klein / Namerta Sharma, GIZ / SuATI Project <strong>(Confirmed)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Keynote Address by Hon Agriculture Minister, Govt of Karnataka  <strong>(Confirmed)</strong></td>
      </tr>
    </table>
  </div>

  <!-- SECTION 2 -->
  <div class="programme-section">
   
    <div class="section-header">
      Session 1: Keynote Talk: Dr. Soumya Swaminathan – One Health and Bio Happiness (TBC)
    </div>

    <table class="programme-table">
      <tr>
        <td class="time"></td>
        <td>One Health in Landscape based agroecology model: Approach, strategies for co-benefits, risks, trade-offs and opportunities for equitable and holistic solutions
 <strong>Prof. Jurgen Kroschel ( TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Recycling crop residues, weeds, and biomass into biochar, bioengery, compost, and biofertilizers <strong>(Dirk TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Agroecology and Climate-Smart Livelihood Diversification – Integrating
livestock, agroforestry, and allied enterprises 
<strong>(TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td> Landraces Invisible Allies: Seed Microbiomes as the Foundation of Sustainable Agroecology (TBC)
<strong>(TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td> Anegunda : Banana Fiber Village Karnataka (TBC)
<strong>(TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td class=""> Discussion and wrap up
</td>
      </tr>
    </table>
  </div>

  <!-- SECTION 3 -->
  <div class="programme-section">
      <div class="section-header">Friday, February 4th 2026</div>
    <div class="section-header">
      Session 2: Beyond Yield: From Living Landscapes to Livelihoods
    </div>

    <table class="programme-table">
      <tr>
        <td class="time"></td>
        <td>Pollinator networks – Coorg honeybee for pollination and crops for enhancing pollinator biodiversity  <strong>(TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Agrotourism as a Living Landscape, heritage culinary practices, and ecotourism: Model from Assam State:  <strong>Samir Ranjan Bordoloi, Co-Founder, SPREAD NE (Confirmed)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Payment for ecosystem services (PES) and carbon/soil credits for farmers/ Model of decarbonisation of Paddy: OLAM  <strong>(TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Beyond Yield: Monetizing Ecosystem Services in Agroecological Landscapes/ Translating Ecosystem Services into Economic Assets<strong> (IIHR (TBC))</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td class="text-center">Discussion and wrap up</td>
      </tr>
      <tr>
        <td class="time"></td>
        <td class="text-center">Lunch Break</td>
      </tr>
    </table>
  </div>

  <!-- SECTION 4 -->
  <div class="programme-section">
    <div class="section-header">Friday, February 4th 2026</div>
    <div class="section-header">
     Session 3:  Circular Agri-Value Chains- Waste to Wealth and Scalable Enterprises 
    </div>

    <table class="programme-table">
      <tr>
        <td class="time"></td>
        <td>German Biomass Strategy:<strong> Dr. Harald Schindler, German Biomass Research Center (DBFZ), Germany (Virtual) Confirmed </strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Floral waste valorization into incense, leather alternatives: <strong>Mr. Ankit Agarwal, (TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Waste to wealth, Bioenergy:  <strong>Prof Shamsundar, NIE, Mysore (TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Translating farm produce & by-products into market-ready nutraceuticals  <strong>(Dr. P. Anandan, CSIR-CFTRI, Mysuru TBC)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Value Addition in Honey: Moon shine Honey Mead, Moonshine Value-added Honey:    <strong>Mr Nitin Vishwas (Confirmed)</strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Converting coco waste into revenue <strong>Mr. Vinay Kotari, Sri Venkateshwara Fiber Udyog Pvt. Ltd (TBC) </strong></td>
      </tr>
      <tr>
        <td class="time"></td>
        <td>Discussion and wrap up</td>
      </tr>
    </table>
  </div>

 
  

</section>



<?php require_once 'inc/footer.php'; ?>