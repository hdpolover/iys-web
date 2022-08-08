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
              <img class="" src="<?= site_url()?>assets/img/logo/logo.png" style="width: 100px;" alt="Logo">
            </a>
            
          </div>
          <!-- End Default Logo -->
        </div>

        <?php
          $this->load->view('templates/adm/sidebar');
        ?>
      </div>
      <!-- End Navbar Collapse -->
    </nav>
    <!-- End Navbar -->

    <!-- Content -->
    <div class="navbar-sidebar-aside-content content-space-1 content-space-md-2 px-lg-5 px-xl-10">
        <div class="container mt-5">
          <h2>Participant Info</h2>
          <hr>
          <div class="row">
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h6 class="card-subtitle mb-2">Total checked</h6>

                  <div class="row align-items-center gx-2">
                    <div class="col">
                      <span class="counterChecked display-5 text-dark" data-value="24"><?= number_format($participantChecked)?></span>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h6 class="card-subtitle mb-2">Total submited</h6>

                  <div class="row align-items-center gx-2">
                    <div class="col">
                      <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($participantSubmited)?></span>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h6 class="card-subtitle mb-2">Total verif</h6>

                  <div class="row align-items-center gx-2">
                    <div class="col">
                      <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($participantVerif)?></span>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h6 class="card-subtitle mb-2">Total user</h6>

                  <div class="row align-items-center gx-2">
                    <div class="col">
                      <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($participantAll)?></span>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
              <!-- End Card -->
            </div>

          </div>

          <div class="row mb-5">
            <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                  <h6 class="card-subtitle mb-2">Registration Chart</h6>

                  <div class="row align-items-center gx-2">
                    <div class="col">
                      <div id="chart"></div>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-subtitle mb-2">Total Age</h6>

                  <div class="row align-items-center gx-2">
                    <div class="col">
                      <div id="chart2"></div>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-subtitle mb-2">Total Ambassador</h6>

                  <div class="row align-items-center gx-2">
                    <div class="col">
                      <div id="chart3"></div>
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container mt-5">
          <h2>Payment Info</h2>
          <hr>
          <h4>Comingsoon :)</h4>
        </div>
    </div>
    <!-- End Content -->
  </main>
  <script>
    // $('.counterChecked').counterUp({
    //   delay: 10,
    //   time: 1000
    // })
    var options = {
          series: [{
          name: 'Total',
          data: [
            <?php
              foreach ($registrationChart as $item) {
                echo $item->TOTAL.',';
              }  
            ?>
          ]
        }],
          chart: {
          height: 350,
          type: 'area'
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        xaxis: {
          categories: [
            <?php
              foreach ($registrationChart as $item) {
                echo "'".$item->DATE."',";
              }  
            ?>
          ]
        }
      };

      // AGE CHART
      var options2 = {
          series: [
            <?php
              foreach ($ageChart as $item) {
                echo $item->TOTAL.',';
              }  
            ?>
          ],
          chart: {
          width: 380,
          type: 'pie',
        },
        labels: [
            <?php
              foreach ($ageChart as $item) {
                echo '"'.$item->AGE.'",';
              }  
            ?>
        ],
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
      };

      // Ambassador Chart
      var options3 = {
          series: [
            <?php
              foreach ($ambassadorChart as $item) {
                echo $item->TOTAL.',';
              }  
            ?>
          ],
          chart: {
            width: 380,
            type: 'donut',
        },
        labels: [
          <?php
              foreach ($ambassadorChart as $item) {
                echo '"'.$item->NAME.'",';
              }  
          ?>
        ],
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        

      var chart = new ApexCharts(document.querySelector("#chart"), options);
      var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
      var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);

      chart.render();
      chart2.render();
      chart3.render();
  </script>