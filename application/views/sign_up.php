<header id="header" class="navbar navbar-expand navbar-light navbar-absolute-top">
    <div class="container-fluid">
      <nav class="navbar-nav-wrap">
        <!-- White Logo -->
        <a class="navbar-brand d-none d-lg-flex" href="./index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="./assets/img/logo/logo-white.png" alt="Logo">
        </a>
        <!-- End White Logo -->

        <!-- Default Logo -->
        <a class="navbar-brand d-flex d-lg-none" href="./index.html" aria-label="Front">
          <img class="" src="<?= site_url()?>assets/img/logo/logo.png" style="width: 100px;" alt="Logo">
        </a>
        <!-- End Default Logo -->

        <div class="ms-auto">
          <a class="link link-sm link-secondary" href="<?= site_url('/')?>">
            <i class="bi-chevron-left small ms-1"></i> Go to home
          </a>
        </div>
      </nav>
    </div>
</header>
<main id="content" role="main" class="flex-grow-1">
<!-- Form -->
<div class="container-fluid">
    <div class="row">
    <div class="col-lg-5 col-xl-4 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-dark" style="background-image: url(<?= site_url('assets/img/sign/sign_1.jpg')?>);">
        <div class="flex-grow-1 p-5">
            <!-- <div class="position-absolute start-0 end-0 bottom-0 text-center p-5">
                <div class="row justify-content-center">
                <div class="col text-center py-3">
                    <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/brands/fitbit-white.svg" alt="Logo">
                </div>

                <div class="col text-center py-3">
                    <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/brands/business-insider-white.svg" alt="Logo">
                </div>

                <div class="col text-center py-3">
                    <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/brands/capsule-white.svg" alt="Logo">
                </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- End Col -->

    <div class="col-lg-7 col-xl-8 d-flex justify-content-center align-items-center min-vh-lg-100">
        <div class="flex-grow-1 mx-auto" style="max-width: 28rem;">
        <!-- Heading -->
        <div class="text-center mb-5 mb-md-7">
            <h1 class="h2">Welcome to IYS</h1>
            <p>Fill out the form to get started.</p>
        </div>
        <!-- End Heading -->

        <!-- Form -->
        <form class="js-validate needs-validation" action="<?= site_url('register')?>" method="POST" novalidate>
            <!-- Form -->
            <div class="mb-3">
            <label class="form-label" for="signupModalFormSignupEmail">Your email</label>
            <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormSignupEmail" placeholder="email@site.com" aria-label="email@site.com" required>
            <span class="invalid-feedback">Please enter a valid email address.</span>
            </div>
            <!-- End Form -->

            <!-- Form -->
            <div class="mb-3">
            <label class="form-label" for="signupModalFormSignupName">Your Full Name</label>
            <input type="text" class="form-control form-control-lg" name="fullName" id="signupModalFormSignupName" placeholder="Your name"  required>
            <span class="invalid-feedback">Please enter a valid full name.</span>
            </div>
            <!-- End Form -->

            <!-- Form -->
            <div class="mb-3">
            <label class="form-label" for="signupModalFormSignupPassword">Password</label>

            <div class="input-group input-group-merge" data-hs-validation-validate-class>
                <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupModalFormSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                        data-hs-toggle-password-options='{
                            "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                            "defaultClass": "bi-eye-slash",
                            "showClass": "bi-eye",
                            "classChangeTarget": ".js-toggle-passowrd-show-icon-1"
                        }'>
                <a class="js-toggle-password-target-1 input-group-append input-group-text" href="javascript:;">
                <i class="js-toggle-passowrd-show-icon-1 bi-eye"></i>
                </a>
            </div>

            <span class="invalid-feedback">Your password is invalid. Please try again.</span>
            </div>
            <!-- End Form -->

            <!-- Form -->
            <div class="mb-3">
            <label class="form-label" for="signupModalFormSignupConfirmPassword">Confirm password</label>

            <div class="input-group input-group-merge" data-hs-validation-validate-class>
                <input type="password" class="js-toggle-password form-control form-control-lg" name="confirmPassword" id="signupModalFormSignupConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                        data-hs-validation-equal-field="#signupModalFormSignupPassword"
                        data-hs-toggle-password-options='{
                        "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                        "defaultClass": "bi-eye-slash",
                        "showClass": "bi-eye",
                        "classChangeTarget": ".js-toggle-passowrd-show-icon-2"
                        }'>
                <a class="js-toggle-password-target-2 input-group-append input-group-text" href="javascript:;">
                <i class="js-toggle-passowrd-show-icon-2 bi-eye"></i>
                </a>
            </div>

            <span class="invalid-feedback">Password does not match the confirm password.</span>
            </div>
            <!-- End Form -->

            <!-- Check -->
            <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="signupHeroFormPrivacyCheck" name="signupFormPrivacyCheck" required>
            <label class="form-check-label small" for="signupHeroFormPrivacyCheck"> By submitting this form I have read and acknowledged the <a href="<?= site_url('privacy-policy')?>" target="_blank">Privacy Policy</a></label>
            <span class="invalid-feedback">Please accept our Privacy Policy.</span>
            </div>
            <!-- End Check -->
            <?php
                if($this->session->flashdata('err_msg')){
                    echo '
                        <div class="alert alert-soft-danger mb-3" role="alert">
                            '.$this->session->flashdata('err_msg').'
                        </div>        
                    ';
                }
            ?>
            <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary btn-lg">Sign up</button>
            </div>

            <div class="text-center">
            <p>Already have an account? <a class="link" href="<?= site_url('sign-in')?>">Sign in here</a></p>
            </div>
        </form>
        <!-- End Form -->
        </div>
    </div>
    <!-- End Col -->
    </div>
    <!-- End Row -->
</div>
<!-- End Form -->
</main>