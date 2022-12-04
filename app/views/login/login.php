<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo TITLE; ?></title>
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo ROOT.BOOTSTRAP; ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo ROOT.BOOTSTRAP; ?>plugins/toastr/toastr.min.css">

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo ROOT.BOOTSTRAP; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo ROOT.BOOTSTRAP; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo ROOT.BOOTSTRAP; ?>dist/css/adminlte.min.css">
  <link rel="shortcut icon" href="<?php echo ROOT.BOOTSTRAP; ?>img/logo.PNG">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style type="text/css">
    body{
      background-image: url("<?php echo ROOT.BOOTSTRAP; ?>img/cover.jpg");
      background-repeat: no-repeat;
      background-size: 100%;
    }

    .container{
      margin-top: 8%;
    }

    .row{
      border: 1px solid #8a867a;
      padding: 10px;
      border-radius: 10px;
      background-color: white;
    }

    input{
      width: 335px;
      height: 35px;
    }
    
    button{
      width: 150px;
      float: right;
    }

    .labelcolorinputted{
      /* color: #CED4DA; */
      font-style: italic;
      text-decoration: underline;
    }

    .labelcolorinvalid{
      color: #f4110b;
      display: none;
    }
</style>

</head>
<body>

    <div class="container">
          <div class="row">
                <div class="col-8">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo ROOT.BOOTSTRAP; ?>img/bed1.jpg" height="480px" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo ROOT.BOOTSTRAP; ?>img/bed2.jpg" height="480px" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo ROOT.BOOTSTRAP; ?>img/bed3.jpg" height="480px" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <div class="col-4" style="border: 1px solid #8a867a; border-radius: 10px; padding: 10px;">
                  <img src="<?php echo ROOT.BOOTSTRAP; ?>img/logo.PNG" alt="Logo Image">
                  <h3>Rams Dometory Management System</h3>
                  <form class="frm" action="<?php echo ROOT; ?>login" method="post">
                        <div class="form-group">
                          <label id="labelusername" for="username">Username:</label>
                          <span class="labelcolorinvalid" id="spanusername"> Invalid Username!</span>
                          <input class="form-control" id="username" type="text" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                          <label id="labelpassword" for="password">Password:</label>
                          <span class="labelcolorinvalid" id="spanpassword"> Wrong Password!</span>
                          <input class="form-control" id="password" type="password" name="password" placeholder="Password">
                        </div>
                        <button class="btn btn-outline-primary btn-sm" type="submit">Login</button>
                  </form> 
                </div>
          </div>
    </div>


<!-- jQuery -->
<script src="<?php echo ROOT.BOOTSTRAP; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo ROOT.BOOTSTRAP; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo ROOT.BOOTSTRAP; ?>dist/js/adminlte.min.js"></script>

<!-- SweetAlert2 -->
<script src="<?php echo ROOT.BOOTSTRAP; ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo ROOT.BOOTSTRAP; ?>plugins/toastr/toastr.min.js"></script>
<!-- Page specific script -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>

   $('#username').keyup(function(event){
      var usernamevalue = $('#username').val();
      if(usernamevalue.length > 0){
        $('#labelusername').addClass('labelcolorinputted');
        $("#spanusername").hide();
      }else{
        $('#labelusername').removeClass('labelcolorinputted');
        $("#spanusername").hide();
      }
   });

   $('#password').keyup(function(event){
      var passwordvalue = $('#password').val();
      if(passwordvalue.length > 0){
        $('#labelpassword').addClass('labelcolorinputted');
        $("#spanpassword").hide();
      }else{
        $('#labelpassword').removeClass('labelcolorinputted');
        $("#spanpassword").hide();
      }
   });

</script>

<script>
  
  $('.frm').on('submit',function(e){
    e.preventDefault();

    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 1000
    });
    
      $.ajax({
        type     : "POST",
        cache    : false,
        url      : $(this).attr('action'),
        data     : $(this).serialize(),
        success  : function(data) {

          // console.log(data);

          if(data == "username"){
            $("#spanusername").show();
          }

          if(data == "password"){
            $("#spanpassword").show();
          }

          if (data == "success") {
            Toast.fire({
                  icon: 'success',
                  title: '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYou have successfully Log in.'
              });
            setTimeout(function() {
                // console.log(data);
                location.reload();
               },1000);
          }
        
        }
    });

});
</script>

</body>
</html>