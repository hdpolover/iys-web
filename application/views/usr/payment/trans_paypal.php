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
                <div class="js-countdown row mt-3">
                    <div class="col-3">
                      <h2 class="js-cd-days h1 text-white mb-0"></h2>
                      <h5 class="mb-0 text-white">:</h5>
                    </div>
                    <!-- End Col -->

                    <div class="col-3">
                      <h2 class="js-cd-hours h1 text-white mb-0"></h2>
                      <h5 class="mb-0 text-white">:</h5>
                    </div>
                    <!-- End Col -->

                    <div class="col-3">
                      <h2 class="js-cd-minutes h1 text-white mb-0"></h2>
                      <h5 class="mb-0 text-white">:</h5>
                    </div>
                    <!-- End Col -->

                    <div class="col-3">
                      <h2 class="js-cd-seconds h1 text-white mb-0"></h2>
                      <h5 class="mb-0 text-white"></h5>
                    </div>
                  <!-- End Col -->
                </div>
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
                <?php
                  if($paymentDetail->virtual_number != null){
                    echo '
                      <dl class="row mb-4">
                          <dt class="col-sm-6">VIRTUAL NUMBER</dt>
                          <dd class="col-sm-6 text-sm-end mb-0">'.$paymentDetail->virtual_number.'</dd>
                      </dl>
                    ';
                  }

                  if($paymentDetail->bill_key != null){
                    echo '
                      <dl class="row mb-4">
                          <dt class="col-sm-6">BILL KEY</dt>
                          <dd class="col-sm-6 text-sm-end mb-0">'.$paymentDetail->bill_key.'</dd>
                      </dl>
                    ';
                  }

                  if($paymentDetail->biller_code != null){
                    echo '
                      <dl class="row mb-4">
                          <dt class="col-sm-6">BILLER CODE</dt>
                          <dd class="col-sm-6 text-sm-end mb-0">'.$paymentDetail->biller_code.'</dd>
                      </dl>
                    ';
                  }
                ?>
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
</main>
<!-- ========== END MAIN CONTENT ========== -->