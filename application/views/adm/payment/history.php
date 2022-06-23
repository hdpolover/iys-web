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
            <h1 class="docs-page-header-title">Payment History</h1>
            <small><?= $user->name?></small>
          </div>
        </div>
      </div>
      <!-- End Page Header -->

        <!-- Table -->
        <div class="row">
        <table class="table table-borderless table-thead-bordered">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Payment</th>
                  <th scope="col">Date</th>
                  <th scope="col">Method</th>
                  <th scope="col">Type</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    foreach ($historys as $history) {
                        $status = '';
                        // if($participant->is_verif == '1'){
                        //     $status = '
                        //         <span class="badge bg-soft-success text-success">Verified</span>
                        //     ';
                        // }else{
                        //     $status = '
                        //         <span class="badge bg-soft-danger text-danger">Not Verified</span>
                        //     ';
                        // }
                        echo '
                            <tr>
                                <td scope="col">'.$history->description.'</td>
                                <td scope="col">'.date_format(date_create($history->date), 'j F Y H:i:s').'</td>
                                <td scope="col">'.str_replace('_', ' ', strtoupper($history->method_type)).'</td>
                                <td scope="col">
                                    <img style="max-width: 75px;" src="'.$history->method_img.'" />
                                </td>
                                <td scope="col">'.strtoupper($history->status_title).'</td>

                            </tr>   
                        ';
                    }
                ?>
              </tbody>
            </table>
        </div>
          <!-- End Table -->
    </div>
    <!-- End Content -->
  </main>