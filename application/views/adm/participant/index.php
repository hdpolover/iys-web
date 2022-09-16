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
            <h1 class="docs-page-header-title mt-5">Participant</h1>
          </div>
        </div>
      </div>
      <!-- End Page Header -->
        <!-- <div class="row">
          <div class="col">
            <a href="<?= site_url('admin/participant/add')?>" class="btn btn-soft-success btn-sm" style="float: right;">
              Add
              <i class="bi-plus-lg ms-1"></i>
            </a>
          </div>
        </div> -->

        <!-- Table -->
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
            <div class="row mb-5">
              <div class="col">
                                <!-- Dropdown -->
                <div style="float: right;" class="btn-group">
                  <button class="btn btn-sm btn-success dropdown-toggle" type="button" id="dropdownMenuButtonClickAnimation" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                    <i class="bi-file-earmark-excel-fill"></i>&nbsp;
                    Export
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonClickAnimation">
                    <a class="dropdown-item" href="<?= site_url('admin/participant/export/1')?>">All</a>
                    <a class="dropdown-item" href="<?= site_url('admin/participant/export/2')?>">Verified</a>
                    <a class="dropdown-item" href="<?= site_url('admin/participant/export/3')?>">Submited</a>
                    <a class="dropdown-item" href="<?= site_url('admin/participant/export/4')?>">Checked</a>
                  </div>
                </div>
                <!-- End Dropdown -->
              </div>
            </div>
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
              <!-- <div class="col-sm mb-2 mb-sm-0">
                <label for="">Verified</label>
                <select id="filter_verified" class="form-control">
                  <option value="">All</option>
                  <option value="1">Verified</option>
                  <option value="0">Not Verified</option>
                </select>
              </div> -->
              <div class="col-sm mb-2 mb-sm-0">
                <label for="">Submited</label>
                <select id="filter_submited" class="form-control">
                  <option value="">All</option>
                  <option value="1">Submited</option>
                  <option value="0">Not Submited</option>
                </select>
              </div>
              <div class="col-sm mb-2 mb-sm-0">
                <label for="">Checked</label>
                <select id="filter_checked" class="form-control">
                  <option value="">All</option>
                  <option value="1">Checked</option>
                  <option value="0">Not Checked</option>
                </select>
              </div>
              <div class="col-sm-4 mb-2 mb-sm-0">
                <label for="">Agreement Status</label>
                <select id="filter_agreement" class="form-control">
                  <option value="">All</option>
                  <option value="1">Waiting Approval</option>
                  <option value="2">Deny</option>
                  <option value="3">Success</option>
                </select>
              </div>
            </div>
            <button class="btn btn-sm btn-primary mb-4 mt-2" onclick="btnSearch()"><i class="bi-search"></i>&nbsp&nbspSearch</button>
            <!-- End Row -->
            <table id="dataTable" class="table table-borderless table-thead-bordered">
              <thead class="thead-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Step</th>
                  <th scope="col">Status Submit</th>
                  <th scope="col">Status Check</th>
                  <th scope="col">Status Agreement</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    // $no = 1;
                    // foreach ($participants as $participant) {
                    //     $isVerif = '';
                    //     if($participant->is_verif == '1'){
                    //         $isVerif = '
                    //             <span class="badge bg-soft-success text-success">Verified</span>
                    //         ';
                    //     }else{
                    //         $isVerif = '
                    //             <span class="badge bg-soft-danger text-danger">Not Verified</span>
                    //         ';
                    //     }

                    //     $isSubmit = '';
                    //     if($participant->is_submited == '1'){
                    //         $isSubmit = '
                    //             <span class="badge bg-soft-success text-success">Submited</span>
                    //         ';
                    //     }else{
                    //         $isSubmit = '
                    //             <span class="badge bg-soft-danger text-danger">Not Submited</span>
                    //         ';
                    //     }

                    //     $step = '';
                    //     if($participant->step == '0'){
                    //       $step = "1. Basic";
                    //     }else if($participant->step == '1'){
                    //       $step = "2. Other";
                    //     }else if($participant->step == '2'){
                    //       $step = "3. Essay";
                    //     }else if($participant->step == '3'){
                    //       $step = "4. Essay";
                    //     }else if($participant->step == '4'){
                    //       $step = "5. Essay";
                    //     }else{
                    //       $step = "Completed";
                    //     }


                    //     $isChecked = '';
                    //     if($participant->is_checked == '1'){
                    //         $isChecked = '
                    //             <span class="badge bg-soft-success text-success">Checked</span>
                    //         ';
                    //     }else{
                    //         $isChecked = '
                    //             <span class="badge bg-soft-danger text-danger">Not Checked</span>
                    //         ';
                    //     }


                    //     $btnChekced = "";
                    //     if($participant->is_checked == '0' && $participant->is_submited == '1'){
                    //       $btnChekced = '
                    //         <button onclick="showMdlChecked(\''.$participant->id_user.'\')" class="btn btn-soft-info btn-icon btn-sm"><i class="bi-check"></i></button>
                    //       ';
                    //     }


                    //     echo '
                    //         <tr>
                    //             <td scope="col">'.$no++.'</td>
                    //             <td scope="col">'.$participant->name.'</td>
                    //             <td scope="col">'.$isVerif.'</td>
                    //             <td scope="col">'.$step.'</td>
                    //             <td scope="col">'.$isSubmit.'</td>
                    //             <td scope="col">'.$isChecked.'</td>
                    //             <td scope="col">
                    //               '.$btnChekced.'
                    //               <a target="_blank" href="'.site_url('admin/participant/'.$participant->id_user).'" class="btn btn-soft-info btn-icon btn-sm"><i class="bi-eye"></i></a>
                    //               <button onclick="showMdlChangePassword(\''.$participant->id_user.'\')" class="btn btn-soft-primary btn-icon btn-sm"><i class="bi-key"></i></button>
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
    <!-- Modal -->
    <div class="modal fade" id="mdlChangePass" tabindex="-1" aria-labelledby="mdlDeleteLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlDeleteLabel">Change Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body text-center">
              <div class="text-center">Are you sure to change the password? new passwords: <span class="mdlChangePass_passLabel" style="font-weight: bold;"></span></div>
          </div>

          <div class="modal-footer">
            <form action="<?= site_url('admin/participant/change-password')?> " method="post">
              <input type="hidden" name="id" id="mdlChangePass_id" >
              <input type="hidden" name="pass" id="mdlChangePass_pass" >
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-soft-success">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
    <!-- Modal -->
    <div class="modal fade" id="mdlChecked" tabindex="-1" aria-labelledby="mdlDeleteLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlDeleteLabel">Checked Participant</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body text-center">
              <div class="text-center">Are you sure to checked this user?</div>
          </div>

          <div class="modal-footer">
            <form action="<?= site_url('admin/participant/checked')?> " method="post">
              <input type="hidden" name="id" id="mdlChecked_id" >
              <input type="hidden" name="page" value="participant" >
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-soft-success">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
    <!-- Modal -->
    <div class="modal fade" id="mdlAgreement" tabindex="-1" aria-labelledby="mdlDeleteLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlDeleteLabel">Agreement Letter Validation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="text-center">
              <iframe id="mdlAgreement_doc" id="" width="100%" height="500px" src="" frameborder="0"></iframe>
            </div>
            <a id="mdlAgreement_href" href="" class="btn btn-primary" target="_blank"> Open in new tab</a>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
              <form id="formAgreement" action="<?= site_url('admin/participant/valid-agreement')?>" method="POST">
                <input type="hidden" name="id" id="mdlAgreement_id" >
                <input type="submit" name="status" class="btn btn-soft-danger" value="Deny">
                <input type="submit" name="status" class="btn btn-soft-success" value="Approve">
              </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
  </main>
  <script>
    var table = $('#dataTable').DataTable({
        'processing': true,
        'serverSide': true,
        'ordering': false,
        'searching': false,
        'serverMethod': 'post',
        'ajax': {
            'url':'<?= site_url('admin/participant/ajxGet')?>',
            'data': function(d){
                d.filterEmail     = $('#filter_email').val()
                d.filterName      = $('#filter_name').val()
                d.filterNumber    = $('#filter_number').val()
                // d.filterVerified  = $('#filter_verified').val()
                d.filterSubmited  = $('#filter_submited').val()
                d.filterChecked  = $('#filter_checked').val()
                d.filterAgreement  = $('#filter_agreement').val()
            }
        },
        'columns': [
            { data: 'no' },
            { data: 'name' },
            { data: 'step' },
            { data: 'statusSubmit' },
            { data: 'statusCheck' },
            { data: 'statusAgreement' },
            { data: 'action' }
        ]
    });
    const showMdlChangePassword = id => {
      const pass = Math.random().toString(36).slice(-8);
      $('#mdlChangePass_id').val(id);
      $('#mdlChangePass_pass').val(pass);
      $('.mdlChangePass_passLabel').html(pass);
      $('#mdlChangePass').modal('show')
    }
    const showMdlChecked = id => {
      const pass = Math.random().toString(36).slice(-8);
      $('#mdlChecked_id').val(id);
      $('#mdlChecked').modal('show')
    }
    const showMdlAgreement = (id, status, path) => {
      if(status != '1'){
        $('#formAgreement').attr('hidden', true)
      }else{
        $('#formAgreement').attr('hidden', false)
      }

      $('#mdlAgreement_doc').attr('src', path)
      $('#mdlAgreement_href').attr('href', path)
      $('#mdlAgreement_id').val(id);
      $('#mdlAgreement').modal('show')
    }
    function btnSearch(){
        table.ajax.reload();
    }
  </script>