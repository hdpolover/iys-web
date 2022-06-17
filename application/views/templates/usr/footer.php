  <!-- ========== END SECONDARY CONTENTS ========== -->
  <a href="https://wa.me/6285608004769?text=Halo%20kak.%20Mau%20tanya%20dong." target="_blank" class="float pt-2 ps-0">
    <i style="font-size: 30px;" class="bi-whatsapp my-float"></i>
  </a>
  <!-- JS Global Compulsory  -->
  <script src="<?= site_url()?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="<?= site_url()?>assets/vendor/hs-header/dist/hs-header.min.js"></script>
  <script src="<?= site_url()?>assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
  <script src="<?= site_url()?>assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
  <script src="<?= site_url()?>assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
  <script src="<?= site_url()?>assets/vendor/aos/dist/aos.js"></script>
  <script src="<?= site_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= site_url()?>assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>
  <script src="<?= site_url()?>assets/vendor/hs-step-form/dist/hs-step-form.min.js"></script>
  <script src="<?= site_url()?>assets/vendor/countdown/countdown.js"></script>
  <script src="<?= site_url()?>assets/js/flatpickr.min.js"></script>

  <!-- JS Front -->
  <script src="<?= site_url()?>assets/js/theme.min.js"></script>
  <script src="<?= site_url()?>assets/js/general.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      // new HSHeader('#header').init()


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
          // data.event.preventDefault()
          // alert('Submited')
        }
      })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')


      // INITIALIZATION OF AOS
      // =======================================================
      AOS.init({
        duration: 650,
        once: true
      });


      // INITIALIZATION OF SWIPER
      // =======================================================
      let activeIndex = 0
      var sliderThumbs = new Swiper('.js-swiper-thumbs', {
        slidesPerView: 1,
        autoplay: false,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        followFinger: false,
        loop: true,
        on: {
          'slideChangeTransitionEnd': function (event) {
            if (sliderMain === undefined) return
            sliderMain.slideTo(event.activeIndex)
          }
        }
      });

      var sliderMain = new Swiper('.js-swiper-main', {
        effect: 'fade',
        autoplay: false,
        disableOnInteraction: true,
        loop: true,
        navigation: {
          nextEl: '.js-swiper-main-button-next',
          prevEl: '.js-swiper-main-button-prev',
        },
        thumbs: {
          swiper: sliderThumbs
        },
        on: {
          'slideChangeTransitionEnd': function (event) {
            if (sliderThumbs === undefined) return
            sliderThumbs.slideTo(event.activeIndex)
          }
        }
      })

      // Clients
      var swiper = new Swiper('.js-swiper-clients',{
        slidesPerView: 2,
        breakpoints: {
          380: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 15,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 15,
          },
        },
      });

      // Card Grid
      var swiper = new Swiper('.js-swiper-card-blocks',{
        slidesPerView: 1,
        pagination: {
          el: '.js-swiper-card-blocks-pagination',
          dynamicBullets: true,
          clickable: true,
        },
        breakpoints: {
          620: {
            slidesPerView: 2,
            spaceBetween: 15,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
        },
      });
      new HSStepForm('.js-step-form-validate', {
       validator: HSBsValidation.init('.js-validate'),
       finish ($el) {
         const $successMessageTempalte = $el.querySelector('.js-success-message').cloneNode(true)

         $successMessageTempalte.style.display = 'block'

         $el.style.display = 'none'
         $el.parentElement.appendChild($successMessageTempalte)
       }
    })
    })()
    var swiper = new Swiper('.js-swiper-single-testimonials', {
      pagination: {
        el: '.js-swiper-single-testimonials-pagination',
        clickable: true,
      },
    });
      // INITIALIZATION OF TOGGLE PASSWORD
      // =======================================================
      new HSTogglePassword('.js-toggle-password')
  </script>
</body>
</html>