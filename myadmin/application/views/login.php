<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login - AdminSupports Bilal Develops </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-4 px-4 px-sm-5">
              <div class="brand-logo d-flex d-grid justify-content-center">
                <img src="assets/images/logo22.png" alt="logo" style="height:35px">
              </div>
              <h4>Welcome</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-4" method="POST" id="formcheck" action="#" class="needs-validation" novalidate="">
                <div class="form-group">
                  <label for="" class="text-muted">Email / Username</label>
                  <input id="email" name="email" type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                  style="border:2px solid #0d3f50" >
                </div>
                <div class="form-group">
                  <label for="" class="text-muted">Password</label>
                  <input type="password" class="form-control form-control-lg" id="password" name="password"
                  style="border:2px solid #0d3f50">
                </div>
                <div class="mt-3 d-flex d-grid justify-content-center">
                <button type="button"  id="loginbtn" class="btn btn-success btn-lg btn-block" tabindex="4"
                  style="box-shadow:none;">
                    LOGIN
                    </button>
                </div>
              </form>
            </div>`
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="assets/js/sweetalert.js"></script>
   
  <!-- endinject -->
  <script>
  // check functions
  $('#loginbtn').on('click',function(){
    var email=$('#email').val();
    var password=$('#password').val();
    //var form=$('#formcheck').serialize();
    if(email=="")
    {
      swal({
        icon:"error",
        title:"Enter Email / Username",
        timer:1500
      })
    }
    else if (password=="")
    {
      swal({
        icon:"error",
        title:"Enter Password",
        timer:1500
      })
    }
    else{
      $.ajax({
      type:'post',
      url:'Login/check',
      data:{email:email, password:password},
      success:(function(data)
      {
        if(data=="Correct")
        {
          swal({
          icon:"success",
          title:"Login Success",
          text:"Welcome to Bilal Develop's Admin Support",
          timer:1700
          }).then(()=>{
            window.location='Dashboard';
          })
        }
        else if(data=="Email")
        {
          swal({
            icon:"error",
            title:" Try Again",
            text:'Email is Correct, Password is invalid',
            showConfirmButton: true,
          })
        }
        else if(data=="Wrong")
        {
          swal({
            icon:"error",
            title:" Opps",
            text:'Email & Password is Invalid, SignUp Now',
            showConfirmButton: true,
          })
        }
        else
        {
          swal({
            icon:"error",
            title:" Try Again",
            showConfirmButton: true,
          })
        }
        
      })
    })
    }
    

  })
</script>
</body>

</html>
