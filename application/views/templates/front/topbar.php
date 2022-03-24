<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-dark navbar-show-hide <?= !empty($isBgDark) ? "bg-dark" : ""?>"
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

    <div class="container">
      <nav class="js-mega-menu navbar-nav-wrap">
        <!-- Default Logo -->
        <a class="navbar-brand" href="<?= site_url()?>index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="<?= site_url()?>assets/svg/logos/logo-white.svg" alt="Logo">
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
      
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="navbar-absolute-top-scroller">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a id="" class="nav-link <?= $topBar == "home" ? "active" : "" ?>" aria-current="page" href="<?= site_url('/')?>" role="button" aria-expanded="false">Home</a>
              </li>
              <li class="nav-item">
                <a id="" class="nav-link <?= $topBar == "about" ? "active" : "" ?>" aria-current="page" href="<?= site_url('about')?>" role="button" aria-expanded="false">About</a>
              </li>
              <li class="nav-item">
                <a id="" class="nav-link <?= $topBar == "contact" ? "active" : "" ?>" aria-current="page" href="<?= site_url('contact')?>" role="button" aria-expanded="false">Contact</a>
              </li>
              <!-- Button -->
              <li class="nav-item">
                <a class="btn btn-light btn-transition" href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/" target="_blank">Login</a>
              </li>
              <!-- End Button -->
            </ul>
          </div>
        </div>
        <!-- End Collapse -->
      </nav>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->