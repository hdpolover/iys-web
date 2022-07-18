<!-- Step Form -->
<form id="formSubmit" class="js-step-form-validate js-validate"
data-hs-step-form-options='{
    "progressSelector": "#validationFormProgress",
    "stepsSelector": "#validationFormContent",
    "endSelector": "#validationFormFinishBtn",
    "isValidate": true
}'
action="<?= site_url('personal-info/submit')?>" method="POST" enctype="multipart/form-data"
>
<!-- Step -->
<ul id="validationFormProgress" class="js-step-progress step step-sm step-icon-sm step-inline step-item-between mb-7">
    <?php
    $status = "";
    if(0 <= (int)$detail->step){
        if($statStepBasic == true){
        $status = "is-valid";
        }else{
        $status = "is-invalid";
        }
    }
    ?>
    <li class="step-item <?= $status?>">
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
    <?php
    $status = "";
    if(1 <= (int)$detail->step){
        if($statStepOther == true){
        $status = "is-valid";
        }else{
        $status = "is-invalid";
        }
    }
    ?>
    <li class="step-item <?= $status?>"">
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
    <?php
    $status = "";
    if(2 <= (int)$detail->step){
        if($statStepEssay == true){
        $status = "is-valid";
        }else{
        $status = "is-invalid";
        }
    }
    ?>
    <li class="step-item <?= $status?>"">
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
    <?php
    $status = "";
    if(3 <= (int)$detail->step){
        if($statStepProgram == true){
        $status = "is-valid";
        }else{
        $status = "is-invalid";
        }
    }
    ?>
    <li class="step-item <?= $status?>"">
    <a class="step-content-wrapper" href="javascript:;"
        data-hs-step-form-next-options='{
        "targetSelector": "#validationFormProgram"
        }'>
        <span class="step-icon step-icon-soft-dark">4</span>
        <div class="step-content">
        <span class="step-title">Program</span>
        </div>
    </a>
    </li>
    <?php
    $status = "";
    if(4 <= (int)$detail->step){
        if($statStepSelfPhoto == true){
        $status = "is-valid";
        }else{
        $status = "is-invalid";
        }
    }
    ?>
    <li class="step-item <?= $status?>">
    <a class="step-content-wrapper" href="javascript:;"
        data-hs-step-form-next-options='{
        "targetSelector": "#validationFormSelfPhoto"
        }'>
        <span class="step-icon step-icon-soft-dark">5</span>
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
            <input type="text" class="form-control flatpickr" value="<?= $detail->birth_date != null ? date_format(date_create($detail->birth_date), 'F d, Y') : ""?>" name="birthday" placeholder="Birthday" required>
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
            <div class="row mb-4">
                <div class="col-sm-6">
                    <div class="js-form-message">
                        <input type="text"  class="form-control" value="<?= $detail->detail_address?>" placeholder="Street Name" name="detailAddress" required />
                        <span class="invalid-feedback">Please enter a valid street name.</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="js-form-message">
                        <input type="text"  class="form-control" value="<?= $detail->postal_code?>" placeholder="Postal Code" name="postalCode" required />
                        <span class="invalid-feedback">Please enter a valid postal code.</span>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="js-form-message">
                        <input type="text"  class="form-control" value="<?= $detail->city?>" placeholder="City" name="city" required />
                        <span class="invalid-feedback">Please enter a valid city.</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="js-form-message">
                        <input type="text"  class="form-control" value="<?= $detail->province?>" placeholder="Province" name="province" required />
                        <span class="invalid-feedback">Please enter a valid province.</span>
                    </div>
                </div>
            </div>
        <div class="js-form-message">
            <!-- <textarea  class="form-control" name="address" required rows="5"><?= $detail->address?></textarea> -->
            <!-- <span class="invalid-feedback">Please enter a valid address.</span> -->
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
            <span class="form-text"><b>Note:</b> Enter a dash (-) if you have no history of disease.</span>
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
            <span class="form-text"><b>Note:</b> Enter a dash (-) if you have no experience.</span>
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
            <span class="form-text"><b>Note:</b> Enter a dash (-) if you have no achievements.</span>
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
            <span class="form-text"><b>Note:</b> Enter a dash (-) if you have no social projects.</span>
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
            <span class="form-text"><b>Note:</b> Enter a dash (-) if you have no talents.</span>
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
                <option value="Good Health And Well-Beings" <?= $detail->essay_type == 'Good Health And Well-Beings' ? 'selected' : ''?>>Good Health And Well-Beings</option>
                <option value="Quality Education" <?= $detail->essay_type == 'Quality Education' ? 'selected' : ''?>>Quality Education</option>
                <option value="Decent Work And Economic Growth" <?= $detail->essay_type == 'Decent Work And Economic Growth' ? 'selected' : ''?>>Decent Work And Economic Growth</option>
                <option value="Industry Innovation And Infrastructure" <?= $detail->essay_type == 'Industry Innovation And Infrastructure' ? 'selected' : ''?>>Industry Innovation And Infrastructure</option>
                <option value="Sustainable Cities And Communities" <?= $detail->essay_type == 'Sustainable Cities And Communities' ? 'selected' : ''?>>Sustainable Cities And Communities</option>
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
            <span class="form-text"><b>Note:</b> Your essay length maximum 250 words. It is recommended that you write your essay on other platform.</span>
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
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Twibbon Link</label>

        <div class="col-sm-9">
        <div class="js-form-message">
            <input type="text" class="form-control" name="motivation" id="validationFormUsernameLabel" placeholder="Tiwbbon Link" aria-label="sourceAccount" value="<?= $detail->motivation_link ?>" required data-msg="Please enter your fullname.">
            <span class="form-text"><b>Note:</b> Paste the link to your twibbon. The twibbon can uploaded to Instagram or Youtube.</span>
            <span class="invalid-feedback">Please enter a valid twibbon link.</span>
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
                <li>Follow Istanbul Youth Summit and Youth Break the Boundaries</li>
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
            <input type="text" id="rc" class="form-control" name="referral" id="validationFormUsernameLabel" placeholder="Referral Code" value="<?= $detail->referral_code ?>" aria-label="sourceAccount" required data-msg="Please enter your fullname.">
            <button class="btn btn-success" onclick="checkRC()" type="button" id="button-addon2">Apply</button>
        </div>
        <span class="form-text"><b>Note:</b> Enter a dash (-) if you don't have any code.</span>
        <div class="form-text" id="checkRCStatus"></div>
        <div class="invalid-feedback">Please enter a valid referral.</div>
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
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Photo</label>
        <div class="col-sm-9">
        <div class="js-form-message">
            <div id="boxImg" class="text-center mb-3 p-3" style="border: .0625rem solid rgba(33,50,91,.1);border-radius: .3125rem;cursor: pointer;">
                <img style="max-width: 300px;" id="blah" class="" src="<?= $detail->photo == '' || $detail->photo == NULL ? site_url('assets/svg/illustrations/oc-lost.svg') : $detail->photo?>" />
            </div>
            <input type="file" accept=".jpg,.png,.jpeg,.bmp" class="form-control" name="poster" style="cursor: pointer;" id="imgPoster">
            <span class="form-text"><b>Note:</b> choose a formal photo of yourself with an image ratio of 3:4 (preferably). The cropped preview image does not affect the original image. max size(1MB)</span>
            <span class="invalid-feedback">Please enter a valid self photo.</span>
        </div>
        </div>
    </div>
    <!-- End Form Group -->
    <!-- Form Group -->
    <div class="row mb-4">
        <label for="validationFormUsernameLabel" class="col-sm-3 col-form-label form-label">Terms & Conditions</label>

        <div class="col-sm-9">
        <div class="js-form-message form-check">
            <input type="checkbox" id="formHelperCheck1" name="terms" class="form-check-input" <?= $detail->termsncondition == '1' ? 'checked' : ''?> required>
            <label class="form-check-label" for="formHelperCheck1">I Agree</label>
            <div class="text-muted">I understand and agree to the terms and conditions of this program and that this program basically is self funded meaning that participants have to pay for the program fee, flights to-from istanbul, visa and other expenses themselves. However best applicants have a chance to be a fully-funded participant (excluding flight tickets and visa). Fully-funded quota will refer to the quality of the applicants themselves. I am ready to join the 5th Istanbul Youth Summit.</div>
            <span class="invalid-feedback">Please enter a checked terms and conditions.</span>
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
        <button type="button" data-bs-toggle="modal" data-bs-target="#mdlConfirmation" class="btn btn-soft-primary">
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