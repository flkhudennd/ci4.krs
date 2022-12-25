<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content') ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          
              
              <div class="card-deck">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Warning card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>


              
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
<?= $this->endSection() ?>