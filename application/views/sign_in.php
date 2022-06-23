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
    <div class="col-lg-5 col-xl-4 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative" style="background-image: url(<?= site_url('assets/img/sign/sign_1.jpg')?>);">
        <div class="flex-grow-1 p-5">
        <!-- Blockquote -->
        <!-- End Blockquote -->

        <!-- Clients -->
        <div class="position-absolute start-0 end-0 bottom-0 text-center p-5">
            <div class="row justify-content-center">
            <div class="col text-center py-3">
                <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/brands/fitbit-white.svg" alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col text-center py-3">
                <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/brands/business-insider-white.svg" alt="Logo">
            </div>
            <!-- End Col -->

            <div class="col text-center py-3">
                <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/brands/capsule-white.svg" alt="Logo">
            </div>
            <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Clients -->
        </div>
    </div>
    <!-- End Col -->

    <div class="col-lg-7 col-xl-8 d-flex justify-content-center align-items-center min-vh-lg-100">
        <div class="flex-grow-1 mx-auto" style="max-width: 28rem;">
        <!-- Heading -->
        <div class="text-center mb-5 mb-md-7">
            <h1 class="h2">Welcome back</h1>
            <p>Login to manage your account.</p>
        </div>
        <!-- End Heading -->

        <!-- Form -->
        <form class="js-validate needs-validation" action="<?= site_url('login')?>" method="POST" novalidate>
            <!-- Form -->
            <div class="mb-4">
                <label class="form-label" for="signupModalFormLoginEmail">Your email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormLoginEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
            </div>
            <!-- End Form -->

            <!-- Form -->
            <div class="mb-4">
                <div class="d-flex justify-content-between align-items-center">
                    <label class="form-label" for="signupModalFormLoginPassword">Password</label>

                    <a class="form-label-link" href="./page-reset-password.html">Forgot Password?</a>
                </div>

                <div class="input-group input-group-merge" data-hs-validation-validate-class>
                    <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupModalFormLoginPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8"
                        data-hs-toggle-password-options='{
                            "target": "#changePassTarget",
                            "defaultClass": "bi-eye-slash",
                            "showClass": "bi-eye",
                            "classChangeTarget": "#changePassIcon"
                        }'>
                    <a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;">
                    <i id="changePassIcon" class="bi-eye"></i>
                    </a>
                </div>

                <span class="invalid-feedback">Please enter a valid password.</span>
            </div>
            <!-- End Form -->
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
            <button type="submit" class="btn btn-primary btn-lg">Log in</button>
            </div>

            <div class="text-center">
            <p>Don't have an account yet? <a class="link" href="<?= site_url('sign-up') ?>">Sign up here</a></p>
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