<!doctype html>
<html lang="en">
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="/Parking_files/bootstrap.min.css">
      <link rel="stylesheet" href="/login/style.css">
      <title>Case study</title>
      <link href="http://parking.sarsetech.com/assets/images/favicon.png" rel="icon">
      <script src="/Parking_files/jquery-3.3.1.min.js.download"></script>
      <script src="/Parking_files/bootstrap.bundle.js.download"></script>
      <script src="/Parking_files/main-js.js.download"></script>
      <script src="/Parking_files/extra.js.download"></script>
      <link rel="stylesheet" href="/Parking_files/free.min.css" media="all">
      <script src="/Parking_files/select2.min.js.download" type="text/javascript"></script>
      <link href="/Parking_files/select2.min.css" rel="stylesheet" type="text/css">
   

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
      <img src="/images/login_icon.png" alt="Login"  /></div>
     
    <div class="card-body">
       <h5>LOGIN</h5>
      <div id="test_reset"><td colspan="2"><center> </center></td></div>
      
          <form method="POST" name="admin_login" id="admin_login">
          
         <div class="form-group">
            <input class="form-control form-control-lg" id="username" type="text" placeholder="Email" name="email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  title="Please enter vaild Email" required="required">
            </div>
        <div class="form-group">
             <input class="form-control form-control-lg" id="password" type="password"  placeholder="Password" name="password" pattern="^[a-zA-Z0-9]{8,}$"  required="required" title="Please enter minimum 8 letters">
            </div>
       
         <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" class="btn btn-dark" value="Sign in" ><br>
          <center><a href="<?php echo base_url();?>Admin/register" style="color:#007bff;">Register?</a></center>
         
      </form>


        </div>
    
  </div>
    </div>





<script >
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
      url: "/Admin/login_form",
      data: frmdata,
      dataType:"JSON", 
      async:false,  
      

      success: function(data) {
        $(".spinner-wrapper-lite").fadeOut(); 
       //console.log(data);
       //console.log(data.message);
       //console.log(data.result);
       //console.log(data.message['terminal_name']);
       
        if(data.status=="success"){
           window.location = "/Admin/dashboard";
        

        } 
        else
        {
           document.getElementById("test_reset").innerHTML = "<center><h3 style='color:red'>Invalid login details</h3></center>";
          
        }
        
      } 
    });
}
  });
  
  });
</script>
</body>
</html>
