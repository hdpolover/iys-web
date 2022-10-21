  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Go To -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
    <i class="bi-chevron-up"></i>
  </a>
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="<?= site_url()?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="<?= site_url()?>assets/vendor/hs-header/dist/hs-header.min.js"></script>
  <script src="<?= site_url()?>assets/vendor/list.js/dist/list.min.js"></script>
  <script src="<?= site_url()?>assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
  <script src="<?= site_url()?>assets/vendor/prism/prism.js"></script>
  <!-- <script src="<?= site_url()?>assets/vendor/quill/dist/quill.min.js"></script> -->
  <script src="<?= site_url()?>assets/js/flatpickr.min.js"></script>

  <!-- JS Front -->
  <script src="<?= site_url()?>assets/js/theme.min.js"></script>
  <script src="<?= site_url()?>assets/js/general.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).ready(function(){
      $('.summernote-editor').summernote({
        placeholder: 'Type here..',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      })
    })
    $('.datatable').DataTable();
    $('.datatablewithoutsearch').DataTable({'searching' :false});
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      // new HSHeader('#header').init()
      // HSCore.components.HSQuill.init('.js-quill')
      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')
    })()

    
  </script>
</body>
</html>