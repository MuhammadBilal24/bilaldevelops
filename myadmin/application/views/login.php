<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Bilael Develops</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="shortcut icon" href="assets/images/favcon2.png" type="image/x-icon">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-12 col-12">
                      
            <div id="auth-left" style="float:right">
            <!-- <div class="auth-logo" >
                    </div> -->
                    <!-- <h1 class="" style="text-align: center">Log In.</h1> -->
                    <a href="index.html"><img style="margin-bottom:30px;  width:250px "  src="assets/images/logo22.png" alt="Logo"></a>
                    
                    <!-- <h5 class="">Admin Panel - Bilael Develops</h5> -->
                    

                    <form action="" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" id="email" name="email" placeholder="Email Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl"
                            name="password" id="password" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button type="submit" style="background-color:#ff7a57;" class=" btn-block btn-lg  mt-5">Log in</button>
                    </form>
                    <!-- <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="auth-register.html"
                                class="font-bold">Sign
                                up</a>.</p>
                        {{-- <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p> --}}
                    </div> -->
                </div>
            </div>
            <!-- {{-- <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                    
                </div>
            </div> --}} -->
        </div>

    </div>
</body>

</html>