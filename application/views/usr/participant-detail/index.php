<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="bg-light">
  <!-- Breadcrumb -->
  <div class="navbar-dark bg-dark" style="background-image: url(<?site_url()?>assets/svg/components/wave-pattern-light.svg);">
    <div class="container content-space-1 content-space-b-lg-3">
      <div class="row align-items-center">
        <div class="col">
          <div class="d-none d-lg-block">
            <h1 class="h2 text-white">Personal Info</h1>
          </div>

          <!-- Breadcrumb -->
          <!-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light mb-0">
              <li class="breadcrumb-item">Account</li>
              <li class="breadcrumb-item active" aria-current="page">Personal Info</li>
            </ol>
          </nav> -->
          <!-- End Breadcrumb -->
        </div>
        <!-- End Col -->

        <div class="col-auto">
          <div class="d-none d-lg-block">
            <a class="btn btn-soft-light btn-sm" href="<?= site_url('logout')?>">Sign Out</a>
          </div>

          <!-- Responsive Toggle Button -->
          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarNav" aria-controls="sidebarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-default">
              <i class="bi-list"></i>
            </span>
            <span class="navbar-toggler-toggled">
              <i class="bi-x"></i>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->
        </div>
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
                  <span style="float: right;" class="badge bg-soft-danger text-danger">Not Submitted</span>
                </div>
              </div>
            </div>

            <!-- Body -->
            <div class="card-body">
              <!-- Step Form -->
              <form class="js-step-form-validate js-validate"
                data-hs-step-form-options='{
                  "progressSelector": "#validationFormProgress",
                  "stepsSelector": "#validationFormContent",
                  "endSelector": "#validationFormFinishBtn",
                  "isValidate": true
                }'>
                <!-- Step -->
                <ul id="validationFormProgress" class="js-step-progress step step-sm step-icon-sm step-inline step-item-between mb-7">
                  <li class="step-item">
                    <a class="step-content-wrapper" href="javascript:;"
                      data-hs-step-form-next-options='{
                        "targetSelector": "#validationFormBasic"
                      }'>
                      <span class="step-icon step-icon-soft-dark">1</span>
                      <div class="step-content">
                        <span class="step-title">Basic</span>
                      </div>
                    </a>
                  </li>

                  <li class="step-item">
                    <a class="step-content-wrapper" href="javascript:;"
                      data-hs-step-form-next-options='{
                        "targetSelector": "#validationFormOther"
                      }'>
                      <span class="step-icon step-icon-soft-dark">2</span>
                      <div class="step-content">
                        <span class="step-title">Other</span>
                      </div>
                    </a>
                  </li>

                  <li class="step-item">
                    <a class="step-content-wrapper" href="javascript:;"
                      data-hs-step-form-next-options='{
                        "targetSelector": "#validationFormEssay"
                      }'>
                      <span class="step-icon step-icon-soft-dark">3</span>
                      <div class="step-content">
                        <span class="step-title">Essay</span>
                      </div>
                    </a>
                  </li>
                  <li class="step-item">
                    <a class="step-content-wrapper" href="javascript:;"
                      data-hs-step-form-next-options='{
                        "targetSelector": "#validationFormProgram"
                      }'>
                      <span class="step-icon step-icon-soft-dark">3</span>
                      <div class="step-content">
                        <span class="step-title">Program</span>
                      </div>
                    </a>
                  </li>
                  <li class="step-item">
                    <a class="step-content-wrapper" href="javascript:;"
                      data-hs-step-form-next-options='{
                        "targetSelector": "#validationFormSelfPhoto"
                      }'>
                      <span class="step-icon step-icon-soft-dark">4</span>
                      <div class="step-content">
                        <span class="step-title">Self Photo</span>
                      </div>
                    </a>
                  </li>
                </ul>
                <!-- End Step -->

                <!-- Content Step Form -->
                <div id="validationFormContent">
                  <div id="validationFormBasic" class="active">
                    
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Full Name</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <input type="text" class="form-control" name="fullName" id="validationFormUsernameLabel" placeholder="Full Name" value="<?= $this->session->userdata('name')?>" aria-label="Username" required data-msg="Please enter your fullname.">
                          <span class="invalid-feedback">Please enter a valid full name.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Birthdate</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <input type="text" class="form-control flatpickr" value="<?= $detail->birth_date?>" name="birthday" placeholder="Birthday" required>
                          <span class="invalid-feedback">Please enter a valid birthday.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Gender</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <div class="row">
                            <div class="col-sm mb-2 mb-sm-0">
                              <!-- Form Radio -->
                              <label class="form-control" for="formControlRadioEg1">
                                <span class="form-check">
                                  <input type="radio" class="form-check-input" name="gender" value="1" id="formControlRadioEg1" <?= $detail->gender == '1' ? 'checked' : ''?> required>
                                  <span class="form-check-label">Male</span>
                                </span>
                              </label>
                              <!-- End Form Radio -->
                            </div>

                            <div class="col-sm mb-2 mb-sm-0">
                              <!-- Form Radio -->
                              <label class="form-control" for="formControlRadioEg2">
                                <span class="form-check">
                                  <input type="radio" class="form-check-input" name="gender" value="2" id="formControlRadioEg2" <?= $detail->gender == '2' ? 'checked' : ''?> required>
                                  <span class="form-check-label">Female</span>
                                </span>
                              </label>
                              <!-- End Form Radio -->
                            </div>
                          </div>
                          <span class="invalid-feedback">Please enter a gender.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Address</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <textarea  class="form-control" name="address" required rows="5"><?= $detail->address?></textarea>
                          <span class="invalid-feedback">Please enter a valid address.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Nationality</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <select name="nationality" class="form-control" id="" required>
                            <option value="" selected disabled>Choose Nationality</option>
                            <?php
                              foreach ($countries as $country) {
                                $selected = '';
                                if($detail->nationality == $country->en_short_name) $selected = 'selected';
                                echo '
                                  <option value="'.$country->en_short_name.'" '.$selected.'>'.$country->en_short_name.'</option>
                                ';
                              }
                            ?>
                            
                          </select>
                          <span class="invalid-feedback">Please enter a valid nationality.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Occupation</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <input type="text" class="form-control" name="occupation" id="validationFormUsernameLabel" placeholder="Occupation" aria-label="Username" value="<?= $detail->occupation?>" required data-msg="Please enter your fullname.">
                          <span class="invalid-feedback">Please enter a valid occupation.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Field of Study</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <input type="text" class="form-control" name="fullOfStudy" id="validationFormUsernameLabel" value="<?= $detail->field_of_study?>" placeholder="Full of Study" aria-label="Username" required data-msg="Please enter your fullname.">
                          <span class="invalid-feedback">Please enter a valid full of study.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Institution / Workplace</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <input type="text" class="form-control" name="instWork" id="validationFormUsernameLabel" value="<?= $detail->institution_workplace?>" placeholder="Institution / Workplace" aria-label="Username" required data-msg="Please enter your fullname.">
                          <span class="invalid-feedback">Please enter a valid institution / workplace.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Whatsapp Number</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <input type="text" class="form-control" onkeypress="return isNumberKey(event)" name="whatsAppNumber" id="validationFormUsernameLabel" placeholder="Whatsapp Number" aria-label="Username"  value="<?= $detail->whatsapp_number?>"required data-msg="Please enter your fullname.">
                          <span class="invalid-feedback">Please enter a valid whatsapp number.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Instagram Account</label>

                      <div class="col-sm-9">
                        <div class="js-form-message input-group">
                          <span class="input-group-text" id="basic-addon1">@</span>
                          <input type="text" class="form-control" onkeypress="return space(event)" name="instagram" id="validationFormUsernameLabel" placeholder="Instagram Account" aria-label="Username" value="<?= $detail->instagram?>" required data-msg="Please enter your fullname.">
                            <span class="invalid-feedback">Please enter a valid instagram account.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Emergency Contact</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <input type="text" class="form-control" name="emergency" id="validationFormUsernameLabel" placeholder="Emergency Contact" value="<?= $detail->emergency_contact?>" aria-label="Username" required data-msg="Please enter your fullname.">
                          <span class="invalid-feedback">Please enter a valid emergency contact.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Contact Relation</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <input type="text" class="form-control" name="contactRelation" id="validationFormUsernameLabel" placeholder="Contact Relation" value="<?= $detail->contact_relation?>" aria-label="Username" required data-msg="Please enter your fullname.">
                          <span class="invalid-feedback">Please enter a valid contact relation.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Disease History</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <textarea  class="form-control" name="disease" required rows="5"><?= $detail->disease_history?></textarea>
                          <span class="invalid-feedback">Please enter a disease history.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">T-Shirt Size</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <select name="tshirt" class="form-control" id="" required>
                            <option value="" selected disabled>Choose Size</option>
                            <option value="S" <?= $detail->tshirt_size == 'S' ? 'selected' : ''?>>S</option>
                            <option value="M" <?= $detail->tshirt_size == 'M' ? 'selected' : ''?>>M</option>
                            <option value="L" <?= $detail->tshirt_size == 'L' ? 'selected' : ''?>>L</option>
                            <option value="XL" <?= $detail->tshirt_size == 'XL' ? 'selected' : ''?>>XL</option>
                            <option value="XXL" <?= $detail->tshirt_size == 'XXL' ? 'selected' : ''?>>XXL</option>
                            
                          </select>
                          <span class="invalid-feedback">Please enter a valid tshirt size.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Are you vegetarian?</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <div class="row">
                            <div class="col-sm mb-2 mb-sm-0">
                              <!-- Form Radio -->
                              <label class="form-control" for="formControlRadioEg3">
                                <span class="form-check">
                                  <input type="radio" class="form-check-input" name="vegetarian" value="1" id="formControlRadioEg3" <?= $detail->is_vegetarian == '1' ? 'checked' : ''?> required>
                                  <span class="form-check-label">Yes</span>
                                </span>
                              </label>
                              <!-- End Form Radio -->
                            </div>

                            <div class="col-sm mb-2 mb-sm-0">
                              <!-- Form Radio -->
                              <label class="form-control" for="formControlRadioEg4">
                                <span class="form-check">
                                  <input type="radio" class="form-check-input" name="vegetarian" value="0" id="formControlRadioEg4" <?= $detail->is_vegetarian == '0' ? 'checked' : ''?> required>
                                  <span class="form-check-label">No</span>
                                </span>
                              </label>
                              <!-- End Form Radio -->
                            </div>
                          </div>
                          <span class="invalid-feedback">Please enter a vegetarian.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Footer -->
                    <div class="d-flex align-items-center">
                      <!-- <button type="button" class="btn btn-ghost-secondary me-2"
                        data-hs-step-form-prev-options='{
                          "targetSelector": "#validationFormAccount"
                        }'>
                        <i class="bi-chevron-left small"></i> Previous step
                      </button> -->

                      <div class="ms-auto">
                        <button type="button" onclick="step1clicked()" class="btn btn-soft-primary"
                                data-hs-step-form-next-options='{
                                  "targetSelector": "#validationFormOther"
                                }'>
                          Next <i class="bi-chevron-right small"></i>
                        </button>
                      </div>
                    </div>
                    <!-- End Footer -->
                  </div>

                  <div id="validationFormOther" style="display: none;">
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Experience</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <textarea  class="form-control" name="experience" required rows="5"><?= $detail->experience?></textarea>
                          <span class="invalid-feedback">Please enter a experience.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Achievements</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <textarea  class="form-control" name="achievements" required rows="5"><?= $detail->achievements?></textarea>
                          <span class="invalid-feedback">Please enter a achievements.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Social Projects</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <textarea  class="form-control" name="socialProjects" required rows="5"><?= $detail->social_projects?></textarea>
                          <span class="invalid-feedback">Please enter a social projects.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Talents</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <textarea  class="form-control" name="talents" required rows="5"><?= $detail->talents?></textarea>
                          <span class="invalid-feedback">Please enter a social talents.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Footer -->
                    <div class="d-sm-flex align-items-center">
                      <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2"
                        data-hs-step-form-prev-options='{
                          "targetSelector": "#validationFormBasic"
                        }'>
                        <i class="bi-chevron-left small"></i> Previous step
                      </button>

                      <div class="ms-auto">
                        <button type="button" onclick="step2clicked()" class="btn btn-soft-primary"
                                data-hs-step-form-next-options='{
                                  "targetSelector": "#validationFormEssay"
                                }'>
                          Next <i class="bi-chevron-right small"></i>
                        </button>
                      </div>
                      
                    </div>
                    <!-- End Footer -->
                  </div>
                  <div id="validationFormEssay" style="display: none;">
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Sub Theme</label>
                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <select name="essayType" class="form-control" id="" required>
                            <option value="" selected disabled>Select a sub-theme</option>
                            <option value="Theme1" <?= $detail->essay_type == 'Theme1' ? 'selected' : ''?>>Theme1</option>
                            <option value="Theme2" <?= $detail->essay_type == 'Theme2' ? 'selected' : ''?>>Theme2</option>
                            <option value="Theme3" <?= $detail->essay_type == 'Theme3' ? 'selected' : ''?>>Theme3</option>
                            
                          </select>
                          <span class="invalid-feedback">Please enter a valid tshirt size.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Essay</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <textarea  class="form-control" name="essay" required rows="10"><?= $detail->essay ?></textarea>
                          <span class="invalid-feedback">Please enter a valid essay.</span>
                          <span class="form-text"><b>Note:</b> Your essay length must be between 200 to 300 words. It is recommended that you write your essay on other platform.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Footer -->
                    <div class="d-sm-flex align-items-center">
                      <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2"
                        data-hs-step-form-prev-options='{
                          "targetSelector": "#validationFormOther"
                        }'>
                        <i class="bi-chevron-left small"></i> Previous step
                      </button>

                      <div class="ms-auto">
                        <button type="button" onclick="step3clicked()" class="btn btn-soft-primary"
                                data-hs-step-form-next-options='{
                                  "targetSelector": "#validationFormProgram"
                                }'>
                          Next <i class="bi-chevron-right small"></i>
                        </button>
                      </div>
                    </div>
                    <!-- End Footer -->
                  </div>
                  <div id="validationFormProgram" style="display: none;">
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">How do you know about this program? </label>
                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <select name="source" class="form-control" id="" required>
                            <option value="" selected disabled>Select a source</option>
                            <option value="Facebook" <?= $detail->source == 'Facebook' ? 'selected' : ''?>>Facebook</option>
                            <option value="Instagram" <?= $detail->source == 'Instagram' ? 'selected' : ''?>>Instagram</option>
                            <option value="Friends" <?= $detail->source == 'Friends' ? 'selected' : ''?>>Friends</option>
                            <option value="Others" <?= $detail->source == 'Others' ? 'selected' : ''?>>Others</option>
                          </select>
                          <span class="invalid-feedback">Please enter a valid tshirt size.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Souce Account/Name</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <input type="text" class="form-control" name="sourceAccount" id="validationFormUsernameLabel" placeholder="Source Account / Name" aria-label="sourceAccount" value="<?= $detail->source_account ?>" required data-msg="Please enter your fullname.">
                          <span class="invalid-feedback">Please enter a valid source.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Motivation Video Link</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <input type="text" class="form-control" name="motivation" id="validationFormUsernameLabel" placeholder="Motivation Video Link" aria-label="sourceAccount" value="<?= $detail->motivation_link ?>" required data-msg="Please enter your fullname.">
                          <span class="form-text"><b>Note:</b> Paste the link to your motivation video about why you want to participate in the 5th Istanbul Youth Summit. The video can uploaded to Instagram or Youtube.</span>
                          <span class="invalid-feedback">Please enter a valid motivation.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Share Requirement Proof Link</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <input type="text" class="form-control" name="shareRequirement" id="validationFormUsernameLabel" placeholder="Share Requirement Proof Link" value="<?= $detail->share_proof_link ?>" aria-label="sourceAccount" required data-msg="Please enter your fullname.">
                          <span class="form-text">
                            <b>Note:</b> As mentioned on the Registration Guidelines, you need to do the followings:
                            <ul>
                              <li>Follow and Youth Break the Boundaries on Instagram</li>
                              <li>Tag 5 of your friends on your Instagram post.</li>
                              <li>Share the event to 3 WhatsApp Groups</li>
                            </ul>
                            Take a screenshot of each of the actions above and upload them to your Google Drive. Copy the link and paste it in the input form below. (make sure the folder is accessible by public)
                          </span>
                          <span class="invalid-feedback">Please enter a valid share requirement proof link.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Referral Code</label>

                      <div class="col-sm-9">
                        <div class="js-form-message input-group">
                          <input type="text" class="form-control" name="referral" id="validationFormUsernameLabel" placeholder="Referral Code" value="<?= $detail->referral_code ?>" aria-label="sourceAccount" required data-msg="Please enter your fullname.">
                          <button class="btn btn-success" type="button" id="button-addon2">Apply</button>
                          <span class="form-text"><b>Note:</b> if you have the refferal code of an IYS influencer. you can input it below. If not, just leave it "-".</span>
                          <span class="invalid-feedback">Please enter a valid referral.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Footer -->
                    <div class="d-sm-flex align-items-center">
                      <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2"
                        data-hs-step-form-prev-options='{
                          "targetSelector": "#validationFormOther"
                        }'>
                        <i class="bi-chevron-left small"></i> Previous step
                      </button>

                      <div class="ms-auto">
                        <button type="button" onclick="step4clicked()" class="btn btn-soft-primary"
                                data-hs-step-form-next-options='{
                                  "targetSelector": "#validationFormSelfPhoto"
                                }'>
                          Next <i class="bi-chevron-right small"></i>
                        </button>
                      </div>
                    </div>
                    <!-- End Footer -->
                  </div>
                  <div id="validationFormSelfPhoto" style="display: none;">
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Sub Theme</label>
                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <select name="essayType" class="form-control" id="" required>
                            <option value="" selected disabled>Select a sub-theme</option>
                            <option value="Theme1">Theme1</option>
                            <option value="Theme2">Theme2</option>
                            <option value="Theme3">Theme3</option>
                            
                          </select>
                          <span class="invalid-feedback">Please enter a valid tshirt size.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row mb-4">
                      <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Essay</label>

                      <div class="col-sm-9">
                        <div class="js-form-message">
                          <textarea  class="form-control" name="essay" required rows="10"></textarea>
                          <span class="invalid-feedback">Please enter a valid essay.</span>
                          <span class="form-text"><b>Note:</b> Your essay length must be between 200 to 300 words. It is recommended that you write your essay on other platform.</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Footer -->
                    <div class="d-sm-flex align-items-center">
                      <button type="button" class="btn btn-ghost-secondary mb-3 mb-sm-0 me-2"
                        data-hs-step-form-prev-options='{
                          "targetSelector": "#validationFormOther"
                        }'>
                        <i class="bi-chevron-left small"></i> Previous step
                      </button>

                      <div class="ms-auto">
                        <button type="submit" class="btn btn-soft-primary"
                                data-hs-step-form-next-options='{
                                  "targetSelector": "#validationFormProgram"
                                }'>
                          Submit
                        </button>
                      </div>
                    </div>
                    <!-- End Footer -->
                  </div>
                </div>
                <!-- End Content Step Form -->
                
                <!-- Message Body -->
                <div id="validationFormSuccessMessage" class="js-success-message" style="display:none;">
                  <div class="text-center">
                    <img class="img-fluid mb-3" src="../assets/svg/illustrations/oc-hi-five.svg" alt="Image Description" style="max-width: 15rem;">

                    <div class="mb-4">
                      <h2>Successful!</h2>
                      <p>Your changes have been successfully saved.</p>
                    </div>

                    <div class="d-flex justify-content-center">
                      <a class="btn btn-white me-3" href="#">
                        <i class="bi-chevron-left small ms-1"></i> Back to projects
                      </a>
                      <a class="btn btn-soft-primary" href="#">
                        <i class="tio-city me-1"></i> Add new project
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Message Body -->
              </form>
              <!-- End Step Form -->
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
<!-- ========== END MAIN CONTENT ========== -->
<script>
  function step1clicked(){
    const formData = {
      'fullName'        : $('input[name="fullName"]').val(),
      'birthday'        : $('input[name="birthday"]').val(),
      'gender'          : $('input[name="gender"]:checked').val(),
      'address'         : $('textarea[name="address"]').val(),
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
</script>