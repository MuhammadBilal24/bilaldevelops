<?php include 'header.php'; ?>
<link rel="stylesheet" href="assets2/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets2/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets2/css/components.css">
<style>
    a:link {
        text-decoration: none;
    }
</style>

<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Profile</h4>
                    </div>
                    <div class="">
                        <section>
                            <div class="container py-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card mb-4">
                                            <div class="card-body text-center">
                                                <img src="assets/images/director.png" alt="avatar"
                                                    class="rounded-circle img-fluid" style="width: 150px;">
                                                <h5 class="my-3">Muhammad Bilal</h5>
                                                <p class="text-muted mb-1">Full Stack Developer</p>
                                                <p class="text-muted mb-4">Karachi, Sindh Pakistan</p>
                                                <div class="d-flex justify-content-center mb-2">
                                                    <button type="button" class="btn btn-primary">Follow</button>
                                                    <button type="button"
                                                        class="btn btn-outline-primary ms-1">Message</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <a target="_blank" href="https://www.fiverr.com/muhammad_bilals?up_rollout=true"><img src="assets/logos/fiver.png" title="Fiverr" width="30" height="30" /></a>
                <p class="mb-0">Fiverr</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <a target="_blank" href="https://www.facebook.com/profile.php?id=100078519280125"><img src="assets/logos/fb.png" title="Facebook" width="30" height="30" /></a>
                <p class="mb-0">Facebook</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <a target="_blank" href="https://www.instagram.com/bilal_develops/"><img src="assets/logos/insta.png" title="Instagram" width="30" height="30" /></a>
                <p class="mb-0">Instagram</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <a target="_blank" href="https://twitter.com/MuhammadBilel"><img src="assets/logos/tw.png" title="Twitter" width="30" height="30" /></a>
                <p class="mb-0">Twitter</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <a target="_blank" href="https://www.linkedin.com/in/muhammad-bilal-48082525a/"><img src="assets/logos/ln.png" title="LinkedIn" width="30" height="30" /></a>
                    <p class="mb-0">LinkedIn</p>
              </li>
            </ul>
          </div>
        </div> -->
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Full Name</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">Muhammad Bilal</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Email</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">bilaldevelops@gmail.com</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Mobile</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">(+92) 308-8505427</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Address</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">Karachi, Pakistan Asia</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-4 mb-lg-0">
                                            <div class="card-body p-0">
                                                <ul class="list-group list-group-flush rounded-3">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                        <a target="_blank"
                                                            href="https://www.fiverr.com/muhammad_bilals?up_rollout=true"><img
                                                                src="assets/logos/fiver.png" title="Fiverr"
                                                                width="30" height="30" /></a>
                                                        <p class="mb-0">Fiverr</p>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                        <a target="_blank"
                                                            href="https://www.facebook.com/profile.php?id=100078519280125"><img
                                                                src="assets/logos/fb.png" title="Facebook"
                                                                width="30" height="30" /></a>
                                                        <p class="mb-0">Facebook</p>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                        <a target="_blank"
                                                            href="https://www.instagram.com/bilal_develops/"><img
                                                                src="assets/logos/insta.png" title="Instagram"
                                                                width="30" height="30" /></a>
                                                        <p class="mb-0">Instagram</p>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                        <a target="_blank"
                                                            href="https://twitter.com/MuhammadBilel"><img
                                                                src="assets/logos/tw.png" title="Twitter"
                                                                width="30" height="30" /></a>
                                                        <p class="mb-0">Twitter</p>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                        <a target="_blank"
                                                            href="https://www.linkedin.com/in/muhammad-bilal-48082525a/"><img
                                                                src="assets/logos/ln.png" title="LinkedIn"
                                                                width="30" height="30" /></a>
                                                        <p class="mb-0">LinkedIn</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
      
        <?php include 'footer.php'; ?>
