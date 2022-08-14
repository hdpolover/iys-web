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
            <h1 class="h2">Forgot Password</h1>
            <!-- <p>Fill out the form to get started.</p> -->
        </div>
        <!-- End Heading -->

        <!-- Form -->
        <form class="js-validate needs-validation" action="<?= site_url('forgot-password/send-email')?>" method="POST" novalidate>
            <!-- Form -->
            <div class="mb-3">
            <label class="form-label" for="signupModalFormSignupEmail">Your email</label>
            <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormSignupEmail" placeholder="email@site.com" aria-label="email@site.com" required>
            <span class="invalid-feedback">Please enter a valid email address.</span>
            </div>
            <!-- End Form -->
            <?php
                if($this->session->flashdata('err_msg')){
                    echo '
                        <div class="alert alert-soft-danger mb-3" role="alert">
                            '.$this->session->flashdata('err_msg').'
                        </div>        
                    ';
                }else if($this->session->flashdata('succ_msg')){
                    echo '
                        <div class="alert alert-soft-success mb-3" role="alert">
                            '.$this->session->flashdata('succ_msg').'
                        </div>        
                    ';
                }
            ?>
            <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary btn-lg">Send</button>
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