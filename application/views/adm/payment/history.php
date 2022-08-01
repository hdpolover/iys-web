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
      <div class="docs-page-header mt-5">
        <div class="row align-items-center">
          <div class="col-sm">
            <h2 class="docs-page-header-title">Payment History</h2>
            <small><?= $user->name?></small>
          </div>
        </div>
      </div>
      <!-- End Page Header -->

        <!-- Table -->
        <div class="row">
        <table class="table table-borderless table-thead-bordered datatable">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Payment</th>
                  <th scope="col">Date</th>
                  <th scope="col">Method</th>
                  <th scope="col">Type</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    foreach ($historys as $history) {
                        $btnValid = "";
                        if($history->method_name == 'paypal' && $history->status == '2'){
                          $btnValid =  '
                            <button onclick="showMdlValidasi(\''.$history->id_payment_transaction.'\', \''.$history->id_payment_type.'\', \''.$history->id_user.'\', \''.$history->method_name.'\', 6)" class="btn btn-soft-success btn-icon btn-sm"><i class="bi-check"></i></button>
                          ';
                        }

                        if($history->status == '2'){
                          $btnValid .=  '
                            <button onclick="showMdlValidasi(\''.$history->id_payment_transaction.'\', \''.$history->id_payment_type.'\', \''.$history->id_user.'\', \''.$history->method_name.'\', 3)" class="btn btn-soft-danger btn-icon btn-sm"><i class="bi-x"></i></button>
                          ';
                        }

                        echo '
                            <tr>
                                <td scope="col">'.$history->description.'</td>
                                <td scope="col">'.date_format(date_create($history->date), 'F d, Y H:i:s').'</td>
                                <td scope="col">'.str_replace('_', ' ', strtoupper($history->method_type)).'</td>
                                <td scope="col">
                                    <img style="max-width: 75px;" src="'.$history->method_img.'" />
                                </td>
                                <td scope="col">'.strtoupper($history->status_title).'</td>
                                <td scope="col">'.$btnValid.'</td>
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
     <!-- Modal -->
     <div class="modal fade" id="mdlValidation" tabindex="-1" aria-labelledby="mdlDeleteLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlDeleteLabel">Update Payment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body text-center">
              <div class="text-center">Are you sure to <b id="mdlValidation_title"></b> this payment?</div>
          </div>

          <div class="modal-footer">
            <form action="<?= site_url('admin/payment/validation')?> " method="post">
              <input type="hidden" name="id_payment_transaction" id="mdlValidation_idPaymentTrans" >
              <input type="hidden" name="id_payment_type" id="mdlValidation_idPaymentType" >
              <input type="hidden" name="id_user" id="mdlValidation_idUser" >
              <input type="hidden" name="method_name" id="mdlValidation_method" >
              <input type="hidden" name="status" id="mdlValidation_status" >
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-soft-success">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
  </main>
  <script>
    const showMdlValidasi = (idPaymentTrans, idPaymentType, idUser, method, status) => {
      $('#mdlValidation_idPaymentTrans').val(idPaymentTrans);
      $('#mdlValidation_idPaymentType').val(idPaymentType);
      $('#mdlValidation_idUser').val(idUser);
      $('#mdlValidation_method').val(method);
      $('#mdlValidation_status').val(status);

      if(status == 6){
        $('#mdlValidation_title').html("VALIDATE");
      }else{
        $('#mdlValidation_title').html("CANCEL");
      }

      $('#mdlValidation').modal('show')
    }
  </script>