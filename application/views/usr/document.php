<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="bg-light mt-6">
  <!-- Breadcrumb -->
  <div class="navbar-dark bg-dark" style="background-image: url(<?site_url()?>assets/svg/components/wave-pattern-light.svg);">
    <div class="container content-space-1 content-space-b-lg-3">
      <div class="row align-items-center">
        <div class="col">
          <div class="d-none d-lg-block">
            <h1 class="h2 text-white">Announcement</h1>
          </div>

          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light mb-0">
              <li class="breadcrumb-item">Announcement</li>
              <li class="breadcrumb-item active" aria-current="page">Overview</li>
            </ol>
          </nav>
          <!-- End Breadcrumb -->
        </div>
        <!-- End Col -->

        <div class="col-auto">
          <!-- Responsive Toggle Button -->
          <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarNav" aria-controls="sidebarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-default">
              <i class="bi-list"></i>
            </span>
            <span class="navbar-toggler-toggled">
              <i class="bi-x"></i>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->
        </div>

        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
  </div>
  <!-- End Breadcrumb -->
  <!-- Content -->
  <div class="container content-space-1 content-space-t-lg-0 content-space-b-lg-2 mt-lg-n10">
    <div class="row">
      <?php
        $this->load->view('templates/usr/sidebar.php');
      ?>

      <div class="col-lg-9">
        <div class="d-grid gap-3 gap-lg-5">
          <!-- Card -->
          <div class="card">
            <div class="card-header border-bottom">
              <h4 class="card-header-title">Documents</h4>
            </div>
            <!-- Body -->
            <div class="card-body">
              <div class="row">
                
                <?php 
                    $this->load->model('ParticipantDetail');
                    $pDetail = $this->ParticipantDetail->getById($this->session->userdata('id_user'));
                    if($pDetail->is_checked == 1){?>
               
                    <div class="col col-sm-6 mb-6">
                        <!-- Card -->
                        <div class="card card-sm" style="max-width: 20rem;">
                            <div class="card-body">
                                <h3 class="card-title">Letter of Acceptance</h3>
                                <div class="text-center">
                                    <img class="" src="<?= site_url()?>assets/img/logo/logo.png" style="width: 175px;" alt="Logo">
                                </div>
                                <form action="<?= site_url('document/generate-loa')?>" method="POST">
                                    <button class="btn btn-soft-primary w-100 mt-3">Download</button>
                                </form>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <div class="col col-sm-6 mb-6">
                        <!-- Card -->
                        <div class="card card-sm" style="max-width: 20rem;">
                            <div class="card-body">
                                <h3 class="card-title">Letter of Aggreement</h3>
                                <div class="text-center">
                                    <img class="" src="<?= site_url()?>assets/img/logo/logo.png" style="width: 175px;" alt="Logo">
                                </div>
                                <form action="<?= site_url('document/download')?>" method="POST">
                                  <input type="hidden" name="type" value="agreement">
                                  <button class="btn btn-soft-primary w-100 mt-3">Download Template</button>
                                </form>
                                <button class="btn btn-soft-success w-100 mt-3 mb-2">Upload Document</button>
                                <span class="form-text"><b>Note:</b> Download the agreement letter template and fill it in then upload it in (pdf) format.</span>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                <?php }?>
                <div class="col col-sm-6 mb-6">
                    <!-- Card -->
                    <div class="card card-sm" style="max-width: 20rem;">
                        <div class="card-body">
                            <h3 class="card-title">Proposal</h3>
                            <div class="text-center">
                                <img class="" src="<?= site_url()?>assets/img/logo/logo.png" style="width: 175px;" alt="Logo">
                            </div>
                            <form action="<?= site_url('document/download')?>" method="POST">
                              <input type="hidden" name="type" value="propEng">
                              <button class="btn btn-soft-primary w-100 mt-3">English Version</button>
                            </form>
                            <!-- <button class="btn btn-soft-info w-100 mt-3">Indonesian Version</button> -->
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <div class="col col-sm-6 mb-6">
                    <!-- Card -->
                    <div class="card card-sm" style="max-width: 20rem;">
                        <div class="card-body">
                            <h3 class="card-title">Guidebook</h3>
                            <div class="text-center">
                                <img class="" src="<?= site_url()?>assets/img/logo/logo.png" style="width: 175px;" alt="Logo">
                            </div>
                            <form action="<?= site_url('document/download')?>" method="POST">
                              <input type="hidden" name="type" value="guidebook">
                              <button class="btn btn-soft-primary w-100 mt-3">Download</button>
                            </form>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
              </div>
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer pt-0">
              <!-- <div class="d-flex justify-content-end gap-3">
                <a class="btn btn-white" href="javascript:;">Cancel</a>
                <a class="btn btn-primary" href="javascript:;">Save changes</a>
              </div> -->
            </div>
            <!-- End Footer -->
          </div>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->
  </div>
  <!-- End Content -->
</main>
<!-- ========== END MAIN CONTENT ========== -->