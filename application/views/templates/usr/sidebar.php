<div class="col-lg-3">
  <!-- Navbar -->
  <div class="navbar-expand-lg navbar-light">
    <div id="sidebarNav" class="collapse navbar-collapse navbar-vertical">
      <!-- Card -->
      <div class="card flex-grow-1 mb-5">
        <div class="card-body">
          <!-- Avatar -->
          <div class="d-none d-lg-block text-center mb-5">
            <div class="avatar avatar-xxl avatar-circle mb-3">
              <?php 
                if($this->session->userdata('photo') == null || $this->session->userdata('photo') == ''){
                  echo '
                    <div class="avatar avatar-xxl avatar-circle">
                      <span class="avatar avatar-lg avatar-primary avatar-circle">
                        <span class="avatar-initials">'.strtoupper(substr($this->session->userdata('name'), 0, 1)).'</span>
                      </span>
                    </div>    
                  ';
                }else{
                  echo '
                    <img class="avatar-img mb-3" src="'.$this->session->userdata('photo').'" alt="Image Description">    
                  ';
                }
              ?>
              
              <!-- <img class="avatar-status avatar-lg-status" src="<?site_url()?>assets/svg/illustrations/top-vendor.svg" alt="Image Description" data-bs-toggle="tooltip" data-bs-placement="top" title="Verified user"> -->
              
            </div>

            <h4 class="card-title mb-0"><?= $this->session->userdata('name')?></h4>
            <p class="card-text small"><?= $this->session->userdata('email')?></p>
          </div>
          <!-- End Avatar -->

          <!-- Nav -->
          <!-- List -->
          <ul class="nav nav-sm nav-tabs nav-vertical mb-4">
            <li class="nav-item">
              <a class="nav-link <?= $sidebar == "announcement" ? "active" : ""?>" href="<?= site_url('announcement')?>">
                <i class="bi-bell nav-icon"></i> Announcements
                <?php
                  $alertCount = $this->db->get_where('participant_details', ['id_user' => $this->session->userdata('id_user'), 'id_summit' => '1'])->row()->alert_announcement;

                  if($alertCount == '0'){
                    echo '
                      <span class="badge bg-soft-secondary text-dark rounded-pill nav-link-badge">0</span>
                    ';
                  }else{
                    echo '
                      <span class="badge bg-soft-danger text-danger rounded-pill nav-link-badge">'.$alertCount.'</span>
                    ';
                  }
                ?>
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $sidebar == "personal-info" ? "active" : ""?>" href="<?= site_url('personal-info')?>">
                <i class="bi-person-badge nav-icon"></i> Personal info
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $sidebar == "payment" ? "active" : ""?>" href="<?= site_url('payment')?>">
                <i class="bi-credit-card nav-icon"></i> Payment
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $sidebar == "certificate" ? "active" : ""?>" href="#">
                <i class="bi-award nav-icon"></i> Certificate
              </a>
            </li>
          </ul>
          <!-- End List -->

          <div class="d-lg-none">
            <div class="dropdown-divider"></div>

            <!-- List -->
            <ul class="nav nav-sm nav-tabs nav-vertical">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="bi-box-arrow-right nav-icon"></i> Log out
                </a>
              </li>
            </ul>
            <!-- End List -->
          </div>
          <!-- End Nav -->
        </div>
      </div>
      <!-- End Card -->
    </div>
  </div>
  <!-- End Navbar -->
</div>
<!-- End Col -->