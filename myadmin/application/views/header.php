<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard | BilalDevelops</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png">
</head>
<style>
.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url("<?= base_url() ?>assets/images/faviconnew.png") 50% 50% no-repeat white;
    opacity: 1;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}
</style>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand brand-logo" href="<?= base_url() ?>Dashboard"><img
                            src="<?= base_url() ?>assets/images/logo22.png" style="width:180px; height:32px"
                            alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="<?= base_url() ?>Dashboard"><img
                            src="<?= base_url() ?>assets/images/favicon.png" alt="logo" /></a>
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-sort-variant"></span>
                    </button>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
                style="background-color:#0d3f50">
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown me-1">
                        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                            id="messageDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="mdi mdi-message-text mx-0 text-light"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="messageDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header"><a href="<?=base_url()?>Contacts">Messages</a></p>
                            <?php
                                $contactdata=$this->db->query('select * from contacts ORDER BY id DESC LIMIT 3')->result();
                                foreach ($contactdata as $value) {
                                    echo '
                                <a class="dropdown-item">
                                    <div class="item-thumbnail">
                                        <img src="assets/images/user-logo.png" alt="image" class="profile-pic">
                                    </div>
                                    <div class="item-content flex-grow">
                                            <h6 class="ellipsis font-weight-normal">'.$value->cemail.'</h6>
                                            <p class="font-weight-light small-text text-muted mb-0">'.$value->cmessage .'</p>
                                    </div>
                                </a>
                                ';}?>
                        </div>
                    </li>
                    <li class="nav-item dropdown me-4">
                        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
                            id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="mdi mdi-bell mx-0 text-light"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-success">
                                        <i class="mdi mdi-information mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-warning">
                                        <i class="mdi mdi-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="item-thumbnail">
                                    <div class="item-icon bg-info">
                                        <i class="mdi mdi-account-box mx-0"></i>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link " href="#" data-bs-toggle="dropdown" id="profileDropdown">
                            <img src="<?= base_url() ?>assets/images/user-logo.png" alt="profile" />
                            <span class="nav-profile-name"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <h6 class="text-center py-3 text-capitalize" style="background-color:#e8e9eb;
                            font-weight:bolder;font-family: serif; color: #0d3f50">Muhammad Bilal</h6>
                            <a class="dropdown-item" style="margin-top:-10px" href="Profile">
                                <i class="mdi mdi-account-circle text-primary"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="Customize">
                                <i class="mdi mdi-settings text-success"></i>
                                Customize
                            </a>
                            <a class="dropdown-item" href="Login">
                                <i class="mdi mdi-logout text-danger"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button style="color:white" class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
                    type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>Dashboard">
                            <i class="mdi mdi-home menu-icon" style="color:#0d3f50"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="mdi mdi-circle-outline menu-icon"></i>
                            <span class="menu-title">UI Elements</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="buttons.html">Buttons</a></li>
                                <li class="nav-item"> <a class="nav-link" href="typography.html">Typography</a></li>
                            </ul>
                        </div>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>Requests">
                            <i class="mdi mdi-buffer menu-icon" style="color:#0080FF"></i>
                            <span class="menu-title">Requests</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>Contacts">
                            <i class="mdi mdi-wechat menu-icon" style="color:green"></i>
                            <span class="menu-title">Contacts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>Projects">
                            <i class="mdi mdi-credit-card-multiple menu-icon" style="color:red"></i>
                            <span class="menu-title">Projects</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://bilaeldevelops.hashnode.dev/">
                            <i class="mdi mdi-tumblr-reblog menu-icon" style="color:#8000FF"></i>
                            <span class="menu-title">Blogs</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="mdi mdi-chart-areaspline menu-icon" style="color:#4D8FAC"></i>
                            <span class="menu-title">Sales Expertise</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>articles">
                            <i class="mdi mdi-cards menu-icon" style="color:black"></i>
                            <span class="menu-title">Researches</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>Users">
                            <i class="mdi mdi-newspaper menu-icon" style="color:#9F2B68"></i>
                            <span class="menu-title">Social Posts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>Users">
                            <i class="mdi mdi-account-multiple-outline menu-icon" style="color:#FB9902"></i>
                            <span class="menu-title">Backend Users</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
            $('body').append('<div style="" id="loadingDiv"><div class="loaderoff"></div></div>');
            $(window).on('load', function() {
                setTimeout(removeLoader, 500); //wait for page load PLUS two seconds.
            });

            function removeLoader() {
                $("#loadingDiv").fadeOut(1000, function() {
                    // fadeOut complete. Remove the loading div
                    $("#loadingDiv").remove(); //makes page more lightweight 
                });
            }
            </script>
            </script>