<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3NCH5W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
        <a class="navbar-brand" href="<?= site_url('/')?>" aria-label="Front">
          <img class="" src="<?= site_url()?>assets/img/logo/logo-white.png" style="width: 65px !important;" alt="Logo">
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
                <a id="" class="nav-link <?= $topBar == "announcement-general" ? "active" : "" ?>" aria-current="page" href="<?= site_url('announcement-general')?>" role="button" aria-expanded="false">Announcement</a>
              </li>
              <li class="nav-item">
                <a id="" class="nav-link <?= $topBar == "about" ? "active" : "" ?>" aria-current="page" href="<?= site_url('about')?>" role="button" aria-expanded="false">About IYS</a>
              </li>
              <li class="nav-item">
                <a id="" class="nav-link <?= $topBar == "team" ? "active" : "" ?>" aria-current="page" href="<?= site_url('team')?>" role="button" aria-expanded="false">Our Team</a>
              </li>
              <li class="nav-item">
                <a id="" class="nav-link <?= $topBar == "partner-sponsor" ? "active" : "" ?>" aria-current="page" href="<?= site_url('partner-sponsor')?>" role="button" aria-expanded="false">Partnership & Sponsorship</a>
              </li>
              <li class="nav-item">
                <a id="" class="nav-link <?= $topBar == "faq" ? "active" : "" ?>" aria-current="page" href="<?= site_url('faq')?>" role="button" aria-expanded="false">FAQ</a>
              </li>
              <!-- Button -->
              <li class="nav-item">
                <a class="btn btn-light btn-transition" href="<?= site_url('sign-in')?>">Sign In</a>
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