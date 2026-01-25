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


@media (max-width: 768px) {
  .section-one,
  .section-two,
  .content-left,
  .section-two p,
  .section-two li {
    text-align: justify;
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
                <li><?= $MSG['internatinal_con']; ?></li>
            </ul>
            <h1 class="breadcrumb-title text-white "><?= $MSG['internatinal_con']; ?></h1>
        </div>
    </div>
</section>

  <!-- SECTION 1 -->
  <section class="section-one">
    <div class="content-left">
      <h2>International Conference</h2><br>
      <h5>“Agriculture Beyond Cultivation – Building Sustainable Ecosystems for Farmer Prosperity”</h5><br>
      <h4><b>Background and Rationale</b></h4>
      <p>Globally and nationally, agriculture is undergoing a paradigm shift from a production-centric model toward a holistic food systems approach that integrates ecosystem services, enterprise-led innovation, sustainability, and market connectivity. This transition is being accelerated by climate change, natural resource scarcity, biodiversity loss, and increasing market volatility. In response, economies are adopting circular bioeconomy models, agri-waste valorization strategies, and multifunctional landscape approaches to diversify rural livelihoods and meet the rising demand for sustainable and value-added products.</p><br>
      <!-- <button class="btn">TradeFare Book</button> -->
    </div>

    <div class="image-right">
      <img src="frontend/img/g1.png" alt="Right Image">
    </div>
  </section>

  <!-- SECTION 2 -->
  <section class="section-two">
    
    <p>Despite significant gains in agricultural productivity, farmers’ incomes remain constrained by persistent structural challenges. These include, fragmented seed systems, limited value addition weak branding and certification mechanisms, inadequate market integration, underdeveloped financial linkages, and the absence of effective mechanisms to monetize ecosystem services. Addressing these constraints necessitates a paradigm shift that positions agriculture—not merely as cultivation, but as an integrated, innovation-driven enterprise ecosystem that links production with processing, services, markets, and sustainability outcomes.</p><br>
    <h4><b>Karnataka’s Leadership and Context</b></h4>
    <p>Karnataka has emerged as a national and international leader in promoting sustainable and diversified agricultural value chains through its International Trade Fairs (2017–2019; 2023–2025). These platforms have showcased organic agriculture, millet-based systems, and climate-resilient practices, while fostering collaboration among farmers, enterprises, researchers, policymakers, and markets at state, national, and global levels. Building on this momentum, ITF 2026 proposes the International Conference on “Agriculture Beyond Cultivation – Building Sustainable Ecosystems for Farmer Prosperity” to deepen dialogue, share global best practices, and catalyze transformative action.</p><br>
    <h4><b>Conference Focus and Thematic Areas</b></h4>
    <p>The conference will explore the evolving frontiers of agriculture beyond primary production, with a strong emphasis on circular bioeconomy approaches. Key thematic areas include the conversion of agri-residues and bio-resources into high-value products such as bioenergy, bioplastics, biodegradable packaging, pharmaceuticals, nutraceuticals, cosmeceuticals, pigments, and industrial biochemicals, thereby unlocking new enterprise opportunities and income streams for rural communities.
The conference will also examine the economic valuation of ecosystem services—including soil health, water conservation, pollination, and biodiversity—as critical assets for climate resilience and sustainable revenue generation. In addition, agro-tourism and heritage-based enterprises will be highlighted as pathways to link agricultural landscapes with cultural, culinary, and ecological heritage, contributing to diversified rural livelihoods and conservation outcomes.
</p><br>
<h4><b>Inclusive Enterprise Models and Enabling Ecosystems</b></h4>
<p>Central to the conference vision are inclusive and scalable business models that empower farmers and Farmer Producer Organizations (FPOs), Self-Help Groups (SHGs), women, and youth. The conference will emphasize rural entrepreneurship through decentralized processing, circular economy practices, and sustainable enterprise development. Strengthening market access through branding, eco-certification, and Geographical Indication (GI) tagging will be discussed alongside enabling financial, legal, and regulatory frameworks required to support enterprise growth and investment.</p><br>
<h4><b>Objectives and Expected Outcomes</b></h4>
<p>By bringing together policymakers, researchers, entrepreneurs, financial institutions, development practitioners, and international experts, the conference aims to:</p>
<ul>
    <li>•	Facilitate cross-learning and the exchange of global and national best practices</li>
    <li>•	Identify actionable pathways for transforming agriculture into a multi-sectoral enterprise ecosystem</li>
    <li>•	Strengthen linkages between science, technology, policy, finance, and markets</li>
    <li>•	Promote ecosystem-based approaches that enhance farmer incomes, resilience, and sustainability</li>
    
</ul><br>
<h4><b>Conclusion</b></h4>
<p>The International Conference on “Agriculture Beyond Cultivation” seeks to advance an ecosystem-based perspective on agriculture—one that transcends traditional production paradigms and positions farmers at the centre of resilient, sustainable, and profitable agri-enterprise ecosystems. Through knowledge exchange and collaborative action, the conference aims to contribute meaningfully to the future of agriculture and rural prosperity in the state of Karnataka.</p>
    

  </section>
  
<div class="text-align-center">
  <h4>International Conference Programme Schedule</h4>
     <a href="day1.php" class="btn">Day 1</a>
<a href="day2.php" class="btn">Day 2</a>

    </div>


<?php require_once 'inc/footer.php'; ?>