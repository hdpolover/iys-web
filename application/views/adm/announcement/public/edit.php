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
            <h1 class="docs-page-header-title">Edit Announcement</h1>
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
          <form action="<?= site_url('admin/announcement-public/change')?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="validationValidInput1">Title</label>
                <input type="text" name="title" class="form-control" value="<?= $announcement->title ?>" id="validationValidInput1" placeholder="Placeholder" required>
            </div>
            <div class="mb-3">
                <label for="validationValidFileInput1">Poster</label>
                <div id="boxImg" class="text-center mb-3 p-3" style="border: .0625rem solid rgba(33,50,91,.1);border-radius: .3125rem;cursor: pointer;">
                    <img style="max-width: 300px;" id="blah" class="" src="<?= $announcement->poster ?>" />
                </div>
                <input type="file" accept=".jpg,.png,.jpeg,.bmp" class="form-control" name="poster" style="cursor: pointer;" id="imgPoster">
            </div>
            <div class="mb-3">
                <label for="validationValidTextarea1">Content</label>
                <textarea class="summernote-editor" name="content">
                  <?= $announcement->content?>
                </textarea>
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
                <!-- <input type="hidden" name="summit" value="1"> -->
                <input type="hidden" name="id" value="<?= $announcement->id_announcement?>">
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