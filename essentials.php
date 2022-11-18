<?php   
  //front end
  define('SITE_URL','http://localhost:8080/V2project/');
  define('ABOUT_IMG_PATH',SITE_URL.'images/about/1');


  // backend upload process needs this details 

  define('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/hbwebsite/images/');
  define('ABOUT_FOLDER','about/');

  function adminLogin()
  {
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
      echo"<script>
       window.location.href='index.php';
     </script>";

    }
  }

  function redirect($url){
    echo"<script> 
     window.location.href='$url';
    </script>";

  }


  function alert($type,$msg){
   $bs_class = ($type== "success") ? "alert-success" : "alert-dander";
   echo <<<alert
    <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
        <strong class="me-3">$msg</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
   alert;
  }


  function uploadImage($image,$folder)
  {
    $valid_mime = ['image/jpeg','image/png','image/webg'];
    $img_mime =$image['type'];

    if(!in_array($img_mime,$valid_mime))
    {
      return 'inv_img'; //invalid image or format
    }
    else if(($image['size']/(1024*1024)>2))
    {
      return'inv_size';//invalid size greater than 2MB

    }
    else{
      $ext =pathinfo($image['name'],PATHINFO_EXTENSION);
      $rname ='IMG_'.random_int(11111,99999).".$ext";

      $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
     if( move_uploaded_file($image['tmp_name'],$img_path))
     {
      return $rname;
     }
     else{
      return 'upd_failed';
     }
    }
    

  }


  function deleteImage($image, $folder)
  {
    if(unlink(UPLOAD_IMAGE_PATH.$folder.$image))
    {
      return true;
    }
    else{
      return false;
    }
  }
?>