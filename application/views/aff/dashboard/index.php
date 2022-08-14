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
          $this->load->view('templates/aff/sidebar');
        ?>
      </div>
      <!-- End Navbar Collapse -->
    </nav>
    <!-- End Navbar -->

    <!-- Content -->
    <div class="navbar-sidebar-aside-content content-space-1 content-space-md-2 px-lg-5 px-xl-10">
        <div class="container mt-5">
          <h2>Statistic "<?= $ambassador[0]->referral_code." - ".$ambassador[0]->name?>"</h2>
          <hr>
          <div class="row">
            <div class="col-sm-12 col-lg-4 mb-3 mb-lg-5">
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h6 class="card-subtitle mb-2">Total Register</h6>
                  <small>Total users register account with referral code</small>

                  <div class="row align-items-center gx-2">
                    <div class="col">
                      <span class="counterChecked display-5 text-dark" data-value="24"><?= number_format(count($totalRegis))?></span>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>
            <div class="col-sm-12 col-lg-4 mb-3 mb-lg-5">
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h6 class="card-subtitle mb-2">Total Submit</h6>
                  <small>Total user submits self data with referral code</small>

                  <div class="row align-items-center gx-2">
                    <div class="col">
                      <span class="js-counter display-5 text-dark" data-value="24"><?= number_format(count($totalSubmit))?></span>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>
            <div class="col-sm-12 col-lg-4 mb-3 mb-lg-5">
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h6 class="card-subtitle mb-2">Total Payment</h6>
                  <small>Total user purchase register fee with referral code</small>

                  <div class="row align-items-center gx-2">
                    <div class="col">
                      <span class="js-counter display-5 text-dark" data-value="24"><?= number_format(count($totalPayment))?></span>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>

          </div>
          <div class="row mt-4">
            <div class="col">
              <!-- Nav -->
              <div class="text-center">
                <ul class="nav nav-segment nav-pills mb-7" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="nav-one-eg1-tab" href="#nav-one-eg1" data-bs-toggle="pill" data-bs-target="#nav-one-eg1" role="tab" aria-controls="nav-one-eg1" aria-selected="true">List Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="nav-two-eg1-tab" href="#nav-two-eg1" data-bs-toggle="pill" data-bs-target="#nav-two-eg1" role="tab" aria-controls="nav-two-eg1" aria-selected="false">List Submited</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="nav-three-eg1-tab" href="#nav-three-eg1" data-bs-toggle="pill" data-bs-target="#nav-three-eg1" role="tab" aria-controls="nav-three-eg1" aria-selected="false">List Payment</a>
                  </li>
                </ul>
              </div>
              <!-- End Nav -->

              <!-- Tab Content -->
              <div class="tab-content">
                <div class="tab-pane fade show active" id="nav-one-eg1" role="tabpanel" aria-labelledby="nav-one-eg1-tab">
                  <h4>List User Register</h4>
                  <small >List users register account with referral code</small>
                  <table style="margin-top: 5rem;" class="table table-borderless table-thead-bordered datatable">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Name</th>
                        <th scope="col">Nationality</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          $no = 1;
                          foreach ($totalRegis as $regis) {
                              echo '
                                  <tr>
                                      <td scope="col">'.$no++.'</td>
                                      <td scope="col">'.$regis->email.'</td>
                                      <td scope="col">'.$regis->name.'</td>
                                      <td scope="col">'.$regis->nationality.'</td>
                                  </tr>   
                              ';
                          }
                      ?>
                    </tbody>
                  </table>
                </div>

                <div class="tab-pane fade" id="nav-two-eg1" role="tabpanel" aria-labelledby="nav-two-eg1-tab">
                  <h4>List User Submit</h4>
                  <small>List user submits self data with referral code</small>
                  <table style="margin-top: 5rem;" class="table table-borderless table-thead-bordered datatable">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Name</th>
                        <th scope="col">Nationality</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          $no = 1;
                          foreach ($totalSubmit as $regis) {
                              echo '
                                  <tr>
                                      <td scope="col">'.$no++.'</td>
                                      <td scope="col">'.$regis->email.'</td>
                                      <td scope="col">'.$regis->name.'</td>
                                      <td scope="col">'.$regis->nationality.'</td>
                                  </tr>   
                              ';
                          }
                      ?>
                    </tbody>
                  </table>
                </div>

                <div class="tab-pane fade" id="nav-three-eg1" role="tabpanel" aria-labelledby="nav-three-eg1-tab">
                <h4>List User Submit</h4>
                  <small>List user submits self data with referral code</small>
                  <table style="margin-top: 5rem;" class="table table-borderless table-thead-bordered datatable">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Name</th>
                        <th scope="col">Nationality</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          $no = 1;
                          foreach ($totalPayment as $regis) {
                              echo '
                                  <tr>
                                      <td scope="col">'.$no++.'</td>
                                      <td scope="col">'.$regis->email.'</td>
                                      <td scope="col">'.$regis->name.'</td>
                                      <td scope="col">'.$regis->nationality.'</td>
                                  </tr>   
                              ';
                          }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- End Tab Content -->
              
            </div>
          </div>
        </div>
    </div>
    <!-- End Content -->
  </main>
  <script>
  </script>