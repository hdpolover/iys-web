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
            <?php
                  if($this->session->flashdata('succ_msg')){
                    echo '
                      <div class="alert alert-soft-success text-center card-alert mb-4" role="alert">
                        '.$this->session->flashdata('succ_msg').'
                      </div>
                    ';
                  }
                  if($this->session->flashdata('err_msg')){
                    echo '
                      <div class="alert alert-soft-danger text-center card-alert mb-4" role="alert">
                        '.$this->session->flashdata('err_msg').'
                      </div>
                    ';
                  }
                ?>
              <div class="row">
                
                <?php 
                    $this->load->model('ParticipantDetail');
                    $pDetail = $this->ParticipantDetail->getById($this->session->userdata('id_user'));
                    $dateNow = date('Y-m-d H:i:s');
                    if($pDetail->is_checked == 1){
                      if($this->session->userdata('is_extended') == '1'){
                        $checkedDate = date('Y-m-d H:i:s', strtotime("+3 days", strtotime($pDetail->checked_date)));
                        if(strtotime($dateNow) > strtotime($checkedDate)){
                          echo '
                              <div class="col col-sm-6 mb-6">
                                  <!-- Card -->
                                  <div class="card card-sm" style="max-width: 20rem;">
                                      <div class="card-body">
                                          <h3 class="card-title">SF Letter of Acceptance</h3>
                                          <div class="text-center">
                                              <img class="" src="'.site_url().'assets/img/logo/logo.png" style="width: 175px;" alt="Logo">
                                          </div>
                                          <form action="'.site_url('document/generate-sf-loa').'" method="POST">
                                              <button class="btn btn-soft-primary w-100 mt-3">Download</button>
                                          </form>
                                      </div>
                                  </div>
                                  <!-- End Card -->
                              </div>    
                            ';
                        }
                      }else {
                        if($pDetail->checked_date != null){
                          $checkedDate = date('Y-m-d H:i:s', strtotime("+3 days", strtotime($pDetail->checked_date)));
                          if(strtotime($dateNow) < strtotime($checkedDate)){
                            echo '
                              <div class="col col-sm-6 mb-6">
                                  <!-- Card -->
                                  <div class="card card-sm" style="max-width: 20rem;">
                                      <div class="card-body">
                                          <h3 class="card-title">Letter of Acceptance</h3>
                                          <div class="text-center">
                                              <img class="" src="'.site_url().'assets/img/logo/logo.png" style="width: 175px;" alt="Logo">
                                          </div>
                                          <form action="'.site_url('document/generate-loa').'" method="POST">
                                              <button class="btn btn-soft-primary w-100 mt-3">Download</button>
                                          </form>
                                      </div>
                                  </div>
                                  <!-- End Card -->
                              </div>    
                            ';
                          }
                        }else {
                          echo '
                              <div class="col col-sm-6 mb-6">
                                  <!-- Card -->
                                  <div class="card card-sm" style="max-width: 20rem;">
                                      <div class="card-body">
                                          <h3 class="card-title">Letter of Acceptance</h3>
                                          <div class="text-center">
                                              <img class="" src="'.site_url().'assets/img/logo/logo.png" style="width: 175px;" alt="Logo">
                                          </div>
                                          <form action="'.site_url('document/generate-loa').'" method="POST">
                                              <button class="btn btn-soft-primary w-100 mt-3">Download</button>
                                          </form>
                                      </div>
                                  </div>
                                  <!-- End Card -->
                              </div> 
                            ';
                        }
                      }
                    ?>
                    <?php
                      $span = "";
                      if($pDetail->agreement_status == '1'){
                        $span = '
                          <span class="badge bg-warning text-dark">Waiting Approval</span>
                        ';
                      }else if($pDetail->agreement_status == '2'){
                        $span = '
                          <span class="badge bg-danger">Deny</span>
                        ';
                      }else if($pDetail->agreement_status == '3'){
                        $span = '
                          <span class="badge bg-success">Success</span>
                        ';
                      }

                      $btn = "";
                      if($pDetail->agreement_status != '1' && $pDetail->agreement_status != '3'){
                        $btn = '
                          <button onclick="mdlUploadAggree()" class="btn btn-soft-success w-100 mb-2">Upload Document</button>
                        ';  
                      }

                      if($this->session->userdata('is_extended') == '1'){
                        $checkedDate = date('Y-m-d H:i:s', strtotime("+3 days", strtotime($pDetail->checked_date)));
                        if(strtotime($dateNow) > strtotime($checkedDate)){
                          echo '
                            <div class="col col-sm-6 mb-6">
                                <!-- Card -->
                                <div class="card card-sm" style="max-width: 20rem;">
                                    <div class="card-body">
                                        <h3 class="card-title">SF Letter of Aggreement</h3>
                                        '.$span.'
                                        <div class="text-center">
                                            <img class="" src="'.site_url().'assets/img/logo/logo.png" style="width: 175px;" alt="Logo">
                                        </div>
                                        <form action="'.site_url('document/download').'" method="POST">
                                          <input type="hidden" name="type" value="sfagreement">
                                          <button class="btn btn-soft-primary w-100 mt-3 mb-2">Download Template</button>
                                        </form>
                                        '.$btn.'
                                        <span class="form-text"><b>Note:</b></span>
                                        <p class="form-text">- Download the agreement letter template and fill it in then upload it in (pdf) format.</p>
                                        <p class="form-text">- Please upload the agreement letter before October 15 2022.</p>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>
                          ';
                        }
                      }else {
                        if($pDetail->checked_date != null){
                          $checkedDate = date('Y-m-d H:i:s', strtotime("+3 days", strtotime($pDetail->checked_date)));
                          if(strtotime($dateNow) > strtotime($checkedDate)){
                           echo '
                            <div class="col col-sm-6 mb-6">
                                <!-- Card -->
                                <div class="card card-sm" style="max-width: 20rem;">
                                    <div class="card-body">
                                        <h3 class="card-title">Letter of Aggreement</h3>
                                        '.$span.'
                                        <div class="text-center">
                                            <img class="" src="'.site_url().'assets/img/logo/logo.png" style="width: 175px;" alt="Logo">
                                        </div>
                                        <form action="'.site_url('document/download').'" method="POST">
                                          <input type="hidden" name="type" value="agreement">
                                          <button class="btn btn-soft-primary w-100 mt-3 mb-2">Download Template</button>
                                        </form>
                                        '.$btn.'
                                        <span class="form-text"><b>Note:</b></span>
                                        <p class="form-text">- Download the agreement letter template and fill it in then upload it in (pdf) format.</p>
                                        <p class="form-text">- Please upload the agreement letter before October 15 2022.</p>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>
                            ';
                          }
                        }else {
                          echo '
                            <div class="col col-sm-6 mb-6">
                                <!-- Card -->
                                <div class="card card-sm" style="max-width: 20rem;">
                                    <div class="card-body">
                                        <h3 class="card-title">Letter of Aggreement</h3>
                                        '.$span.'
                                        <div class="text-center">
                                            <img class="" src="<?= site_url()?>assets/img/logo/logo.png" style="width: 175px;" alt="Logo">
                                        </div>
                                        <form action="'.site_url('document/download').'" method="POST">
                                          <input type="hidden" name="type" value="agreement">
                                          <button class="btn btn-soft-primary w-100 mt-3 mb-2">Download Template</button>
                                        </form>
                                        '.$btn.'
                                        <span class="form-text"><b>Note:</b></span>
                                        <p class="form-text">- Download the agreement letter template and fill it in then upload it in (pdf) format.</p>
                                        <p class="form-text">- Please upload the agreement letter before October 15 2022.</p>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>
                          ';
                        }
                      }
                    ?>
                    
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
                            <form action="<?= site_url('document/download')?>" method="POST">
                              <input type="hidden" name="type" value="propInd">
                              <button class="btn btn-soft-info w-100 mt-3">Indonesian Version</button>
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
            <div class="card-footer">
              <p><b>Note:</b></p>
              <p>- Your document will be reviewed in 3 days after the submission.</p>
              <p>For further information, you can contact: istanbulyouthsummit@gmail.com <a href="mailto:istanbuyouthsummit@gmail.com">istanbuyouthsummit@gmail.com</a></p>
            </div>
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
    <!-- Modal -->
    <div class="modal fade" id="mdlUploadAggree" tabindex="-1" aria-labelledby="mdlUploadAggreeLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlUploadAggreeLabel">Upload Agreement Letter</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
          <form action="<?= site_url('document/upload-agreement')?>" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
              <div class="form-group">
                <label for="">File Agreement</label>
                <input class="form-control" type="file" accept=".pdf" name="agreement" required>
              </div>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit"  href=""  class="btn btn-soft-success">Upload</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
</main>
<!-- ========== END MAIN CONTENT ========== -->
<script>
  function mdlUploadAggree(){
    $('#mdlUploadAggree').modal('show')
  }
</script>