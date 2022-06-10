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
          <div class="card">
            <div class="card-header border-bottom">
              <h4 class="card-title">Payment</h4>
            </div>
              <div class="card-body">
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
            </div>
          </div>
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->
  </div>
  <!-- End Content -->
  
</main>
<!-- ========== END MAIN CONTENT ========== -->
<!-- <script type="text/javascript"
  src="https://app.midtrans.com/snap/snap.js"
  data-client-key="Mid-client-Ma4jHxwVr7YEIF-R">
</script> -->
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