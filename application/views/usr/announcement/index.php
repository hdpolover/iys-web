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
            <?php
              if($this->session->userdata('is_verif') == 0){
                echo '
                  <div class="alert alert-soft-danger text-center card-alert" role="alert">
                    Please verify your email address.
                  </div>
                ';
              }
              if($this->session->flashdata('succ_alert')){
                echo '
                  <div class="alert alert-soft-success text-center card-alert" role="alert">
                    '.$this->session->flashdata('succ_alert').'
                  </div>
                ';
              }
            ?>

            <!-- Body -->
            <div class="card-body">
              <div class="row">
                <?php
                  if($announcements == null){
                    echo '
                      <div class="d-flex">
                          <div class="container d-flex align-items-center mt-5">
                              <div class="w-sm-75 w-lg-50 text-center mx-sm-auto">
                                  <div class="mb-7">
                                  <img class="img-fluid" src="'.site_url("assets/svg/illustrations/oc-relaxing.svg").'" alt="SVG Illustration">
                                  </div>

                                  <h1 class="h2">No announcements yet.</h1>
                                  <p> Stay tuned for announcements at the Istanbul Youth Summit. Immediately complete your personal data!</p>
                              </div>
                          </div>
                      </div>
                    ';
                  }

                  foreach ($announcements as $announcement) {
                    $poster = $announcement->poster == null || $announcement->poster == '' ? site_url('assets/img/img7.jpg') : $announcement->poster;
                    echo '
                      <div class="col col-sm-6 mb-6">
                        <!-- Card -->
                        <div class="card card-sm" style="max-width: 20rem;">
                          <img class="card-img-top" src="'.$poster.'" alt="Card image cap">
                          <div class="card-body">
                            <h3 class="card-title">'.$announcement->title.'</h3>
                            <span class="card-text maxText mb-1">'.$announcement->content.'</span>
                            <a class="card-link" href="'.site_url('announcement/'.$announcement->id_announcement).'">Read more <i class="bi-chevron-right small ms-1"></i></a>
                            <p class="card-text mt-3">
                              <small class="text-muted">'.date_format(date_create($announcement->date), 'F d, Y H:i').'</small>
                            </p>
                          </div>
                        </div>
                        <!-- End Card -->
                      </div>    
                    ';
                  }
                ?>
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