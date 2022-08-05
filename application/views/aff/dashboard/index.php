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
            <div class="col-sm-12 col-lg-6 mb-3 mb-lg-5">
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
            <div class="col-sm-12 col-lg-6 mb-3 mb-lg-5">
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

          </div>
          <div class="row mt-4">
            <div class="col">
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
                                  <td scope="col">'.$regis->fullname.'</td>
                                  <td scope="col">'.$regis->nationality.'</td>
                              </tr>   
                          ';
                      }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col">
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
          </div>
        </div>
    </div>
    <!-- End Content -->
  </main>
  <script>
  </script>