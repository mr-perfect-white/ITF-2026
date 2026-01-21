<?php require_once 'lang/lang.php'; ?>
<?php require_once 'inc/header.php'; ?>

<!-- About Section Start -->
<style>

.btn-only-row {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin: 30px 0;
}


/* BUTTONS */
.btn {
  padding: 12px 24px;
  background: #b33a31;
  color: #fff;
  border: none;
  cursor: pointer;
  margin: 5px;
  border-radius: 10px;
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
                <li><?= $MSG['layout']; ?></li>
            </ul>
            <h1 class="breadcrumb-title text-white "><?= $MSG['layout']; ?></h1>
        </div>
    </div>
</section>

  <div class="btn-only-row">
  <button class="btn">Hangar A</button>
  <button class="btn ">Hangar B</button>
</div>



<?php require_once 'inc/footer.php'; ?>