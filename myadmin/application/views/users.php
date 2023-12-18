<?php include 'header.php'; ?>
<link rel="stylesheet" href="assets2/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets2/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets2/css/components.css">

<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Users
                            <button type="button" class="btn btn-primary" style="float:right" data-toggle="modal"
                                data-target="#exampleModal">
                                Add User
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Usertype</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($usersdata as $value) {
                                        echo '
                                                                                                                                                                                                                <tr class="">
                                                                                                                                                                                                                  <th>' .
                                            $value->id .
                                            '</th>
                                                                                                                                                                                                                  <th>' .
                                            $value->name .
                                            '</th>
                                                                                                                                                                                                                  <th>' .
                                            $value->email .
                                            '</th>
                                                                                                                                                                                                                  <th>' .
                                            $value->password .
                                            '</th>
                                                                                                                                                                                                                  <th style="color:green">' .
                                            $value->usertype .
                                            '</th>
                                                                                                                                                                                                                  <th><button type="button" class="btn btn-inverse-danger btn-sm"><i class="mdi mdi-delete-forever" style="color:white"></i></button></th>
                                                                                                                                                                                                                  </tr>
                                                                                                                                                                                                                ';
                                    } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>

                    </div>
                    <div class="modal-body">
                        <form id="insertform">
                            <div class="form-group">
                                <label for="" class="text-muted">Name</label>
                                <input id="name" name="name" type="text" class="form-control ">
                            </div>
                            <div class="form-group">
                                <label for="" class="text-muted">Email / Username</label>
                                <input id="email" name="email" type="email" class="form-control ">
                            </div>
                            <div class="form-group">
                                <label for="" class="text-muted">Password</label>
                                <input type="password" class="form-control " id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="" class="text-muted">User-Type</label>
                                <select type="text" class="form-control" id="usertype" name="usertype">
                                    <option value="">Choose User-Type</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                </select>
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

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
        // Insert Add New User 
        $('#insertform').submit(function() {
            var form = $('#insertform').serialize();
            event.preventDefault();
            $.ajax({
                type: 'post',
                url: '<?= base_url() ?>Users/insert',
                data: form,
                success: function(data) {
                    swal({
                        icon: "success",
                        title: "User Added",
                        text: "Successfully",
                        timer: 1500,
                    }).then(() => {
                        location.reload();
                    })
                }
            })
        })
        // End Insert Function
        </script>


        <?php include 'footer.php'; ?>