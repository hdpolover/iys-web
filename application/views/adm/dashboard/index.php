  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Navbar -->
    <nav class="js-nav-scroller navbar navbar-expand-lg navbar-sidebar navbar-vertical navbar-light bg-white border-end" data-hs-nav-scroller-options='{
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
              <img class="" src="<?= site_url() ?>assets/img/logo/logo.png" style="width: 100px;" alt="Logo">
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
        <h2>Dashboard</h2>
        <hr>
        <div class="row mt-4">
          <div class="col">
            <!-- Nav -->
            <div class="text-center">
              <ul class="nav nav-segment nav-pills mb-7" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="nav-one-eg1-tab" href="#nav-one-eg1" data-bs-toggle="pill" data-bs-target="#nav-one-eg1" role="tab" aria-controls="nav-one-eg1" aria-selected="true">Participant Info</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="nav-two-eg1-tab" href="#nav-two-eg1" data-bs-toggle="pill" data-bs-target="#nav-two-eg1" role="tab" aria-controls="nav-two-eg1" aria-selected="false">Payment Info</a>
                </li>
              </ul>
            </div>
            <!-- End Nav -->

            <!-- Tab Content -->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="nav-one-eg1" role="tabpanel" aria-labelledby="nav-one-eg1-tab">
                <div class="row">
                  <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                    <!-- Card -->
                    <div class="card">
                      <div class="card-body">
                        <h6 class="card-subtitle mb-2">Total checked</h6>

                        <div class="row align-items-center gx-2">
                          <div class="col">
                            <span class="counterChecked display-5 text-dark" data-value="24"><?= number_format($participantChecked) ?></span>
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
                            <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($participantSubmited) ?></span>
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
                            <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($participantVerif) ?></span>
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
                            <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($participantAll) ?></span>
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
                <div class="row mb-5">
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
                <!-- <div class="row"> -->
                  
                <!-- </div> -->
              </div>
              <div class="tab-pane fade" id="nav-two-eg1" role="tabpanel" aria-labelledby="nav-two-eg1-tab">
                <h4>Summary</h4>
                <div class="row">
                  <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                    <!-- Card -->
                    <div class="card">
                      <div class="card-body">
                        <h6 class="card-subtitle mb-2">Total Income</h6>

                        <div class="row align-items-center gx-2">
                          <div class="col">
                            <span class="text-dark" data-value="24">Rp<?= number_format($totIncome) ?></span>
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
                        <h6 class="card-subtitle mb-2">Midtrans Income</h6>

                        <div class="row align-items-center gx-2">
                          <div class="col">
                            <span class="text-dark" data-value="24">Rp<?= number_format($midIncome) ?></span>
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
                        <h6 class="card-subtitle mb-2">Paypal Income</h6>

                        <div class="row align-items-center gx-2">
                          <div class="col">
                            <span class="text-dark" data-value="24">Rp<?= number_format($payIncome) ?></span>
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
                        <h6 class="card-subtitle mb-2">Manual Income</h6>

                        <div class="row align-items-center gx-2">
                          <div class="col">
                            <span class="text-dark" data-value="24">Rp<?= number_format($manIncome) ?></span>
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                    <!-- End Card -->
                  </div>
                </div>
                <h4>Payment Status</h4>
                <button style="float: right;" class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  Detail
                </button>
                <div class="row">
                  <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                    <!-- Card -->
                    <div class="card">
                      <div class="card-body">
                        <h6 class="card-subtitle mb-2">Total success</h6>

                        <div class="row align-items-center gx-2">
                          <div class="col">
                            <span class="counterChecked display-5 text-dark" data-value="24"><?= number_format($totSuccess) ?></span>
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
                        <h6 class="card-subtitle mb-2">Total pending</h6>

                        <div class="row align-items-center gx-2">
                          <div class="col">
                            <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($totPending) ?></span>
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
                        <h6 class="card-subtitle mb-2">Total cancel/deny</h6>

                        <div class="row align-items-center gx-2">
                          <div class="col">
                            <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($totCancel) ?></span>
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
                        <h6 class="card-subtitle mb-2">Total expire</h6>

                        <div class="row align-items-center gx-2">
                          <div class="col">
                            <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($totExpired) ?></span>
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Row -->
                      </div>
                    </div>
                    <!-- End Card -->
                  </div>
                </div>
                <div class="collapse mb-4" id="collapseExample">
                  <div class="card card-body">
                    <span class="badge bg-soft-danger text-danger">Registration</span>
                    <div class="row">
                      <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                        <!-- Card -->
                        <div class="card">
                          <div class="card-body">
                            <h6 class="card-subtitle mb-2">Total success</h6>

                            <div class="row align-items-center gx-2">
                              <div class="col">
                                <span class="counterChecked display-5 text-dark" data-value="24"><?= number_format($regisSuccess) ?></span>
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
                            <h6 class="card-subtitle mb-2">Total pending</h6>

                            <div class="row align-items-center gx-2">
                              <div class="col">
                                <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($regisPending) ?></span>
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
                            <h6 class="card-subtitle mb-2">Total cancel/deny</h6>

                            <div class="row align-items-center gx-2">
                              <div class="col">
                                <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($regisCancel) ?></span>
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
                            <h6 class="card-subtitle mb-2">Total expire</h6>

                            <div class="row align-items-center gx-2">
                              <div class="col">
                                <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($regisExpired) ?></span>
                              </div>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->
                          </div>
                        </div>
                        <!-- End Card -->
                      </div>
                    </div>
                    <span class="badge bg-soft-warning text-warning">Batch 1</span>
                    <div class="row">
                      <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                        <!-- Card -->
                        <div class="card">
                          <div class="card-body">
                            <h6 class="card-subtitle mb-2">Total success</h6>

                            <div class="row align-items-center gx-2">
                              <div class="col">
                                <span class="counterChecked display-5 text-dark" data-value="24"><?= number_format($batch1Success) ?></span>
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
                            <h6 class="card-subtitle mb-2">Total pending</h6>

                            <div class="row align-items-center gx-2">
                              <div class="col">
                                <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($batch1Pending) ?></span>
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
                            <h6 class="card-subtitle mb-2">Total cancel/deny</h6>

                            <div class="row align-items-center gx-2">
                              <div class="col">
                                <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($batch1Cancel) ?></span>
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
                            <h6 class="card-subtitle mb-2">Total expire</h6>

                            <div class="row align-items-center gx-2">
                              <div class="col">
                                <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($batch1Expired) ?></span>
                              </div>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->
                          </div>
                        </div>
                        <!-- End Card -->
                      </div>
                    </div>
                    <span class="badge bg-soft-success text-success">Batch 2</span>
                    <div class="row">
                      <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                        <!-- Card -->
                        <div class="card">
                          <div class="card-body">
                            <h6 class="card-subtitle mb-2">Total success</h6>

                            <div class="row align-items-center gx-2">
                              <div class="col">
                                <span class="counterChecked display-5 text-dark" data-value="24"><?= number_format($batch2Success) ?></span>
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
                            <h6 class="card-subtitle mb-2">Total pending</h6>

                            <div class="row align-items-center gx-2">
                              <div class="col">
                                <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($batch2Pending) ?></span>
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
                            <h6 class="card-subtitle mb-2">Total cancel/deny</h6>

                            <div class="row align-items-center gx-2">
                              <div class="col">
                                <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($batch2Cancel) ?></span>
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
                            <h6 class="card-subtitle mb-2">Total expire</h6>

                            <div class="row align-items-center gx-2">
                              <div class="col">
                                <span class="js-counter display-5 text-dark" data-value="24"><?= number_format($batch2Expired) ?></span>
                              </div>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->
                          </div>
                        </div>
                        <!-- End Card -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-2">
                  <h4>List Pending</h4>
                  <table style="margin-top: 5rem;" class="table table-borderless table-thead-bordered datatable">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          $no = 1;
                          foreach ($pendings as $pending) {
                              echo '
                                  <tr>
                                      <td scope="col">'.$no++.'</td>
                                      <td scope="col">'.$pending->name.'</td>
                                      <td scope="col">'.$pending->email.'</td>
                                      <td>
                                        <a target="_blank" href="'.site_url('admin/payment/history/'.$pending->id_user).'" class="btn btn-soft-primary btn-icon btn-sm"><i class="bi-list"></i></a>
                                      </td>
                                  </tr>   
                              ';
                          }
                      ?>
                    </tbody>
                  </table>
                </div>
                <h4 class="mt-4">Top Method Payment</h4>
                <div class="row">
                  <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
                    <!-- Card -->
                    <div class="card">
                      <div class="card-body">
                        <h6 class="card-subtitle mb-4">Popular Method</h6>
                        <?php
                          foreach ($popularMethods as $popularMethod) { ?>
                          <div class="mt-4">
                            <?php
                                if($popularMethod->method_name == 'qris'){
                                  $img = 'https://istanbulyouthsummit.com/assets/img/payment/qris.png';
                                }else{
                                  $img = $popularMethod->method_img;
                                }
                              ?>
                              <img style="max-width: 75px;"  src="<?= $img?>" alt="">
                              <div style="float: right;"><?= $popularMethod->TOTAL?>x</div>
                          </div>
                        <?php }?>
                          
                        
                        <!-- End Row -->
                      </div>
                    </div>
                    <!-- End Card -->
                  </div>
                  <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
                    <!-- Card -->
                    <div class="card">
                      <div class="card-body">
                        <h6 class="card-subtitle mb-2">Success Method</h6>

                        <?php
                          foreach ($succMethods as $succMethod) { ?>
                          <div class="mt-4">
                              <?php
                                if($succMethod->method_name == 'qris'){
                                  $img = 'https://istanbulyouthsummit.com/assets/img/payment/qris.png';
                                }else{
                                  $img = $succMethod->method_img;
                                }
                              ?>
                              <img style="max-width: 75px;"  src="<?= $img?>" alt="">
                              <div style="float: right;"><?= $succMethod->TOTAL?>x</div>
                          </div>
                        <?php }?>
                      </div>
                    </div>
                    <!-- End Card -->
                  </div>
                  <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
                    <!-- Card -->
                    <div class="card">
                      <div class="card-body">
                        <h6 class="card-subtitle mb-2">Failed Method</h6>

                        <?php
                          foreach ($failMethods as $failMethod) { ?>
                          <div class="mt-4">
                            <?php
                                if($failMethod->method_name == 'qris'){
                                  $img = 'https://istanbulyouthsummit.com/assets/img/payment/qris.png';
                                }else{
                                  $img = $failMethod->method_img;
                                }
                              ?>
                              <img style="max-width: 75px;"  src="<?= $img?>" alt="">
                              <div style="float: right;"><?= $failMethod->TOTAL?>x</div>
                          </div>
                        <?php }?>
                      </div>
                    </div>
                    <!-- End Card -->
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- End Tab Content -->
        </div>
      </div>
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
            echo $item->TOTAL . ',';
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
            echo "'" . $item->DATE . "',";
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
          echo $item->TOTAL . ',';
        }
        ?>
      ],
      chart: {
        width: 500,
        type: 'pie',
      },
      labels: [
        <?php
        foreach ($ageChart as $item) {
          echo '"' . $item->AGE . '",';
        }
        ?>
      ],
      responsive: [{
        breakpoint: 500,
        options: {
          chart: {
            width: 500
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
          echo $item->TOTAL . ',';
        }
        ?>
      ],
      chart: {
        width: 500,
        type: 'donut',
      },
      labels: [
        <?php
        foreach ($ambassadorChart as $item) {
          echo '"' . $item->NAME . '",';
        }
        ?>
      ],
      responsive: [{
        breakpoint: 400,
        options: {
          chart: {
            width: 500
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