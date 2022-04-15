<!-- Nav -->
<div class="row">
    <div class="col mb-4 mb-md-5 mb-lg-0">
        <!-- Card -->
        <a class="card card-lg card-transition h-100 text-center" href="#">
        <div class="card-body">
            <div class="mb-4">
            <img src="<?= $detail->qr?>" style="width: 160px;" alt="">
            </div>
            <h3 class="card-title">Your QR Code</h3>
            <p class="card-text text-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="card-footer pt-0">
            <form action="<?= site_url('personal-info/download-qr')?>" method="POST">
                <button type="submit" class="btn btn-soft-primary">Download</button>
            </form>
        </div>
        </a>
        <!-- End Card -->
    </div>
</div>
<div class="text-center mb-3">
</div>
<div class="alert alert-soft-success" role="alert">
    You have submitted your personal data form, <a href="#" onclick="showDetail()" style="color: #00c9a7;"><b><u>check detail</u></b></a>
</div>  
<div class="text-center boxDetail" hidden>
  <ul class="nav nav-segment nav-pills mb-7" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="nav-one-eg1-tab" href="#nav-one-eg1" data-bs-toggle="pill" data-bs-target="#nav-one-eg1" role="tab" aria-controls="nav-one-eg1" aria-selected="true">Basic</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="nav-two-eg1-tab" href="#nav-two-eg1" data-bs-toggle="pill" data-bs-target="#nav-two-eg1" role="tab" aria-controls="nav-two-eg1" aria-selected="false">Other</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="nav-three-eg1-tab" href="#nav-three-eg1" data-bs-toggle="pill" data-bs-target="#nav-three-eg1" role="tab" aria-controls="nav-three-eg1" aria-selected="false">Essay</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="nav-four-eg1-tab" href="#nav-four-eg1" data-bs-toggle="pill" data-bs-target="#nav-four-eg1" role="tab" aria-controls="nav-four-eg1" aria-selected="false">Program</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="nav-five-eg1-tab" href="#nav-five-eg1" data-bs-toggle="pill" data-bs-target="#nav-five-eg1" role="tab" aria-controls="nav-five-eg1" aria-selected="false">Self Photo</a>
    </li>
  </ul>
</div>
<!-- End Nav -->

<!-- Tab Content -->
<div class="tab-content boxDetail" hidden>
  <div class="tab-pane fade show active" id="nav-one-eg1" role="tabpanel" aria-labelledby="nav-one-eg1-tab">
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Full Name</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $this->session->userdata('name')?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Birthdate</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= date_format(date_create($detail->birth_date), 'j F Y')?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Gender</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->gender == '1' ? 'Male' : 'Female'?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Address</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->address ?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Nationality</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->nationality ?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Occupation</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->occupation ?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Field of Study</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->field_of_study ?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Institution / Workplace</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->institution_workplace ?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Whatsapp Number</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->whatsapp_number ?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Instagram Account</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b>@<?= $detail->instagram ?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Emergency Contact</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->emergency_contact ?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Contact Relation</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->contact_relation ?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Disease History</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->disease_history ?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">T-Shirt Size</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->tshirt_size ?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Are you vegetarian?</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->is_vegetarian == "1" ? "Yes" : "No" ?></b></span>
        </div>
        </div>
    </div>
  </div>

  <div class="tab-pane fade" id="nav-two-eg1" role="tabpanel" aria-labelledby="nav-two-eg1-tab">
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Experience</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->experience?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Achievements</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->achievements?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Social Projects</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->social_projects?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Talents</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->talents?></b></span>
        </div>
        </div>
    </div>
  </div>

  <div class="tab-pane fade" id="nav-three-eg1" role="tabpanel" aria-labelledby="nav-three-eg1-tab">
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Sub Theme</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->essay_type?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Essay</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->essay?></b></span>
        </div>
        </div>
    </div>
  </div>
  <div class="tab-pane fade" id="nav-four-eg1" role="tabpanel" aria-labelledby="nav-four-eg1-tab">
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">How do you know about this program?</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->source?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Souce Account/Name</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->source_account?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Motivation Video Link</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->motivation_link?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Share Requirement Proof Link</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->share_proof_link?></b></span>
        </div>
        </div>
    </div>
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Referral Code</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <span><b><?= $detail->referral_code?></b></span>
        </div>
        </div>
    </div>
  </div>
  <div class="tab-pane fade" id="nav-five-eg1" role="tabpanel" aria-labelledby="nav-five-eg1-tab">
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Photo</label>
        <div class="col-sm-9">
        <div class="js-form-message">
            <div id="boxImg" class="text-center mb-3 p-3" style="border: .0625rem solid rgba(33,50,91,.1);border-radius: .3125rem;cursor: pointer;">
                <img style="max-width: 300px;" id="blah" class="" src="<?= $detail->photo ?>" />
            </div>
        </div>
        </div>
    </div>
  </div>
</div>
<!-- End Tab Content -->