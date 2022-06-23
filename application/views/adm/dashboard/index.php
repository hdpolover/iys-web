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
            <a class="navbar-brand-badge" href="../documentation/changelog.html">
              <span class="badge bg-soft-primary text-primary ms-2">v4.1</span>
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
            <h1 class="docs-page-header-title">Dashboard</h1>
          </div>
        </div>
      </div>
      <!-- End Page Header -->

      <div class="d-flex">
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
    </div>
    <!-- End Content -->
  </main>