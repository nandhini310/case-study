 <div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top"> <h2 ></h2>
      <div class="dd_myprofile">
      <div class="btn-group"> <img src="/Parking_files/icon_myprofile.png" alt="" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"/>
        <div class="dropdown-menu dropdown-menu-right  ">
           
          <h5 class="dropdown_h5">Admin User</h5>
          

           
          <a class="dropdown-item" href="/Admin/logout" type="button">Logout</a>
        </div>
      </div>
      </div>
    </nav>
  </div>

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