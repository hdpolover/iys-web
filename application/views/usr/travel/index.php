<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="bg-light mt-6">
  <!-- Breadcrumb -->
  <div class="navbar-dark bg-dark" style="background-image: url(<?site_url()?>assets/svg/components/wave-pattern-light.svg);">
    <div class="container content-space-1 content-space-b-lg-3">
      <div class="row align-items-center">
        <div class="col">
          <div class="d-none d-lg-block">
            <h1 class="h2 text-white">Travel Information</h1>
          </div>

          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light mb-0">
              <li class="breadcrumb-item">Travel Information</li>
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
                <div class="col col-sm-6 mb-6">
                    <!-- Card -->
                    <div class="card card-sm" style="max-width: 20rem;">
                        <div class="card-body">
                            <h3 class="card-title">Passport</h3>
                            <?php
                              if($passport == null){
                                echo '<span class="badge bg-danger">Not Completed</span>';
                              }else{
                                echo '<span class="badge bg-success">Completed</span>';
                              }
                            ?>
                            
                            <div class="text-center">
                                <img class="" src="<?= site_url()?>assets/img/logo/logo.png" style="width: 175px;" alt="Logo">
                            </div>
                            <button onclick="mdlUploadPassport()" class="btn btn-soft-primary w-100 mt-3">Upload Passport</button>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <div class="col col-sm-6 mb-6">
                    <!-- Card -->
                    <div class="card card-sm" style="max-width: 20rem;">
                        <div class="card-body">
                            <h3 class="card-title">Flight</h3>
                            <?php
                              if($flight == null){
                                echo '<span class="badge bg-danger">Not Completed</span>';
                              }else{
                                echo '<span class="badge bg-success">Completed</span>';
                              }
                            ?>
                            <div class="text-center">
                                <img class="" src="<?= site_url()?>assets/img/logo/logo.png" style="width: 175px;" alt="Logo">
                            </div>
                            <button onclick="mdlUploadFlight()" class="btn btn-soft-primary w-100 mt-3">Upload Flight</button>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <div class="col col-sm-6 mb-6">
                    <!-- Card -->
                    <div class="card card-sm" style="max-width: 20rem;">
                        <div class="card-body">
                            <h3 class="card-title">Residence</h3>
                            <?php
                              if($residence == null){
                                echo '<span class="badge bg-danger">Not Completed</span>';
                              }else{
                                echo '<span class="badge bg-success">Completed</span>';
                              }
                            ?>
                            <div class="text-center">
                                <img class="" src="<?= site_url()?>assets/img/logo/logo.png" style="width: 175px;" alt="Logo">
                            </div>
                            <button onclick="mdlUploadResidence()" class="btn btn-soft-primary w-100 mt-3">Upload Residence</button>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <div class="col col-sm-6 mb-6">
                    <!-- Card -->
                    <div class="card card-sm" style="max-width: 20rem;">
                        <div class="card-body">
                            <h3 class="card-title">Visa</h3>
                            <?php
                              if($visa != null){
                                echo '<span class="badge bg-success">Completed</span>';
                              }
                            ?>
                            <div class="text-center">
                                <img class="" src="<?= site_url()?>assets/img/logo/logo.png" style="width: 175px;" alt="Logo">
                            </div>
                            <button onclick="mdlUploadVisa()" class="btn btn-soft-primary w-100 mt-3 mb-3">Upload Visa</button>
                            <span class="form-text"><b>Note:</b></span>
                            <p class="form-text">If you are required to have a visa to enter Turkiye, please upload the document. If not, leave it blank.</p>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
              </div>
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer pt-0">
            <!-- <div class="card-footer">
              <p><b>Note:</b></p>
              <p>- Your document will be reviewed in 3 days after the submission.</p>
              <p>For further information, you can contact: istanbulyouthsummit@gmail.com <a href="mailto:istanbuyouthsummit@gmail.com">istanbuyouthsummit@gmail.com</a></p>
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
    <!-- Modal -->
    <div class="modal fade" id="mdlUploadPassport" tabindex="-1" aria-labelledby="mdlUploadPassportLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlUploadPassportLabel">Upload Passport</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
          <form action="<?= site_url('travel/passport')?>" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
              <div class="form-group mb-3">
                <label for="">Passport Number</label>
                <input class="form-control" type="text" value="<?= $passport != null ? $passport[0]->number : ""?>" name="passportNumber" required>
              </div>
              <div class="form-group mb-3">
                <label for="">Full Name</label>
                <input class="form-control" type="text" value="<?= $passport != null ? $passport[0]->full_name : ""?>" name="fullname" required>
              </div>
              <div class="form-group mb-3">
                <label for="">Passport File</label>
                <div id="boxImg" class="text-center mb-3 p-3" style="border: .0625rem solid rgba(33,50,91,.1);border-radius: .3125rem;cursor: pointer;">
                    <img style="max-width: 300px;" id="blah" class="" src=" <?= $passport != null ? $passport[0]->file : site_url('assets/svg/illustrations/oc-lost.svg')?>" />
                </div>
                <input class="form-control" type="file" accept=".jpg,.png,.jpeg" name="passportFile" style="cursor: pointer;" id="imgPoster" <?= $passport == null ? "required" : ""?> >
              </div>
          </div>

          <div class="modal-footer">
              <input type="hidden" name="id" value="<?= $passport != null ? $passport[0]->id_passport : ""?>">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit"  href=""  class="btn btn-soft-success">Upload</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
    <!-- Modal -->
    <div class="modal fade" id="mdlUploadFlight" tabindex="-1" aria-labelledby="mdlUploadFlightLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlUploadFlightLabel">Upload Flight Information</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
          <form action="<?= site_url('travel/flight')?>" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
              <h4>DEPARTURE</h4>
              <div class="form-group mb-3">
                <label for="">Departure Airport</label>
                <select name="depAirport" class="form-control" id="" required>
                  <option value="" selected disabled>Choose Type</option>
                  <option value="Istanbul Airport" <?= $flight != null && $flight[0]->departure_airport == "Istanbul Airport" ? "Selected" : "" ?> >Istanbul Airport</option>
                  <option value="Sabiha Gökçen Airport" <?= $flight != null && $flight[0]->departure_airport == "Sabiha Gökçen Airport" ? "Selected" : "" ?>>Sabiha Gökçen Airport</option>
                </select>
              </div>
              <div class="form-group mb-3">
                <label for="">Departure Date</label> <small>(Based on Ticket)</small>
                <input type="text" class="form-control flatpickr" value="<?= $flight != null ? date_format(date_create($flight[0]->departure_date), 'F j, Y') : ""?>" name="depDate" required>
              </div>
              <div class="form-group mb-3">
                <label for="">Departure Time</label> <small>(Based on Ticket)</small>
                <input type="text" class="form-control flatpickrTime" value="<?= $flight != null ? $flight[0]->departure_time : ""?>" name="depTime" required>
              </div>
              <div class="form-group mb-3">
                <label for="">Departure Airline</label>
                <input class="form-control" type="text" value="<?= $flight != null ? $flight[0]->departure_airlane : ""?>" name="depAir" required>
              </div>
              <div class="form-group mb-3">
                <label for="">Departure Flight Code</label>
                <input class="form-control" type="text" value="<?= $flight != null ? $flight[0]->departure_flight_code : ""?>" name="depCode" required>
              </div>
              <h4>RETURN</h4>
              <div class="form-group mb-3">
                <label for="">Return Airport</label>
                <select name="retAirport" class="form-control" id="" required>
                  <option value="" selected disabled>Choose Type</option>
                  <option value="Istanbul Airport" <?= $flight != null && $flight[0]->return_airport == "Istanbul Airport" ? "Selected" : "" ?> >Istanbul Airport</option>
                  <option value="Sabiha Gökçen Airport" <?= $flight != null && $flight[0]->return_airport == "Sabiha Gökçen Airport" ? "Selected" : "" ?>>Sabiha Gökçen Airport</option>
                </select>
              </div>
              <div class="form-group mb-3">
                <label for="">Return Date</label> <small>(Based on Ticket)</small>
                <input type="text" class="form-control flatpickr" value="<?= $flight != null ? date_format(date_create($flight[0]->return_date), 'F j, Y') : ""?>" name="retDate" required>
              </div>
              <div class="form-group mb-3">
                <label for="">Return Time</label> <small>(Based on Ticket)</small>
                <input type="text" class="form-control flatpickrTime" value="<?= $flight != null ? $flight[0]->return_time : ""?>" name="retTime" required>
              </div>
              <div class="form-group mb-3">
                <label for="">Return Airline</label>
                <input class="form-control" type="text" name="retAir" value="<?= $flight != null ? $flight[0]->return_airlane : ""?>" required>
              </div>
              <div class="form-group mb-3">
                <label for="">Return Flight Code</label>
                <input class="form-control" type="text" value="<?= $flight != null ? $flight[0]->return_flight_code : ""?>" name="retCode" required>
              </div>
          </div>

          <div class="modal-footer">
              <input type="hidden" name="id" value="<?= $flight != null ? $flight[0]->id_flight : ""?>">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit"  href=""  class="btn btn-soft-success">Upload</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
    <!-- Modal -->
    <div class="modal fade" id="mdlUploadResidence" tabindex="-1" aria-labelledby="mdlUploadResidenceLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlUploadResidenceLabel">Upload Residence Information</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
          <form action="<?= site_url('travel/residence')?>" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
              <div class="form-group mb-3">
                <label for="">Type</label>
                <select name="resType" class="form-control" id="" required>
                  <option value="" selected disabled>Choose Type</option>
                  <option value="Hotel" <?= $residence != null && $residence[0]->type == "Hotel" ? "Selected" : "" ?> >Hotel</option>
                  <option value="Hostel" <?= $residence != null && $residence[0]->type == "Hostel" ? "Selected" : "" ?>>Hostel</option>
                  <option value="Apartment" <?= $residence != null && $residence[0]->type == "Apartment" ? "Selected" : "" ?>>Apartment</option>
                  <option value="Family" <?= $residence != null && $residence[0]->type == "Family" ? "Selected" : "" ?>>Family</option>
                  <option value="Others" <?= $residence != null && $residence[0]->type == "Others" ? "Selected" : "" ?>>Others</option>
                </select>
              </div>
              <div class="form-group mb-3">
                <label for="">Address</label>
                <input class="form-control" type="text" name="resAddress" value="<?= $residence != null ? $residence[0]->address : "" ?>" required>
              </div>
          </div>

          <div class="modal-footer">
              <input type="hidden" name="id" value="<?= $residence != null ? $residence[0]->id_residence : ""?>">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit"  href=""  class="btn btn-soft-success">Upload</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
    <!-- Modal -->
    <div class="modal fade" id="mdlUploadVisa" tabindex="-1" aria-labelledby="mdlUploadVisaLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlUploadVisaLabel">Upload Visa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
          <form action="<?= site_url('travel/visa')?>" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
              <div class="form-group mb-3">
                <label for="">Visa File</label>
                <div id="boxImg2" class="text-center mb-3 p-3" style="border: .0625rem solid rgba(33,50,91,.1);border-radius: .3125rem;cursor: pointer;">
                    <img style="max-width: 300px;" id="blah2" class="" src=" <?= $visa != null ? $visa[0]->file : site_url('assets/svg/illustrations/oc-lost.svg')?>" />
                </div>
                <input class="form-control" type="file" accept=".jpg,.png,.jpeg" name="visaFile" style="cursor: pointer;" id="imgPoster2" <?= $visa == null ? "required" : ""?>>
              </div>
          </div>

          <div class="modal-footer">
              <input type="hidden" name="id" value="<?= $visa != null ? $visa[0]->id_visa : ""?>">
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
  function mdlUploadPassport(){
    $('#mdlUploadPassport').modal('show')
  }
  function mdlUploadFlight(){
    $('#mdlUploadFlight').modal('show')
  }
  function mdlUploadResidence(){
    $('#mdlUploadResidence').modal('show')
  }
  function mdlUploadVisa(){
    $('#mdlUploadVisa').modal('show')
  }
</script>