<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Login Simple | Front - Multipurpose Responsive Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="<?= site_url()?>assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= site_url()?>assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="<?= site_url()?>assets/css/theme.min.css">
</head>

<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide"
          data-hs-header-options='{
            "fixMoment": 1000,
            "fixEffect": "slide"
          }'>
    <!-- Topbar -->
    <div class="container navbar-topbar">
      <nav class="js-mega-menu navbar-nav-wrap">
        <!-- Toggler -->
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown" aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="d-flex justify-content-between align-items-center small">
            <span class="navbar-toggler-text">Topbar</span>

            <span class="navbar-toggler-default">
              <i class="bi-chevron-down ms-2"></i>
            </span>
            <span class="navbar-toggler-toggled">
              <i class="bi-chevron-up ms-2"></i>
            </span>
          </span>
        </button>
        <!-- End Toggler -->

        <div id="topbarNavDropdown" class="navbar-nav-wrap-collapse collapse navbar-collapse navbar-topbar-collapse">
          <div class="navbar-toggler-wrapper">
            <div class="navbar-topbar-toggler d-flex justify-content-between align-items-center">
              <span class="navbar-toggler-text small">Topbar</span>

              <!-- Toggler -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown" aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi-x"></i>
              </button>
              <!-- End Toggler -->
            </div>
          </div>

        </div>
      </nav>
    </div>
    <!-- End Topbar -->

    <div class="container mt-3">
      <nav class="js-mega-menu navbar-nav-wrap">
        <!-- Default Logo -->
        <a class="navbar-brand" href="./index.html" aria-label="Front">
          <img class="" src="<?= site_url()?>assets/img/logo/logo.png" style="width: 100px;" alt="Logo">
        </a>
        <!-- End Default Logo -->

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-default">
            <i class="bi-list"></i>
          </span>
          <span class="navbar-toggler-toggled">
            <i class="bi-x"></i>
          </span>
        </button>
        <!-- End Toggler -->
        <div class="ms-auto">
          <a class="link link-sm link-secondary" href="<?= site_url('/')?>">
            <i class="bi-chevron-left small ms-1"></i> Go to home
          </a>
        </div>
      </nav>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Form -->
    <div class="container content-space-3 content-space-t-lg-4 content-space-b-lg-3">
      <div class="flex-grow-1 mx-auto" style="max-width: 28rem;">
        <img class="img-fluid mb-7" style="max-width: 300px;" src="<?= site_url()?>assets/svg/illustrations/oc-yelling.svg" alt="SVG Illustration">
        <div class="text-center">
            <h1 class="h2">Warning.</h1>
            <p>Oops, verify your email has expired, <a href="<?= site_url('resend-email/'.$id)?>">resend</a></p>
        </div>
      </div>
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-dark">
    <div class="container pb-1 pb-lg-5">
      <div class="row content-space-t-2">
        <div class="col-lg-3 mb-7 mb-lg-0">
          <!-- Logo -->
          <div class="mb-5">
            <a class="navbar-brand" href="./index.html" aria-label="Space">
              <img class="navbar-brand-logo" src="<?= site_url()?>assets/img/logo/logo-white.png" alt="Image Description">
            </a>
          </div>
          <!-- End Logo -->

          <!-- List -->
          <ul class="list-unstyled list-py-1">
            <li><a class="link-sm link-light" href="#"><i class="bi-geo-alt-fill me-1"></i> 153 Williamson Plaza, Maggieberg</a></li>
            <li><a class="link-sm link-light" href="tel:1-062-109-9222"><i class="bi-telephone-inbound-fill me-1"></i> +1 (062) 109-9222</a></li>
          </ul>
          <!-- End List -->
        
        </div>
        <!-- End Col -->

        <div class="col-sm mb-7 mb-sm-0">
          <h5 class="text-white mb-3">Company</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-light" href="#">About</a></li>
            <li><a class="link-sm link-light" href="#">Careers <span class="badge bg-warning text-dark rounded-pill ms-1">We're hiring</span></a></li>
            <li><a class="link-sm link-light" href="#">Blog</a></li>
            <li><a class="link-sm link-light" href="#">Customers <i class="bi-box-arrow-up-right small ms-1"></i></a></li>
            <li><a class="link-sm link-light" href="#">Hire us</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-sm mb-7 mb-sm-0">
          <h5 class="text-white mb-3">Features</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-light" href="#">Press <i class="bi-box-arrow-up-right small ms-1"></i></a></li>
            <li><a class="link-sm link-light" href="#">Release Notes</a></li>
            <li><a class="link-sm link-light" href="#">Integrations</a></li>
            <li><a class="link-sm link-light" href="#">Pricing</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-sm">
          <h5 class="text-white mb-3">Documentation</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-0">
            <li><a class="link-sm link-light" href="#">Support</a></li>
            <li><a class="link-sm link-light" href="#">Docs</a></li>
            <li><a class="link-sm link-light" href="#">Status</a></li>
            <li><a class="link-sm link-light" href="#">API Reference</a></li>
            <li><a class="link-sm link-light" href="#">Tech Requirements</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-sm">
          <h5 class="text-white mb-3">Resources</h5>

          <!-- List -->
          <ul class="list-unstyled list-py-1 mb-5">
            <li><a class="link-sm link-light" href="#"><i class="bi-question-circle-fill me-1"></i> Help</a></li>
            <li><a class="link-sm link-light" href="#"><i class="bi-person-circle me-1"></i> Your Account</a></li>
          </ul>
          <!-- End List -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <div class="border-top border-white-10 my-7"></div>

      <div class="row mb-7">
        <div class="col-sm mb-3 mb-sm-0">
          <!-- Socials -->
          <ul class="list-inline list-separator list-separator-light mb-0">
            <li class="list-inline-item">
              <a class="link-sm link-light" href="#">Privacy &amp; Policy</a>
            </li>
            <li class="list-inline-item">
              <a class="link-sm link-light" href="#">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="link-sm link-light" href="#">Site Map</a>
            </li>
          </ul>
          <!-- End Socials -->
        </div>

        <div class="col-sm-auto">
          <!-- Socials -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-facebook"></i>
              </a>
            </li>
          
            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-google"></i>
              </a>
            </li>
          
            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-twitter"></i>
              </a>
            </li>
          
            <li class="list-inline-item">
              <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                <i class="bi-github"></i>
              </a>
            </li>
          
            <li class="list-inline-item">
              <!-- Button Group -->
              <div class="btn-group">
                <button type="button" class="btn btn-soft-light btn-xs dropdown-toggle" id="footerSelectLanguage" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  <span class="d-flex align-items-center">
                    <img class="avatar avatar-xss avatar-circle me-2" src="<?= site_url()?>assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/>
                    <span>English (US)</span>
                  </span>
                </button>

                <div class="dropdown-menu" aria-labelledby="footerSelectLanguage">
                  <a class="dropdown-item d-flex align-items-center active" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="<?= site_url()?>assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/>
                    <span>English (US)</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="<?= site_url()?>assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description" width="16"/>
                    <span>Deutsch</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="<?= site_url()?>assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Image description" width="16"/>
                    <span>Espa??ol</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="<?= site_url()?>assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description" width="16"/>
                    <span>?????? (??????)</span>
                  </a>
                </div>
              </div>
              <!-- End Button Group -->
            </li>
          </ul>
          <!-- End Socials -->
        </div>
      </div>

      <!-- Copyright -->
      <div class="w-md-85 text-lg-center mx-lg-auto">
        <p class="text-white-50 small">&copy; Istanbul Youth Summit</p>
        <!-- <p class="text-white-50 small">When you visit or interact with our sites, services or tools, we or our authorised service providers may use cookies for storing information to help provide you with a better, faster and safer experience and for marketing purposes.</p> -->
      </div>
      <!-- End Copyright -->
    </div>
  </footer>

  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Sign Up -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <!-- Log in -->
          <div id="signupModalFormLogin" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Log in</h2>
              <p>Don't have an account yet?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
              </p>
            </div>
            <!-- End Heading -->

            <div class="d-grid gap-2">
              <a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="<?= site_url()?>assets/svg/brands/google-icon.svg" alt="Image Description">
                  Log in with Google
                </span>
              </a>

              <a class="js-animation-link btn btn-primary btn-lg" href="#"
                 data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormLoginWithEmail",
                       "groupName": "idForm"
                     }'>Log in with Email</a>
            </div>
          </div>
          <!-- End Log in -->

          <!-- Log in with Modal -->
          <div id="signupModalFormLoginWithEmail" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Log in</h2>
              <p>Don't have an account yet?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
              </p>
            </div>
            <!-- End Heading -->

            <form class="js-validate needs-validation" novalidate>
              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="signupModalFormLoginEmail">Your username</label>
                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormLoginEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                <span class="invalid-feedback">Please enter a username.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormLoginPassword">Password</label>

                  <a class="js-animation-link form-label-link" href="javascript:;"
                     data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormResetPassword",
                       "groupName": "idForm"
                     }'>Forgot Password?</a>
                </div>

                <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormLoginPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8">
                <span class="invalid-feedback">Please enter a valid password.</span>
              </div>
              <!-- End Form -->

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary form-control-lg">Log in</button>
              </div>
            </form>
          </div>
          <!-- End Log in with Modal -->

          <!-- Sign up -->
          <div id="signupModalFormSignup">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Sign up</h2>
              <p>Already have an account?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
              </p>
            </div>
            <!-- End Heading -->

            <div class="d-grid gap-3">
              <a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="<?= site_url()?>assets/svg/brands/google-icon.svg" alt="Image Description">
                  Sign up with Google
                </span>
              </a>

              <a class="js-animation-link btn btn-primary btn-lg" href="#"
                 data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormSignupWithEmail",
                       "groupName": "idForm"
                     }'>Sign up with Email</a>

              <div class="text-center">
                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
              </div>
            </div>
          </div>
          <!-- End Sign up -->

          <!-- Sign up with Modal -->
          <div id="signupModalFormSignupWithEmail" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Sign up</h2>
              <p>Already have an account?
                <a class="js-animation-link link" href="javascript:;" role="button"
                   data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
              </p>
            </div>
            <!-- End Heading -->

            <form class="js-validate need-validate" novalidate>
              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="signupModalFormSignupEmail">Your email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormSignupEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3">
                <label class="form-label" for="signupModalFormSignupPassword">Password</label>
                <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" required>
                <span class="invalid-feedback">Your password is invalid. Please try again.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-3" data-hs-validation-validate-class>
                <label class="form-label" for="signupModalFormSignupConfirmPassword">Confirm password</label>
                <input type="password" class="form-control form-control-lg" name="confirmPassword" id="signupModalFormSignupConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                       data-hs-validation-equal-field="#signupModalFormSignupPassword">
                <span class="invalid-feedback">Password does not match the confirm password.</span>
              </div>
              <!-- End Form -->

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary form-control-lg">Sign up</button>
              </div>

              <div class="text-center">
                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
              </div>
            </form>
          </div>
          <!-- End Sign up with Modal -->

          <!-- Reset Password -->
          <div id="signupModalFormResetPassword" style="display: none; opacity: 0;">
            <!-- Heading -->
            <div class="text-center mb-7">
              <h2>Forgot password?</h2>
              <p>Enter the email address you used when you joined and we'll send you instructions to reset your password.</p>
            </div>
            <!-- En dHeading -->

            <form class="js-validate need-validate" novalidate>
              <div class="mb-3">
                <!-- Form -->
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormResetPasswordEmail" tabindex="0">Your email</label>

                  <a class="js-animation-link form-label-link" href="javascript:;"
                     data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>
                    <i class="bi-chevron-left small"></i> Back to Log in
                  </a>
                </div>

                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormResetPasswordEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
                <!-- End Form -->
              </div>
            
              <div class="d-grid">
                <button type="submit" class="btn btn-primary form-control-lg">Submit</button>
              </div>
            </form>
          </div>
          <!-- End Reset Password -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap mb-4">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="<?= site_url()?>assets/svg/brands/gitlab-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="<?= site_url()?>assets/svg/brands/fitbit-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="<?= site_url()?>assets/svg/brands/flow-xo-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="<?= site_url()?>assets/svg/brands/layar-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  
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
  <script src="<?= site_url()?>assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
  <script src="<?= site_url()?>assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
  <script src="<?= site_url()?>assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
  <script src="<?= site_url()?>assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>

  <!-- JS Front -->
  <script src="<?= site_url()?>assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      new HSHeader('#header').init()


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      new HSShowAnimation('.js-animation-link')


      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
        //   data.event.preventDefault()
        //   alert('Submited')
        }
      })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')


      // INITIALIZATION OF TOGGLE PASSWORD
      // =======================================================
      new HSTogglePassword('.js-toggle-password')
    })()
  </script>
</body>
</html>
