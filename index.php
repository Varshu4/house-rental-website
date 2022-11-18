<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>V2 Rentals</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
   <?php require('inc/links.php'); ?>
   
    <style>
      .availability-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }
      @media screen and (max-width: 575px){
         .availability-form{
         margin-top: 25px;
         padding: 0 35px
      }
      }
   </style>
</head>
<body class="bg-light">


<?php require('inc/header.php'); ?>

  <!-- Carousal -->

  <div class="container-fluid px-lg-4 mt-4">
   <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/1.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/2.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/3.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/4.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/5.png" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/6.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/7.png" class="w-100 d-block" />
        </div>
      </div>
    </div>
  </div>

  <!-- our rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR HOUSES</h2>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0" style="max-width: 350px; margin:auto;">
           <img src="images/rbhouse/1.jpg" class="card-img-top">
            <div class="card-body">
             <h5>House name</h5>
             <h6 class="mb-4">₹35000 per month</h6>
             <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
              4 bedrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
              3 bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
              2 balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
               Semifurnished
              </span>
             </div>
             <div class="facilities mb-4">
               <h6 class="mb-1">Facilities</h6>
               <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
               24×7 water and current supply
               </span>
               <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
               Gym
               </span>
               <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
               Swimming pool
               </span>
               </span>
               <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                Large Parking Area
               </span>
               <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                Kids Area
               </span>
             </div>
             <div class="rating mb-4">
               <h6 class="mb-1">Rating</h6>
               <span class="badge rounded-pill bg-light">
               <i class="bi bi-star-fill text-warning"></i>
               <i class="bi bi-star-fill text-warning"></i>
               <i class="bi bi-star-fill text-warning"></i>
               <i class="bi bi-star-fill text-warning"></i>  
               </span>
             </div>
             <div class="d-flex justify-content-evenly mb-2">
              <a href="popmessage.php" class="btn btn-sm text-white custom-bg shadow-none">More details</a>
            </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0" style="max-width: 350px; margin:auto;">
           <img src="images/rbhouse/2.jpg" class="card-img-top">
            <div class="card-body">
             <h5>House name</h5>
             <h6 class="mb-4">₹25000 per month</h6>
             <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
              3 bedrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
              2 bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
              1 balcony
              </span>
             </div>
             <div class="facilities mb-4">
               <h6 class="mb-1">Facilities</h6>
               <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
               24×7 water and current supply
               </span>
               <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
               Swimming pool
               </span>
               </span>
               <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                 Large Parking Area
               </span>
             </div>
             <div class="rating mb-4">
               <h6 class="mb-1">Rating</h6>
               <span class="badge rounded-pill bg-light">
               <i class="bi bi-star-fill text-warning"></i>
               <i class="bi bi-star-fill text-warning"></i>
               <i class="bi bi-star-fill text-warning"></i>
               <i class="bi bi-star-fill text-warning"></i>  
               </span>
             </div>
             <div class="d-flex justify-content-evenly mb-2">
              <a href="popmessage.php" class="btn btn-sm text-white custom-bg shadow-none">More details</a>
            </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0" style="max-width: 350px; margin:auto;">
           <img src="images/rbhouse/3.jpg" class="card-img-top">
            <div class="card-body">
             <h5>House name</h5>
             <h6 class="mb-4">₹15000 per month</h6>
             <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
              2 bedrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
              2 bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
              1 balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
               Semifurnished
              </span>
             </div>
             <div class="facilities mb-4">
               <h6 class="mb-1">Facilities</h6>
               <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
               24×7 water and current supply
               </span>
               <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                Gym
               </span>
               </span>
               <span class="badge rounded-pill bg-light text-dark  text-wrap lh-base">
                 Large Parking Area
               </span>
             </div>
             <div class="rating mb-4">
               <h6 class="mb-1">Rating</h6>
               <span class="badge rounded-pill bg-light">
               <i class="bi bi-star-fill text-warning"></i>
               <i class="bi bi-star-fill text-warning"></i>
               <i class="bi bi-star-fill text-warning"></i> 
               </span>
             </div>
             <div class="d-flex justify-content-evenly mb-2">
              <a href="popmessage.php" class="btn btn-sm text-white custom-bg shadow-none">More details</a>
            </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 text-center mt-5">
          <a href="house.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Houses>>></a>
        </div>
      </div>
    </div>
<!-- our facilities -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/features/gym.svg" width="80px">
          <h5 class="mt-3">Gym</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/features/parking.svg" width="80px">
          <h5 class="mt-3">parking availability</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/features/swim.svg" width="80px">
          <h5 class="mt-3">Swimming area</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/features/cctv.svg" width="80px">
          <h5 class="mt-3">24/7 Survalliance</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/features/garden.svg" width="80px">
          <h5 class="mt-3">Garden area</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
         <a href="facilities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Facilities>>></a>
        </div>
      </div>
    </div>
<!-- Testimonials -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
     
  <div class="container mt-5">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3 ">
            <img src=" images/features/star.svg" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
          We've been with V2 rentals for 11 years. We can always count on receiving strong leads from them and appreciate their top-notch customer service.
          </p>
          <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>    
          </div>
        </div>
        
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3 ">
            <img src=" images/features/star.svg" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
           Such an amazing website.I am very much satisfied with the service provided by them.
          </p>
          <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>    
          </div>
        </div>
        
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3 ">
            <img src=" images/features/star.svg" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
          We've been with V2 rentals for 11 years. We can always count on receiving strong leads from them. 
          </p>
          <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>    
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

 <!-- Reach us -->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

  <div class="container">
   <div class="row">
     <div class="col-lg-8 col-md-8p-4 mb-lg-0 mb-3 bg-white rounded">
       <iframe class="w-100 rounded" height="320px" src="//www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d995399.3982503342!2d77.63094!3d12.953997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1668316270134!5m2!1sen!2sin" loading="lazy" ></iframe>
     </div>
     <div class="col-lg-4 col-md-4">
       <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="tel: +<?php echo $contact_r['pn1']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
         <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1']?>
        </a>
        <br>
        <?php 
           if($contact_r['pn2']!=''){
              echo<<<data
              <a href="tel: +$contact_r[pn2]" class="d-inline-block text-decoration-none text-dark">
                 <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]
              </a>
              data;
           }
        ?>
       </div>
       <div class="bg-white p-4 rounded mb-4">
        <h5>Follow us</h5>
        <a href="<?php echo $contact_r['tw']?>"class="d-inline-block mb-3">
         <span class="badge bg-light text-dark fs-6 p-2">
         <i class="bi bi-twitter me-1"></i> Twitter
          </span>
        </a>
        <br>
        <a href="<?php echo $contact_r['fb']?>" class="d-inline-block mb-3">
         <span class="badge bg-light text-dark fs-6 p-2">
         <i class="bi bi-facebook me-1"></i> Facebook
          </span>
        </a>
        <br>
        <a href="<?php echo $contact_r['insta']?>" class="d-inline-block ">
         <span class="badge bg-light text-dark fs-6 p-2">
         <i class="bi bi-instagram me-1"></i> Instagram
          </span>
        </a>
        
       </div>
     </div>
   </div>
 </div>

 <?php require('inc/footer.php'); ?>


  
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay:{
        delay:3500,
        disableOnInteraction: false,
      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints:{
          320:{
            slidesPerView: 1,
          },
          640:{
            slidesPerView: 1,
          },
          768:{
            slidesPerView: 2,
          },
          1024:{
            slidesPerView: 3,
          },
        }
      });
    </script>



</body>
</html>
