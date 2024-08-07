<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Crafting Code, Designing Dreams.">
    <meta name="author" content="BilalDevelops">
    <title>Bilal Develops</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Steller main styles -->
    <link rel="stylesheet" href="assets/css/steller.css">
    <link rel="icon" type="assets/image/x-icon" href="assets/imgs/favcon2.webp">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="" href="Home" style="background-color:white;"><img src="assets/imgs/logo22.webp"
                    style="margin-right:100%;  width:170px; height:35px" alt=""> </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="Home">Portfolios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Home">Sales Expertise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Home">Research Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://bilaeldevelops.hashnode.dev/">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Home ">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary rounded ml-4" href="<?= base_url() ?>Hireme">Hire Me</a>
                    </li>
                    <br>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of page navibation -->
    <style>
        body {
            margin-top: 20px;
            background: #f7f8fa
        }

        .avatar-xxl {
            height: 7rem;
            width: 7rem;
        }

        .card {
            margin-bottom: 20px;
            -webkit-box-shadow: 0 2px 3px #eaedf2;
            box-shadow: 0 2px 3px #eaedf2;
        }

        .pb-0 {
            padding-bottom: 0 !important;
        }

        .font-size-16 {
            font-size: 16px !important;
        }

        .avatar-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: #038edc;
            color: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-weight: 500;
            height: 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
        }

        .bg-soft-primary {
            background-color: rgba(3, 142, 220, .15) !important;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .nav-tabs-custom .nav-item .nav-link.active {
            color: #038edc;
        }

        .nav-tabs-custom .nav-item .nav-link {
            border: none;
        }

        .nav-tabs-custom .nav-item .nav-link.active {
            color: #038edc;
        }

        .avatar-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 12px;
        }

        .border-end {
            border-right: 1px solid #eff0f2 !important;
        }

        .d-inline-block {
            display: inline-block !important;
        }

        .badge-soft-danger {
            color: #f34e4e;
            background-color: rgba(243, 78, 78, .1);
        }

        .badge-soft-warning {
            color: #f7cc53;
            background-color: rgba(247, 204, 83, .1);
        }

        .badge-soft-success {
            color: #51d28c;
            background-color: rgba(81, 210, 140, .1);
        }

        .avatar-group .avatar-group-item {
            margin-left: -14px;
            border: 2px solid #fff;
            border-radius: 50%;
            -webkit-transition: all .2s;
            transition: all .2s;
        }

        .avatar-sm {
            height: 2rem;
            width: 2rem;
        }

        .nav-tabs-custom .nav-item {
            position: relative;
            color: #343a40;
        }

        .nav-tabs-custom .nav-item .nav-link.active:after {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .nav-tabs-custom .nav-item .nav-link::after {
            content: "";
            background: #038edc;
            height: 2px;
            position: absolute;
            width: 100%;
            left: 0;
            bottom: -2px;
            -webkit-transition: all 250ms ease 0s;
            transition: all 250ms ease 0s;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        .badge-soft-secondary {
            color: #74788d;
            background-color: rgba(116, 120, 141, .1);
        }

        .badge-soft-secondary {
            color: #74788d;
        }

        .work-activity {
            position: relative;
            color: #74788d;
            padding-left: 5.5rem
        }

        .work-activity::before {
            content: "";
            position: absolute;
            height: 100%;
            top: 0;
            left: 66px;
            border-left: 1px solid rgba(3, 142, 220, .25)
        }

        .work-activity .work-item {
            position: relative;
            border-bottom: 2px dashed #eff0f2;
            margin-bottom: 14px
        }

        .work-activity .work-item:last-of-type {
            padding-bottom: 0;
            margin-bottom: 0;
            border: none
        }

        .work-activity .work-item::after,
        .work-activity .work-item::before {
            position: absolute;
            display: block
        }

        .work-activity .work-item::before {
            content: attr(data-date);
            left: -157px;
            top: -3px;
            text-align: right;
            font-weight: 500;
            color: #74788d;
            font-size: 12px;
            min-width: 120px
        }

        .work-activity .work-item::after {
            content: "";
            width: 10px;
            height: 10px;
            border-radius: 50%;
            left: -26px;
            top: 3px;
            background-color: #fff;
            border: 2px solid #038edc
        }
    </style>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css"
        integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- About section -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="card py-4">
                        <div class="card-body pb-0">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="text-center border-end">
                                        <img src="<?= base_url() ?>assets/imgs/director.webp"
                                            class="img-fluid avatar-xxl rounded-circle" alt="">
                                        <h6 class="text-primary mt-3 mb-2">Muhammad Bilal</h6>
                                        <h6 class="text-muted mb-3">Web Developer & Designer</h6>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-md-9">
                                    <div class="ms-3">
                                        <div>
                                            <h5 class="card-title mb-2">Biography</h5>
                                            <p class="mb-0 text-muted">Hi I'm Bilal, As a Professional Full-Stack
                                                Developer and Designer.
                                            </p>
                                        </div>
                                        <div class="row my-4">
                                            <div class="col-md-12">
                                                <div>
                                                    <p class="text-muted mb-2 fw-medium"><i
                                                            class="mdi mdi-email-outline me-2"></i>
                                                        muhammadbilalshaikh00@gmail.com
                                                    </p>
                                                    <p class="text-muted fw-medium mb-0"><i
                                                            class="mdi mdi-phone-in-talk-outline me-2"></i> +92
                                                        308-8505427
                                                    </p>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->

                                        <ul class="nav nav-tabs nav-tabs-custom border-bottom-0 mt-3 nav-justfied"
                                            role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link px-4 active" data-bs-toggle="tab"
                                                    href="#projects-tab" role="tab" aria-selected="false"
                                                    tabindex="-1">
                                                    <span class="d-block d-sm-none"><i
                                                            class="mdi mdi-menu-open"></i></span>
                                                    <span class="d-none d-sm-block">Projects</span>
                                                </a>
                                            </li><!-- end li -->
                                            <!-- <li class="nav-item" role="presentation">
                                                <a class="nav-link px-4"
                                                    href="https://bootdey.com/snippets/view/profile-task-with-team-cards"
                                                    target="__blank">
                                                    <span class="d-block d-sm-none"><i
                                                            class="mdi mdi-menu-open"></i></span>
                                                    <span class="d-none d-sm-block">Tasks</span>
                                                </a>
                                            </li> -->
                                            <!-- end li -->
                                            <!-- <li class="nav-item" role="presentation">
                                                <a class="nav-link px-4 "
                                                    href="https://bootdey.com/snippets/view/profile-with-team-section"
                                                    target="__blank">
                                                    <span class="d-block d-sm-none"><i
                                                            class="mdi mdi-account-group-outline"></i></span>
                                                    <span class="d-none d-sm-block">Team</span>
                                                </a>
                                            </li> -->
                                            <!-- end li -->
                                        </ul><!-- end ul -->
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end card body -->
                    </div><!-- end card -->

                    <div class="card">
                        <div class="tab-content p-4">
                            <div class="tab-pane active show" id="projects-tab" role="tabpanel">
                                <div class="d-flex align-items-center">
                                    <div class="flex-1">
                                        <h4 class="card-title mb-4">Projects</h4>
                                    </div>
                                </div>

                                <div class="row" id="all-projects">
                                    <div class="col-md-6" id="project-items-1">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex mb-3">
                                                    <div class="flex-grow-1 align-items-start">
                                                        <div>
                                                            <h6 class="mb-0 text-muted">
                                                                <i
                                                                    class="mdi mdi-circle-medium text-danger fs-3 align-middle"></i>
                                                                <span class="team-date">21 Jun, 2021</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown ms-2">
                                                        <a href="#"
                                                            class="dropdown-toggle font-size-16 text-muted"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript: void(0);"
                                                                data-bs-toggle="modal"
                                                                data-bs-target=".bs-example-new-project"
                                                                onclick="editProjects('project-items-1')">Edit</a>
                                                            <a class="dropdown-item"
                                                                href="javascript: void(0);">Share</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item delete-item"
                                                                onclick="deleteProjects('project-items-1')"
                                                                data-id="project-items-1"
                                                                href="javascript: void(0);">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <h5 class="mb-1 font-size-17 team-title">Marketing</h5>
                                                    <p class="text-muted mb-0 team-description">Every Marketing Plan
                                                        Needs</p>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="avatar-group float-start flex-grow-1 task-assigne">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                value="member-6" aria-label="Terrell Soto"
                                                                data-bs-original-title="Terrell Soto">
                                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                    alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                value="member-1" aria-label="Ruhi Shah"
                                                                data-bs-original-title="Ruhi Shah">
                                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                    alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-block"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                value="member-15"
                                                                data-bs-original-title="Denny Silva">
                                                                <div class="avatar-sm">
                                                                    <div
                                                                        class="avatar-title rounded-circle bg-primary">
                                                                        D
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div><!-- end avatar group -->
                                                    <div class="align-self-end">
                                                        <span
                                                            class="badge badge-soft-danger p-2 team-status">Pending</span>
                                                    </div>
                                                </div>
                                            </div><!-- end cardbody -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-md-6" id="project-items-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex mb-3">
                                                    <div class="flex-grow-1 align-items-start">
                                                        <div>
                                                            <h6 class="mb-0 text-muted">
                                                                <i
                                                                    class="mdi mdi-circle-medium text-success fs-3 align-middle"></i>
                                                                <span class="team-date">13 Aug, 2021</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown ms-2">
                                                        <a href="#"
                                                            class="dropdown-toggle font-size-16 text-muted"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript: void(0);"
                                                                data-bs-toggle="modal"
                                                                data-bs-target=".bs-example-new-project"
                                                                onclick="editProjects('project-items-2')">Edit</a>
                                                            <a class="dropdown-item"
                                                                href="javascript: void(0);">Share</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item delete-item"
                                                                href="javascript:void(0);"
                                                                onclick="deleteProjects('project-items-2')"
                                                                data-id="project-items-2">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <h5 class="mb-1 font-size-17 team-title">Website Design</h5>
                                                    <p class="text-muted mb-0 team-description">Creating the design
                                                        and layout of a
                                                        website.</p>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="avatar-group float-start flex-grow-1 task-assigne">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                value="member-10" aria-label="Kelly Osborn"
                                                                data-bs-original-title="Kelly Osborn">
                                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                    alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                value="member-2" aria-label="John Page"
                                                                data-bs-original-title="John Page">
                                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                                    alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                    </div><!-- end avatar group -->
                                                    <div class="align-self-end">
                                                        <span
                                                            class="badge badge-soft-success p-2 team-status">Completed</span>
                                                    </div>
                                                </div>
                                            </div><!-- end cad-body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-md-6" id="project-items-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex mb-3">
                                                    <div class="flex-grow-1 align-items-start">
                                                        <div>
                                                            <h6 class="mb-0 text-muted">
                                                                <i
                                                                    class="mdi mdi-circle-medium text-warning fs-3 align-middle"></i>
                                                                <span class="team-date">08 Sep, 2021</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown ms-2">
                                                        <a href="#"
                                                            class="dropdown-toggle font-size-16 text-muted"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript: void(0);"
                                                                data-bs-toggle="modal"
                                                                data-bs-target=".bs-example-new-project"
                                                                onclick="editProjects('project-items-3')">Edit</a>
                                                            <a class="dropdown-item"
                                                                href="javascript: void(0);">Share</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item delete-item"
                                                                href="javascript: void(0);" data-id="project-items-3"
                                                                onclick="deleteProjects('project-items-3')">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <h5 class="mb-1 font-size-17 team-title">UI / UX Design</h5>
                                                    <p class="text-muted mb-0 team-description">Plan and onduct user
                                                        research and analysis</p>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="avatar-group float-start flex-grow-1 task-assigne">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                value="member-3" aria-label="Judy Newland"
                                                                data-bs-original-title="Judy Newland">
                                                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                                    alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                value="member-5" aria-label="Jeffery Legette"
                                                                data-bs-original-title="Jeffery Legette">
                                                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png"
                                                                    alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                value="member-6" aria-label="Jose Rosborough"
                                                                data-bs-original-title="Jose Rosborough">
                                                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                                    alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                    </div><!-- end avatar group -->
                                                    <div class="align-self-end">
                                                        <span
                                                            class="badge badge-soft-warning p-2 team-status">Progress</span>
                                                    </div>
                                                </div>
                                            </div><!-- end card-body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-md-6" id="project-items-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex mb-3">
                                                    <div class="flex-grow-1 align-items-start">
                                                        <div>
                                                            <h6 class="mb-0 text-muted">
                                                                <i
                                                                    class="mdi mdi-circle-medium text-danger fs-3 align-middle"></i>
                                                                <span class="team-date">20 Sep, 2021</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown ms-2">
                                                        <a href="#"
                                                            class="dropdown-toggle font-size-16 text-muted"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript: void(0);"
                                                                data-bs-toggle="modal"
                                                                data-bs-target=".bs-example-new-project"
                                                                onclick="editProjects('project-items-4')">Edit</a>
                                                            <a class="dropdown-item"
                                                                href="javascript: void(0);">Share</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item delete-item"
                                                                href="javascript:void(0);" data-id="project-items-4"
                                                                onclick="deleteProjects('project-items-4')">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <h5 class="mb-1 font-size-17 team-title">Testing</h5>
                                                    <p class="text-muted mb-0 team-description">The procurement
                                                        specifications should
                                                        describe</p>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="avatar-group float-start flex-grow-1 task-assigne">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                value="member-10" aria-label="Jansh Wells"
                                                                data-bs-original-title="Jansh Wells">
                                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                    alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                    </div><!-- end avatar group -->
                                                    <div class="align-self-end">
                                                        <span
                                                            class="badge badge-soft-danger p-2 team-status">Pending</span>
                                                    </div>
                                                </div>
                                            </div><!-- end card-body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-md-6" id="project-items-5">
                                        <div class="card mb-lg-0">
                                            <div class="card-body">
                                                <div class="d-flex mb-3">
                                                    <div class="flex-grow-1 align-items-start">
                                                        <div>
                                                            <h6 class="mb-0 text-muted">
                                                                <i
                                                                    class="mdi mdi-circle-medium text-success fs-3 align-middle"></i>
                                                                <span class="team-date">12 April, 2021</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown ms-2">
                                                        <a href="#"
                                                            class="dropdown-toggle font-size-16 text-muted"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript: void(0);"
                                                                data-bs-toggle="modal"
                                                                data-bs-target=".bs-example-new-project"
                                                                onclick="editProjects('project-items-5')">Edit</a>
                                                            <a class="dropdown-item"
                                                                href="javascript: void(0);">Share</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item delete-item"
                                                                onclick="deleteProjects('project-items-5')"
                                                                data-id="project-items-5"
                                                                href="javascript: void(0);">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4">
                                                    <h5 class="mb-1 font-size-17 team-title">Typography</h5>
                                                    <p class="text-muted mb-0 team-description">Typography is the
                                                        style or appearance
                                                        of text.</p>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="avatar-group float-start flex-grow-1 task-assigne">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                value="member-1" aria-label="Ruhi Luft"
                                                                data-bs-original-title="Ruhi Luft">
                                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                    alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                value="member-5" aria-label="Elias Hardage"
                                                                data-bs-original-title="Elias Hardage">
                                                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png"
                                                                    alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                value="member-10" aria-label="Jansh Wells"
                                                                data-bs-original-title="Jansh Wells">
                                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                    alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                    </div><!-- end avatar group -->
                                                    <div class="align-self-end">
                                                        <span
                                                            class="badge badge-soft-success p-2 team-status">Completed</span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end tab pane -->
                        </div>
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="pb-2">
                                <h4 class="card-title mb-3">About</h4>
                                <p>As a Professional Full-Stack Developer and Designer, I have extensive experience in a
                                    variety of
                                    web development frameworks and technologies such as PHP Laravel, CodeIgniter, AJAX,
                                    jQuery, and
                                    WordPress. In addition, I have proficiency in using design software such as Adobe XD
                                    and
                                    Illustrator to create visually appealing and engaging user interfaces. </p>
                                <ul class="ps-3 mb-0">
                                    <li>My skillset includes designing and developing websites, creating and managing
                                        databases, writing
                                        clean and efficient code, troubleshooting issues, and staying up-to-date with
                                        the latest trends
                                        and technologies in the field. I am also experienced in collaborating with
                                        teams, communicating
                                        effectively, and delivering high-quality projects on time.</li>
                                    <!-- <li>To achieve this, it would be necessary to have uniform pronunciation</li> -->
                                </ul>
                                <!-- end ul -->
                            </div>
                            <hr>
                            <div class="pt-2">
                                <h4 class="card-title mb-4">My Skill</h4>
                                <div class="d-flex gap-2 flex-wrap">
                                    <span class="badge badge-soft-secondary p-2">HTML</span>
                                    <span class="badge badge-soft-secondary p-2">Bootstrap</span>
                                    <span class="badge badge-soft-secondary p-2">Css</span>
                                    <span class="badge badge-soft-secondary p-2">Javascript</span>
                                    <span class="badge badge-soft-secondary p-2">React</span>
                                    <span class="badge badge-soft-secondary p-2">PHP</span>
                                    <span class="badge badge-soft-secondary p-2">Laravel</span>
                                    <span class="badge badge-soft-secondary p-2">CodeIgniter</span>
                                    <span class="badge badge-soft-secondary p-2">Vanila Js</span>
                                    <span class="badge badge-soft-secondary p-2">JQuery</span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->

                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h4 class="card-title mb-4">Personal Details</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Name</th>
                                                <td>Muhammad Bilal</td>
                                            </tr><!-- end tr -->
                                            <tr>
                                                <th scope="row">Location</th>
                                                <td>Karachi, Pakistan</td>
                                            </tr><!-- end tr -->
                                            <tr>
                                                <th scope="row">Language</th>
                                                <td>English</td>
                                            </tr><!-- end tr -->
                                            <tr>
                                                <th scope="row">Website</th>
                                                <td>nenosofts/bilaldevelops.pk</td>
                                            </tr><!-- end tr -->
                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->

                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h4 class="card-title mb-4">Work Experince</h4>
                                <ul class="list-unstyled work-activity mb-0">
                                    <li class="work-item" data-date="2019-22">
                                        <h6 class="lh-base mb-0">Bachelors</h6>
                                        <p class="font-size-13 mb-2">Computer Science</p>
                                        <!-- <p>To achieve this, it would be necessary to have uniform grammar, and more
                                            common words.</p> -->
                                    </li>
                                    <li class="work-item" data-date="2023-25">
                                        <h6 class="lh-base mb-0">Masters</h6>
                                        <p class="font-size-13 mb-2">Artificial Intelligence</p>
                                        <!-- <p class="mb-0">It will be as simple as occidental in fact, it will be
                                            Occidental person, it will seem like simplified.</p> -->
                                    </li>
                                </ul><!-- end ul -->
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
