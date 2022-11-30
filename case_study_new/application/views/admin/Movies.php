<!doctype html>
<html lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="/assets/images/favicon.png" type="image/png">
<link rel="stylesheet" href="/assets_admin/Parking_files/bootstrap.min.css?v3">
<link rel="stylesheet" href="/assets_admin/Parking_files/style.css?v27">
<link rel="stylesheet" href="/assets_admin/Parking_files/swiper-bundle.min.css">
<title>Case Study</title>
<script src="/assets_admin/Parking_files/jquery-3.3.1.min.js.download"></script>
<script src="/assets_admin/Parking_files/bootstrap.bundle.js.download"></script>
<script src="/assets_admin/Parking_files/main-js.js.download"></script>
<script src="/assets_admin/Parking_files/extra.js.download"></script>
<link rel="stylesheet" href="/assets_admin/Parking_files/free.min.css" media="all">
<script src="/assets_admin/Parking_files/tinymce.min.js"></script>
<script src="/assets_admin/Parking_files/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    </head>

<body>
    <div> 
<div class="d-none" id="success">Success</div>
<div class="d-none" id="error">Error</div>
<div class="d-none" id="warning">Warning</div>
<div class="d-none" id="info">Info</div>
<div class="d-none" id="question">Question</div>
</div>
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
        
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              <h2 class="pageheader-title">View Movies details </h2>
               
            </div>
          </div>
        </div>
        <div class="row mb-3">
        <div class="col-md-12">
        <button data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#add_category_popup" class="btn btn-success btn-sm msl_inp align_rt_bt" onclick="resetForm();">Add new movie</button>
        </div>
        </div>


        <!-- -->
      <div class="modal fade" id="add_category_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content modal_bg">
                            <div class="modal-header modal_header_new">
                              <h5 class="modal-title pageheader-title modal_white_text">Add New Movie</h5>
                              <button type="button" id="add_close" class="close modal_white_text" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body modal_body_white">
                              <form  method="post" enctype="multipart/form-data" id="add_category" name="add_category">
          

                              <center><h3 id="test"></h3></center>
                            <div class="row mb-2">
                              <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                                <label class="lbl_job">Movie Name:</label>
                                
                                <input type="text" required="required" id="movie_name" name="movie_name" class="inp_job">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                                <label class="lbl_job">Release Date:</label>
                                
                                <input type="date" required="required" id="release_date" name="release_date" class="inp_job">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                                <label class="lbl_job">Rating:</label>
                                <select id="rating" name="rating" class="inp_job" required="required" >
                                  <option value="">--Select Rating--</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  </select>
                              </div>
                            </div>
                            

                            <div class="row mt-3">
                              <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                                <label class="lbl_job"></label>
                                   <input type="submit" name="submit" class="btn btn-dark" value="Submit" />
                                   
                              </div>
                            </div>

                            </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>
      <!-- --> 
       <div class="modal fade" id="update_category_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content modal_bg">
                            <div class="modal-header modal_header_new">
                              <h5 class="modal-title pageheader-title modal_white_text">Update Movie</h5>
                              <button type="button" id="update_close" class="close modal_white_text" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body modal_body_white">
                              <form  method="post" enctype="multipart/form-data" class="update_category"  id="update_category">
          
                             <div class="row mb-2">
                              <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                                <label class="lbl_job">Movie Name:</label>
                                <input type="hidden"  id="movie_id_update" name="movie_id_update" >
                                <input type="text" required="required" id="movie_name_update" name="movie_name_update" class="inp_job">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                                <label class="lbl_job">Release Date:</label>
                                
                                <input type="date" required="required" id="release_date_update" name="release_date_update" class="inp_job">
                              </div>
                            </div>
                            <div class="row mb-2">
                              <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                                <label class="lbl_job">Rating:</label>
                                <select id="rating_update" name="rating_update" class="inp_job" required="required" >
                                  <option value="">--Select Rating--</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  </select>
                              </div>
                            </div>

                            <div class="row mt-3">
                              <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                                <label class="lbl_job"></label>
                                   <input type="submit" name="submit" class="btn btn-dark" value="Submit" />
                                   
                              </div>
                            </div>

                            </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>
      <!-- -->
        <div class="row mb-2">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <table class="table vv table-responsive" id="book-table">
              <thead class="thead-dark" >
                <tr>
                <th width="5%"  >Sr No</th>
                <th width="10%"  >Movie Name</th>
                <th width="10%"  >Rating</th> 
                <th width="10%"  >Release Date</th>   
                <th width="5%" >Edit</th> 
                <th width="5%" >Delete</th> 
                
                
              </tr>
              </thead>
              <tbody class="test">
               
              </tbody>
            </table>
            
          </div>
        </div>

      
           <div class="pagination_test">
      </div>
         
        
      </div>
    </div>
         
    
    <!-- footer -->
     <?php $this->load->view('include/footer');?>
     
    <!-- end footer --> 
  </div>
  <!-- end wrapper  --> 
</div>
<script src="/js/sweetalert2.all.min.js"></script>
<script src="/js/sweetalert.js"></script>
<script src="/js/popper.min.js"></script>
<script type="text/javascript">
     $('.close').click(function() {
  
  $('#book-table').DataTable().ajax.reload( null, false );


   
});  
     function resetForm() {
    document.getElementById("add_category").reset();
    document.getElementById("test").innerHTML = "";
}
$(document).ready(function() {
    $('#book-table').DataTable({
        "ajax": {
            url : "/Admin/fetch_order_data" ,
            type : 'GET'
        },
    });

    
});

 $(document).ready(function(){ 
   

 


    $("#add_category").on('submit', function(e){ 
    $(".spinner-wrapper-lite").fadeIn();  
    e.preventDefault();
   
    var frmdata = $("#add_category").serialize();
      $.ajax({ 
        type: "POST",
        url: "/Admin/add_movie",
        data: frmdata,
        dataType:"JSON",
        success: function(data) {
        $(".spinner-wrapper-lite").fadeOut();  
         if(data.status=='1'){
                  $("#success").click();
                  $('#swal2-content').html(data.message);
                 
                    
                } 
                else
                {

                    $("#error").click();
                  $('#swal2-content').html(data.message);
                            
                }
          
        } 
      });

    });

    $("#update_category").on('submit', function(e){ 
    $(".spinner-wrapper-lite").fadeIn();  
    e.preventDefault();
   
    var frmdata = $("#update_category").serialize();
      $.ajax({ 
        type: "POST",
        url: "/Admin/update_movie",
        data: frmdata,
        dataType:"JSON",
        success: function(data) {
        $(".spinner-wrapper-lite").fadeOut();
         if(data.status=='1'){
                  $("#success").click();
                  $('#swal2-content').html(data.message);
                 
                    
                } 
                else
                {

                    $("#error").click();
                  $('#swal2-content').html(data.message);
                            
                }
          
        } 
      });

    });
});
$(document).ready(function() {

    $(document).on('click', '.delete', function(){  
           var user_id = $(this).attr("id");  
           if(confirm("Are you sure you want to delete this?"))  
           {  $(".spinner-wrapper-lite").fadeIn();
                $.ajax({  
                     url:"/admin/delete_movie",  
                     method:"POST",  
                     data:{user_id:user_id},  
                     success:function(data)  
                     {  
                        
                           if(data)
                           {
                             $(".spinner-wrapper-lite").fadeOut();
                             $('#swal2-content').html("Movie details deleted successfully");
                            $('#book-table').DataTable().ajax.reload( null, false );
                            
                           }
                         
                            
                     }  
                });  
           }  
           else  
           {  
                return false;       
           }  
      }); 


     
});
</script>
<script type="text/javascript">
  $(document).on("click", ".update", function(){
      $(".spinner-wrapper-lite").fadeIn(); 
      $("#movie_name_update").val($(this).data('movie_name'));
      $("#release_date_update").val($(this).data('release_date'));
      $("#rating_update").val($(this).data('rating'));
      $("#movie_id_update").val($(this).data('id'));
     
      $(".spinner-wrapper-lite").fadeOut();
});
</script>



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

</body>
</html>
