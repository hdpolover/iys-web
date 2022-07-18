<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand-lg navbar-end navbar-light bg-white">
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

          <ul class="navbar-nav">
            <!-- Demos -->
            <li class="nav-item">
              <a id="" class="nav-link" aria-current="page" href="#" role="button" aria-expanded="false">Help Center</a>
            </li>
            <!-- End Demos -->

            <!-- Docs -->
            <li class="hs-has-mega-menu nav-item"
                data-hs-mega-menu-item-options='{
                  "desktop": {
                    "maxWidth": "20rem"
                  }
                }'>
              <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Your Account</a>

              <!-- Mega Menu -->
              <div class="hs-mega-menu hs-position-right dropdown-menu" aria-labelledby="docsMegaMenu" style="min-width: 20rem;">
                <!-- Link -->
                <a class="navbar-dropdown-menu-media-link" href="#">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <span class="svg-icon svg-icon-sm text-primary">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="#035A4B"/>
                      <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="#035A4B"/>
                      </svg>


                      </span>
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <span class="navbar-dropdown-menu-media-title">Profile</span>
                      <!-- <p class="navbar-dropdown-menu-media-desc">Development guides for building projects with Space</p> -->
                    </div>
                  </div>
                </a>
                <!-- End Link -->

                <div class="dropdown-divider"></div>

                <!-- Link -->
                <a class="navbar-dropdown-menu-media-link" href="<?= site_url('logout')?>">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <span class="svg-icon svg-icon-sm text-primary">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path opacity="0.3" d="M21 22H12C11.4 22 11 21.6 11 21V3C11 2.4 11.4 2 12 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22Z" fill="#035A4B"/>
                      <path d="M19 11H6.60001V13H19C19.6 13 20 12.6 20 12C20 11.4 19.6 11 19 11Z" fill="#035A4B"/>
                      <path opacity="0.3" d="M6.6 17L2.3 12.7C1.9 12.3 1.9 11.7 2.3 11.3L6.6 7V17Z" fill="#035A4B"/>
                      </svg>


                      </span>
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <span class="navbar-dropdown-menu-media-title">Sign Out</span>
                      <!-- <p class="navbar-dropdown-menu-media-desc">Move quickly with copy-to-clipboard feature</p> -->
                    </div>
                  </div>
                </a>
                <!-- End Link -->
              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End Docs -->
          </ul>
        </div>
      </nav>
    </div>
    <!-- End Topbar -->

    <div class="container">
      <nav class="js-mega-menu navbar-nav-wrap">
        <!-- Default Logo -->
        <a class="navbar-brand" href="<?= site_url('/')?>" aria-label="Front">
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
      
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a id="" class="nav-link" aria-current="page" href="<?= site_url('/')?>" role="button" aria-expanded="false">Home</a>
            </li>
            <li class="nav-item">
              <a id="" class="nav-link" aria-current="page" href="<?= site_url('announcement-general')?>" role="button" aria-expanded="false">Announcement</a>
            </li>
            <li class="nav-item">
              <a id="" class="nav-link" aria-current="page" href="<?= site_url('about')?>" role="button" aria-expanded="false">About IYS</a>
            </li>
            <li class="nav-item">
              <a id="" class="nav-link" aria-current="page" href="<?= site_url('team')?>" role="button" aria-expanded="false">Our Team</a>
            </li>
            <li class="nav-item">
              <a id="" class="nav-link" aria-current="page" href="<?= site_url('partner-sponsor')?>" role="button" aria-expanded="false">Partnership & Sponsorship</a>
            </li>
            <li class="nav-item">
              <a id="" class="nav-link" aria-current="page" href="<?= site_url('faq')?>" role="button" aria-expanded="false">FAQ</a>
            </li>
          </ul>
        </div>
        <!-- End Collapse -->
      </nav>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->