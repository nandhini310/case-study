
<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="<?php echo base_url()."/assets/images/favicon.png"?>" type="image/png">
<link rel="stylesheet" href="<?php echo base_url()."/assets_admin/Parking_files/bootstrap.min.css?v3"?>">
<link rel="stylesheet" href="<?php echo base_url()."/assets_admin/Parking_files/style.css?v27"?>">
<link rel="stylesheet" href="<?php echo base_url()."/assets_admin/Parking_files/swiper-bundle.min.css"?>">
<title>Case Study</title>
<script src="<?php echo base_url()."/assets_admin/Parking_files/jquery-3.3.1.min.js.download"?>"></script>
<script src="<?php echo base_url()."/assets_admin/Parking_files/bootstrap.bundle.js.download"?>"></script>
<script src="<?php echo base_url()."/assets_admin/Parking_files/main-js.js.download"?>"></script>
<script src="<?php echo base_url()."/assets_admin/Parking_files/extra.js.download"?>"></script>
<link rel="stylesheet" href="<?php echo base_url()."/assets_admin/Parking_files/free.min.css"?>" media="all">
<script src="<?php echo base_url()."/assets_admin/Parking_files/tinymce.min.js"?>"></script>
<script src="<?php echo base_url()."/assets_admin/Parking_files/swiper-bundle.min.js"?>"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    </head>
<body>
<!-- main wrapper -->
<div class="dashboard-main-wrapper"> 
  <!-- navbar -->
  
   <?php $this->load->view('include/navbar');?>
  <!-- end navbar --> 
  
  <!-- left sidebar -->
  
  <?php $this->load->view('include/sidebar');?>

  
  <!-- end left sidebar --> 

  <!-- wrapper  -->
  <div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
      <div class="container-fluid dashboard-content "> 
        <!-- pageheader  -->
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              <center> 
              
          <h2 class="pageheader-title">Welcome Admin User</h5>
          </center>
            </div>
          </div>
        </div>
        
       </div>     
 
      </div>
      
    </div><?php $this->load->view('include/footer');?>
    <!--TABLE--> 
    
  </div>
  <!-- end wrapper  --> 
  
  <!-- footer -->
  
  <!-- end footer --> 
</div>
<!-- end wrapper  --> 



</body>
</html>