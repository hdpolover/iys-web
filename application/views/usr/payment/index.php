<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="bg-light mt-6">
  <!-- Breadcrumb -->
  <div class="navbar-dark bg-dark" style="background-image: url(<?site_url()?>assets/svg/components/wave-pattern-light.svg);">
    <div class="container content-space-1 content-space-b-lg-3">
      <div class="row align-items-center">
        <div class="col">
          <div class="d-none d-lg-block">
            <h1 class="h2 text-white">Payment</h1>
          </div>

          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light mb-0">
              <li class="breadcrumb-item">Payment</li>
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
              <h4 class="card-header-title">Payment</h4>
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
                <div class="swiper-center-mode-end">
                  <div class="js-swiper-course-hero swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-2278.5px, 0px, 0px);" id="swiper-wrapper-5a425f09d848fff3" aria-live="polite"><div class="swiper-slide pt-2 swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="1 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img14.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">New</span>
                            <h4 class="card-title text-white">Cloud computing</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div><div class="swiper-slide pt-2 swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="2 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img13.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">Phython</span>
                            <h4 class="card-title text-white">What's new in Phython 3.7.2</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div><div class="swiper-slide pt-2 swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="3 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img15.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">Tooling</span>
                            <h4 class="card-title text-white">Build a staging server</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div><div class="swiper-slide pt-2 swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="4 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img16.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">JavaScript</span>
                            <h4 class="card-title text-white">Laravel, Vue and SPAs</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div><div class="swiper-slide pt-2 swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="4" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="5 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img17.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">Popular</span>
                            <h4 class="card-title text-white">Artificial Intelligence</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div><div class="swiper-slide pt-2 swiper-slide-duplicate" data-swiper-slide-index="5" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="6 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img18.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">PHP</span>
                            <h4 class="card-title text-white">Programming terms explained</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div>
                      <!-- Slide -->
                      <div class="swiper-slide pt-2" data-swiper-slide-index="0" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="1 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img14.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">New</span>
                            <h4 class="card-title text-white">Cloud computing</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div>
                      <!-- End Slide -->

                      <!-- Slide -->
                      <div class="swiper-slide pt-2" data-swiper-slide-index="1" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="2 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img13.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">Phython</span>
                            <h4 class="card-title text-white">What's new in Phython 3.7.2</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div>
                      <!-- End Slide -->

                      <!-- Slide -->
                      <div class="swiper-slide pt-2 swiper-slide-prev" data-swiper-slide-index="2" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="3 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img15.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">Tooling</span>
                            <h4 class="card-title text-white">Build a staging server</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div>
                      <!-- End Slide -->

                      <!-- Slide -->
                      <div class="swiper-slide pt-2 swiper-slide-active" data-swiper-slide-index="3" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="4 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img16.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">JavaScript</span>
                            <h4 class="card-title text-white">Laravel, Vue and SPAs</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div>
                      <!-- End Slide -->

                      <!-- Slide -->
                      <div class="swiper-slide pt-2 swiper-slide-next" data-swiper-slide-index="4" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="5 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img17.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">Popular</span>
                            <h4 class="card-title text-white">Artificial Intelligence</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div>
                      <!-- End Slide -->

                      <!-- Slide -->
                      <div class="swiper-slide pt-2" data-swiper-slide-index="5" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="6 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img18.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">PHP</span>
                            <h4 class="card-title text-white">Programming terms explained</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div>
                      <!-- End Slide -->
                    <div class="swiper-slide pt-2 swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="1 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img14.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">New</span>
                            <h4 class="card-title text-white">Cloud computing</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div><div class="swiper-slide pt-2 swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="2 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img13.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">Phython</span>
                            <h4 class="card-title text-white">What's new in Phython 3.7.2</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div><div class="swiper-slide pt-2 swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="3 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img15.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">Tooling</span>
                            <h4 class="card-title text-white">Build a staging server</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div><div class="swiper-slide pt-2 swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="4 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img16.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">JavaScript</span>
                            <h4 class="card-title text-white">Laravel, Vue and SPAs</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div><div class="swiper-slide pt-2 swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="4" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="5 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img17.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">Popular</span>
                            <h4 class="card-title text-white">Artificial Intelligence</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div><div class="swiper-slide pt-2 swiper-slide-duplicate" data-swiper-slide-index="5" style="width: 238.167px; margin-right: 15px;" role="group" aria-label="6 / 6">
                        <!-- Card -->
                        <a class="card card-sm card-stretched-vertical card-transition bg-img-start" href="../demo-course/course-overview.html" style="background-image: url(../assets/img/400x500/img18.jpg); min-height: 15rem;">
                          <div class="card-body">
                            <span class="card-subtitle text-white-70">PHP</span>
                            <h4 class="card-title text-white">Programming terms explained</h4>
                            
                            <div class="card-footer pt-0">
                              <span class="card-link text-white">Read now</span>
                            </div>
                          </div>
                        </a>
                        <!-- End Card -->
                      </div></div>

                    <!-- Arrows -->
                    <div class="js-swiper-course-hero-button-next swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-5a425f09d848fff3"></div>
                    <div class="js-swiper-course-hero-button-prev swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-5a425f09d848fff3"></div>
                  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
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