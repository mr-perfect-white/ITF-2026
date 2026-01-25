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
/* PDF Modal */
.pdf-modal {
  display: none;
  position: fixed;
  z-index: 9999;
  inset: 0;
  background: rgba(0,0,0,0.8);
  justify-content: center;
  align-items: center;
}

/* Modal Box */
.pdf-modal-content {
  position: relative;
  width: 90%;
  height: 90%;
  background: white;
  border-radius: 10px;
  overflow: hidden;
}

/* PDF Frame */
.pdf-modal-content iframe {
  width: 100%;
  height: 100%;
  border: none;
}

/* Close Button */
.pdf-close {
  position: absolute;
  top: 8px;
  right: 8px;
  background: red;
  color: white;
  border: none;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  font-size: 18px;
  cursor: pointer;
  z-index: 10;
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

  <button class="btn"
    onclick="openPDF('frontend/img/pdf/HANGARA.pdf')">
    Hangar A
  </button>

  <button class="btn"
    onclick="openPDF('frontend/img/pdf/HANGARB.pdf')">
    Hangar B
  </button>

</div>
<!-- PDF Modal -->
<div id="pdfModal" class="pdf-modal">

  <div class="pdf-modal-content">

    <button class="pdf-close" onclick="closePDF()">×</button>

    <iframe id="pdfFrame"></iframe>

  </div>

</div>


<script>

/* Open PDF */
function openPDF(file) {

  let modal = document.getElementById('pdfModal');
  let frame = document.getElementById('pdfFrame');

  frame.src = file;
  modal.style.display = 'flex';
}


/* Close PDF */
function closePDF() {

  let modal = document.getElementById('pdfModal');
  let frame = document.getElementById('pdfFrame');

  frame.src = '';
  modal.style.display = 'none';
}


/* Close on background click */
document.getElementById('pdfModal')
  .addEventListener('click', function(e){

    if(e.target === this){
      closePDF();
    }

  });


/* ESC key close */
document.addEventListener('keydown', function(e){

  if(e.key === 'Escape'){
    closePDF();
  }

});

</script>


<?php require_once 'inc/footer.php'; ?>