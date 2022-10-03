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
            <h1 class="docs-page-header-title mt-5">Payment</h1>
          </div>
        </div>
      </div>
      <!-- End Page Header -->

        <!-- Table -->
        <!-- <div class="row">
          <div class="col">
            <a href="<?= site_url('admin/payment/add')?>" class="btn btn-soft-success btn-sm" style="float: right;">
              Add
              <i class="bi-plus-lg ms-1"></i>
            </a>
          </div>
        </div> -->
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
            <div class="row mb-4">
              <div class="col-sm mb-2 mb-sm-0">
                <label for="">Email</label>
                <input type="text" id="filter_email" class="form-control" placeholder="Email Filter" />
              </div>

              <div class="col-sm mb-2 mb-sm-0">
                <label for="">Name</label>
                <input type="text" id="filter_name" class="form-control" placeholder="Name Filter" >
              </div>

              <div class="col-sm mb-2 mb-sm-0">
                <label for="">Phone Number</label>
                <input type="text" id="filter_number" class="form-control" placeholder="Phone Filter" >
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 mb-2 mb-sm-0">
                <label for="">Payment State</label>
                <select id="filter_paystate" class="form-control">
                  <option value="">All</option>
                  <option value="8">Registration</option>
                  <option value="9">Batch 1</option>
                  <option value="10">Batch 2</option>
                  <option value="Succ">Completed</option>
                  <option value="11">Registration (SF)</option>
                  <option value="12">Batch 1 (SF)</option>
                  <option value="13">Batch 2 (SF)</option>
                  <option value="SuccSF">Completed (SF)</option>
                </select>
              </div>
              <div class="col-sm-4 mb-2 mb-sm-0">
                <label for="">Payment Status</label>
                <select id="filter_paystatus" class="form-control">
                  <option value="">All</option>
                  <option value="2">Pending</option>
                  <option value="6">Success</option>
                  <option value="3">Cancel</option>
                  <option value="4">Expired</option>
                  <option value="5">Deny</option>
                </select>
              </div>
              <div class="col-sm-4 mb-2 mb-sm-0">
                <label for="">Institution</label>
                <input type="text" id="filter_institution" class="form-control" placeholder="Name Institution" >
              </div>
            </div>
            <button class="btn btn-sm btn-primary mb-4 mt-2" onclick="btnSearch()"><i class="bi-search"></i>&nbsp&nbspSearch</button>
            <table id="dataTable" class="table table-borderless table-thead-bordered datatable">
              <thead class="thead-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Institution</th>
                  <th scope="col">Payment State</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    // $no = 1;
                    // foreach ($payments as $participant) {
                    //     $status = '';
                    //     $paymentStatus = $this->db->query("
                    //       SELECT
                    //         ps.id_payment_status ,
                    //         ps.id_payment_type ,
                    //         ps.status ,
                    //         pt.description 
                    //       FROM 
                    //         payment_status ps ,
                    //         users u ,
                    //         payment_types pt 
                    //       WHERE 
                    //         u.id_user = '".$participant->id_user."'
                    //         AND ps.is_active = 1
                    //         AND ps.id_user = u.id_user
                    //         AND pt.id_payment_type = ps.id_payment_type 
                    //       ORDER BY ps.id_payment_status DESC
                    //     ")->row();

                    //     if(empty($paymentStatus->status)){
                    //       $status = '
                    //         <span class="badge bg-soft-dark text-dark">NOT SUBMIT</span>    
                    //       ';
                    //     }else if($paymentStatus->status == '1'){
                    //       $status = '
                    //         <span class="badge bg-soft-secondary text-secondary">NEW</span>    
                    //       ';
                    //     }else if($paymentStatus->status == '2'){
                    //       $status = '
                    //         <span class="badge bg-soft-warning text-warning">PENDING</span>    
                    //       ';
                    //     }else if($paymentStatus->status == '3'){
                    //       $status = '
                    //         <span class="badge bg-soft-danger text-danger">CANCELED</span>    
                    //       ';
                    //     }else if($paymentStatus->status == '4'){
                    //       $status = '
                    //         <span class="badge bg-soft-danger text-danger">EXPIRED</span>    
                    //       ';
                    //     }else if($paymentStatus->status == '5'){
                    //       $status = '
                    //         <span class="badge bg-soft-danger text-danger">DENY</span>    
                    //       ';
                    //     }else if($paymentStatus->status == '6'){
                    //       $status = '
                    //         <span class="badge bg-soft-success text-success">SUCCESS</span>    
                    //       ';
                    //     }
                        
                    //     echo '
                    //         <tr>
                    //             <td scope="col">'.$no++.'</td>
                    //             <td scope="col">'.$participant->name.'</td>
                    //             <td scope="col">'.$participant->email.'</td>
                    //             <td scope="col">'.(!empty($paymentStatus->description) ? $paymentStatus->description : "NOT SUBMIT").'</td>
                    //             <td scope="col">'.$status.'</td>
                    //             <td scope="col">
                    //                 <a target="_blank" href="'.site_url('admin/payment/history/'.$participant->id_user).'" class="btn btn-soft-primary btn-icon btn-sm"><i class="bi-list"></i></a>
                    //             </td>
                    //         </tr>   
                    //     ';
                    // }
                ?>
              </tbody>
            </table>
          </div>
        </div>
          <!-- End Table -->
    </div>
    <!-- End Content -->
   
  </main>
  <script>
    var table = $('#dataTable').DataTable({
        'processing': true,
        'serverSide': true,
        'ordering': false,
        'searching': false,
        'serverMethod': 'post',
        'ajax': {
            'url':'<?= site_url('admin/payment/ajxGet')?>',
            'data': function(d){
                d.filterEmail     = $('#filter_email').val()
                d.filterName      = $('#filter_name').val()
                d.filterNumber    = $('#filter_number').val()
                d.filterPayState  = $('#filter_paystate').val()
                d.filterPayStatus = $('#filter_paystatus').val()
                d.filterInstitution = $('#filter_institution').val()
            }
        },
        'columns': [
            { data: 'no' },
            { data: 'name' },
            { data: 'email' },
            { data: 'institution' },
            { data: 'payState' },
            { data: 'payStatus' },
            { data: 'action' }
        ]
    });
    function btnSearch(){
        table.ajax.reload();
    }
  </script>
