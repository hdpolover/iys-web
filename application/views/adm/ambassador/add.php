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
            <h1 class="docs-page-header-title">Add New Ambassador</h1>
          </div>
        </div>
      </div>
      <!-- End Page Header -->
      <!-- Transaction Table -->
        <!-- Table -->
        <div class="row mt-3">
            <?php
                if($this->session->flashdata('err_msg')){
                    echo '
                        <div class="alert alert-soft-danger mb-3" role="alert">
                            '.$this->session->flashdata('err_msg').'
                        </div>        
                    ';
                }
            ?>
          <form action="<?= site_url('admin/ambassador/store')?>" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col">
                <div class="mb-3">
                    <label for="validationValidInput1">Name</label>
                    <input type="text" id="inptName" name="name" class="form-control" id="validationValidInput1" placeholder="Name" required>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="validationValidInput1">Referral Code</label>
                  <div class="input-group">
                    <input type="text"  class="form-control inptRC" id="validationValidInput1" placeholder="Referral Code" readonly required>
                    <input type="hidden" name="referral" class="form-control inptRC" id="validationValidInput1" placeholder="referral Code" readonly required>
                    <button type="button" onclick="generateRC()" class="btn btn-sm btn-success input-group-text" id="basic-addon2">Generate</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-3">
                <label for="validationValidInput1">Institution</label>
                <input type="text" id="inptName" name="institution" class="form-control" id="validationValidInput1" placeholder="Institution" required>
            </div>
            <div class="mb-3">
                <label for="validationValidInput1">Instagram</label>
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">https://instagram.com/</span>
                  <input type="text" id="inptName" name="instagram" class="form-control" id="validationValidInput1" placeholder="Username" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="validationValidInput1">Tiktok</label>
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">https://tiktok.com/@</span>
                  <input type="text" id="inptName" name="tiktok" class="form-control" id="validationValidInput1" placeholder="Username" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="validationValidFileInput1">Photo</label>
                <div id="boxImg" class="text-center mb-3 p-3" style="border: .0625rem solid rgba(33,50,91,.1);border-radius: .3125rem;cursor: pointer;">
                    <img style="max-width: 300px;" id="blah" class="" src="<?= site_url('assets/svg/illustrations/oc-lost.svg')?>" />
                </div>
                <input type="file" accept=".jpg,.png,.jpeg,.bmp" class="form-control" name="poster" style="cursor: pointer;" id="imgPoster">
            </div>
            <!-- <div class="mb-3">
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
            </div> -->
            <div style="float: right;">
                <input type="hidden" name="summit" value="1">
                <button type="submit" class="btn btn-soft-success">Save</button>
            </div>
          </form>
        </div>
          <!-- End Table -->
        <!-- End Transaction Table -->
    </div>
    <!-- End Content -->
  </main>
  <script>
    function generateRC(){
      const name = $('#inptName').val()
      $.ajax({
        url: '<?= site_url('admin/ambassador/ajxGenRC')?>',
        method: 'POST',
        data: {name},
        success: function(res){
          res = JSON.parse(res)
          $('.inptRC').val(res.referral_code)
        }
      })
    }
    // var quill = new Quill('.js-quill', {
    //     theme: 'snow',
    //     modules: {
    //         toolbar: [
    //                 [{ header: [1, 2, 3, 4, 5, 6, false] }],
    //                 [{ font: [] }],
    //                 ["bold", "italic"],
    //                 ["link", "blockquote", "code-block", "image"],
    //                 [{ list: "ordered" }, { list: "bullet" }],
    //                 [{ script: "sub" }, { script: "super" }],
    //                 [{ color: [] }, { background: [] }],
    //         ]
    // },
    // });
    
    // quill.on('text-change', function(delta, oldDelta, source) {
    //     document.querySelector("input[name='content']").value = quill.root.innerHTML;
    // });
    // function readURL(input) {
    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();

    //         reader.onload = function(e) {
    //             $('#blah').attr('src', e.target.result);
    //         }

    //         reader.readAsDataURL(input.files[0]);
    //     }
    // }

    // $("#boxImg").click(function() {
    //     $('#imgPoster').click();
    // });

    // $("#imgPoster").change(function() {
    //     readURL(this);
    // });
  </script>