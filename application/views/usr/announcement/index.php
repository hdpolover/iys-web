<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="bg-light">
  <!-- Breadcrumb -->
  <div class="navbar-dark bg-dark" style="background-image: url(<?site_url()?>assets/svg/components/wave-pattern-light.svg);">
    <div class="container content-space-1 content-space-b-lg-3">
      <div class="row align-items-center">
        <div class="col">
          <div class="d-none d-lg-block">
            <h1 class="h2 text-white">Announcement</h1>
          </div>

          <!-- Breadcrumb -->
          <!-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light mb-0">
              <li class="breadcrumb-item">Account</li>
              <li class="breadcrumb-item active" aria-current="page">Personal Info</li>
            </ol>
          </nav> -->
          <!-- End Breadcrumb -->
        </div>
        <!-- End Col -->

        <div class="col-auto">
          <div class="d-none d-lg-block">
            <a class="btn btn-soft-light btn-sm" href="<?= site_url('logout')?>">Sign Out</a>
          </div>

          <!-- Responsive Toggle Button -->
          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarNav" aria-controls="sidebarNav" aria-expanded="false" aria-label="Toggle navigation">
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
              <h4 class="card-header-title">Announcement</h4>
            </div>

            <!-- Body -->
            <div class="card-body">
              <div class="container d-flex align-items-center vh-100 mt-5">
                  <div class="w-sm-75 w-lg-50 text-center mx-sm-auto">
                      <div class="mb-7">
                      <img class="img-fluid" src="<?= site_url()?>assets/svg/illustrations/oc-maintenance.svg" alt="SVG Illustration">
                      </div>

                      <h1 class="h2">We're just tuning up a few things.</h1>
                      <p>We apologize for the inconvenience but IYS Web is currently undergoing planned maintenance. Stay tuned!</p>
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