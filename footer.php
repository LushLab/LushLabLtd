    <!-- footer -->
    <div class="spacer-xxl"></div>
    <footer>
 <span class="footer-wrapper">
    <div class="container">
       <div class="row">
          <div class="col-md-1 col-lg-2"></div>
          <div class="col-sm-12 col-md-10 col-lg-8 signpost-contents">
             <div class="spacer-xxl"></div>
             <h2 class="text-center">Want to have a chat?</h2>
             <div class="spacer-md"></div>
             <p class="text-center">We are happy to have a chat to ensure that any of our advice is based on your personal goals and body needs. Simply fill out a consultation form and we will get in touch to book a time for your free consultation.</p>
             <div class="spacer-md"></div>
             <a href="contact.php" class="button-primary" alt="contact us">Get in touch</a>
          </div>
          <div class="col-md-1 col-lg-2"></div>
       </div>
       
    </div>
    <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 signpost-footer">
             <div class="spacer-xxl"></div>
             <div class="divider"></div>
             <div class="bottom-contents">
                <div class="social-items">
                   <span class="social-profile">
                       <a href="https://www.instagram.com/_lushlab_/?hl=en">
                      <span class="social-icon">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                      </span>
                      <label style="padding:2px 0;">Instagram</label>
                      </a>
                   </span>
                   <div class="spacer-md"></div>
                   <span class="social-profile">
                       <a href="https://www.facebook.com/p/Lush-Lab-100063562749557/">
                      <span class="social-icon">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                      </span>
                      <label style="padding:2px 0;">Facebook</label>
                      </a>
                   </span>
                </div>
                <span class="opening-times">
                   <p><a href="privacy-policy.php">Privacy Policy</a></p>
                   <p>Mon to Sat: 9:30 - 6:30</p>
                </span>
          </div>
          </div>
       </div>
 </span>
</footer>

    
    <!-- nav change button on click -->
    <script>
        $(document).ready(function() {
            const $navbarTogglerBtn = $('#navbar-toggler-btn');
            const $openIcon = $('#open-icon');
            const $closeIcon = $('#close-icon');
            const $navbarNav = $('#navbarNav');
    
            $navbarTogglerBtn.on('click', function() {
                if ($navbarNav.hasClass('show')) {
                    $navbarNav.removeClass('show');
                    $openIcon.show();
                    $closeIcon.hide();
                } else {
                    $navbarNav.addClass('show');
                    $openIcon.hide();
                    $closeIcon.show();
                }
            });
        });
        </script>
        <!-- nav add class on click -->
    <script>
    // Select the button element
    const navbarTogglerBtn = document.getElementById('navbar-toggler-btn');
    // Select the target div
    const targetDiv = document.getElementById('nav-bg');
    // Define the event listener function
    const handleClick = () => {
    // Add a class to the target div
    targetDiv.classList.add('white-bg');
    };
    // Add the click event listener to the button
    navbarTogglerBtn.addEventListener('click', handleClick);
    </script>
    <!-- nav shrink on scroll -->
    <script>
        /* nav shrink */
        $(window).scroll(function() {
          if ($(document).scrollTop() > 60) {
                $('.navbar-custom').addClass('shrink');
          } else {
                $('.navbar-custom').removeClass('shrink');
          }
        });</script>
    <!-- testimonial carousel -->
    <script>
      const swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 16,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          768: {
            slidesPerView: 2,
            spaceBetween: 24,
          },
          1200: {
            slidesPerView: 3,
            spaceBetween: 32,
          },
          1600: {
            slidesPerView: 4,
            spaceBetween: 32,
          },
        },
      });</script>    
    <!-- present relevant select options -->
    <script>
      // Get procedure, treatment, and sessions select elements
    var procedureSelect = document.getElementById("procedureSelect");
    var treatmentSelect = document.getElementById("treatmentSelect");
    var sessionsSelect = document.getElementById("sessionsSelect");
    
    // Define treatment options for each procedure
    var treatments = {
      "option1": ["Full Body", "Half Body", "Full Face", "Upper Lip and Chin", "Full Arm", "Half Arm", "Under Arms", "Shoulders", "Chest", "Abdomen", "Upper Back", "Lower Back", "Full Leg", "Half Leg", "Neck", "Hollywood", "Bikini Line"],
      "option2": ["Face Skin Rejuvenation", "Face, Neck and Chest Skin Rejuvenation", "Face Skin Tightening", "Body Skin Tightening", "Hands Skin Resurfacing/Tightening", "Acne", "Hyper Pigmentation", "Black Baby Facial", "Rosecea IPL", "Thread Veins/Vascular Veins", "Scarring"],
      "option3": ["Microblading", "Combination Brows", "Ombre Brows", "Powder Brows", "Top up"],
      "option4": ["Nouveau LVL with Brow Lamination", "Nouveau LVL with Lash Botox", "Nouveau LVL", "Nouveau LVL Infill", "Brow Lamination", "Brow Tint", "Last Tint", "Last Removal"],
    }
    
    // Define sessions options for each procedure
    var sessions = {
      "option1": ["1 Session", "3 Sessions", "5 Sessions"],
      "option2": ["1 Session", "3 Sessions", "5 Sessions"],
      "option3": ["1 Session"],
      "option4": ["1 Session"],
    }
    
    // Populate treatment options based on selected procedure
    procedureSelect.addEventListener("change", function() {
      var selectedProcedure = procedureSelect.value;
      var procedureTreatments = treatments[selectedProcedure];
      var procedureSessions = sessions[selectedProcedure];
      while (treatmentSelect.options.length > 0) {
        treatmentSelect.remove(0);
      }
      for (var i = 0; i < procedureTreatments.length; i++) {
        var option = new Option(procedureTreatments[i], procedureTreatments[i]);
        treatmentSelect.add(option);
      }
      while (sessionsSelect.options.length > 0) {
        sessionsSelect.remove(0);
      }
      for (var i = 0; i < procedureSessions.length; i++) {
        var option = new Option(procedureSessions[i], procedureSessions[i]);
        sessionsSelect.add(option);
      }
    });</script>
    <!-- form submission message display -->
    <script>
    // Read status parameter from URL
    var urlParams = new URLSearchParams(window.location.search);
    var status = urlParams.get('status');
    
    // Show/hide form and messages based on status
    if (status === 'success') {
      document.getElementById('contact-form').style.display = 'none';
      document.getElementById('hide-on-success-1').style.display = 'none';
      document.getElementById('hide-on-success-2').style.display = 'none';
      document.getElementById('hide-on-success-3').style.display = 'none';
      document.getElementById('success-message').style.display = 'block';
    } else if (status === 'failure') {
      document.getElementById('failure-message').style.display = 'block';
    }</script>
    
    <!-- JavaScript links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="./js/scripts.js"></script>
   </body>
</html>