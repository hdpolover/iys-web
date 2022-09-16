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
          <div class="card">
            <div class="card-header border-bottom">
              <h4 class="card-title">Payment</h4>
            </div>
            <?php
              if($this->session->userdata('is_verif') == 0){
                echo '
                  <div class="alert alert-soft-danger text-center card-alert" role="alert">
                    Please verify your email address, , <a class="text-red" href="'.site_url('resend-email/'.$this->session->userdata('id_user')).'">resend email verification</a>
                  </div>
                ';
              }else if($this->session->userdata('is_submit') == 0){
                echo '
                  <div class="alert alert-soft-danger text-center card-alert" role="alert">
                    Please submit your personal data.
                  </div>
                ';
              }
            ?>
              <div class="card-body">
                <?php
                  if($this->session->flashdata('err_msg')){
                    echo '
                      <div class="alert alert-soft-danger text-center card-alert mb-4" role="alert">
                        '.$this->session->flashdata('err_msg').'
                      </div>
                    ';
                  }

                  if($this->session->userdata('is_verif') == 1 && $this->session->userdata('is_submit') == 1){
                ?>
                <div class="row">  
                  <?php
                    $no = 1;
                    foreach ($paymentStatuses as $paymentStatus) {
                      $btn          = "";
                      $cardInfo     = "";
                      $paymentType  = "";
                      $badgeStatus  = '<span class="badge bg-secondary">NEW</span>';
                      
                      if($paymentStatus->status == '1'){
                        $btn          = '
                        <button type="button" onclick="mdlMidtrans()" class="btn btn-soft-success btn-sm w-100 mt-2">Pay</button>
                        <button onclick="mdlPaypal('.$paymentStatus->id_payment_type.')" class="btn btn-soft-warning btn-sm w-100 mt-2">PayPal</button>
                        <button onclick="mdlManual('.$paymentStatus->id_payment_type.')" class="btn btn-soft-primary btn-sm w-100 mt-2">Manual Transfer</button>
                        ';
                      }else if($paymentStatus->status == '2'){
                        $paymentTransaction  = $this->db->order_by('date', 'DESC')->get_where('payment_transaction', ['id_user' => $paymentStatus->id_user, 'id_payment_type' => $paymentStatus->id_payment_type, 'status' => '2'])->row();
                        if($paymentTransaction->method_name == 'paypal'){
                          $btn      = '<a href="'.site_url('payment/status-paypal/'.$paymentTransaction->id_payment_transaction).'" class="btn btn-warning btn-sm w-100">View Transaction</a>';
                        }else if($paymentTransaction->method_type == 'manual_transfer'){
                          $btn      = '<a href="'.site_url('payment/status-manual/'.$paymentTransaction->id_payment_transaction).'" class="btn btn-warning btn-sm w-100">View Transaction</a>';
                        }else{
                          $btn      = '<a href="'.site_url('payment/status/'.$paymentTransaction->id_payment_transaction).'" class="btn btn-warning btn-sm w-100">View Transaction</a>';
                        }
                        $badgeStatus  = '<span class="badge bg-warning text-dark">PENDING</span>';
                      }else if($paymentStatus->status == '3'){
                        $btn  = '
                          <button type="button" onclick="mdlMidtrans()" class="btn btn-soft-success btn-sm w-100 mt-2">Pay</button>
                          <button onclick="mdlPaypal('.$paymentStatus->id_payment_type.')" class="btn btn-soft-warning btn-sm w-100 mt-2">PayPal</button>
                          <button onclick="mdlManual('.$paymentStatus->id_payment_type.')" class="btn btn-soft-primary btn-sm w-100 mt-2">Manual Transfer</button>
                          ';
                        $badgeStatus  = '<span class="badge bg-danger">CANCELED</span>';
                      }else if($paymentStatus->status == '4'){
                        $btn  = '
                          <button type="button" onclick="mdlMidtrans()" class="btn btn-soft-success btn-sm w-100 mt-2">Pay</button>
                          <button onclick="mdlPaypal('.$paymentStatus->id_payment_type.')" class="btn btn-soft-warning btn-sm w-100 mt-2">PayPal</button>
                          <button onclick="mdlManual('.$paymentStatus->id_payment_type.')" class="btn btn-soft-primary btn-sm w-100 mt-2">Manual Transfer</button>
                          ';
                        $badgeStatus  = '<span class="badge bg-danger">EXPIRED</span>';
                      }else if($paymentStatus->status == '5'){
                        $btn  = '
                          <button type="button" onclick="mdlMidtrans()" class="btn btn-soft-success btn-sm w-100 mt-2">Pay</button>
                          <button onclick="mdlPaypal('.$paymentStatus->id_payment_type.')" class="btn btn-soft-warning btn-sm w-100 mt-2">PayPal</button>
                          <button onclick="mdlManual('.$paymentStatus->id_payment_type.')" class="btn btn-soft-primary btn-sm w-100 mt-2">Manual Transfer</button>
                          ';
                        $badgeStatus  = '<span class="badge bg-danger">DENY</span>';
                      }else if($paymentStatus->status == '6'){
                        // $btn  = '
                        //   <form action="'.site_url('document/generate-payment').'" method="POST">
                        //     <input type="hidden" name="id_payment_type" value="'.$paymentStatus->id_payment_type.'">
                        //     <button type="submit" class="btn btn-success btn-sm w-100 mt-2">Download Invoice</button>
                        //   </form>
                        // ';
                        $cardInfo = '
                          <a class="btn btn-white btn-sm" href="#">
                            <i class="bi-file-earmark-arrow-down me-1"></i> Proof of Payment
                          </a>';
                        $badgeStatus  = '<span class="badge bg-success">SUCCESS</span>';
                      }
        
        
                      if($paymentStatus->status != '4'){
                        $paymentType  = '
                          <form id="payment-form" method="post" action="'.site_url().'/payment/finish">
                              <input type="hidden" name="result_type" id="result-type" value="">
                              <input type="hidden" name="result_data" id="result-data" value="">
                              <input type="hidden" name="payment_type" value="'.$paymentStatus->id_payment_type.'">
                          </form>
                        ';
                      }
                  ?>
                    <div class="col col-sm-6 mb-6">
                      <!-- Card -->
                      <div class="card card-sm" style="max-width: 20rem;">
                        <div class="card-header border-bottom">
                          <h3 class="card-title" style="margin-bottom: 0px !important;"><?= $paymentStatus->description?></h3>
                          <small>West Indonesian Time (GMT+7)</small>
                          <br>
                          <?= $badgeStatus?>
                          
                          
                          <!-- <?= $cardInfo?> -->
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                              <span class="card-subtitle">Open:</span>
                                <h5><?= date_format(date_create($paymentStatus->start_date), 'F d, Y H:i')?></h5>
                            </div>
                            <div class="mb-4">
                              <span class="card-subtitle">Close:</span>
                                <h5><?= date_format(date_create($paymentStatus->end_date), 'F d, Y H:i')?></h5>
                            </div>
                            <?php
                              $openDate   = $paymentStatus->start_date;
                              $closedDate = $paymentStatus->end_date;
                              $currDate   = date('Y-m-d H:i:s');

                              if(strtotime($currDate) < strtotime($openDate)){

                              }else {
                            ?>
                              <div>
                                <span class="card-subtitle">Total (IDR)</span>
                                <h3 class="text-primary">Rp<?= number_format($paymentStatus->amount)?></h3>
                                <b>OR</b>
                                <span class="card-subtitle mt-1">Total (USD)</span>
                                <h3 class="text-primary">$<?= $paymentStatus->usd?></h3>
                              </div>
                            <?php }?>

                            <input type="hidden" id="purchase-total" value="<?= $paymentStatus->amount?>">
                            <input type="hidden" id="purchase-item" value="<?= $paymentStatus->description?>">
                            <?= $paymentType?>
                            <?php
                              if(strtotime($currDate) < strtotime($openDate)){
                                echo '<button type="button" class="btn btn-ghost-primary btn-sm w-100">Coming Soon</button>';
                              }else if(strtotime($currDate) > strtotime($closedDate) && $paymentStatus->status != '6'){
                                echo '<button type="button" class="btn btn-ghost-danger btn-sm w-100">Closed</button>';
                              }else{
                                echo $btn;
                                
                              }

                              if(strtotime($currDate) > strtotime($openDate) && $paymentStatus->status != '1'){
                                echo '
                                  <a class="btn btn-info btn-sm w-100 mt-2" href="'.site_url('payment/history/'.$paymentStatus->id_payment_type).'">
                                    History
                                  </a>
                                ';
                              }
                            ?>
                        </div>
                      </div>
                      <!-- End Card -->
                    </div>    
                  <?php } ?>
                </div>
                <?php } ?>
            </div>
            <div class="card-footer">
              <p><b>Note:</b></p>
              <p>- The "Pay" button provides many different payment methods of your choice such as Credit/Debit Card, Virtual Account, Bank Transfer, and GoPay). Meanwhile the "PayPal" button is provided for those who wish to pay with Paypal and do not have access to previously mentioned payment methods.</p>
              <p>- Confirm your PayPal payments by sending the payment proof, full name, and account email to <a href="mailto:istanbulyouthsummit@gmail.com">istanbulyouthsummit@gmail.com</a></p>
              <p>- If there is an error, please reload your browser, if still send an email to <a href="mailto:istanbuyouthsummit@gmail.com">istanbuyouthsummit@gmail.com</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->
  </div>
  <!-- End Content -->
  <!-- Modal -->
  <div class="modal fade" id="mdlPaypal" tabindex="-1" aria-labelledby="mdlPaypalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlPaypalLabel">Paypal Confirmation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body text-center">
              <h4 class="text-center">Are you sure make payment with paypal ?</h4>
          </div>

          <div class="modal-footer">
            <form action="<?= site_url('payment/paypal-transaction')?>" method="POST">
              <input type="hidden" name="id_payment_type" id="mdlPaypal_id" >
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit"  href=""  class="btn btn-soft-success">Make Payment</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
    <!-- Modal -->
    <div class="modal fade" id="mdlMidtrans" tabindex="-1" aria-labelledby="mdlMidtransLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlMidtransLabel">Payment Confirmation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body text-center">
              <h4 class="text-center">Are you sure make payment ?</h4>
          </div>

          <div class="modal-footer">
              <input type="hidden" name="id" id=mdlMidtrans_id" >
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-soft-success purchase-button">Make Payment</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
    <!-- Modal -->
    <div class="modal fade" id="mdlManual" tabindex="-1" aria-labelledby="mdlManualLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlManualLabel">Manual Transfer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <form action="<?= site_url('payment/manual-transaction')?>" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label class="mb-2" for="">Method Payment</label>
                <div class="row gx-3">
                  <div class="col-6 col-md-4 mb-3">
                    <!-- Radio Check -->
                    <div class="form-check form-check-card text-center">
                      <input class="form-check-input" type="radio" name="method_payment" onclick="changeGuide('tutor_moneygram.png')" value="money_gram" id="method_payment1" checked>
                      <label class="form-check-label" for="method_payment1">
                        <img class="w-50 mb-3" src="<?= site_url('assets/img/payment/money_gram.png')?>" alt="SVG">
                        <span class="d-block">Money Gram</span>
                      </label>
                    </div>
                    <!-- End Radio Check -->
                  </div>
                  <!-- End Col -->

                  <!-- <div class="col-6 col-md-3 mb-3">
                    <div class="form-check form-check-card text-center">
                      <input class="form-check-input" type="radio" name="method_payment" value="western_union" id="method_payment2" checked>
                      <label class="form-check-label" for="method_payment2">
                        <img class="w-50 mb-3" src="<?= site_url('assets/img/payment/western_union.png')?>" alt="SVG">
                        <span class="d-block">Western Union</span>
                      </label>
                    </div>
                  </div> -->
                  <!-- End Col -->

                  <div class="col-6 col-md-4 mb-3">
                    <!-- Radio Check -->
                    <div class="form-check form-check-card text-center">
                      <input class="form-check-input" onclick="changeGuide('tutor_wise.png')" type="radio" name="method_payment" value="wise" id="method_payment3">
                      <label class="form-check-label" for="method_payment3">
                        <img class="w-50 mb-3" src="<?= site_url('assets/img/payment/wise.png')?>" alt="SVG">
                        <span class="d-block">Wise</span>
                      </label>
                    </div>
                    <!-- End Radio Check -->
                  </div>
                  <!-- End Col -->

                  <div class="col-6 col-md-4 mb-3">
                    <!-- Radio Check -->
                    <div class="form-check form-check-card text-center">
                      <input class="form-check-input" type="radio" onclick="changeGuide('tutor_ziraat.png')" name="method_payment" value="ziraat" id="method_payment4">
                      <label class="form-check-label" for="method_payment4">
                        <img class="w-50 mb-3" src="<?= site_url('assets/img/payment/ziraat.png')?>" alt="SVG">
                        <span class="d-block">Ziraat Bank</span>
                      </label>
                    </div>
                    <!-- End Radio Check -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <div class="form-group">
                <!-- <label class="mb-2" for="">Payment Guide</label> -->
                <div style="text-align: center;">
                    <img id="payGuide" src="<?= site_url('assets/img/payment/tutor_moneygram.png')?>" width="250px" alt="">
                </div>
              </div>

              <div class="form-group">
                <label class="mb-2" for="">Evidence</label><span class="text-danger">*</span> 
                <div id="boxImg" class="text-center mb-3 p-3" style="border: .0625rem solid rgba(33,50,91,.1);border-radius: .3125rem;cursor: pointer;">
                    <img style="max-width: 300px;" id="blah" class="" src="<?= site_url('assets/svg/illustrations/oc-lost.svg')?>" />
                </div>
                <input type="file" accept=".jpg,.png,.jpeg,.bmp" class="form-control" name="evidence" style="cursor: pointer;" id="imgPoster" required>
              </div>
              <small class="mt-2">Note: (File Size Max 1MB)</small>

              <div class="form-group mt-2">
                <label for="">Remarks</label><span class="text-danger">*</span>
                <input type="text" name="remarks" class="form-control" placeholder="Name of Participant" required>
              </div>
          </div>

            <div class="modal-footer">
              <input type="hidden" name="id_payment_type" id="mdlManual_id" >
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-soft-success">Make Payment</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
  
</main>
<!-- ========== END MAIN CONTENT ========== -->
<script type="text/javascript"
  src="https://app.midtrans.com/snap/snap.js"
  data-client-key="Mid-client-KKoCMEQRJeeFcpOS">
</script>
<!-- <script type="text/javascript"
  src="https://app.sandbox.midtrans.com/snap/snap.js"
  data-client-key="SB-Mid-client-LAEwpi34CdNrwLgt">
</script> -->
<script>
  function mdlPaypal(idPaymentType){
    $('#mdlPaypal_id').val(idPaymentType)
    $('#mdlPaypal').modal('show')
  }
  function mdlMidtrans(){
    $('#mdlMidtrans').modal('show')
  }
  function mdlManual(idPaymentType){
    $('#mdlManual_id').val(idPaymentType)
    $('#mdlManual').modal('show')
  }
  const changeGuide = method => {
    $('#payGuide').attr('src', `<?= site_url('assets/img/payment/')?>${method}`);
  }
  $('.purchase-button').click(function (event) {
    $('#mdlMidtrans').modal('hide')
      event.preventDefault();
      $(this).attr("disabled", "disabled");
    
    $.ajax({
      url: '<?=site_url()?>/payment/token',
      method: 'POST',
      data: {
        item: $('#purchase-item').val(),
        total: $('#purchase-total').val()
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