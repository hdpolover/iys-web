<main id="content" role="main">
<!-- Hero Section -->
  <!-- Content -->
  <div class="container content-space-1 content-space-t-lg-0 content-space-b-lg-2 mt-lg-n10 ">
    <div class="row" style="margin-top: 10rem;">

      <div class="col-lg-12">
        <div class="d-grid gap-3 gap-lg-5">
          <!-- Card -->
          <div class="card">
            <!-- <div class="card-header border-bottom">
              <h4 class="card-header-title">Announcement</h4>
            </div> -->

            <!-- Body -->
            <div class="card-body">
                <div class="row">
                    <div class="col col-md-9">
                        <h2><?= $announcement->title ?></h2>
                    </div>
                    <div class="col col-md-3" style="text-align: right;">
                        <a class="link link-sm link-secondary" href="<?= site_url('announcement-general')?>">
                            <i class="bi-chevron-left small ms-1"></i> Go back
                        </a>
                    </div>
                </div>
                <p class="card-text mb-5">
                    <small class="text-muted"><?= date_format(date_create($announcement->date), 'l, j F Y H:i')?></small>
                </p>
                <div class="text-center mb-6">
                    <?php
                      $poster = $announcement->poster == null || $announcement->poster == '' ? site_url('assets/img/img7.jpg') : $announcement->poster;
                    ?>
                    <img src="<?= $poster?>" style="max-width: 650px;" alt="">
                </div>
                <span>
                    <?= $announcement->content?>
                </span>
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
<!-- End Hero Section -->
</main>