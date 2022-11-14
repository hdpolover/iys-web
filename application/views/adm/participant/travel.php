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
                        <a class="nav-link active" id="nav-one-eg1-tab" href="#nav-one-eg1" data-bs-toggle="pill" data-bs-target="#nav-one-eg1" role="tab" aria-controls="nav-one-eg1" aria-selected="true">Passport</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="nav-two-eg1-tab" href="#nav-two-eg1" data-bs-toggle="pill" data-bs-target="#nav-two-eg1" role="tab" aria-controls="nav-two-eg1" aria-selected="false">Flight</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="nav-three-eg1-tab" href="#nav-three-eg1" data-bs-toggle="pill" data-bs-target="#nav-three-eg1" role="tab" aria-controls="nav-three-eg1" aria-selected="false">Residence</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="nav-four-eg1-tab" href="#nav-four-eg1" data-bs-toggle="pill" data-bs-target="#nav-four-eg1" role="tab" aria-controls="nav-four-eg1" aria-selected="false">Visa</a>
                        </li>
                    </ul>
                    </div>
                    <!-- End Nav -->

                    <!-- Tab Content -->
                    <div class="tab-content boxDetail">
                    <div class="tab-pane fade show active" id="nav-one-eg1" role="tabpanel" aria-labelledby="nav-one-eg1-tab">
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Passport Number</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= !empty($passport->number) ? $passport->number : ""?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Full Name</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= !empty($passport->full_name) ? $passport->full_name : ""?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">File</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <?php
                                    if(!empty($passport->file)){
                                        echo '
                                            <img src="'.$passport->file.'" width="250px" alt="">
                                        ';
                                    }
                                ?>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-two-eg1" role="tabpanel" aria-labelledby="nav-two-eg1-tab">
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Departure Airport</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= !empty($flight->departure_airport) ? $flight->departure_airport : "" ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Departure Date</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= !empty($flight->departure_date) ? date_format(date_create($flight->departure_date), 'F j, Y') : ""?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Departure Time</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= !empty($flight->departure_time) ? $flight->departure_time : "" ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Departure Airline</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= !empty($flight->departure_airlane) ? $flight->departure_airlane : "" ?></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Departure Flight Code</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= !empty($flight->departure_flight_code) ? $flight->departure_flight_code : "" ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Return Airport</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= !empty($flight->return_airport) ? $flight->return_airport : "" ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Return Date</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= !empty($flight->return_date) ? date_format(date_create($flight->return_date), 'F j, Y') : ""?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Return Time</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= !empty($flight->return_time) ? $flight->return_time : "" ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Return Airline</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= !empty($flight->return_airlane) ? $flight->return_airlane : "" ?></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Return Flight Code</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= !empty($flight->return_flight_code) ? $flight->return_flight_code : "" ?></b></span>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-three-eg1" role="tabpanel" aria-labelledby="nav-three-eg1-tab">
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Residence Type</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= !empty($residence->type) ? $residence->type : "" ?></b></span>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Address</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <span><b><?= !empty($residence->address) ? $residence->address : "" ?></b></span>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-four-eg1" role="tabpanel" aria-labelledby="nav-four-eg1-tab">
                        <div class="row mb-4">
                            <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">File</label>

                            <div class="col-sm-9">
                            <div class="js-form-message">
                                <?php
                                    if(!empty($visa->file)){
                                        echo '
                                            <img src="'.$visa->file.'" width="250px" alt="">
                                        ';
                                    }
                                ?>
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
  </main>
  <script>
  </script>