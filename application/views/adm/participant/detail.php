  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Navbar -->
    <nav class="js-nav-scroller navbar navbar-expand-lg navbar-sidebar navbar-vertical navbar-light bg-white border-end"
          data-hs-nav-scroller-options='{
            "type": "vertical",
            "target": ".navbar-nav .active",
            "offset": 80
           }'>
      <!-- Navbar Toggle -->
      <button type="button" class="navbar-toggler btn btn-white d-grid w-100" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenu">
        <span class="d-flex justify-content-between align-items-center">
          <span class="h6 mb-0">Nav menu</span>

          <span class="navbar-toggler-default">
            <i class="bi-list"></i>
          </span>

          <span class="navbar-toggler-toggled">
            <i class="bi-x"></i>
          </span>
        </span>
      </button>
      <!-- End Navbar Toggle -->

      <!-- Navbar Collapse -->
      <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
        <div class="navbar-brand-wrapper border-end" style="height: auto;">
          <!-- Default Logo -->
          <div class="d-flex align-items-center mb-3">
            <a class="navbar-brand" href="../snippets/index.html" aria-label="Space">
              <img class="" src="<?= site_url()?>assets/img/logo/logo.png" style="width: 100px;" alt="Logo">
            </a>
            
          </div>
          <!-- End Default Logo -->
        </div>

        <?php
          $this->load->view('templates/adm/sidebar');
        ?>
      </div>
      <!-- End Navbar Collapse -->
    </nav>
    <!-- End Navbar -->

    <!-- Content -->
    <div class="navbar-sidebar-aside-content content-space-1 content-space-md-2 px-lg-5 px-xl-10">
      <!-- Page Header -->
      <div class="docs-page-header">
        <div class="row align-items-center">
          <div class="col-sm">
            <h1 class="docs-page-header-title mt-5">Participant Detail</h1>
            <small><?= $pDetail->fullname?></small>
          </div>
          <div class="col">
            
            <!-- <a href="<?= site_url('admin/participant/edit/'.$pDetail->id_user)?>" style="float: right;" class="btn btn-soft-primary btn-sm">
                <i class="bi-pencil"></i>
                Edit 
            </a> -->
          </div>
        </div>
      </div>
      <!-- End Page Header -->

      <div class="row">
        <div class="col">
            <?php
                if($this->session->flashdata('succ_msg')){
                    echo '
                        <div class="alert alert-soft-success mb-3" role="alert">
                            '.$this->session->flashdata('succ_msg').'
                        </div>        
                    ';
                }
            ?>
            <?php
                if($pDetail->is_submited == '1' && $pDetail->is_checked == '0'){
                    echo '
                        <button onclick="showMdlChecked(\''.$pDetail->id_user.'\')" style="float: right;" class="btn btn-soft-info btn-sm"><i class="bi-check"></i> Check</button>
                    ';
                }

                if($pDetail->is_checked == '1'){
                    echo '
                        <span style="float: right;" class="badge bg-soft-success text-success">Checked</span>
                    ';
                }
            ?>
        </div>
      </div>

        <!-- Table -->
        <div class="row mt-3">
            <?php if($pDetail->is_submited == '0' || $pDetail->is_submited == null){?>
                <div class="alert alert-soft-danger" role="alert">
                    This user has not completed personal data
                </div>  
            <?php }else{?>
                <div class="text-center boxDetail">
                    <ul class="nav nav-segment nav-pills mb-7" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link active" id="nav-one-eg1-tab" href="#nav-one-eg1" data-bs-toggle="pill" data-bs-target="#nav-one-eg1" role="tab" aria-controls="nav-one-eg1" aria-selected="true">Basic</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="nav-two-eg1-tab" href="#nav-two-eg1" data-bs-toggle="pill" data-bs-target="#nav-two-eg1" role="tab" aria-controls="nav-two-eg1" aria-selected="false">Other</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="nav-three-eg1-tab" href="#nav-three-eg1" data-bs-toggle="pill" data-bs-target="#nav-three-eg1" role="tab" aria-controls="nav-three-eg1" aria-selected="false">Essay</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="nav-four-eg1-tab" href="#nav-four-eg1" data-bs-toggle="pill" data-bs-target="#nav-four-eg1" role="tab" aria-controls="nav-four-eg1" aria-selected="false">Program</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="nav-five-eg1-tab" href="#nav-five-eg1" data-bs-toggle="pill" data-bs-target="#nav-five-eg1" role="tab" aria-controls="nav-five-eg1" aria-selected="false">Self Photo</a>
                        </li>
                    </ul>
                    </div>
                    <!-- End Nav -->

                    <!-- Tab Content -->
                    <div class="tab-content boxDetail">
                    <div class="tab-pane fade show active" id="nav-one-eg1" role="tabpanel" aria-labelledby="nav-one-eg1-tab">
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Full Name</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->fullname?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Birthdate</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= date_format(date_create($pDetail->birth_date), 'F d, Y')?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Gender</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->gender == '1' ? 'Male' : 'Female'?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Address</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->detail_address.", ".$pDetail->postal_code.", ".$pDetail->city.", ".$pDetail->city ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Nationality</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->nationality ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Occupation</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->occupation ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Field of Study</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->field_of_study ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Institution / Workplace</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->institution_workplace ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Whatsapp Number</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->whatsapp_number ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Instagram Account</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b>@<?= $pDetail->instagram ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Emergency Contact</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->emergency_contact ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Contact Relation</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->contact_relation ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Disease History</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->disease_history ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">T-Shirt Size</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->tshirt_size ?></b></span>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-two-eg1" role="tabpanel" aria-labelledby="nav-two-eg1-tab">
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Experience</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->experience?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Achievements</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->achievements?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Social Projects</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->social_projects?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Talents</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->talents?></b></span>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-three-eg1" role="tabpanel" aria-labelledby="nav-three-eg1-tab">
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Sub Theme</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->essay_type?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Essay</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->essay?></b></span>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-four-eg1" role="tabpanel" aria-labelledby="nav-four-eg1-tab">
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">How do you know about this program?</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->source?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Souce Account/Name</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->source_account?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Twibbon Link</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->motivation_link?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Share Requirement Proof Link</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->share_proof_link?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Referral Code</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= $pDetail->referral_code?></b></span>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-five-eg1" role="tabpanel" aria-labelledby="nav-five-eg1-tab">
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Photo</label>
                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <div id="boxImg" class="text-center mb-3 p-3" style="border: .0625rem solid rgba(33,50,91,.1);border-radius: .3125rem;cursor: pointer;">
                                    <img style="max-width: 300px;" id="blah" class="" src="<?= $pDetail->photo ?>" />
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- End Tab Content -->
            <?php }?>
        </div>
          <!-- End Table -->
    </div>
    <!-- End Content -->
    <!-- Modal -->
    <div class="modal fade" id="mdlChecked" tabindex="-1" aria-labelledby="mdlDeleteLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlDeleteLabel">Checked Participant</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body text-center">
              <div class="text-center">Are you sure to checked this user?</div>
          </div>

          <div class="modal-footer">
            <form action="<?= site_url('admin/participant/checked')?> " method="post">
              <input type="hidden" name="id" id="mdlChecked_id" >
              <input type="hidden" name="page" value="participant/<?= $pDetail->id_user?>" >
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-soft-success">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
  </main>
  <script>
    const showMdlChecked = id => {
      const pass = Math.random().toString(36).slice(-8);
      $('#mdlChecked_id').val(id);
      $('#mdlChecked').modal('show')
    }
  </script>