  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- <figure class="position-absolute zi-n1" style="top: 35rem; left: 50rem; width: 62rem; height: 62rem;">
      <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 260 260">
        <circle fill="#e7eaf3" opacity=".7" cx="130" cy="130" r="130"></circle>
      </svg>
    </figure> -->
    <div class="position-absolute zi-n1" style="top: 56rem; right: 3%; width: 15rem; height: 15rem;">
      <figure class="position-absolute top-0 end-0 zi-2 me-10 aos-init aos-animate" data-aos="fade-up">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 450 450" width="165" height="165">
          <g>
            <defs>
              <path id="circleImgID2" d="M225,448.7L225,448.7C101.4,448.7,1.3,348.5,1.3,225l0,0C1.2,101.4,101.4,1.3,225,1.3l0,0
                c123.6,0,223.7,100.2,223.7,223.7l0,0C448.7,348.6,348.5,448.7,225,448.7z"></path>
            </defs>
          </g>
        </svg>
      </figure>

      <figure class="position-absolute top-0 start-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 335.2 335.2" width="120" height="120">
          <circle fill="none" stroke="#377dff" stroke-width="75" cx="167.6" cy="167.6" r="130.1"></circle>
        </svg>
      </figure>

      <figure class="d-none d-sm-block position-absolute top-0 start-0 mt-10 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 515 515" width="200" height="200">
          <g>
            <defs>
              <path id="circleImgID4" d="M260,515h-5C114.2,515,0,400.8,0,260v-5C0,114.2,114.2,0,255,0h5c140.8,0,255,114.2,255,255v5
                C515,400.9,400.8,515,260,515z"></path>
            </defs>
          </g>
        </svg>
      </figure>

      <figure class="position-absolute top-0 end-0 aos-init aos-animate" style="margin-top: 11rem; margin-right: 13rem;" data-aos="fade-up" data-aos-delay="250">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 67 67" width="25" height="25">
          <circle fill="#00C9A7" cx="33.5" cy="33.5" r="33.5"></circle>
        </svg>
      </figure>

      <figure class="position-absolute top-0 end-0 me-3 aos-init aos-animate" style="margin-top: 8rem;" data-aos="fade-up" data-aos-delay="350">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 141 141" width="50" height="50">
          <circle fill="#FFC107" cx="70.5" cy="70.5" r="70.5"></circle>
        </svg>
      </figure>

      <figure class="position-absolute bottom-0 end-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 770.4 770.4" width="280" height="280">
          <g>
            <defs>
              <path id="circleImgID6" d="M385.2,770.4L385.2,770.4c212.7,0,385.2-172.5,385.2-385.2l0,0C770.4,172.5,597.9,0,385.2,0l0,0
                C172.5,0,0,172.5,0,385.2l0,0C0,597.9,172.4,770.4,385.2,770.4z"></path>
            </defs>
          </g>
        </svg>
      </figure>
    </div>
    <!-- <figure class="position-absolute zi-n1" style="top: 100rem; left: 5rem; width: 20rem; height: 20rem;">
      <img class="img-fluid" src="<?= site_url()?>assets/svg/components/circled-stripe.svg" alt="Image Description">
    </figure> -->
    <figure class="position-absolute zi-n1" style="top: 100rem; width: 99%; height: 20rem;">
      <img class="img-fluid" src="<?= site_url()?>assets/svg/components/shape-6.svg" alt="Image Description">
    </figure>
    <figure class="position-absolute zi-n1" style="top: 185rem; left: 5rem; width: 10rem; height: 20rem;">
      <img class="img-fluid" src="<?= site_url()?>assets/svg/components/dots.svg" alt="Image Description">
    </figure>
    
    <figure class="position-absolute zi-n1" style="top: 250rem; right: 5%; width: 13rem; height: 13rem;">
        <img class="img-fluid" src="<?= site_url()?>assets/svg/components/circled-stripe.svg" alt="Image Description">
      </figure>
    
    
    <!-- Swiper Slider -->
    <div class="border-bottom">
      <!-- Main Slider -->
      <div class="js-swiper-main swiper vh-md-70">
        <div class="swiper-wrapper">
          <!-- Slide -->
          <div class="swiper-slide gradient-y-overlay-sm-gray-900 bg-img-start" style="background-image: url(<?= site_url()?>assets/img/landing/landing_1.jpg);">
            <div class="container d-md-flex align-items-md-center vh-md-70 content-space-t-4 content-space-b-3 content-space-md-0">
              <div class="w-75 w-lg-50">
                <h1 class="display-4 text-white mb-0">Istanbul Youth Summit 2023</h1>
                <h3 class="text-white">August 1 - 31 2022, Open Registration</h3>
                <?php
                  $dateExpiredRegist  = "September 11, 2022 12:00:00";
                  $dateNow            = date("Y-m-d H:i:s");
                ?>

                <?php if(strtotime($dateNow) < strtotime($dateExpiredRegist)){ ?>
                  <div class="js-countdown row mt-3">
                    <div class="col-3">
                      <h2 class="js-cd-days h1 text-white mb-0"></h2>
                      <h5 class="mb-0 text-white">Days</h5>
                    </div>
                    <!-- End Col -->

                    <div class="col-3">
                      <h2 class="js-cd-hours h1 text-white mb-0"></h2>
                      <h5 class="mb-0 text-white">Hours</h5>
                    </div>
                    <!-- End Col -->

                    <div class="col-3">
                      <h2 class="js-cd-minutes h1 text-white mb-0"></h2>
                      <h5 class="mb-0 text-white">Mins</h5>
                    </div>
                    <!-- End Col -->

                    <div class="col-3">
                      <h2 class="js-cd-seconds h1 text-white mb-0"></h2>
                      <h5 class="mb-0 text-white">Secs</h5>
                    </div>
                    <!-- End Col -->
                  
                  
                  </div>
                  <div class="mt-2">
                      <small class="text-white">West Indonesian Time (GMT+7)</small>
                  </div>
                <?php } ?>
                <?php
                  if(strtotime($dateNow) < strtotime($dateExpiredRegist)){
                    echo '
                      <a href="'.site_url('').'sign-up" class="btn btn-outline-light mt-5">Register</a>    
                    ';
                  }else{
                    echo '
                      <button type="button" class="btn btn-soft-danger mt-5">Expired</button>    
                    ';
                  }
                ?>
              </div>
            </div>
          </div>
          <!-- End Slide -->

          <!-- Slide -->
          <div class="swiper-slide gradient-y-overlay-sm-gray-900 bg-img-start" style="background-image: url(<?= site_url()?>assets/img/landing/landing_2.jpg);">
            <div class="container d-md-flex align-items-md-center vh-md-70 content-space-t-4 content-space-b-3 content-space-md-0">
              <div class="w-75 w-lg-50">
                <h1 class="display-4 text-white mb-0">Istanbul Youth Summit 2023</h1>
                <h3 class="text-white">February 6 - 9  2023, Istanbul Turkey</h3>
                <?php
                  $startEvent  = "February 06, 2023 00:00:00";
                ?>
                <?php if(strtotime($dateNow) < strtotime($startEvent)){ ?>
                  <div class="js-countdown2 row mt-3">
                    <div class="col-3">
                      <h2 class="js-cd-days h1 text-white mb-0"></h2>
                      <h5 class="mb-0 text-white">Days</h5>
                    </div>
                    <!-- End Col -->

                    <div class="col-3">
                      <h2 class="js-cd-hours h1 text-white mb-0"></h2>
                      <h5 class="mb-0 text-white">Hours</h5>
                    </div>
                    <!-- End Col -->

                    <div class="col-3">
                      <h2 class="js-cd-minutes h1 text-white mb-0"></h2>
                      <h5 class="mb-0 text-white">Mins</h5>
                    </div>
                    <!-- End Col -->

                    <div class="col-3">
                      <h2 class="js-cd-seconds h1 text-white mb-0"></h2>
                      <h5 class="mb-0 text-white">Secs</h5>
                    </div>
                    <!-- End Col -->
                  
                  
                  </div>
                  <div class="mt-2">
                      <small class="text-white">West Indonesian Time (GMT+7)</small>
                  </div>
                <?php } ?>
                <?php
                  if(strtotime($dateNow) < strtotime($dateExpiredRegist)){
                    echo '
                      <a href="'.site_url('').'sign-up" class="btn btn-outline-light mt-5">Register</a>    
                    ';
                  }
                ?>
              </div>
            </div>
          </div>
          <!-- End Slide -->
          <!-- Slide -->
          <div class="swiper-slide gradient-y-overlay-sm-gray-900 bg-img-start" style="background-image: url(<?= site_url()?>assets/img/landing/landing_4.jpg);">
            <div class="container d-md-flex align-items-md-center vh-md-70 content-space-t-4 content-space-b-3 content-space-md-0">
              <div class="w-75 w-lg-50">
                <h3 class="text-white">Registered participants count</h3>
                <h3 class="display-4 text-white mb-0"><?= number_format($totalParticipant)?></h3>
                <h3 class="text-white mb-0">Don't miss your chance!</h3>
                <?php
                  if(strtotime($dateNow) < strtotime($dateExpiredRegist)){
                    echo '
                      <a href="'.site_url('').'sign-up" class="btn btn-outline-light mt-5">Register Now!</a>
                    ';
                  }else{
                    echo '
                      <button type="button" class="btn btn-soft-danger mt-5">Expired</button>    
                    ';
                  }
                ?>
              </div>
            </div>
          </div>
          <!-- End Slide -->
          <!-- Slide -->
          <div class="swiper-slide gradient-y-overlay-sm-gray-900 bg-img-start" style="background-image: url(<?= site_url()?>assets/img/landing/landing_3.jpg);">
            <div class="container d-md-flex align-items-md-center vh-md-70 content-space-t-4 content-space-b-3 content-space-md-0">
              <div class="w-75 w-lg-50">
                <h1 class="display-4 text-white mb-0">Registration Guidelines</h1>
                <a href="https://bit.ly/IYSRegistrationGuidelines" class="btn btn-outline-light mt-5">Download Guideline</a>    
              </div>
            </div>
          </div>
          <!-- End Slide -->
        </div>

        <!-- Arrows -->
        <div class="d-none d-md-inline-block">
          <div id="btn-next-banner" class="js-swiper-main-button-next swiper-button-next swiper-button-next-soft-white"></div>
          <div class="js-swiper-main-button-prev swiper-button-prev swiper-button-prev-soft-white"></div>
        </div>
      </div>
      <!-- End Main Slider -->

      <!-- Thumbs Slider -->
      <div class="js-swiper-thumbs swiper">
        <div class="swiper-wrapper">
        
        </div>
      </div>
      <!-- End Thumbs Slider -->
    </div>
    <!-- Swiper Slider -->

    <!-- Step -->
    <div class="container content-space-t-2 content-space-t-lg-3 content-space-b-lg-2">
      <!-- <div class="row mb-5">
          <div class="col text-center">
              <a target="_blank" href="https://bit.ly/YBBBOOTCAMP">
                  <img src="<?= site_url('assets/img/landing/iklan.png')?>"style="height: 350px;" alt="">
              </a>
          </div>
      </div> -->
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <!-- <span class="text-cap">Event Details</span> -->
        <h2>Event Details</h2>
      </div>
      <!-- End Heading -->

      
      
      <div class="row mt-5">
        
        <div class="col-md-3 mb-5 mb-md-0">
          <!-- Icon Blocks -->
          <div class="text-center px-lg-3">
            <div class="svg-icon text-primary mb-4">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="#035A4B"/>
              <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="#035A4B"/>
              <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="#035A4B"/>
            </svg>
            </div>
            <h3>Event Date</h3>
            <p>February 6 - 9, 2023</p>
          </div>
          <!-- End Icon Blocks -->
        </div>
        <!-- End Col -->

        <div class="col-md-3 mb-5 mb-md-0">
          <!-- Icon Blocks -->
          <div class="text-center px-lg-3">
            <div class="svg-icon text-primary mb-4">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="#035A4B"/>
              <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="#035A4B"/>
            </svg>
            </div>
            <h3>Event Location</h3>
            <p>Istanbul, Turkey</p>
          </div>
          <!-- End Icon Blocks -->
        </div>
        <!-- End Col -->

        <div class="col-md-3 mb-5 mb-md-0">
          <!-- Icon Blocks -->
          <div class="text-center px-lg-3">
            <div class="svg-icon text-primary mb-4">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path opacity="0.3" d="M14 3V20H2V3C2 2.4 2.4 2 3 2H13C13.6 2 14 2.4 14 3ZM11 13V11C11 9.7 10.2 8.59995 9 8.19995V7C9 6.4 8.6 6 8 6C7.4 6 7 6.4 7 7V8.19995C5.8 8.59995 5 9.7 5 11V13C5 13.6 4.6 14 4 14V15C4 15.6 4.4 16 5 16H11C11.6 16 12 15.6 12 15V14C11.4 14 11 13.6 11 13Z" fill="#035A4B"/>
              <path d="M2 20H14V21C14 21.6 13.6 22 13 22H3C2.4 22 2 21.6 2 21V20ZM9 3V2H7V3C7 3.6 7.4 4 8 4C8.6 4 9 3.6 9 3ZM6.5 16C6.5 16.8 7.2 17.5 8 17.5C8.8 17.5 9.5 16.8 9.5 16H6.5ZM21.7 12C21.7 11.4 21.3 11 20.7 11H17.6C17 11 16.6 11.4 16.6 12C16.6 12.6 17 13 17.6 13H20.7C21.2 13 21.7 12.6 21.7 12ZM17 8C16.6 8 16.2 7.80002 16.1 7.40002C15.9 6.90002 16.1 6.29998 16.6 6.09998L19.1 5C19.6 4.8 20.2 5 20.4 5.5C20.6 6 20.4 6.60005 19.9 6.80005L17.4 7.90002C17.3 8.00002 17.1 8 17 8ZM19.5 19.1C19.4 19.1 19.2 19.1 19.1 19L16.6 17.9C16.1 17.7 15.9 17.1 16.1 16.6C16.3 16.1 16.9 15.9 17.4 16.1L19.9 17.2C20.4 17.4 20.6 18 20.4 18.5C20.2 18.9 19.9 19.1 19.5 19.1Z" fill="#035A4B"/>
            </svg>
            </div>
            <h3>Call Us</h3>
            <p>+62 851-7220-1727</p>
          </div>
          <!-- End Icon Blocks -->
        </div>
        <div class="col-md-3">
          <!-- Icon Blocks -->
          <div class="text-center px-lg-3">
            <div class="svg-icon text-primary mb-4">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725V8.725Z" fill="#035A4B"/>
              <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="#035A4B"/>
            </svg>
            </div>
            <h3>Send Us a Mail</h3>
            <p>istanbulyouthsummit@gmail.com</p>
          </div>
          <!-- End Icon Blocks -->
        </div>
        <!-- End Col -->
      </div>
    </div>
    <!-- End Step -->

    <div class="container content-space-t-2 content-space-t-lg-3 content-space-b-lg-2">
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <!-- <span class="text-cap">Event Details</span> -->
        <h2>About This Events</h2>
      </div>
      <div class="row justify-content-lg-center">
        <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
          <!-- Icon Blocks -->
          <div class="d-flex pe-md-5">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M12 17C16.4183 17 20 13.4183 20 9C20 4.58172 16.4183 1 12 1C7.58172 1 4 4.58172 4 9C4 13.4183 7.58172 17 12 17Z" fill="#035A4B" />
                  <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M6.53819 9L10.568 19.3624L11.976 18.8149L13.3745 19.3674L17.4703 9H6.53819ZM9.46188 11H14.5298L11.9759 17.4645L9.46188 11Z" fill="#035A4B" />
                  <path opacity="0.3" d="M10 22H14V22C14 23.1046 13.1046 24 12 24V24C10.8954 24 10 23.1046 10 22V22Z" fill="#035A4B" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8 17C8 16.4477 8.44772 16 9 16H15C15.5523 16 16 16.4477 16 17C16 17.5523 15.5523 18 15 18C15.5523 18 16 18.4477 16 19C16 19.5523 15.5523 20 15 20C15.5523 20 16 20.4477 16 21C16 21.5523 15.5523 22 15 22H9C8.44772 22 8 21.5523 8 21C8 20.4477 8.44772 20 9 20C8.44772 20 8 19.5523 8 19C8 18.4477 8.44772 18 9 18C8.44772 18 8 17.5523 8 17Z" fill="#035A4B" />
                </svg>
              </div>
            </div>

            <div class="flex-grow-1 ms-3">
              <h4>What is IYS ?</h4>
              <p style="text-align: justify;">Istanbul Youth Summit (IYS) 2023 is a program initiated by Youth Break the Boundaries (YBB). The aim of the activity to build the spirit youth leadership and prepare excellent future leaders, by using a moral based approach to education that focusing on instilling nationalism character values and international culture for youth generation. </p>
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
          <!-- Icon Blocks -->
          <div class="d-flex ps-md-5">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14 18V16H10V18L9 20H15L14 18Z" fill="#035A4B" />
                  <path opacity="0.3" d="M20 4H17V3C17 2.4 16.6 2 16 2H8C7.4 2 7 2.4 7 3V4H4C3.4 4 3 4.4 3 5V9C3 11.2 4.8 13 7 13C8.2 14.2 8.8 14.8 10 16H14C15.2 14.8 15.8 14.2 17 13C19.2 13 21 11.2 21 9V5C21 4.4 20.6 4 20 4ZM5 9V6H7V11C5.9 11 5 10.1 5 9ZM19 9C19 10.1 18.1 11 17 11V6H19V9ZM17 21V22H7V21C7 20.4 7.4 20 8 20H16C16.6 20 17 20.4 17 21ZM10 9C9.4 9 9 8.6 9 8V5C9 4.4 9.4 4 10 4C10.6 4 11 4.4 11 5V8C11 8.6 10.6 9 10 9ZM10 13C9.4 13 9 12.6 9 12V11C9 10.4 9.4 10 10 10C10.6 10 11 10.4 11 11V12C11 12.6 10.6 13 10 13Z" fill="#035A4B" />
                </svg>

              </div>
            </div>

            <div class="flex-grow-1 ms-3">
              <h4>Why you join?</h4>
              <p style="text-align: justify;">This event is a forum will be held for 4 days that will discuss the main themes and panel discussions that will be carried out in this summit. The main themes of the Istanbul Youth Summit 2023 is: “Social Development Goals For Emerging Leaders”</p>
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="w-100"></div>

        <div class="col-md-6 col-lg-5">
          <!-- Icon Blocks -->
          <div class="d-flex pe-md-5">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="#035A4B" />
                  <path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899V8.08899Z" fill="#035A4B" />
                </svg>
              </div>
            </div>

            <div class="flex-grow-1 ms-3">
              <h4>What should do the events?</h4>
              <p style="text-align: justify;">The program will intends to achieve five main goals. We aim to Sharpen up the spirit of talented youth leaders in various areas, Build a character of youth leadership, Build the existence of the youth on the international scene, Train the leadership soul of the youth who is actively contributing to develop the country, Continue the Istanbul Youth Summit program for years to come by creating a strong network and long term relationship among IYS alumni.</p>
              
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
          <!-- Icon Blocks -->
          <div class="d-flex ps-md-5">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="#035A4B" />
                  <path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="#035A4B" />
                </svg>

              </div>
            </div>

            <div class="flex-grow-1 ms-3">
              <h4>IYS Agenda</h4>
              <p style="text-align: justify;">This Istanbul Youth Summit (IYS) activity will be held on 6 – 9 Februari 2023.</p>
            </div>
          </div>
          <!-- End Icon Blocks -->
        </div>
      </div>
    </div>
    <div class="bg-dark rounded-2" style="background-image: url(./assets/svg/components/wave-pattern-light.svg);">
      <div class="container content-space-t-2 content-space-t-lg-3 content-space-b-lg-2">
        <!-- Heading -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
          <!-- <span class="text-cap">Event Details</span> -->
          <h2 class="text-white">Event Schedule</h2>
        </div>
        <!-- End Heading -->
        <!-- Step -->
        <ul class="step step-timeline-md">
          <li class="step-item">
            <div class="step-content-wrapper">
              <span class="step-icon step-icon-soft-light">1</span>
              <div class="step-content">
                <h4 class="text-white">August 1 - 31, 2022</h4>
  
                <p class="step-text text-white-70">
                  Registration <br>
                  August 1 - 31, 2022</p>
                <!-- <p class="step-text text-white-70">
                  Before you continue to fill out this form, there are five steps that you have to do.
                  Please Click Read More for Complete info
                </p> -->
                <!-- <button type="button" class="btn btn-soft-primary">Read More</button> -->
              </div>
            </div>
          </li>
  
          <li class="step-item">
            <div class="step-content-wrapper">
              <span class="step-icon step-icon-soft-light">2</span>
              <div class="step-content">
                <h4 class="text-white">October 20, 2022</h4>
                <p class="step-text text-white-70">
                  <!-- The day has come!!! <br>
                  The day has come!!! <br> -->
                  Today is the day of the announcement for IYS 2023 selected participants!
                </p>
              </div>
            </div>
          </li>
  
          <li class="step-item">
            <div class="step-content-wrapper">
              <span class="step-icon step-icon-soft-light">3</span>
              <div class="step-content">
                <h4 class="text-white">October 22 - 23, 2022</h4>
                <p class="step-text text-white-70">Interview for Fully Funded</p>
                <!-- <button type="button" class="btn btn-soft-primary">Read More</button> -->
              </div>
            </div>
          </li>
  
          <li class="step-item">
            <div class="step-content-wrapper">
              <span class="step-icon step-icon-soft-light">4</span>
              <div class="step-content">
                <h4 class="text-white">December 5, 2022</h4>
                <p class="step-text text-white-70">Final Announcement for Fully Funded</p>
                <!-- <button type="button" class="btn btn-soft-primary">Read More</button> -->
              </div>
            </div>
          </li>
          <li class="step-item">
            <div class="step-content-wrapper">
              <span class="step-icon step-icon-soft-light">5</span>
              <div class="step-content">
                <h4 class="text-white">February 6 - 9, 2023</h4>
                <p class="step-text text-white-70">Istanbul Youth Summit 2023</p>
                
                <!-- <button type="button" class="btn btn-soft-primary">Read More</button> -->
              </div>
            </div>
          </li>
        </ul>
        <!-- End Step -->
      </div>
    </div>
    <!-- <div class="container content-space-t-2 content-space-t-lg-3 content-space-b-lg-2"> -->
      <div class="container content-space-t-3 content-space-t-lg-5">
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
          <!-- <span class="text-cap">Event Details</span> -->
          <h2>Registration Video</h2>
        </div>

        <iframe width="100%" height="550" style="margin-bottom: 5rem;" src="https://www.youtube.com/embed/o254-8BPCqg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
      </div>
    <!-- Card Grid -->
    <!-- <div class="container content-space-t-2 content-space-t-lg-3 content-space-b-lg-2"> -->
      <div class="container content-space-t-3 content-space-t-lg-5">
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
          <!-- <span class="text-cap">Event Details</span> -->
          <h2>Istanbul Youth Summit Song - We Are the Youth</h2>
        </div>

        <iframe width="100%" height="550" style="margin-bottom: 5rem;" src="https://www.youtube.com/embed/ZwWmpPqs5tU?autoplay=1&t=3" allow="autoplay" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
      </div>
    <!-- Card Grid -->
    <div class="container mt-3">
      <div class="row">
        <div class="col">
          <div class="card bg-primary h-100 overflow-hidden">
            <div class="card-body">
              <div class="w-65 pe-2">
                <h2 class="card-title text-white">Guideline</h2>
                <p class="card-text text-white">Are you confused about the IYS guide? You can download the guide below.</p>
                <a class="btn btn-light btn-sm btn-transition" href="https://bit.ly/IYSRegistrationGuidelines" target="_blank">Download <i class="bi-chevron-right small ms-1"></i></a>
              </div>

              <div style="width: 300px; right: 10px; top: 10px;" class="position-absolute">
                <img class="card-img" src="./assets/svg/illustrations/add-file.svg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container content-space-b-2 content-space-b-lg-3" style="margin-top: 6rem;">
      <!-- Nav Scroller -->
        <div class="js-nav-scroller hs-nav-scroller-horizontal mb-7">
          <span class="hs-nav-scroller-arrow-prev" style="display: none;">
            <a class="hs-nav-scroller-arrow-link" href="javascript:;">
              <i class="bi-chevron-left"></i>
            </a>
          </span>

          <span class="hs-nav-scroller-arrow-next" style="display: none;">
            <a class="hs-nav-scroller-arrow-link" href="javascript:;">
              <i class="bi-chevron-right"></i>
            </a>
          </span>

          <!-- Nav -->
          <ul class="js-filter-options nav nav-segment nav-pills d-flex mx-auto" style="max-width: 38rem;">
            <li class="nav-item">
              <a class="nav-link active" href="javascript:;" data-group="all">All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;" data-group="2017">YESS! 2017</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;" data-group="2019">YCEE 2019</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;" data-group="2020">IYS 2020</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;" data-group="2021">IYS 2021</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;" data-group="2022">the 5th IYS</a>
            </li>
          </ul>
          <!-- End Nav -->
        </div>
        <!-- End Nav Scroller -->

      <div class="js-shuffle row row-cols-1 row-cols-sm-2 row-cols-md-3">
        <div class="js-shuffle-item col mb-5" data-groups='["2022"]'>
          <!-- Card -->
          <a class="card card-flush card-transition" href="#">
            <img class="card-img-top" style="object-fit: cover;height: 250px;" src="<?= site_url('')?>assets/img/landing/2022_1.JPG" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-body">the 5th IYS</span>
              <!-- <h3 class="card-title">Lorem Ipsum</h3> -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
        <div class="js-shuffle-item col mb-5" data-groups='["2022"]'>
          <!-- Card -->
          <a class="card card-flush card-transition" href="#">
            <img class="card-img-top" style="object-fit: cover;height: 250px;" src="<?= site_url('')?>assets/img/landing/2022_2.JPG" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-body">the 5th IYS</span>
              <!-- <h3 class="card-title">Lorem Ipsum</h3> -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="js-shuffle-item col mb-5" data-groups='["2022"]'>
          <!-- Card -->
          <a class="card card-flush card-transition" href="#">
            <img class="card-img-top" style="object-fit: cover;height: 250px;" src="<?= site_url('')?>assets/img/landing/2022_3.jpg" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-body">the 5th IYS</span>
              <!-- <h3 class="card-title">Lorem Ipsum</h3> -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
        
        <div class="js-shuffle-item col mb-5" data-groups='["2021"]'>
          <!-- Card -->
          <a class="card card-flush card-transition" href="#">
            <img class="card-img-top" style="object-fit: cover;height: 250px;" src="<?= site_url('')?>assets/img/landing/2021_1.JPG" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-body">IYS 2021</span>
              <!-- <h3 class="card-title">Lorem Ipsum</h3> -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="js-shuffle-item col mb-5" data-groups='["2021"]'>
          <!-- Card -->
          <a class="card card-flush card-transition" href="#">
            <img class="card-img-top" style="object-fit: cover;height: 250px;" src="<?= site_url('')?>assets/img/landing/2021_2.JPG" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-body">IYS 2021</span>
              <!-- <h3 class="card-title">Lorem Ipsum</h3> -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="js-shuffle-item col mb-5" data-groups='["2021"]'>
          <!-- Card -->
          <a class="card card-flush card-transition" href="#">
            <img class="card-img-top" style="object-fit: cover;height: 250px;" src="<?= site_url('')?>assets/img/landing/2021_3.JPG" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-body">IYS 2021</span>
              <!-- <h3 class="card-title">Lorem Ipsum</h3> -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="js-shuffle-item col mb-5" data-groups='["2020"]'>
          <!-- Card -->
          <a class="card card-flush card-transition" href="#">
            <img class="card-img-top" style="object-fit: cover;height: 250px;" src="<?= site_url('')?>assets/img/landing/2020_1.JPG" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-body">IYS 2020</span>
              <!-- <h3 class="card-title">Lorem Ipsum</h3> -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="js-shuffle-item col mb-5" data-groups='["2020"]'>
          <!-- Card -->
          <a class="card card-flush card-transition" href="#">
            <img class="card-img-top" style="object-fit: cover;height: 250px;" src="<?= site_url('')?>assets/img/landing/2020_2.JPG" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-body">IYS 2020</span>
              <!-- <h3 class="card-title">Lorem Ipsum</h3> -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="js-shuffle-item col mb-5" data-groups='["2020"]'>
          <!-- Card -->
          <a class="card card-flush card-transition" href="#">
            <img class="card-img-top" style="object-fit: cover;height: 250px;" src="<?= site_url('')?>assets/img/landing/2020_3.JPG" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-body">IYS 2020</span>
              <!-- <h3 class="card-title">Lorem Ipsum</h3> -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="js-shuffle-item col mb-5" data-groups='["2019"]'>
          <!-- Card -->
          <a class="card card-flush card-transition" href="#">
            <img class="card-img-top" style="object-fit: cover;height: 250px;" src="<?= site_url('')?>assets/img/landing/2019_1.JPG" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-body">YCEE 2019</span>
              <!-- <h3 class="card-title">Lorem Ipsum</h3> -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="js-shuffle-item col mb-5" data-groups='["2019"]'>
          <!-- Card -->
          <a class="card card-flush card-transition" href="#">
            <img class="card-img-top" style="object-fit: cover;height: 250px;" src="<?= site_url('')?>assets/img/landing/2019_2.JPG" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-body">YCEE 2019</span>
              <!-- <h3 class="card-title">Lorem Ipsum</h3> -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
        
        <div class="js-shuffle-item col mb-5" data-groups='["2019"]'>
          <!-- Card -->
          <a class="card card-flush card-transition" href="#">
            <img class="card-img-top" style="object-fit: cover;height: 250px;" src="<?= site_url('')?>assets/img/landing/2019_3.JPG" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-body">YCEE 2019</span>
              <!-- <h3 class="card-title">Lorem Ipsum</h3> -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="js-shuffle-item col mb-5" data-groups='["2017"]'>
          <!-- Card -->
          <a class="card card-flush card-transition" href="#">
            <img class="card-img-top" style="object-fit: cover;height: 250px;" src="<?= site_url('')?>assets/img/landing/2017_1.JPG" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-body">YESS! 2017</span>
              <!-- <h3 class="card-title">Lorem Ipsum</h3> -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="js-shuffle-item col mb-5" data-groups='["2017"]'>
          <!-- Card -->
          <a class="card card-flush card-transition" href="#">
            <img class="card-img-top" style="object-fit: cover;height: 250px;" src="<?= site_url('')?>assets/img/landing/2017_2.JPG" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-body">YESS! 2017</span>
              <!-- <h3 class="card-title">Lorem Ipsum</h3> -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="js-shuffle-item col mb-5" data-groups='["2017"]'>
          <!-- Card -->
          <a class="card card-flush card-transition" href="#">
            <img class="card-img-top" style="object-fit: cover;height: 250px;" src="<?= site_url('')?>assets/img/landing/2017_3.JPG" alt="Image Description">
            <div class="card-body">
              <span class="card-subtitle text-body">YESS! 2017</span>
              <!-- <h3 class="card-title">Lorem Ipsum</h3> -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

      </div>
      <!-- End Row -->
    </div>
    <!-- End Card Grid -->
    <!-- </div> -->
    
    <!-- End Row -->

    <!-- Testimonials -->
    <div class="overflow-hidden content-space-b-2">
      <div class="position-relative bg-dark rounded-2 mx-3 mx-md-10">
        <div class="container content-space-1 content-space-md-2 content-space-lg-3 position-relative zi-2">
          <!-- Blockquote -->
          <figure class="w-md-75 text-center mx-md-auto">
            <div class="mb-3">
              <span class="text-cap text-white-70 mb-5">Event Testimonials</span>
            </div>
            <!-- Swiper -->
              <div class="js-swiper-single-testimonials swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <blockquote class="blockquote blockquote-light mb-5">"Joining Istanbul Youth Summit allow me to expand my knowledge, widen my connection and that is what I get during IYS."</blockquote>
                    <img class="avatar avatar-circle" src="<?= site_url('assets/img/testimoni/testimoni_4.jpg')?>" alt="">
                    <figcaption class="blockquote-footer blockquote-light">
                      Irfan bin Jasni
                      <span class="blockquote-footer-source">Best presenter Istanbul Youth Summit 2022</span>
                    </figcaption>
                  </div>
                  <div class="swiper-slide">
                    <blockquote class="blockquote blockquote-light mb-5">"I feel honor to be chosen as one of the delegates of Istanbul Youth Summit 2020, because IYS motivates me that as youth, we have an important role in the development of our country.  IYS also provides many new broader networks and suppport the delegates to become positive and active youth."</blockquote>
                    <img class="avatar avatar-circle" src="<?= site_url('assets/img/testimoni/testimoni_1.jpg')?>" alt="">
                    <figcaption class="blockquote-footer blockquote-light">
                      Shinta Widyaningrum
                      <!-- <span class="blockquote-footer-source">Head of IT department</span> -->
                    </figcaption>
                  </div>
                  <div class="swiper-slide">
                    <blockquote class="blockquote blockquote-light mb-5">"For me, Istanbul Youth Summit gave me many new lessons in my life, such as learning to think critically, learning to come up with new ideas, learning to respect other people's opinions, and learning to dare to dream big. So, I want to say thank you very much to IYS for the opportunities, lessons, and experiences that have been given while in Turkey. Wishing the next IYS more success!"</blockquote>
                    <img class="avatar avatar-circle" src="<?= site_url('assets/img/testimoni/testimoni_2.jpg')?>" alt="">
                    <figcaption class="blockquote-footer blockquote-light">
                      Raisya Azzahra
                      <!-- <span class="blockquote-footer-source">Head of IT department</span> -->
                    </figcaption>
                  </div>
                  <div class="swiper-slide">
                    <blockquote class="blockquote blockquote-light mb-5">"Istanbul Youth Summit 2021 is a big leap of experience in my life, i was never able to express my ideas and opinions in front of many great people and audiences, and i am able to discuss that idea with many other great young leaders that follows the event, having to work with strangers from far away to create a solid and fun team, i was also able to expand my networks with the people from around the world that participate in the event. Fear is the only thing keeping me behind, get out of your comfort zone, don't miss your chance and join the event!"</blockquote>
                    <img class="avatar avatar-circle" src="<?= site_url('assets/img/testimoni/testimoni_3.jpeg')?>" alt="">
                    <figcaption class="blockquote-footer blockquote-light">
                      Admiral Arief Prabowo
                      <!-- <span class="blockquote-footer-source">Head of IT department</span> -->
                    </figcaption>
                  </div>
                </div>
                
                <div class="js-swiper-space-between-pagination swiper-pagination"></div>
              </div>
            <!-- End Swiper -->
            <!-- Swiper Pagination -->
          </figure>
          <!-- End Blockquote -->

          <!-- SVG Quote -->
          <figure class="position-absolute top-50 start-50 translate-middle zi-n1 mb-10">
            <svg width="400" height="400" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.5001 5.84998C9.0001 7.64998 5.4001 12.15 5.4001 16.2C5.4001 17.1 5.4001 18 5.8501 18.45C6.7501 17.55 8.1001 17.1 9.9001 17.1C13.5001 17.1 16.6501 19.8 16.6501 23.85C16.6501 27.9 13.5001 30.6 9.9001 30.6C6.3001 31.05 4.5001 29.7 3.1501 27.45C1.8001 25.2 1.3501 22.05 1.3501 20.25C1.3501 13.05 4.9501 7.19998 12.6001 3.59998L13.5001 5.84998ZM31.9501 5.84998C27.4501 7.64998 23.8501 12.15 23.8501 16.2C23.8501 17.1 23.8501 18 24.3001 18.45C25.2001 17.55 26.5501 17.1 28.3501 17.1C31.9501 17.1 35.1001 19.8 35.1001 23.85C35.1001 27.9 31.9501 30.6 28.3501 30.6C25.2001 30.6 23.4001 29.25 22.0501 27C19.8001 25.2 19.8001 22.05 19.8001 20.25C19.8001 13.05 23.4001 7.19998 31.0501 3.59998L31.9501 5.84998Z" fill="white" opacity=".025"/>
            </svg>
          </figure>
          <!-- End SVG Quote -->

          <!-- SVG Shape -->
          <figure class="position-absolute top-0 start-0 mt-10 ms-10">
            <svg width="70" height="70" opacity=".5" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M60.6655 74.9992C80.4557 74.9992 96.4988 58.9561 96.4988 39.1659C96.4988 19.3757 80.4557 3.33252 60.6655 3.33252C40.8753 3.33252 24.8322 19.3757 24.8322 39.1659C24.8322 58.9561 40.8753 74.9992 60.6655 74.9992Z" stroke="white" stroke-width="5" stroke-miterlimit="10"/>
              <path d="M158.5 197.5C168.165 197.5 176 189.665 176 180C176 170.335 168.165 162.5 158.5 162.5C148.835 162.5 141 170.335 141 180C141 189.665 148.835 197.5 158.5 197.5Z" stroke="white" stroke-width="5" stroke-miterlimit="10"/>
            </svg>
          </figure>
          <!-- End SVG Shape -->

          <!-- SVG Shape -->
          <figure class="position-absolute bottom-0 end-0 mb-n7 me-n7" style="width: 10rem;">
            <img class="img-fluid" src="<?= site_url()?>/assets/svg/components/dots.svg" alt="Image Description">
          </figure>
          <!-- End SVG Shape -->
        </div>
      </div>
    </div>
    <!-- End Testimonials -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  

  <!-- ========== END FOOTER ========== -->

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
  <script src="<?= site_url()?>assets/vendor/shufflejs/dist/shuffle.js"></script>
  <script src="<?= site_url()?>assets/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js"></script>
  <script>
  // INITIALIZATION OF NAV SCROLLER
    // =======================================================
    new HsNavScroller('.js-nav-scroller')

    // $(document).ready(function(){
    //     setInterval(function(){
    //       $('#btn-next-banner').click()
    //     }, 3500)

    //     function doSomething() {
    //       $.ajax({
    //       url: '<?= site_url('ajxGetUserSubmit')?>',
    //       method: 'GET',
    //       success: function(res){
    //         res = JSON.parse(res)
    //         $.toast({
    //             heading: 'Information',
    //             text: `${res.name} from ${res.nationality} and others have submitted their registration forms`,
    //             showHideTransition: 'slide',
    //             icon: 'info',
    //             bgColor: '#8247B8'
    //         })
    //       }
    //     })
          
    //     }

    //     (function loop() {
    //         var rand = Math.round(Math.random() * (10000 - 500)) + 500;
    //         setTimeout(function() {
    //                 doSomething();
    //                 loop();
    //         }, rand);
    //     }());

    //     // setInterval(function(){
    //     //   $.toast({
    //     //       heading: 'Information',
    //     //       text: 'Now you can add icons to generate different kinds of toasts',
    //     //       showHideTransition: 'slide',
    //     //       icon: 'info',
    //     //       bgColor: '#8247B8'
    //     //   })
    //     // }, 1000)
    // })


    // INITIALIZATION OF SHUFFLE
    // =======================================================
    class ShufflePorfolio {
      constructor(element) {
        this.element = element;
        this.shuffle = new Shuffle(element, {
          itemSelector: '.js-shuffle-item',
          speed: 500
        })

        this.addFilterButtons()
      }

      addFilterButtons() {
        const options = document.querySelector('.js-filter-options')
        if (!options) {
          return
        }

        const filterButtons = Array.from(options.children)
        const onClick = this._handleFilterClick.bind(this)
        filterButtons.forEach((button) => {
          button.addEventListener('click', onClick, false)
        });
      }

      _handleFilterClick(evt) {
        const btn = evt.currentTarget.firstElementChild
        const isActive = btn.classList.contains('active')
        const btnGroup = btn.getAttribute('data-group')

        this._removeActiveClassFromChildren(btn.parentNode.parentNode)

        let filterGroup
        if (isActive) {
          btn.classList.remove('active')
          filterGroup = Shuffle.ALL_ITEMS
        } else {
          btn.classList.add('active')
          filterGroup = btnGroup
        }

        this.shuffle.filter(filterGroup)
      }

      _removeActiveClassFromChildren(parent) {
        const { children } = parent
        for (let i = children.length - 1; i >= 0; i--) {
          children[i].firstElementChild.classList.remove('active')
        }
      }
    }

    new ShufflePorfolio(document.querySelector('.js-shuffle'))
  </script>
