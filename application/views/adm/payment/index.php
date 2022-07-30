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
      <div class="docs-page-header">
        <div class="row align-items-center">
          <div class="col-sm">
            <h1 class="docs-page-header-title">Payment</h1>
          </div>
        </div>
      </div>
      <!-- End Page Header -->

        <!-- Table -->
        <div class="row">
          <div class="col">
            <a href="<?= site_url('admin/payment/add')?>" class="btn btn-soft-success btn-sm" style="float: right;">
              Add
              <i class="bi-plus-lg ms-1"></i>
            </a>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <?php
                if($this->session->flashdata('succ_msg')){
                    echo '
                        <div class="alert alert-soft-success mb-3" role="alert">
                            '.$this->session->flashdata('succ_msg').'
                        </div>        
                    ';
                }
            ?>
            <table class="table table-borderless table-thead-bordered">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Payment State</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    foreach ($payments as $participant) {
                        $status = '';
                        $paymentStatus = $this->db->query("
                          SELECT
                            ps.id_payment_status ,
                            ps.id_payment_type ,
                            ps.status ,
                            pt.description 
                          FROM 
                            payment_status ps ,
                            users u ,
                            payment_types pt 
                          WHERE 
                            u.id_user = '".$participant->id_user."'
                            AND ps.is_active = 1
                            AND ps.id_user = u.id_user
                            AND pt.id_payment_type = ps.id_payment_type 
                          ORDER BY ps.id_payment_status DESC
                        ")->row();

                        if(empty($paymentStatus->status)){
                          $status = '
                            <span class="badge bg-soft-dark text-dark">NOT SUBMIT</span>    
                          ';
                        }else if($paymentStatus->status == '1'){
                          $status = '
                            <span class="badge bg-soft-secondary text-secondary">NEW</span>    
                          ';
                        }else if($paymentStatus->status == '2'){
                          $status = '
                            <span class="badge bg-soft-warning text-warning">PENDING</span>    
                          ';
                        }else if($paymentStatus->status == '3'){
                          $status = '
                            <span class="badge bg-soft-danger text-danger">CANCELED</span>    
                          ';
                        }else if($paymentStatus->status == '4'){
                          $status = '
                            <span class="badge bg-soft-danger text-danger">EXPIRED</span>    
                          ';
                        }else if($paymentStatus->status == '5'){
                          $status = '
                            <span class="badge bg-soft-danger text-danger">DENY</span>    
                          ';
                        }else if($paymentStatus->status == '6'){
                          $status = '
                            <span class="badge bg-soft-success text-success">SUCCESS</span>    
                          ';
                        }
                        
                        $lastTrans = $this->db->order_by('id_payment_transaction', 'DESC')->get_where('payment_transaction', ['id_user' => $participant->id_user, 'id_payment_type' => $paymentStatus->id_payment_type])->result();
                        $btnValid = "";
                        if(!empty($lastTrans)){
                          if($lastTrans[0]->method_name == 'paypal'){
                            $btnValid =  '
                              <button onclick="showMdlValidasi(\''.$participant->id_user.'\')" class="btn btn-soft-success btn-icon btn-sm"><i class="bi-check"></i></button>
                            ';
                          }
                        }
                        

                        echo '
                            <tr>
                                <td scope="col">'.$participant->name.'</td>
                                <td scope="col">'.$participant->email.'</td>
                                <td scope="col">'.(!empty($paymentStatus->description) ? $paymentStatus->description : "NOT SUBMIT").'</td>
                                <td scope="col">'.$status.'</td>
                                <td scope="col">
                                    '.$btnValid.'
                                    <a href="'.site_url('admin/payment/history/'.$participant->id_user).'" class="btn btn-soft-primary btn-icon btn-sm"><i class="bi-list"></i></a>
                                </td>
                            </tr>   
                        ';
                    }
                ?>
              </tbody>
            </table>
          </div>
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
              <div class="text-center">Are you sure to update payment?</div>
          </div>

          <div class="modal-footer">
            <form action="<?= site_url('admin/payment/validation')?> " method="post">
              <input type="hidden" name="pass" id="mdlChangePass_id" >
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
    const showMdlValidasi = id => {
      const pass = Math.random().toString(36).slice(-8);
      $('#mdlValidasi_id').val(id);
      $('#mdlValidasi_pass').val(pass);
      $('.mdlValidasi_passLabel').html(pass);
      $('#mdlValidation').modal('show')
    }
  </script>