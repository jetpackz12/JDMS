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
    <link rel="shortcut icon" href="<?php echo ROOT.BOOTSTRAP; ?>img/comsca-logo.png">

<style type="text/css">
  body
  {
    margin: 0;
    padding: 0;
    background: url(https://i.ibb.co/VQmtgjh/6845078.png) no-repeat;
    height: 100vh;
    font-family: sans-serif;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    overflow: hidden;
    letter-spacing: 2px;
  }

  @media screen and (max-width: 600px)
  {
    body
    {
      background-size: cover;: fixed
    }
  }

  #particles-js
  {
    height: 100%
  }

  .loginBox
  {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 350px;
    min-height: 200px;
    background: transparent;
    backdrop-filter: blur(100px);
    border-radius: 10px;
    padding: 40px;
    box-sizing: border-box
  }

  .user
  {
    margin: 0 auto;
    display: block;
    margin-bottom: 20px;
  }

  h3
  {
    margin: 0;
    padding: 0 0 20px;
    color: #fff;
    text-align: center;
  }

  .loginBox input
  {
    width: 100%;
    margin-bottom: 20px;
  }

  .loginBox input[type="text"], .loginBox input[type="password"]
  {
    border: none;
    border-bottom: 2px solid #262626;
    outline: none;
    height: 40px;
    color: #fff;
    background: transparent;
    font-size: 16px;
    padding-left: 20px;
    box-sizing: border-box;
  }

  .loginBox input[type="text"]:hover, .loginBox input[type="password"]:hover
  {
    color: #fff;
    border: 1px solid #42F3FA;
    box-shadow: 0 0 5px rgba(0,255,0,.3), 0 0 10px rgba(0,255,0,.2), 0 0 15px rgba(0,255,0,.1), 0 2px 0 black;
    transition: .2s ease-in;
  }

  .loginBox input[type="text"]:focus, .loginBox input[type="password"]:focus
  {
    border-bottom: 2px solid #42F3FA;
  }


  ::placeholder
  {
    color: #fff;
    /*border-bottom: 2px solid #42F3FA;*/
  }

  .inputBox
  {
    position: relative;
  }

  .inputBox span
  {
    position: absolute;
    top: 10px;
    color: #fff;
  }

  .loginBox input[type="submit"]
  {
    border: none;
    outline: none;
    height: 40px;
    font-size: 16px;
    background: #09e9ed;
    color: #262626;
    font-weight: bolder;
    border-radius: 20px;
    cursor: pointer;
  }

  .loginBox a
  {
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
    text-align: center;
    display: block;
  }

  a:hover
  {
    color: #00ffff;
  }

  p
  {
    color: #0000ff;
  }

</style>

</head>
<body>

  <div class="loginBox"> 
        <h3>MVCSETUP</h3>
        <form class="frm" action="<?php echo ROOT; ?>login" method="post">
            <div class="inputBox">
              <input id="uname" type="text" name="username" placeholder="Username">
              <input id="pass" type="password" name="password" placeholder="Password">
            </div> 
              <input type="submit" name="" value="Login">
        </form> 
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

          // alert(data);

          if (data == "ok") {
                Toast.fire({
                  icon: 'success',
                  title: 'You have successfully Log in.'
              });
                setTimeout(function() {
                 // body...
                 location.reload();
               },1000);
          }else if(data == "member"){
              Toast.fire({
                  icon: 'success',
                  title: 'You have successfully Log in.!'
                });
                setTimeout(function() {
                 // body...
                 location.reload();
               },1000);
          }else if(data == "pass"){
              Toast.fire({
                  icon: 'warning',
                  title: 'Wrong password!'
                });
                setTimeout(function() {
                 // body...
                 // alert(data);
               },1000);
          }else if(data == "memberpass"){
              Toast.fire({
                  icon: 'warning',
                  title: 'Wrong password!'
                });
                setTimeout(function() {
                 // body...
                 // alert(data);
               },1000);
          }else if(data == "status"){
              Toast.fire({
                  icon: 'warning',
                  title: 'Account is inactive try to ask the admin!'
                });
                setTimeout(function() {
                 // body...
                 // alert(data);
               },1000);
          }else{
              Toast.fire({
                  icon: 'error',
                title: 'MVCSETUP'
                });
                setTimeout(function() {
                 // body...
                 // alert(data);
                 location.reload();
               },1000);
                 
          }

        
        }
    });

});
</script>

</body>
</html>