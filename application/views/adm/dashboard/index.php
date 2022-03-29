<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Header (Navbar) style - Snippets | Front - Multipurpose Responsive Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="<?= site_url()?>assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="<?= site_url()?>assets/css/theme.min.css">
  <link rel="stylesheet" href="<?= site_url()?>assets/css/snippets.min.css">
</head>

<body class="navbar-sidebar-aside-lg">
  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand navbar-fixed navbar-end navbar-light navbar-sticky-lg-top bg-white">
    <div class="container-fluid">
      <nav class="navbar-nav-wrap">
        <div class="row flex-grow-1">
          <!-- Default Logo -->
          <div class="docs-navbar-sidebar-container d-flex align-items-center mb-2 mb-lg-0">
            <a class="navbar-brand" href="../snippets/index.html" aria-label="Space">
              <img class="navbar-brand-logo" src="<?= site_url()?>assets/svg/logos/logo.svg" alt="Logo">
            </a>
            <a href="../documentation/changelog.html">
              <span class="badge bg-soft-primary text-primary">v4.1</span>
            </a>
          </div>
          <!-- End Default Logo -->

          <div class="col-md px-lg-0">
            <div class="d-flex justify-content-between align-items-center px-lg-5 px-xl-10">
              <div class="d-none d-md-block">
                <!-- Search Form -->
                <form id="snippetsSearch" class="position-relative"
                      data-hs-list-options='{
                       "searchMenu": true,
                       "keyboard": true,
                       "item": "searchTemplate",
                       "valueNames": ["component", "category", {"name": "link", "attr": "href"}],
                       "empty": "#searchNoResults"
                     }'>
                  <!-- Input Group -->
                  <div class="input-group input-group-merge navbar-input-group">
                    <div class="input-group-prepend input-group-text">
                      <i class="bi-search"></i>
                    </div>

                    <input type="search" class="search form-control form-control-sm" placeholder="Search in snippets" aria-label="Search in snippets">

                    <a class="input-group-append input-group-text" href="javascript:;">
                      <i id="clearSearchResultsIcon" class="bi-x" style="display: none;"></i>
                    </a>
                  </div>
                  <!-- End Input Group -->

                  <!-- List -->
                  <div class="list dropdown-menu w-100 overflow-auto" style="max-height: 16rem;"></div>
                  <!-- End List -->

                  <!-- Empty -->
                  <div id="searchNoResults" style="display: none;">
                    <div class="text-center p-4">
                      <img class="mb-3" src="<?= site_url()?>assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;">
                      <p class="mb-0">No Results</p>
                    </div>
                  </div>
                  <!-- End Empty -->
                </form>
                <!-- End Search Form -->

                <!-- List Item Template -->
                <div class="d-none">
                  <div id="searchTemplate" class="dropdown-item">
                    <a class="d-block link" href="#">
                      <span class="category d-block fw-normal text-muted mb-1"></span>
                      <span class="component text-dark"></span>
                    </a>
                  </div>
                </div>
                <!-- End List Item Template -->
              </div>

              <!-- Navbar -->
              <ul class="navbar-nav p-0">
                <li class="nav-item">
                  <a class="btn btn-ghost-secondary btn-sm" href="https://htmlstream.com/contact-us" target="_blank">
                    Get Support <i class="bi-box-arrow-up-right ms-1"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-primary btn-sm" href="../index.html">
                    <i class="bi-eye me-1"></i> Preview Demo
                  </a>
                </li>
              </ul>
              <!-- End Navbar -->
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </nav>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Navbar -->
    <nav class="js-nav-scroller navbar navbar-expand-lg navbar-sidebar navbar-vertical navbar-light bg-white border-end"
          data-hs-nav-scroller-options='{
            "type": "vertical",
            "target": ".navbar-nav .active",
            "offset": 80
           }'>
      <!-- Navbar Toggle -->
      <button type="button" class="navbar-toggler btn btn-white d-grid w-100" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenu">
        <span class="d-flex justify-content-between align-items-center">
          <span class="h6 mb-0">Nav menu</span>

          <span class="navbar-toggler-default">
            <i class="bi-list"></i>
          </span>

          <span class="navbar-toggler-toggled">
            <i class="bi-x"></i>
          </span>
        </span>
      </button>
      <!-- End Navbar Toggle -->

      <!-- Navbar Collapse -->
      <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
        <div class="navbar-brand-wrapper border-end" style="height: auto;">
          <!-- Default Logo -->
          <div class="d-flex align-items-center mb-3">
            <a class="navbar-brand" href="../snippets/index.html" aria-label="Space">
              <img class="navbar-brand-logo" src="<?= site_url()?>assets/svg/logos/logo.svg" alt="Logo">
            </a>
            <a class="navbar-brand-badge" href="../documentation/changelog.html">
              <span class="badge bg-soft-primary text-primary ms-2">v4.1</span>
            </a>
          </div>
          <!-- End Default Logo -->
        </div>

        <div class="docs-navbar-sidebar-aside-body navbar-sidebar-aside-body">
          <ul id="navbarSettings" class="navbar-nav nav nav-vertical nav-tabs nav-tabs-borderless nav-sm">
            <li class="nav-item">
              <a class="nav-link active" href="../snippets/index.html"><i class="bi-activity nav-icon"></i>Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../snippets/index.html"><i class="bi-megaphone nav-icon"></i>Announcement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../snippets/index.html"><i class="bi-people nav-icon"></i>Participant</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../snippets/index.html"><i class="bi-wallet2 nav-icon"></i>Payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../snippets/index.html"><i class="bi-envelope nav-icon"></i>Certificate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link dropdown-toggle" href="#snippetsSidebarNavFeaturesCollapse" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="snippetsSidebarNavFeaturesCollapse"><i class="bi-pie-chart nav-icon"></i>Master Data</a>

              <div id="snippetsSidebarNavFeaturesCollapse" class="nav-collapse collapse ms-2">
                <a class="nav-link" href="#">Certificate</a>
                <a class="nav-link" href="#">Payment</a>
                <a class="nav-link" href="#">Summit</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../snippets/index.html"><i class="bi-gear nav-icon"></i>Setting</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- End Navbar Collapse -->
    </nav>
    <!-- End Navbar -->

    <!-- Content -->
    <div class="navbar-sidebar-aside-content content-space-1 content-space-md-2 px-lg-5 px-xl-10">
      <!-- Page Header -->
      <div class="docs-page-header">
        <div class="row align-items-center">
          <div class="col-sm">
            <h1 class="docs-page-header-title">Header (Navbar) style</h1>
          </div>
        </div>
      </div>
      <!-- End Page Header -->

      <!-- Heading -->
      <h2 id="types" class="hs-docs-heading">
        Types <a class="anchorjs-link" href="#types" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>
      <!-- End Heading -->

      <!-- Card -->
      <div class="card mb-7">
        <!-- Table -->
        <div class="table-responsive">
          <table class="table table-nowrap table-align-middle ">
            <thead class="thead-light">
              <tr>
                <th style="width: 65%;">Style</th>
                <th>Link</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Default</td>
                <td><a class="link" href="../snippets/navbar-default.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>

              <tr>
                <td>Bootstrap only Dropdowns</td>
                <td><a class="link" href="../snippets/navbar-bs-only-dropdowns.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Transparent</td>
                <td><a class="link" href="../snippets/navbar-transparent.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Light</td>
                <td><a class="link" href="../snippets/navbar-light.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>With Topbar</td>
                <td><a class="link" href="../snippets/navbar-with-topbar.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Absolute Top</td>
                <td><a class="link" href="../snippets/navbar-absolute-top.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Absolute Top Light</td>
                <td><a class="link" href="../snippets/navbar-absolute-top-light.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Absolute Top Slide</td>
                <td><a class="link" href="../snippets/navbar-absolute-top-slide.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Absolute Top Light Slide</td>
                <td><a class="link" href="../snippets/navbar-absolute-top-light-slide.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Sticky Top</td>
                <td><a class="link" href="../snippets/navbar-sticky-top.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Sticky Top Light</td>
                <td><a class="link" href="../snippets/navbar-sticky-top-light.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Sticky Top Toggle</td>
                <td><a class="link" href="../snippets/navbar-sticky-top-toggle.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Sticky Top Light Toggle</td>
                <td><a class="link" href="../snippets/navbar-sticky-top-light-toggle.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Floating</td>
                <td><a class="link" href="../snippets/navbar-floating.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Fullscreen</td>
                <td><a class="link" href="../snippets/navbar-fullscreen.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Demo - Shop</td>
                <td><a class="link" href="../snippets/navbar-demo-shop.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Demo - Real Estate</td>
                <td><a class="link" href="../snippets/navbar-demo-real-estate.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Demo - Jobs</td>
                <td><a class="link" href="../snippets/navbar-demo-jobs.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Demo - Course (Main)</td>
                <td><a class="link" href="../snippets/navbar-demo-course-main.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Demo - Course (Inner)</td>
                <td><a class="link" href="../snippets/navbar-demo-course-inner.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Demo - Help Desk</td>
                <td><a class="link" href="../snippets/navbar-demo-help-desk.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
              
              <tr>
                <td>Demo - App Marketplace</td>
                <td><a class="link" href="../snippets/navbar-demo-app-marketplace.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End Table -->
      </div>
      <!-- End Card -->

      <!-- Heading -->
      <h2 id="alignments" class="hs-docs-heading">
        Alignments <a class="anchorjs-link" href="#alignments" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>
      <!-- End Heading -->

      <!-- Card -->
      <div class="card mb-7">
        <!-- Table -->
        <div class="table-responsive">
          <table class="table table-nowrap table-align-middle ">
            <thead class="thead-light">
              <tr>
                <th style="width: 65%;">Style</th>
                <th>Link</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Left</td>
                <td><a class="link" href="../snippets/navbar-left-aligned.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>

              <tr>
                <td>Right</td>
                <td><a class="link" href="../snippets/navbar-right-aligned.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End Table -->
      </div>
      <!-- End Card -->

      <!-- Heading -->
      <h2 id="events" class="hs-docs-heading">
        Events <a class="anchorjs-link" href="#events" aria-label="Anchor" data-anchorjs-icon="#"></a>
      </h2>
      <!-- End Heading -->

      <!-- Card -->
      <div class="card mb-7">
        <!-- Table -->
        <div class="table-responsive">
          <table class="table table-nowrap table-align-middle ">
            <thead class="thead-light">
              <tr>
                <th style="width: 65%;">Style</th>
                <th>Link</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>On Hover</td>
                <td><a class="link" href="../snippets/navbar-on-hover.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>

              <tr>
                <td>On Click</td>
                <td><a class="link" href="../snippets/navbar-on-click.html" target="_blank">See in action <i class="bi-box-arrow-up-right small ms-1"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End Table -->
      </div>
      <!-- End Card -->
    </div>
    <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
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
  <script src="<?= site_url()?>assets/vendor/list.js/dist/list.min.js"></script>
  <script src="<?= site_url()?>assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
  <script src="<?= site_url()?>assets/vendor/prism/prism.js"></script>

  <!-- JS Front -->
  <script src="<?= site_url()?>assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      new HSHeader('#header').init()


      // INITIALIZATION OF LISTJS COMPONENT
      // =======================================================
      HSCore.components.HSList.init('#snippetsSearch')
      const snippetsSearch = HSCore.components.HSList.getItem('snippetsSearch')


      // GET JSON FILE RESULTS
      // =======================================================
      fetch('<?= site_url()?>assets/json/snippets-search.json')
      .then(response => response.json())
      .then(data => {
        snippetsSearch.add(data)
      })


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')
    })()
  </script>
</body>
</html>
