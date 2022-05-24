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
              <li class="breadcrumb-item active" aria-current="page">Choose Payment Methods</li>
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

      <div class="col-md-8 offset-md-2">
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
                        <h3>Choose Payment Methods</h3>
                    </div>
                    <div class="col col-md-3" style="text-align: right;">
                        <a class="link link-sm link-secondary" href="<?= site_url('payment')?>">
                            <i class="bi-chevron-left small ms-1"></i> Go back
                        </a>
                    </div>
                </div>
                <div class="border-bottom pb-4 mt-4 mb-4">
                    <h6>Method</h6>
                    <h6 class="text-secondary">Bank Transfer</h6>
                    <div class="row gx-3">
                        <div class="col-6 col-md-3 mb-3">
                            <!-- Radio Check -->
                            <div class="form-check form-check-card text-center">
                            <input class="form-check-input" type="radio" name="typeOfListing" id="bni">
                            <label class="form-check-label" for="bni">
                                <img class="w-75 mb-3" src="<?= site_url('assets/img/payment/bni.png')?>" alt="SVG">
                                <span class="d-block">BNI VA</span>
                            </label>
                            </div>
                            <!-- End Radio Check -->
                        </div>
                        <!-- End Col -->

                        <div class="col-6 col-md-3 mb-3">
                            <!-- Radio Check -->
                            <div class="form-check form-check-card text-center">
                            <input class="form-check-input" type="radio" name="typeOfListing" id="bri" checked>
                            <label class="form-check-label" for="bri">
                                <img class="w-75 mb-3" src="<?= site_url('assets/img/payment/briva.png')?>" alt="SVG">
                                <span class="d-block">BRI VA</span>
                            </label>
                            </div>
                            <!-- End Radio Check -->
                        </div>
                        <!-- End Col -->

                        <div class="col-6 col-md-3 mb-3">
                            <!-- Radio Check -->
                            <div class="form-check form-check-card text-center">
                            <input class="form-check-input" type="radio" name="typeOfListing" id="mandiri">
                            <label class="form-check-label" for="mandiri">
                                <img class="w-75 mb-3" src="<?= site_url('assets/img/payment/mandiri.png')?>" alt="SVG">
                                <span class="d-block">Mandiri Bill</span>
                            </label>
                            </div>
                            <!-- End Radio Check -->
                        </div>
                        <!-- End Col -->

                        <div class="col-6 col-md-3 mb-3">
                            <!-- Radio Check -->
                            <div class="form-check form-check-card text-center">
                            <input class="form-check-input" type="radio" name="typeOfListing" id="permata">
                            <label class="form-check-label" for="permata">
                                <img class="w-75 mb-3" src="<?= site_url('assets/img/payment/permata.png')?>" alt="SVG">
                                <span class="d-block">Permata VA</span>
                            </label>
                            </div>
                            <!-- End Radio Check -->
                        </div>
                    <!-- End Col -->
                    </div>
                    <!-- End Row -->
                    <h6 class="text-secondary">E-Wallets</h6>
                    <div class="row gx-3">
                        <div class="col-6 col-md-3 mb-3">
                            <!-- Radio Check -->
                            <div class="form-check form-check-card text-center">
                            <input class="form-check-input" type="radio" name="typeOfListing" id="gopay">
                            <label class="form-check-label" for="gopay">
                                <img class="w-75 mb-3" style="width: 100px;" src="<?= site_url('assets/img/payment/gopay.png')?>" alt="SVG">
                                <span class="d-block">GoPay</span>
                            </label>
                            </div>
                            <!-- End Radio Check -->
                        </div>
                        <!-- End Col -->

                        <div class="col-6 col-md-3 mb-3">
                            <!-- Radio Check -->
                            <div class="form-check form-check-card text-center">
                            <input class="form-check-input" type="radio" name="typeOfListing" id="qris" checked>
                            <label class="form-check-label" for="qris">
                                <img class="w-75 mb-3" src="<?= site_url('assets/img/payment/qris.png')?>" alt="SVG">
                                <span class="d-block">QRIS</span>
                            </label>
                            </div>
                            <!-- End Radio Check -->
                        </div>
                        <!-- End Col -->
                    <!-- End Col -->
                    </div>
                    <!-- End Row -->
                    <h6>Bank Account Number</h6>
                    <input type="text" class="form-control" placeholder="Bank Account Number">
                </div>
                <div class="d-grid gap-3 mb-4">
                    <dl class="row">
                        <dt class="col-sm-6">Order</dt>
                        <dd class="col-sm-6 text-sm-end mb-0">Batch 1</dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-6">Method</dt>
                        <dd class="col-sm-6 text-sm-end mb-0"><img style="max-width: 75px;" src="<?= site_url('assets/img/payment/bni.png')?>" /></dd>
                    </dl>
                    <!-- End Row -->

                    <dl class="row">
                        <dt class="col-sm-6">Total</dt>
                        <dd class="col-sm-6 text-sm-end mb-0">Rp2.000.000</dd>
                    </dl>
                    <!-- End Row -->
                </div>
                <div class="d-grid">
                    <a class="btn btn-primary btn-lg" href="<?= site_url('payment/status')?>">Pay</a>
                </div>
            </div>
            <!-- End Body -->
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