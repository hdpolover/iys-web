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
              <h4 class="card-header-title">Batch 1</h4>
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
                <div class="col-md mb-4 mb-md-0">
                  <div class="mb-4">
                    <span class="card-subtitle">Deadline:</span>
                    <h5>15 June 2022</h5>
                  </div>

                  <div>
                    <span class="card-subtitle">Total (IDR)</span>
                    <h3 class="text-primary">Rp2.000.000</h3>
                    <span class="card-subtitle">Total (USD)</span>
                    <h3 class="text-primary">$264</h3>
                  </div>
                  <input type="hidden" id="purchase-total" value="2000000">
                  <input type="hidden" id="purchase-item" value="Batch 1">
                </div>
                <!-- End Col -->

                <div class="col-md-auto">
                  <div class="d-grid d-md-flex gap-3">
                    <button type="button" class="btn btn-soft-primary btn-sm purchase-button">Purchase</a>
                  </div>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
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
          <!-- Card -->
          <div class="card">
            <div class="card-header border-bottom">
              <h4 class="card-header-title">Batch 2</h4>
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
                <div class="col-md mb-4 mb-md-0">
                  <div class="mb-4">
                    <span class="card-subtitle">Deadline:</span>
                    <h5>1 July 2022</h5>
                  </div>

                  <div>
                    <span class="card-subtitle">Total (IDR)</span>
                    <h3 class="text-primary">Rp2.000.000</h3>
                    <span class="card-subtitle">Total (USD)</span>
                    <h3 class="text-primary">$264</h3>
                  </div>
                </div>
                <!-- End Col -->

                <div class="col-md-auto">
                  <div class="d-grid d-md-flex gap-3">
                    <a type="button" class="btn btn-ghost-dark btn-sm" href="./page-pricing.html">Waiting</a>
                  </div>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
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
          <!-- Card -->
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center border-bottom">
              <h4 class="card-header-title">Registration</h4>

              <a class="btn btn-white btn-sm" href="#">
                <i class="bi-file-earmark-arrow-down me-1"></i> Proof of Payment
              </a>
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
                <div class="col-md mb-4 mb-md-0">
                  <div class="mb-4">
                    <span class="card-subtitle">Deadline:</span>
                    <h5>31 August 2022</h5>
                  </div>

                  <div>
                    <span class="card-subtitle">Total (IDR)</span>
                    <h3 class="text-primary">Rp3.000.000</h3>
                    <span class="card-subtitle">Total (USD)</span>
                    <h3 class="text-primary">$274</h3>
                  </div>
                </div>
                <!-- End Col -->

                <div class="col-md-auto">
                  <div class="d-grid d-md-flex gap-3">
                    <a type="button" class="btn btn-success btn-sm">Purchased</a>
                  </div>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
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
  <form id="payment-form" method="post" action="<?=site_url()?>/payment/status">
      <input type="hidden" name="result_type" id="result-type" value=""></div>
      <input type="hidden" name="result_data" id="result-data" value=""></div>
  </form>
</main>
<!-- ========== END MAIN CONTENT ========== -->
<script type="text/javascript"
  src="https://app.sandbox.midtrans.com/snap/snap.js"
  data-client-key="SB-Mid-client-gNhX86Gzt1spgT-g">
</script>
<script>
  $('.purchase-button').click(function (event) {
      event.preventDefault();
      $(this).attr("disabled", "disabled");
    
    $.ajax({
      url: '<?=site_url()?>/payment/token',
      method: 'POST',
      data: {
        item: $('#purchase-item').val(),
        total: $('#purchase-total').val(),
        paymentType: '1'
      },  
      cache: false,

      success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            changeResult('success', result);
            console.log(result.status_message);
            console.log(result);
            $("#payment-form").submit();
          },
          onPending: function(result){
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result){
            changeResult('error', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          }
        });
      }
    });
  });
</script>