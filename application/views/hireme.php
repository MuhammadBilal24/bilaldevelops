<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>Bilal Develops - Hire Me</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Steller main styles -->
	<link rel="stylesheet" href="assets/css/steller.css">
    <link rel="icon" type="assets/image/x-icon" href="assets/imgs/favcon2.png">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="" href="Home" style="background-color:white;"><img src="assets/imgs/logo22.png" style="margin-right:100%;  width:170px; height:35px " alt=""> </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center"><br>
                    <li class="nav-item">
                        <a class="nav-link" href="Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Home">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Home">Services</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="Home">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Home">Sales Expertise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://bilaeldevelops.hashnode.dev/">Blogs</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link" href="Home">Contact</a>
                    </li>
                     <li class="nav-item">
                        <a class="btn btn-primary rounded ml-4 active" href="<?= base_url();?>Hireme">Hire Me</a>
                    </li> 
                    <br>
                </ul>
            </div>
        </div>          
    </nav>
    <!-- End of page navibation -->


    <!-- Contact Section -->
    <section class="position-relative section">
        <div class="container text-center">
        <div style="text-align:left;">
        <a href="Home"> Back to Home Page </a>
        </div>
        <br>
        <!-- <h6 class="subtitle">Contact</h6> -->
            <h6 class="section-title mb-5" style="color:#0d3f50; margin-top:10px">Feel Free to Discuss Your Project</h6>
            <div class="contact text-left">
                <div class="form">
                    <h6 class="subtitle">Available 24/7</h6>
                    <h6 class="section-title mb-4" style="color:#0d3f50">Get Free Suggestions</h6>
                    <p style="margin-top: -20px;">OR <br> Visit My <a href="https://www.fiverr.com/muhammad_bilals" style="color:green; font-size:larger">Fiverr</a> Account</p>
                    <form id="insertform">
                        <div class="form-group">
                            <input type="text" class="form-control" id="fname" name="fname" aria-describedby="emailHelp" placeholder="Full-Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email or Username" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea type="text" id="about" name="about" cols="30" rows="5" class="form-control" placeholder="About Your Project"></textarea>
                        </div>
                        <!-- class="btn btn-primary btn-block rounded w-lg" -->
                        <button type="submit" class="btn btn-primary btn-block rounded w-lg">Send Details</button>
                        
                    </form>
                </div>
                <div class="contact-infos">
                    <img style="margin-left:50px; margin-bottom:250px; height:93%; width:270px;"
                        src="assets/imgs/contact.svg" alt="">
                    <div style="margin-top:-220px">
                        <div class="item">
                            <i class="ti-location-pin"></i>
                            <div class="">
                                <h5>Location</h5>
                                <p style="color: black;"> Pakistan Asia.</p>
                            </div>
                        </div>
                        <div class="item">
                            <i class="ti-mobile"></i>
                            <div>
                                <h5>Phone Number</h5>
                                <p style="color: black;">+923088505427</p>
                            </div>
                        </div>
                        <div class="item">
                            <i class="ti-email"></i>
                            <div class="mb-0">
                                <h5>Email Address</h5>
                                <p style="color: black;">Bilaldevelops00@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>                 
            </div>
        </div>    
    </section>
    
    
<!-- Footer -->
<footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3">Copyright
        <script>
        document.write(new Date().getFullYear())
        </script> &copy; <a href="http://www.nenosofts.pk/bilaldevelops" target="_blank">BilalDevelops</a>
    </div>
</footer>
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
<script src="assets/js/steller.js"></script>
<script src="assets/js/sweetalert.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
// $('#centralModalSuccess').modal('show');
// $('#centralModalSuccess').modal({backdrop: 'static', keyboard: false})  
// $('#close2').hide();
window.onload = function() {
    $('#Submit1').click();
}
</script>
</body>
</html

