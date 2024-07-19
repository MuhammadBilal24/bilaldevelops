<?php include 'header.php';
$hireddata = $this->db->query('select count(id) as id from hired')->result()[0];
$usersdata = $this->db->query('select count(id) as id from users')->result()[0];
$contactdata = $this->db->query('select count(id) as id from contacts')->result()[0];
$viewsdata = $this->db->query('select count(watch) as watch from views')->result()[0];
?>
<link rel="stylesheet" href="assets2/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets2/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets2/css/components.css">
<style>
a:link {
    text-decoration: none;
}
</style>
<div class="main-panel">
    <div class="content-wrapper">
    <!-- <iframe src="https://giphy.com/embed/26BROrSHlmyzzHf3i" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/smoke-colors-shurly-26BROrSHlmyzzHf3i">via GIPHY</a></p> -->
        <!-- <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="me-md-3 me-xl-5">
                    <h2>Admin Panel</h2>
                    <p class="mb-md-0"> Support Bilal Develops.</p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-plus text-muted"></i>
                  </button>
                  <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
                </div>
              </div>
            </div>
          </div> -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body dashboard-tabs p-0">
                        <ul class="nav nav-tabs px-4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview"
                                    role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sales-tab" data-bs-toggle="tab" href="#sales" role="tab"
                                    aria-controls="sales" aria-selected="false">Posts</a>
                            </li>
                            <!-- <li class="nav-item">
                      <a class="nav-link" id="purchases-tab" data-bs-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Purchases</a>
                    </li> -->
                        </ul>
                        <div class="tab-content py-0 px-0">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                aria-labelledby="overview-tab">
                                <div class="d-flex flex-wrap justify-content-xl-between">
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-buffer me-3 icon-lg text-primary"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Hired Request</small>
                                            <h5 class="me-2 mb-0"><?= $hireddata->id ?></h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-wechat me-3 icon-lg text-success"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Contacts</small>
                                            <h5 class="me-2 mb-0"><?= $contactdata->id ?></h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-account-multiple-outline me-3 icon-lg text-warning"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Users</small>
                                            <h5 class="me-2 mb-0"><?= $usersdata->id ?></h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-eye me-3 icon-lg text-danger"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Views</small>
                                            <h5 class="me-2 mb-0"><?= $viewsdata->watch ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                                <div class="d-flex flex-wrap justify-content-xl-between">
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-credit-card-multiple me-3 icon-lg text-warning"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Projects</small>
                                            <h5 class="me-2 mb-0">2233783</h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-chart-areaspline me-3 icon-lg text-success"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Sales Ads</small>
                                            <h5 class="me-2 mb-0">9833550</h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-cards me-3 icon-lg text-primary"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Researches</small>
                                            <h5 class="me-2 mb-0">9833550</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Start date</small>
                            <div class="dropdown">
                              <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                <a class="dropdown-item" href="#">12 Aug 2018</a>
                                <a class="dropdown-item" href="#">22 Sep 2018</a>
                                <a class="dropdown-item" href="#">21 Oct 2018</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-currency-usd me-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Revenue</small>
                            <h5 class="me-2 mb-0">$577545</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-eye me-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total views</small>
                            <h5 class="me-2 mb-0">9833550</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-download me-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Downloads</small>
                            <h5 class="me-2 mb-0">2233783</h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag me-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Flagged</small>
                            <h5 class="me-2 mb-0">3497843</h5>
                          </div>
                        </div>
                      </div>
                    </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Notepad
                            <button type="button" class="btn btn-primary btn-sm" style="float:right" data-toggle="modal"
                                data-target="#exampleModal">
                                Add Task
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead class="text-center">
                                    <tr>
                                        <!-- <th>ID</th> -->
                                        <th>Tasks</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php
                                    foreach ($notepaddata as $value) {
                                        echo '
                                             <tr>
                                               <th>' .$value->text_np .'</th>
                                                <th><button type="button" class="btn btn-inverse-success btn-sm" 
                                                id="deletebtn" data-id="' . $value->id_np . '"><i class="mdi mdi-check-all" style="color:white"></i></button></th>
                                               </tr>
                                              ';                                                                                                   
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <section class="" style="">
                    <div class="">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-md-12 col-xl-12">

                                <div class="card" style="border-radius: 0px;">
                                    <div class="card-body text-center">
                                        <div class="mt-3 mb-4">
                                            <img src="<?= base_url() ?>assets/images/director.png"
                                                class="rounded-circle img-fluid" style="width: 100px;" />
                                        </div>
                                        <h4 class="mb-2">Muhammad Bilal</h4>
                                        <p class="text-muted mb-4">@bilaldevelops<span class="mx-2">|</span> <a
                                                href="#!">nenosofts/bilaldevelops</a></p>
                                        <div class="mb-2 pb-2">
                                            <a target="_blank"
                                                href="https://www.fiverr.com/muhammad_bilals?up_rollout=true"><img
                                                    src="assets/logos/fiver.png" title="Fiverr" width="30" height="30"
                                                    style="margin-top:5px;" />&nbsp;</a>
                                            <a target="_blank"
                                                href="https://www.facebook.com/profile.php?id=100078519280125"><img
                                                    src="assets/logos/fb.png" title="Facebook" width="30" height="30"
                                                    style="margin-top:5px;" />&nbsp;</a>
                                            <a target="_blank" href="https://www.instagram.com/bilal_develops/"><img
                                                    src="assets/logos/insta.png" title="Instagram" width="30"
                                                    height="30" style="margin-top:5px;" />&nbsp;</a>
                                            <a target="_blank" href="https://twitter.com/MuhammadBilel"><img
                                                    src="assets/logos/tw.png" title="Twitter" width="30" height="30"
                                                    style="margin-top:5px;" />
                                                <a target="_blank"
                                                    href="https://www.linkedin.com/in/muhammad-bilal-48082525a/"><img
                                                        src="assets/logos/ln.png" title="LinkedIn" width="30"
                                                        height="30" style="margin-top:5px;" />&nbsp;</a>
                                                <!-- <a target="_blank" href=""><img src="assets/logos/threads.png" title="Threads" width="30" height="30" style="margin-top:5px;" />&nbsp;</a> -->
                                                <!-- <a target="_blank" href="https://bilaeldevelops.hashnode.dev/"><img src="assets/logos/hashnode.png" title="Hashnode" width="30" height="30" style="margin-top:5px;" />&nbsp;</a> -->
                                                <a target="_blank" href="https://github.com/MuhammadBilal24/"><img
                                                        src="assets/logos/github.png" title="Github" width="30"
                                                        height="30" style="margin-top:5px;" />&nbsp;</a>
                                        </div>
                                        <button type="button" style="background-color:#0d3f50;" class="btn btn-md">
                                            <a href="Profile" style="color:white">Visit</a>
                                        </button>
                                        <!-- <div class="d-flex justify-content-between text-center mt-5 mb-2">
              <div>
                <p class="mb-2 h5">8471</p>
                <p class="text-muted mb-0">Wallets Balance</p>
              </div>
              <div class="px-3">
                <p class="mb-2 h5">8512</p>
                <p class="text-muted mb-0">Income amounts</p>
              </div>
              <div>
                <p class="mb-2 h5">4751</p>
                <p class="text-muted mb-0">Total Transactions</p>
              </div>
            </div> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- <div class="card">
                <div class="card-body">
                  <p class="card-title">Total sales</p>
                  <h1>$ 28835</h1>
                  <h4>Gross sales over the years</h4>
                  <p class="text-muted">Today, many people rely on computers to do homework, work, and create or store useful information. Therefore, it is important </p>
                  <div id="total-sales-chart-legend"></div>
                </div>
                <canvas id="total-sales-chart"></canvas>
              </div> -->
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Task</h5>

                </div>
                <div class="modal-body">
                    <form id="insertform">
                        <div class="form-group">
                            <label for="" class="text-muted">Task</label>
                            <input id="text_np" name="text_np" type="text" class="form-control " required>
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <script>
    $('#insertform').submit(function() {
        var form = $('#insertform').serialize();
        event.preventDefault();
        $.ajax({
            type: 'post',
            url: '<?= base_url() ?>Dashboard/notepadinsert',
            data: form,
            success: function(data) {
                swal({
                    icon: "success",
                    title: "Task Added",
                    text: "Successfully",
                    timer: 1500,
                }).then(() => {
                    location.reload();
                })
            }
        })
    })
    // Delete User Function
    $(document).on('click', '#deletebtn', function() {
        var id = $(this).data('id');
        // alert(id);
        $.ajax({
            type: 'post',
            url: "<?= base_url()?>Dashboard/deletenotepad",
            data: {
                id: id
            },
            success: function(data) {
                if (data == 'Correct') {
                    swal({
                            title: 'Are you sure?',
                            text: 'This Task is Completed ?',
                            icon: 'warning',
                            buttons: ["Cancel", "Yes!"],
                        })
                        .then(function(value) {
                            if (value) {
                                swal({
                                    icon: "success",
                                    title: "Great !",
                                    text: "Successfully",
                                    timer: 1500,
                                }).then(() => {
                                    location.reload();
                                })
                            }
                        })
                } else {
                    swal({
                        icon: "Error",
                        title: "Try Again",
                        text: "Any Issue Occured",
                    }).then(() => {
                        location.reload();
                    })

                }
            }

        })

    })
    //  End Delete Function
    </script>