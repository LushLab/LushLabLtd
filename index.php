<?php
$page_title = 'Lush Lab Home';
include 'header.php';
?>

    <!-- Hero -->
    <section class="hero">
        <div class="video-container">
            <video autoplay loop muted playsinline>
                <source src="./img/laser-skin-specialist-south-east-london.mp4" type="video/mp4">
            </video>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-lg-8">
                    <div class="hero-content">
                        <h1 class="bold">Laser skin & Semi-Permanent eyebrow specialists</h1>
                        <div class="spacer-xs"></div>
                        <p>Specializing in advanced laser procedures offer a range of services including laser hair removal, skin rejuvenation, semi-permanent eyebrows and more at Lush Lab. We are committed to delivering exceptional care in a comfortable and relaxing atmosphere, empowering you to embrace your beauty with confidence.</p>
                        <div class="spacer-xl"></div>
                        <a href="#laser-hair-removal" class="button-primary">View our services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about -->
    <!--<section class="container" id="about">
     <div class="row">
        <div class="col-md-6" id="about-image" style="background-image: url('./img/Hero/laser-hair-removal-skin-rejuvination-services-1.jpg');"></div>
        <div class="col-md-6">
           <div class="row">
              <div class="col-lg-2 col-md-1"></div>
              <div class="col-lg-8 col-md-10 col-sm-12">
                 <h2>About Us</h2>
                 <p>Specializing in advanced laser procedures offer a range of services including laser hair removal, skin rejuvenation, semi-permanent eyebrows and more at LushLab. We are committed to delivering exceptional care in a comfortable and relaxing atmosphere, empowering you to embrace your beauty with confidence.</p>
                 <div class="spacer-md"></div>
              </div>
              <div class="col-lg-2 col-md-1"></div>
           </div>
        </div>
     </div>
    </section>-->
    <!-- services intro-->
    <section id="services">
     <div class="container">
        <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
              <div class="spacer-xxl"></div>
              <h2 class="text-center">Our treatments</h2>
              <div class="spacer-sm"></div>
              <p class="text-center">Our services include a wide range of treatments for a variety of skin types, however a patch test and a consultation is required to ensure desired results are delivered.</p>
           </div>
           <div class="col-md-2"></div>
        </div>
        <div class="spacer-xl"></div>
        <!-- service 1 -->
        <div id="laser-hair-removal" class="row service-row reverse-order">
           <div class="col-md-6">
              <div class="row">
                 <div class="col-md-1"></div>
                 <div class="contents col-md-10">
                    <h3>Laser Hair Removal</h3>
                    <div class="spacer-default"></div>
                    <p>Laser hair removal is a cosmetic procedure that uses a powerful laser or intense pulsed light (IPL) to remove unwanted hair. This light source heats and destroys hair follicles in the skin, which suppresses hair growth. Using the latest machine and top specifications, this technology banishes all of your unwanted hair forever.</p>
                    <div class="spacer-lg"></div>
                    <!-- Button to trigger the modal -->
                    <a class="button-primary" href="laser-hair-removal.php">Find out more</a>
                 </div>
                 <div class="col-md-1"></div>
              </div>
           </div>
           <div class="col-md-6">
              <div id="service-image" style="background-image: url('./img/home/lase-hair-removal-service.png');"></div>
           </div>
        </div>
        <div class="spacer-xxl"></div>
        <!--- end of service --->
        <!-- service 2 -->
        <div class="row service-row">
           <div class="col-md-6">
              <div id="service-image" style="background-image: url('./img/home/skin-rejuvenation-service.png');"></div>
           </div>
           <div class="col-md-6">
              <div class="row">
                 <div class="col-md-1"></div>
                 <div class="contents col-md-10">
                    <h3>Skin Rejuvenation</h3>
                    <div class="spacer-default"></div>
                    <p>With Laser & IPL Skin Rejuvenation you will enhance your skins radiance & promote smooth, youthful and a glowing complexion, helping slow down the natural ageing process, tighten the skin and reducing wrinkles as well as reduces blemishes such as unwanted pigmentation and thread veins.</p>
                    <div class="spacer-lg"></div>
                    <!-- Button to trigger the modal -->
                    <a class="button-primary" href="skin-rejuvenation.php">Find out more</a>
                    <!--<button type="button" class="button-primary" data-bs-toggle="modal" data-bs-target="#myModal" id="modal-button-2">Find out more</button>-->
                 </div>
                 <div class="col-md-1"></div>
              </div>
           </div>
        </div>
        <div class="spacer-xxl"></div>
        <!--- end of service --->
        <!-- service 3 -->
        <div class="row service-row reverse-order">
           <div class="col-md-6">
              <div class="row">
                 <div class="col-md-1"></div>
                 <div class="contents col-md-10">
                    <h3>Semi-Permenant Eyebrows</h3>
                    <div class="spacer-default"></div>
                    <p>Semi Permanent makeup is a micro pigmentation technique which redefines your eyebrows. It revitalises your natural shape using a handheld tool as well as machine method to deposit pigment into the skin. We offer Microblading, Ombre shading, Combination and Powder brows.</p>
                    <div class="spacer-lg"></div>
                    <!-- Button to trigger the modal -->
                    <a class="button-primary" href="semi-permanent-eyebrows.php">Find out more</a>
                 </div>
                 <div class="col-md-1"></div>
              </div>
           </div>
           <div class="col-md-6">
              <div id="service-image" style="background-image: url('./img/home/semi-permenant-eyebrow-service.png');"></div>
           </div>
        </div>
        <div class="spacer-xxl"></div>
        <!--- end of service --->
        <!-- service 4 -->
        <div class="row service-row">
           <div class="col-md-6">
              <div id="service-image" style="background-image: url('./img/home/lash-brow-service.png');"></div>
           </div>
           <div class="col-md-6">
              <div class="row">
                 <div class="col-md-1"></div>
                 <div class="contents col-md-10">
                    <h3>Lash and Brows</h3>
                    <div class="spacer-default"></div>
                    <p>A non-invasive treatment designed to elevate and frame the face, creating a more expressive and youthful look without the need for makeup or extensive maintenance.</p>
                    <div class="spacer-lg"></div>
                    <!-- Button to trigger the modal -->
                    <a class="button-primary" href="lash-and-brows.php">Find out more</a>
                 </div>
                 <div class="col-md-1"></div>
              </div>
           </div>
        </div>
        <div class="spacer-xxl"></div>
        <!--- end of service --->
        <!-- service 5 -->
        <div class="row service-row reverse-order">
           <div class="col-md-6">
              <div class="row">
                 <div class="col-md-1"></div>
                 <div class="contents col-md-10">
                    <h3>Laser Tattoo Removal</h3>
                    <div class="spacer-default"></div>
                    <p>Laser tattoo removal using the latest technology the "perfect" laser machine involves a process where specific types of lasers are used to break down the ink particles in the tattoo into smaller fragments. These fragments are then naturally eliminated by lymphatic system, where we leave it to do its job in removal it, gradually fading the tattoo over multiple treatment sessions. The ideal or "perfect" laser machine for this process typically has several key characteristics.</p>
                    <div class="spacer-lg"></div>
                    <!-- Button to trigger the modal -->
                    <a class="button-primary" href="laser-tattoo-removal.php">Find out more</a>
                 </div>
                 <div class="col-md-1"></div>
              </div>
           </div>
           <div class="col-md-6">
              <div id="service-image" style="background-image: url('./img/laser-tattoo-removal-procedure-thumb.png');"></div>
           </div>
        </div>
        <div class="spacer-xxl"></div>
        <!--- end of service --->
     </div>
    </section>
    <section class="testimonials">
     <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-sm-12 col-md-12 col-lg-10">
                <h2 class="text-center">Our Reviews</h2>
                <div class="spacer-md"></div>
                <p class="text-center">Where our clients can share their personal experiences and feedback about our beauty treatments. We believe that hearing from our customers is crucial to constantly improving our services and ensuring that each individual's unique needs are met.</p>
            </div>
            <div class="col-lg-1"></div>
        </div>
        <div class="spacer-xl"></div>
        <div class="row">
        <div class="swiper-container">
           <div class="swiper-wrapper">
           <!-- Add each card item as a swiper-slide -->
           <div class="swiper-slide card">
              <div class="card-content">
                 <p class="review-description">“Seeing results already after my first treatment”</p>
                 <span>
                    <p class="review-name">Parveen H</p>
                    <p class="review-treatment">Laser Hair Removal</p>
                 </span>
              </div>
           </div>
           <div class="swiper-slide card">
              <div class="card-content">
                 <p class="review-description">“Thank you, My Skin feels so soft! The facials are a new part of my life couldn’t be without them”</p>
                 <span>
                 <p class="review-name">Stephanie B</p>
                 <p class="review-treatment">Skin Rejuvenation</p>
                 </span>
              </div>
           </div>
           <div class="swiper-slide card">
              <div class="card-content">
                 <p class="review-description">“Thank you so much! I love my new brows.”</p>
                 <span>
                 <p class="review-name">Susan G</p>
                 <p class="review-treatment">Microblading</p>
                 </span>
              </div>
           </div>
           <div class="swiper-slide card">
              <div class="card-content">
                 <p class="review-description">“Thank you so much for my lashes. I love them”</p>
                 <span>
                 <p class="review-name">Malika</p>
                 <p class="review-treatment">Nouveau LVL</p>
                 </span>
              </div>
           </div>
           <div class="swiper-slide card">
              <div class="card-content">
                 <p class="review-description">My husband noticed something different about me- he said I looked radiant with a youthful look even though he didn’t know”</p>
                 <span>
                 <p class="review-name">Lisa K</p>
                 <p class="review-treatment">Skin Rejuvenation</p>
                 </span>
              </div>
           </div>
           </div>
           <div class="spacer-lg"></div>
           <!-- Add the navigation controls -->
           <div class="swiper-controls">
              <div class="swiper-button-prev">
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-next">
              </div>
            </div>
    
           </div>
        </div>
     </div>
    </section>
    <div class="spacer-xxl"></div>
    <?php include 'latest-articles.php'; ?>
    <!-- footer -->
    <?php include 'footer.php'; ?>