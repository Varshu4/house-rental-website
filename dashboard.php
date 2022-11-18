<?php 
 require('inc/essentials.php');
 adminLogin();
 session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel - Dashboard</title>
  <?php require('inc/links.php');  ?>
</head>
<body class="bg-light">

 <?php require('inc/header.php'); ?>

  <div class="container-fluid " id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">
         <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">
              We provide facilities that users wish to have
            </p>
         </div> 
          <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
              <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                  <img src="..images/features/cctv.svg" width="40px">
                  <h5 class="m=0 ms-3">CCTV</h5>
                </div>
                <p>
                Your security is our top most concern. We offer your house safety with well installed cctv
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
              <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                  <img src="..images/features/garden.svg" width="40px">
                  <h5 class="m=0 ms-3">GARDEN</h5>
                </div>
                <p>
                Want to take a walk around the garden. we offer house with well established garden with topnatch maintanence.
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
              <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                  <img src="..images/features/gym.svg" width="40px">
                  <h5 class="m=0 ms-3">GYM</h5>
                </div>
                <p>
                Being healthy is a main concern then this is the perfect spot for you. We offer houses with well maintained built in gym set up.
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
              <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                  <img src="..images/features/parking.svg" width="40px">
                  <h5 class="m=0 ms-3">PARKING</h5>
                    </div>
                       <p>
                       Worrying about your vehicals!. Then we have houses with well spaced parking lot.
                      </p>
                   </div>
                </div>
              </div>
           </div>

   <?php require('../inc/footer.php'); ?>

      </div>
    </div>
  </div>

 <?php require('inc/scripts.php'); ?>

 
</body>
</html>