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
  <script src="<?= site_url()?>assets/vendor/quill/dist/quill.min.js"></script>

  <!-- JS Front -->
  <script src="<?= site_url()?>assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      new HSHeader('#header').init()


      // INITIALIZATION OF LISTJS COMPONENT
      // =======================================================
      HSCore.components.HSList.init('#snippetsSearch')
      const snippetsSearch = HSCore.components.HSList.getItem('snippetsSearch')


      // GET JSON FILE RESULTS
      // =======================================================
      fetch('<?= site_url()?>assets/json/snippets-search.json')
      .then(response => response.json())
      .then(data => {
        snippetsSearch.add(data)
      })


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')
      HSCore.components.HSQuill.init('.js-quill')
    })()
  </script>
</body>
</html>