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
              <img class="navbar-brand-logo" src="<?= site_url()?>assets/svg/logos/logo.svg" alt="Logo">
            </a>
            <a class="navbar-brand-badge" href="../documentation/changelog.html">
              <span class="badge bg-soft-primary text-primary ms-2">v4.1</span>
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
            <h1 class="docs-page-header-title">Announcement</h1>
          </div>
        </div>
      </div>
      <!-- End Page Header -->
      <!-- Transaction Table -->
        <!-- Table -->
        <div class="row">
          <div class="col">
            <button type="button" class="btn btn-soft-success btn-sm" data-bs-toggle="modal" data-bs-target="#mdlAdd" style="float: right;">
              Add
              <i class="bi-plus-lg ms-1"></i>
            </button>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <table class="table table-borderless table-thead-bordered">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Summit</th>
                  <th scope="col">Poster</th>
                  <th scope="col">Date</th>
                  <th scope="col">Title</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Istanbul Youth Summit 2022</th>
                  <td></td>
                  <td>22 March 2022</td>
                  <td>sdf</td>
                  <td>
                    <button type="button" class="btn btn-soft-primary btn-icon btn-sm"><i class="bi-pencil-square"></i></button>
                    <button type="button" class="btn btn-soft-danger btn-icon btn-sm"><i class="bi-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
          <!-- End Table -->
        <!-- End Transaction Table -->
    </div>
    <!-- End Content -->
    <!-- Modal -->
    <div class="modal fade" id="mdlAdd" tabindex="-1" aria-labelledby="mdlAddLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="mdlAddLabel">New Announcement</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <form action="<?= site_url('admin/announcement/store')?>" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="validationValidInput1">Title</label>
                <input type="text" class="form-control" id="validationValidInput1" placeholder="Placeholder">
              </div>
            
              <div class="mb-3">
                <label for="validationValidFileInput1">Poster</label>
                <div class="mb-3 text-center" id="boxPoster" style="border: .0625rem solid rgba(33,50,91,.1);border-radius: .3125rem;width: 100%;height: 300px;">
                  <img style="" id="image" class="my-3" src="<?= site_url('assets/svg/illustrations/oc-lost.svg')?>" alt="poster image" width="250"/>
                </div>
                <input type="file" id="file" onchange="ShowPoster(event);" accept=".jpg,.jpeg,.png" id="validationValidFileInput1" class="form-control">
              </div>

              <div class="mb-3">
                <label for="validationValidTextarea1">Content</label>
                <div class="quill-custom">
                  <input type="hidden" id="content" name="content">
                  <div class="js-quill" style="min-height: 15rem;"
                      data-hs-quill-options='{
                      "placeholder": "Type your message...",
                        "modules": {
                          "toolbar": [
                            ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                          ]
                        }
                      }'>
                  </div>
                </div>
              </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-soft-success">Save</button>
          </div>
            </form>
        </div>
      </div>
    </div>
    <!-- End Modal -->
  </main>
  <script>
    $('#boxPoster').click(function(){
      $('#file').click();
    })
    function ShowPoster(event){
      if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("image");
        preview.src = src;
        // preview.style.width = "250px";
        preview.style.width = "80%";
        preview.style.height = "100%";
        // preview.style.display = "block";
      }
    };
  </script>