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
            <h1 class="docs-page-header-title">Ambassador</h1>
          </div>
        </div>
      </div>
      <!-- End Page Header -->
      <!-- Transaction Table -->
        <!-- Table -->
        <div class="row">
          <div class="col">
            <a href="<?= site_url('admin/ambassador/add')?>" class="btn btn-soft-success btn-sm" style="float: right;">
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
                  <th scope="col">Photo</th>
                  <th scope="col">Referral Code</th>
                  <th scope="col">Total Redeem</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($ambassadors as $ambassador) {
                    $status = "";
                    if($ambassador->status == "1"){
                      $status = "<span class='badge bg-soft-success text-success'>Active</span>";
                    }else{
                      $status = "<span class='badge bg-soft-danger text-danger'>Disabled</span>";
                    }

                    echo  '
                      <tr>
                        <th scope="row">'.$ambassador->name.'</th>
                        <td>
                          <button onclick="showMdlPoster(\''.$ambassador->photo.'\')" type="button" class="btn btn-soft-dark btn-icon btn-sm"><i class="bi-image"></i></button>
                        </td>
                        <td>'.$ambassador->referral_code.'</td>
                        <td>'.$ambassador->total_redeem.'</td>
                        <td>'.$status.'</td>
                        <td>
                          <button onclick="showMdlChangeStatus('.$ambassador->id_ambassador.')" type="button" class="btn btn-soft-info btn-icon btn-sm"><i class="bi-shuffle"></i></button>
                          <a href="'.site_url('admin/ambassador/edit/'.$ambassador->id_ambassador).'" class="btn btn-soft-primary btn-icon btn-sm"><i class="bi-pencil-square"></i></a>
                          <button onclick="showMdlDelete('.$ambassador->id_ambassador.')" type="button" class="btn btn-soft-danger btn-icon btn-sm"><i class="bi-trash"></i></button>
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
        <!-- End Transaction Table -->
    </div>
    <!-- End Content -->
    <!-- Modal -->
    <div class="modal fade" id="mdlPoster" tabindex="-1" aria-labelledby="mdlPosterLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlPosterLabel">Poster Announcement</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body text-center">
              <img id="mdlPoster_src" style="max-width: 550px;" src="" alt="">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
    <!-- Modal -->
    <div class="modal fade" id="mdlDelete" tabindex="-1" aria-labelledby="mdlDeleteLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlDeleteLabel">Delete Announcement</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body text-center">
              <h4 class="text-center">Are you sure to delete the announcement ?</h4>
          </div>

          <div class="modal-footer">
            <form action="<?= site_url('admin/ambassador/destroy')?> " method="post">
              <input type="hidden" name="id" id="mdlDelete_id" >
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-soft-danger">Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
    <!-- Modal -->
    <div class="modal fade" id="mdlChangeStatus" tabindex="-1" aria-labelledby="mdlChangeStatusLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlChangeStatusLabel">Change Status</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body text-center">
              <h4 class="text-center">Are you sure to change the status ?</h4>
          </div>

          <div class="modal-footer">
            <form action="<?= site_url('admin/ambassador/change-status')?> " method="post">
              <input type="hidden" name="id" id="mdlChangeStatus_id" >
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
    const showMdlPoster = src => {
      $('#mdlPoster_src').attr('src', src);
      $('#mdlPoster').modal('show')
    }
    const showMdlDelete = id => {
      $('#mdlDelete_id').val(id);
      $('#mdlDelete').modal('show')
    }
    const showMdlChangeStatus = id => {
      $('#mdlChangeStatus_id').val(id);
      $('#mdlChangeStatus').modal('show')
    }
  </script>