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
              <li class="breadcrumb-item active" aria-current="page">Payment Status</li>
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

      <div class="col-md-6 offset-md-3">
        <div class="d-grid gap-3 gap-lg-5">
          <!-- Card -->
          <div class="card">
            <!-- <div class="card-header border-bottom">
              <h4 class="card-header-title">Announcement</h4>
            </div> -->

            <!-- Body -->
            <div class="card-body">
              <div class="row border-bottom">
                  <div class="col col-md-9">
                      <h3>Payment Status</h3>
                  </div>
                  <div class="col col-md-3" style="text-align: right;">
                      <a class="link link-sm link-secondary" href="<?= site_url('payment')?>">
                          <i class="bi-chevron-left small ms-1"></i> Go back
                      </a>
                  </div>
              </div>
              <?php
                $expiredTrans  = date_format(date_create($paymentDetail->date_expired), 'F d, Y H:i:s');
                $dateNow            = date("Y-m-d H:i:s");

                if((strtotime($dateNow) < strtotime($expiredTrans)) && $paymentDetail->status == '2'){
              ?>
              <div class="js-countdown row mt-5 text-center mb-5">
                  <div class="col-4">
                    <h2 class="js-cd-hours h1 mb-0"></h2>
                    <h5 class="mb-0">Hour</h5>
                  </div>
                  <!-- End Col -->

                  <div class="col-4">
                    <h2 class="js-cd-minutes h1 mb-0"></h2>
                    <h5 class="mb-0">Minute</h5>
                  </div>
                  <!-- End Col -->

                  <div class="col-4">
                    <h2 class="js-cd-seconds h1 mb-0"></h2>
                    <h5 class="mb-0">Second</h5>
                  </div>
                <!-- End Col -->
              </div>
              <?php }else{?>
                <div class="js-countdown row mt-5 text-center mb-5">
                  <div class="col-4">
                    <h2 class="h1 mb-0">0</h2>
                    <h5 class="mb-0">Hour</h5>
                  </div>
                  <!-- End Col -->

                  <div class="col-4">
                    <h2 class="h1 mb-0">0</h2>
                    <h5 class="mb-0">Minute</h5>
                  </div>
                  <!-- End Col -->

                  <div class="col-4">
                    <h2 class="h1 mb-0">0</h2>
                    <h5 class="mb-0">Second</h5>
                  </div>
                <!-- End Col -->
              </div>
              <?php }?>
              <div id="boxStatus" class="text-center mb-4">
                  <?php
                    if($paymentDetail->status == '2'){
                      echo '
                        <button type="button" class="btn btn-warning">PENDING</button>    
                      ';
                    }else if($paymentDetail->status == '3'){
                      echo '
                        <button type="button" class="btn btn-danger">CANCELED</button>    
                      ';
                    }else if($paymentDetail->status == '4'){
                      echo '
                        <button type="button" class="btn btn-danger">EXPIRED</button>    
                      ';
                    }else if($paymentDetail->status == '5'){
                      echo '
                        <button type="button" class="btn btn-danger">DENY</button>    
                      ';
                    }else if($paymentDetail->status == '6'){
                      echo '
                        <button type="button" class="btn btn-success">SUCCESS</button>    
                      ';
                    }
                  ?>
              </div>
              <dl class="row mb-4">
                  <dt class="col-sm-6">ID TRANSACTION</dt>
                  <dd class="col-sm-6 text-sm-end mb-0"><?= $paymentDetail->id_payment_transaction?></dd>
              </dl>
              <dl class="row mt-4 mb-4">
                  <dt class="col-sm-6">PAYPAL ID</dt>
                  <dd class="col-sm-6 text-sm-end mb-0">istanbulyouthsummit</dd>
              </dl>
              <dl class="row mt-4 mb-4">
                  <dt class="col-sm-6">PAYPAL EMAIL</dt>
                  <dd class="col-sm-6 text-sm-end mb-0">istanbulyouthsummit@gmail.com</dd>
              </dl>
              <dl class="row mt-4 mb-4">
                  <dt class="col-sm-6">DATE</dt>
                  <dd class="col-sm-6 text-sm-end mb-0"><?= strtoupper(date_format(date_create($paymentDetail->date), 'F d, Y H:i'))?></dd>
              </dl>
              <dl class="row mt-4 mb-4">
                  <dt class="col-sm-6">Expired Date</dt>
                  <dd class="col-sm-6 text-sm-end mb-0"><?= strtoupper(date_format(date_create($paymentDetail->date_expired), 'F d, Y H:i'))?></dd>
              </dl>
              <dl class="row mb-4">
                  <dt class="col-sm-6">ITEM</dt>
                  <dd class="col-sm-6 text-sm-end mb-0"><?= strtoupper($paymentDetail->item)?></dd>
              </dl>
              <dl class="row mb-4">
                  <dt class="col-sm-6">METHOD TYPE</dt>
                  <dd class="col-sm-6 text-sm-end mb-0"><?= strtoupper(str_replace("_", " ", $paymentDetail->method_type))?></dd>
              </dl>
              <dl class="row mb-4">
                  <dt class="col-sm-6">METHOD</dt>
                  <dd class="col-sm-6 text-sm-end mb-0">
                      <img style="max-width: 75px;" src="<?= $paymentDetail->method_img?>" alt="">
                  </dd>
              </dl>
              <p><b>Note:</b></p>
              <p class="mb-4">- If there is an error, please reload your browser, if still send an email to <a href="mailto:istanbuyouthsummit@gmail.com">istanbuyouthsummit@gmail.com</a></p>
              <?php
                if($paymentDetail->status == '2'){
              ?>
              <div class="row mt-4">
                <div class="col">
                  <button onclick="mdlCancel()" class="btn btn-soft-danger w-100 mt-4">Cancel Payment</button>
                </div>
              </div>
              <?php }?>
            </div>
            <!-- End Body -->
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
   <div class="modal fade" id="mdlCancel" tabindex="-1" aria-labelledby="mdlCancelLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlCancelLabel">Cancel Payment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body text-center">
              <h4 class="text-center">Are you sure cancel this payment ?</h4>
          </div>

          <div class="modal-footer">
            <form action="<?= site_url('payment/paypal-cancel')?>" method="POST">
              <input type="hidden" name="id" id=mdlCancel_id" value="<?= $paymentDetail->id_payment_transaction?>">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-soft-danger">Cancel Payment</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
</main>
<!-- ========== END MAIN CONTENT ========== -->
<script src="<?= site_url()?>assets/vendor/countdown/countdown.js"></script>
<script>
  function mdlCancel(){
    $('#mdlCancel').modal('show')
  }
  // INITIALIZATION OF COUNTDOWN
      // =======================================================
      // const dateExpired = new Date('September 03, 2022 12:00:00')
      const dateExpired = new Date('<?= date_format(date_create($paymentDetail->date_expired), 'F d, Y H:i:s')?>')
      // console.log(dateExpired.setDate())

      document.querySelectorAll('.js-countdown').forEach(item => {
        // const days = item.querySelector('.js-cd-days'),
          hours = item.querySelector('.js-cd-hours'),
          minutes = item.querySelector('.js-cd-minutes'),
          seconds = item.querySelector('.js-cd-seconds')

        countdown(dateExpired,
          ts => {
            // days.innerHTML = ts.days
            hours.innerHTML = ts.hours
            minutes.innerHTML = ts.minutes
            seconds.innerHTML = ts.seconds
          },
          countdown.HOURS | countdown.MINUTES | countdown.SECONDS
        )
      })
</script>