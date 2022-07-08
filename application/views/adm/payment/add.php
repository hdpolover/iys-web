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
            <h1 class="docs-page-header-title">Add Payment</h1>
          </div>
          <div class="col">
            <a href="#" style="float: right;" class="btn btn-soft-success btn-sm">
                <i class="bi-basket"></i>
                Pay
            </a>
          </div>
        </div>
      </div>
      <!-- End Page Header -->

        <!-- Table -->
        <div class="row mt-3">
            <h5>Input Key User</h5>
            <div class="row mt-2">
                <div class="col-6">
                  <div class="js-form-message input-group">
                      <input type="text" id="rc" class="form-control" name="referral" id="validationFormUsernameLabel" value="ulkw6789" placeholder="User Key" value="" aria-label="sourceAccount" required data-msg="Please enter your fullname.">
                      <button class="btn btn-success" onclick="checkRC()" type="button" id="button-addon2">Add</button>
                      <!-- <span class="form-text"><b>Note:</b> if you have the referral code of an IYS influencer. you can input it below. If not, just leave it "-".</span> -->
                      <span class="form-text" id="checkRCStatus"></span>
                      <span class="invalid-feedback">Please enter a valid referral.</span>
                  </div>
                </div>
            </div>
            <h5 class="mt-4">Item List</h5>
            <div class="row mt-2">
              <div class="col">
                <!-- Form Check -->
                <div class="form-check form-check-inline">
                  <input type="checkbox" id="formInlineCheck1" class="form-check-input" checked>
                  <label class="form-check-label" for="formInlineCheck1">Register</label>
                </div>
                <!-- End Form Check -->

                <!-- Form Check -->
                <div class="form-check form-check-inline">
                  <input type="checkbox" id="formInlineCheck2" class="form-check-input indeterminate-checkbox" checked>
                  <label class="form-check-label" for="formInlineCheck2">Batch 1</label>
                </div>
                <!-- End Form Check -->

                <!-- Form Check -->
                <div class="form-check form-check-inline">
                  <input type="checkbox" id="formInlineCheck3" class="form-check-input">
                  <label class="form-check-label" for="formInlineCheck3">Batch 2</label>
                </div>
                <!-- End Form Check -->
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <h5>Payment List</h5>
              </div>
              <div class="col">

              </div>
            </div>
            <table class="table table-borderless table-thead-bordered mt-2">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Key User</th>
                  <th scope="col">Payment</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Udin Idun</td>
                  <td>sdfweg</td>
                  <td>Registration</td>
                </tr>
              </tbody>
            </table>
        </div>
          <!-- End Table -->
    </div>
    <!-- End Content -->
  </main>