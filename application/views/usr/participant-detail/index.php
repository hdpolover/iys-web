<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="bg-light mt-6">
  <!-- Breadcrumb -->
  <div class="navbar-dark bg-dark" style="background-image: url(<?site_url()?>assets/svg/components/wave-pattern-light.svg);">
    <div class="container content-space-1 content-space-b-lg-3">
      <div class="row align-items-center">
        <div class="col">
          <div class="d-none d-lg-block">
            <h1 class="h2 text-white">Personal Info</h1>
          </div>

          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light mb-0">
              <li class="breadcrumb-item">Personal Info</li>
              <li class="breadcrumb-item active" aria-current="page">Overview</li>
            </ol>
          </nav>
          <!-- End Breadcrumb -->
        </div>
        <!-- End Col -->

        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
  </div>
  <!-- End Breadcrumb -->
  <!-- Content -->
  <div class="container content-space-1 content-space-t-lg-0 content-space-b-lg-2 mt-lg-n10">
    <div class="row">
      <?php
        $this->load->view('templates/usr/sidebar.php');
      ?>

      <div class="col-lg-9">
        <div class="d-grid gap-3 gap-lg-5">
          <!-- Card -->
          <div class="card">
            <div class="card-header border-bottom">
              <div class="row">
                <div class="col">
                  <h4 class="card-header-title">Personal Info</h4>    
                </div>
                <div class="col">
                  <?php
                    if($detail->is_submited == "0"){
                      echo '
                        <span style="float: right;" class="badge bg-soft-danger text-danger">Not Submitted</span>
                      ';
                    }else{
                      echo '
                        <span style="float: right;" class="badge bg-soft-success text-success">Submitted</span>
                      ';
                    }
                  ?>
                </div>
              </div>
            </div>
            <?php
              if($this->session->userdata('is_verif') == 0){
                echo '
                  <div class="alert alert-soft-danger text-center card-alert" role="alert">
                    Please verify your email address.
                  </div>
                ';
              }
            ?>

            <!-- Body -->
            <div class="card-body">
              <?php 
                if($this->session->flashdata('err_msg')){
                  echo '
                    <div class="alert alert-soft-danger" role="alert">
                      '.$this->session->flashdata('err_msg').'
                    </div>    
                  ';
                }
              ?>
              
              <?php
                if($this->session->userdata('is_verif') == 1){
                  if($detail->is_submited == false){
                    $this->load->view('usr/participant-detail/form_non_submitted');
                  }else{
                    $this->load->view('usr/participant-detail/form_submitted');
                  }
                }
              ?>
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer pt-0">
              <!-- <div class="d-flex justify-content-end gap-3">
                <a class="btn btn-white" href="javascript:;">Cancel</a>
                <a class="btn btn-soft-primary" href="javascript:;">Save changes</a>
              </div> -->
            </div>
            <!-- End Footer -->
          </div>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->
  </div>
  <!-- End Content -->
</main>
<!-- Modal -->
<div class="modal fade" id="mdlConfirmation" tabindex="-1" aria-labelledby="mldConfirmationLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mldConfirmationLabel">Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body text-center">
        <p>Are you sure to submit your personal data form?, if yes then only admin can change your data</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" onclick="clickBtnSubmit()" class="btn btn-soft-success" data-bs-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
</div>
    <!-- End Modal -->
<!-- ========== END MAIN CONTENT ========== -->
<script>
  function step1clicked(){
    const formData = {
      'fullName'        : $('input[name="fullName"]').val(),
      'birthday'        : $('input[name="birthday"]').val(),
      'gender'          : $('input[name="gender"]:checked').val(),
      'province'        : $('input[name="province"]').val(),
      'city'            : $('input[name="city"]').val(),
      'postalCode'      : $('input[name="postalCode"]').val(),
      'detailAddress'   : $('input[name="detailAddress"]').val(),
      'nationality'     : $('select[name="nationality"]').val(),
      'occupation'      : $('input[name="occupation"]').val(),
      'fullOfStudy'     : $('input[name="fullOfStudy"]').val(),
      'instWork'        : $('input[name="instWork"]').val(),
      'whatsAppNumber'  : $('input[name="whatsAppNumber"]').val(),
      'instagram'       : $('input[name="instagram"]').val(),
      'contactRelation' : $('input[name="contactRelation"]').val(),
      'emergency'       : $('input[name="emergency"]').val(),
      'disease'         : $('textarea[name="disease"]').val(),
      'tshirt'          : $('select[name="tshirt"]').val(),
      'vegetarian'      : $('input[name="vegetarian"]:checked').val()
    }

    $.ajax({
      url: '<?= site_url('personal-info/ajxPostBasic')?>',
      method: 'POST',
      data: formData,
      success: function(res){
        
      }
    })
  }
  function step2clicked(){
    const formData = {
      'experience'      : $('textarea[name="experience"]').val(),
      'achievements'    : $('textarea[name="achievements"]').val(),
      'socialProjects'  : $('textarea[name="socialProjects"]').val(),
      'talents'         : $('textarea[name="talents"]').val()
    }

    $.ajax({
      url: '<?= site_url('personal-info/ajxPostOther')?>',
      method: 'POST',
      data: formData,
      success: function(res){
        
      }
    })
  }
  function step3clicked(){
    const formData = {
      'essayType' : $('select[name="essayType"]').val(),
      'essay'     : $('textarea[name="essay"]').val(),
    }

    $.ajax({
      url: '<?= site_url('personal-info/ajxPostEssay')?>',
      method: 'POST',
      data: formData,
      success: function(res){
        
      }
    })
  }
  function step4clicked(){
    const formData = {
      'source'            : $('select[name="source"]').val(),
      'sourceAccount'     : $('input[name="sourceAccount"]').val(),
      'motivation'        : $('input[name="motivation"]').val(),
      'shareRequirement'  : $('input[name="shareRequirement"]').val(),
      'referral'          : $('input[name="referral"]').val(),
    }

    $.ajax({
      url: '<?= site_url('personal-info/ajxPostProgram')?>',
      method: 'POST',
      data: formData,
      success: function(res){

      }
    })
  }
  function showDetail(){
    $('.boxDetail').attr('hidden', false)
  }
  function clickBtnSubmit(){
    $('#formSubmit').submit()
  }
  function checkRC(){
    const rc = $('#rc').val()
    $.ajax({
      url: '<?= site_url('personal-info/ajxCheckRC')?>',
      method: 'POST',
      data: {referral: rc},
      success: function(res){
        res = JSON.parse(res)
        if(res.status === true){
          $('#checkRCStatus').attr('hidden', false);
          $('#checkRCStatus').html(`<span class="text-success">Your referral code is valid!</span>`);
        }else {
          $('#checkRCStatus').attr('hidden', false);
          $('#checkRCStatus').html(`<span class="form-text text-danger">The referral code you entered doesn't exist. Try again.!</span>`);
        }
      }
    })
  }
</script>