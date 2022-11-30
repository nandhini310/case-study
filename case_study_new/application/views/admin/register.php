<!doctype html>
<html lang="en">
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="<?php echo base_url()."/Parking_files/bootstrap.min.css";?>">
      <link rel="stylesheet" href="<?php echo base_url()."/login/style.css"?>">
      <title>Case study</title>
      <script src="<?php echo base_url()."/Parking_files/jquery-3.3.1.min.js.download"?>"></script>
      <script src="<?php echo base_url()."/Parking_files/bootstrap.bundle.js.download"?>"></script>
      <script src="<?php echo base_url()."/Parking_files/main-js.js.download"?>"></script>
      <script src="<?php echo base_url()."/Parking_files/extra.js.download"?>"></script>
      <link rel="stylesheet" href="<?php echo base_url()."/Parking_files/free.min.css"?>" media="all">
      </head>


<style>
html,  body {
  height: 100%;
}
body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
}
</style>
    </head>

    <body>
        <style type="text/css">
  /*************************/
/*     02. Preloader     */
/*************************/
.spinner-wrapper {
  position: fixed;
  z-index: 999999;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: #2f2c3d;
}

.spinner-wrapper-lite {
  position: fixed;
  z-index: 999999;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: #2f2c3d8c;
}

.spinner {
  position: absolute;
  top: 50%; /* centers the loading animation vertically one the screen */
  left: 50%; /* centers the loading animation horizontally one the screen */
  width: 3.75rem;
  height: 1.25rem;
  margin: -0.625rem 0 0 -1.875rem; /* is width and height divided by two */ 
  text-align: center;
}

.spinner > div {
  display: inline-block;
  width: 1rem;
  height: 1rem;
  border-radius: 100%;
  background-color: #fff;
  -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
  animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}

.spinner .bounce1 {
  /* -webkit-animation-delay: -0.32s; */
  animation-delay: -0.32s;
}

.spinner .bounce2 {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}

@-webkit-keyframes sk-bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0); }
  40% { -webkit-transform: scale(1.0); }
}

@keyframes sk-bouncedelay {
  0%, 80%, 100% { 
    -webkit-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0);
  } 40% { 
    -webkit-transform: scale(1.0);
    -ms-transform: scale(1.0);
    transform: scale(1.0);
  }
}


</style>



  <div id="spinner" class="spinner-wrapper-lite" style="display: none;">
  <div class="spinner">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
</div>
<!-- ============================================================== --> 
<!-- login page  --> 
<!-- ============================================================== -->
<div class="splash-container">
      <div class="card ">
    <div class="card-header text-center" >
      <img src="<?php echo base_url()."/images/login_icon.png"?>" alt="Login"  /></div>
     
    <div class="card-body">
       <h5>Register</h5>
      <div id="test_reset"><td colspan="2"><center> </center></td></div>
      
          <form method="POST" name="admin_login" id="admin_login">
          
         <div class="form-group">
             <input type="text" placeholder="Name" name="user_name" id="user_name" title="please enter valid Name" class="form-control form-control-lg" required="required" />
            </div>
        <div class="form-group">
             <input type="text" placeholder="Email ID" name="user_email" id="user_email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  title="Please enter vaild Email" class="form-control form-control-lg"  required="required" />
            </div>
        <div class="form-group">
             <input type="text" placeholder="Mobile Number" name="user_contact" id="user_contact"class="form-control form-control-lg"  title="please enter valid phone number" maxlength="10" pattern="\d{10}" required="required" />
            </div>
        <div class="form-group">
             <input type="Password" placeholder="Password" name="user_pass" id="user_pass"class="form-control form-control-lg" pattern="^[a-zA-Z0-9]{8,}$"  required="required" title="Please enter minimum 8 letters" />
            </div>
          <div class="form-group">
            <input type="Password" placeholder="Re-Type Password" name="re_pass" id="re_pass"class="form-control form-control-lg" title="please enter valid phone number"  required="required" />
            </div>
            
       
         <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" class="btn btn-dark" value="Register" ><br>
          <center><a href="<?php echo base_url();?>Admin" style="color:#007bff;">Login?</a></center>
         
      </form>


        </div>
    
  </div>
    </div>





<script >
  var password = document.getElementById("user_pass")
  , confirm_password = document.getElementById("re_pass");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Please enter same Password");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
  function setPlainText() {
        var ed = tinyMCE.get('elm1');

        ed.pasteAsPlainText = true;  

        //adding handlers crossbrowser
        if (tinymce.isOpera || /Firefox\/2/.test(navigator.userAgent)) {
            ed.onKeyDown.add(function (ed, e) {
                if (((tinymce.isMac ? e.metaKey : e.ctrlKey) && e.keyCode == 86) || (e.shiftKey && e.keyCode == 45))
                    ed.pasteAsPlainText = true;
            });
        } else {            
            ed.onPaste.addToTop(function (ed, e) {
                ed.pasteAsPlainText = true;
            });
        }
    }
</script>
<script >

  $(document).ready(function(){ 
    $("#admin_login").on('submit', function(e){  
    e.preventDefault();
   var frmdata = $("#admin_login").serialize();
  
   if(frmdata !="" || frmdata !=NULL){
 $(".spinner-wrapper-lite").fadeIn(); 
    $.ajax({ 
      type: "POST",
      url: "<?php echo base_url()."/Admin/register_form"?>",
      data: frmdata,
      dataType:"JSON", 
      async:false,  
      

      success: function(data) {
        $(".spinner-wrapper-lite").fadeOut(); 
      // console.log(data);
       //console.log(data.message);
       //console.log(data.result);
       //console.log(data.message['terminal_name']);
      
        if(data.status=="success"){
           document.getElementById("test_reset").innerHTML = "<center><h3 style='color:green'>"+data.message+"</h3></center>";
        $("#admin_login")[0].reset();

        } 
        else
        {
           document.getElementById("test_reset").innerHTML = "<center><h3 style='color:red'>"+data.message+"</h3></center>";
          
        }
        
      } 
    });
}
  });
  
  });
</script>
</body>
</html>
