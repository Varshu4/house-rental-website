<?php
  require('admin/inc/db_config.php');
  require('admin/inc/essentials.php');
 
  $contact_q="SELECT * FROM `contact_details` WHERE `sr_no`=?";
  $values = [1];
  $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
?>

<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container-fluid">
       <a class="navbar-brand me-5  fw-bold fs-3 h-font" href="index.php">V2 Rentals</a>
       <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item">
                <a class="nav-link  me-2" href="index.php">Home</a>
             </li>
             <li class="nav-item">
                <a class="nav-link me-2" href="house.php">House</a>
             </li>
             <li class="nav-item">
                <a class="nav-link me-2" href="facilities.php">Facilities</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link me-2" href="about.php">About us</a>
             </li>
             <li class="nav-item">
                <a class="nav-link " href="contact.php">Contact us</a>
             </li>
           </ul>
            <div class="d-flex">
            </div>
         </div>
  </div>
</nav>


