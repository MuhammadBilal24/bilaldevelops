<?php include 'header.php';
$customizedatainside = $this->db->get('customization')->result()[0]; ?>

<style>
.accordion {
    display: inline-block;
    width: 100%;
    margin-bottom: 10px
}

.accordion .accordion-header,
.accordion .accordion-body {
    padding: 10px 15px
}

.accordion .accordion-header {
    background-color: #f9f9f9;
    border-radius: 3px;
    cursor: pointer;
    transition: all 0.5s
}

.accordion .accordion-header h4 {
    line-height: 1;
    margin: 0;
    font-size: 14px;
    font-weight: 700
}

.accordion .accordion-header:hover {
    background-color: #0d3f50;
    color: white;
}

.accordion .accordion-header[aria-expanded="true"] {
    box-shadow: 0 2px 6px #0d3f50;
    background-color: #0d3f50;
    color: #fff
}

.badge {
    vertical-align: middle;
    padding: 7px 12px;
    font-weight: 600;
    letter-spacing: 0.3px;
    border-radius: 30px;
    font-size: 12px
}

.badge.badge-success {
    background-color: #54ca68
}

.badge.badge-danger {
    background-color: #fc544b
}
</style>

<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Customize Sections</h4>
                    </div>
                    <div class="card-body">
                        <div id="accordion">
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-1" aria-expanded="">
                                    <h4>Website </h4>
                                </div>
                                <div class="accordion-body collapse " id="panel-body-1" data-parent="#accordion">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="">
                                            <div class="">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-md">
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Title</th>
                                                            <th>Value</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <?php foreach ($customizedata as $value) {
                                                            if ($value->status == 1) {
                                                                echo '
                                                                                                                                                                                                        <tr>
                                                                                                                                                                                                        <td>' .
                                                                    $value->id .
                                                                    '</td>
                                                                                                                                                                                                            <td>' .
                                                                    $value->title .
                                                                    '</td>
                                                                                                                                                                                                            <td>' .
                                                                    $value->value .
                                                                    '</td>
                                                                                                                                                                                                            <td><div class="badge badge-success badge-shadow">Show</div></td>
                                                                                                                                                                                                            <td><button type="button"   id="editbtn" data-id="' .
                                                                    $value->id .
                                                                    '" class="btn btn-icon icon-left btn-light ml-auto" data-toggle="modal" data-target="#EditModal">
                                                                                                                                                                                                              <i data-feather="edit"></i>
                                                                                                                                                                                                            </button></td>
                                                                                                                                                                                                        </tr>';
                                                            } elseif ($value->status == 0) {
                                                                echo '
                                                                                                                                                                                                          <tr>
                                                                                                                                                                                                          <td>' .
                                                                    $value->id .
                                                                    '</td>
                                                                                                                                                                                                              <td>' .
                                                                    $value->title .
                                                                    '</td>
                                                                                                                                                                                                              <td>' .
                                                                    $value->value .
                                                                    '</td>
                                                                                                                                                                                                              <td><div class="badge badge-danger badge-shadow">Hide</div></td>
                                                                                                                                                                                                              <td><button type="button"   id="editbtn" data-id="' .
                                                                    $value->id .
                                                                    '"  class="btn btn-icon icon-left btn-light ml-auto" data-toggle="modal" data-target="#EditModal">
                                                                                                                                                                                                                <i data-feather="edit"></i>
                                                                                                                                                                                                              </button></td>
                                                                                                                                                                                                          </tr>';
                                                            }
                                                        } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-2">
                                    <h4>About</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="">
                                            <div class="">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-md">
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Title</th>
                                                            <th>Value</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <?php foreach ($customizedata as $value) {
                                                            if ($value->status == 1) {
                                                                echo '
                                                                                                                                                                                                        <tr>
                                                                                                                                                                                                        <td>' .
                                                                    $value->id .
                                                                    '</td>
                                                                                                                                                                                                            <td>' .
                                                                    $value->title .
                                                                    '</td>
                                                                                                                                                                                                            <td>' .
                                                                    $value->value .
                                                                    '</td>
                                                                                                                                                                                                            <td><div class="badge badge-success badge-shadow">Show</div></td>
                                                                                                                                                                                                            <td><button type="button"   id="editbtn" data-id="' .
                                                                    $value->id .
                                                                    '" class="btn btn-icon icon-left btn-light ml-auto" data-toggle="modal" data-target="#EditModal">
                                                                                                                                                                                                              <i data-feather="edit"></i>
                                                                                                                                                                                                            </button></td>
                                                                                                                                                                                                        </tr>';
                                                            } elseif ($value->status == 0) {
                                                                echo '
                                                                                                                                                                                                          <tr>
                                                                                                                                                                                                          <td>' .
                                                                    $value->id .
                                                                    '</td>
                                                                                                                                                                                                              <td>' .
                                                                    $value->title .
                                                                    '</td>
                                                                                                                                                                                                              <td>' .
                                                                    $value->value .
                                                                    '</td>
                                                                                                                                                                                                              <td><div class="badge badge-danger badge-shadow">Hide</div></td>
                                                                                                                                                                                                              <td><button type="button"   id="editbtn" data-id="' .
                                                                    $value->id .
                                                                    '"  class="btn btn-icon icon-left btn-light ml-auto" data-toggle="modal" data-target="#EditModal">
                                                                                                                                                                                                                <i data-feather="edit"></i>
                                                                                                                                                                                                              </button></td>
                                                                                                                                                                                                          </tr>';
                                                            }
                                                        } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-3">
                                    <h4>Services</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="">
                                            <div class="">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-md">
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Title</th>
                                                            <th>Value</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <?php foreach ($customizedata as $value) {
                                                            if ($value->status == 1) {
                                                                echo '
                                                                                                                                                                                                        <tr>
                                                                                                                                                                                                        <td>' .
                                                                    $value->id .
                                                                    '</td>
                                                                                                                                                                                                            <td>' .
                                                                    $value->title .
                                                                    '</td>
                                                                                                                                                                                                            <td>' .
                                                                    $value->value .
                                                                    '</td>
                                                                                                                                                                                                            <td><div class="badge badge-success badge-shadow">Show</div></td>
                                                                                                                                                                                                            <td><button type="button"   id="editbtn" data-id="' .
                                                                    $value->id .
                                                                    '" class="btn btn-icon icon-left btn-light ml-auto" data-toggle="modal" data-target="#EditModal">
                                                                                                                                                                                                              <i data-feather="edit"></i>
                                                                                                                                                                                                            </button></td>
                                                                                                                                                                                                        </tr>';
                                                            } elseif ($value->status == 0) {
                                                                echo '
                                                                                                                                                                                                          <tr>
                                                                                                                                                                                                          <td>' .
                                                                    $value->id .
                                                                    '</td>
                                                                                                                                                                                                              <td>' .
                                                                    $value->title .
                                                                    '</td>
                                                                                                                                                                                                              <td>' .
                                                                    $value->value .
                                                                    '</td>
                                                                                                                                                                                                              <td><div class="badge badge-danger badge-shadow">Hide</div></td>
                                                                                                                                                                                                              <td><button type="button"   id="editbtn" data-id="' .
                                                                    $value->id .
                                                                    '"  class="btn btn-icon icon-left btn-light ml-auto" data-toggle="modal" data-target="#EditModal">
                                                                                                                                                                                                                <i data-feather="edit"></i>
                                                                                                                                                                                                              </button></td>
                                                                                                                                                                                                          </tr>';
                                                            }
                                                        } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-4">
                                    <h4>Portfolios</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-4" data-parent="#accordion">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="">
                                            <div class="">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-md">
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Title</th>
                                                            <th>Value</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <?php foreach ($customizedata as $value) {
                                                            if ($value->status == 1) {
                                                                echo '
                                                                                                                                                                                                        <tr>
                                                                                                                                                                                                        <td>' .
                                                                    $value->id .
                                                                    '</td>
                                                                                                                                                                                                            <td>' .
                                                                    $value->title .
                                                                    '</td>
                                                                                                                                                                                                            <td>' .
                                                                    $value->value .
                                                                    '</td>
                                                                                                                                                                                                            <td><div class="badge badge-success badge-shadow">Show</div></td>
                                                                                                                                                                                                            <td><button type="button"   id="editbtn" data-id="' .
                                                                    $value->id .
                                                                    '" class="btn btn-icon icon-left btn-light ml-auto" data-toggle="modal" data-target="#EditModal">
                                                                                                                                                                                                              <i data-feather="edit"></i>
                                                                                                                                                                                                            </button></td>
                                                                                                                                                                                                        </tr>';
                                                            } elseif ($value->status == 0) {
                                                                echo '
                                                                                                                                                                                                          <tr>
                                                                                                                                                                                                          <td>' .
                                                                    $value->id .
                                                                    '</td>
                                                                                                                                                                                                              <td>' .
                                                                    $value->title .
                                                                    '</td>
                                                                                                                                                                                                              <td>' .
                                                                    $value->value .
                                                                    '</td>
                                                                                                                                                                                                              <td><div class="badge badge-danger badge-shadow">Hide</div></td>
                                                                                                                                                                                                              <td><button type="button"   id="editbtn" data-id="' .
                                                                    $value->id .
                                                                    '"  class="btn btn-icon icon-left btn-light ml-auto" data-toggle="modal" data-target="#EditModal">
                                                                                                                                                                                                                <i data-feather="edit"></i>
                                                                                                                                                                                                              </button></td>
                                                                                                                                                                                                          </tr>';
                                                            }
                                                        } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-5">
                                    <h4>Packages</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-5" data-parent="#accordion">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="">
                                            <div class="">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-md">
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Title</th>
                                                            <th>Value</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <?php foreach ($customizedata as $value) {
                                                            if ($value->status == 1) {
                                                                echo '
                                                                                                                                                                                                        <tr>
                                                                                                                                                                                                        <td>' .
                                                                    $value->id .
                                                                    '</td>
                                                                                                                                                                                                            <td>' .
                                                                    $value->title .
                                                                    '</td>
                                                                                                                                                                                                            <td>' .
                                                                    $value->value .
                                                                    '</td>
                                                                                                                                                                                                            <td><div class="badge badge-success badge-shadow">Show</div></td>
                                                                                                                                                                                                            <td><button type="button"   id="editbtn" data-id="' .
                                                                    $value->id .
                                                                    '" class="btn btn-icon icon-left btn-light ml-auto" data-toggle="modal" data-target="#EditModal">
                                                                                                                                                                                                              <i data-feather="edit"></i>
                                                                                                                                                                                                            </button></td>
                                                                                                                                                                                                        </tr>';
                                                            } elseif ($value->status == 0) {
                                                                echo '
                                                                                                                                                                                                          <tr>
                                                                                                                                                                                                          <td>' .
                                                                    $value->id .
                                                                    '</td>
                                                                                                                                                                                                              <td>' .
                                                                    $value->title .
                                                                    '</td>
                                                                                                                                                                                                              <td>' .
                                                                    $value->value .
                                                                    '</td>
                                                                                                                                                                                                              <td><div class="badge badge-danger badge-shadow">Hide</div></td>
                                                                                                                                                                                                              <td><button type="button"   id="editbtn" data-id="' .
                                                                    $value->id .
                                                                    '"  class="btn btn-icon icon-left btn-light ml-auto" data-toggle="modal" data-target="#EditModal">
                                                                                                                                                                                                                <i data-feather="edit"></i>
                                                                                                                                                                                                              </button></td>
                                                                                                                                                                                                          </tr>';
                                                            }
                                                        } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-6">
                                    <h4>General Settings</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-6" data-parent="#accordion">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="">
                                            <div class="">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-md">
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Title</th>
                                                            <th>Value</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <?php foreach ($customizedata as $value) {
                                                            if ($value->status == 1) {
                                                                echo '
                                                                                                                                                                                                        <tr>
                                                                                                                                                                                                        <td>' .
                                                                    $value->id .
                                                                    '</td>
                                                                                                                                                                                                            <td>' .
                                                                    $value->title .
                                                                    '</td>
                                                                                                                                                                                                            <td>' .
                                                                    $value->value .
                                                                    '</td>
                                                                                                                                                                                                            <td><div class="badge badge-success badge-shadow">Show</div></td>
                                                                                                                                                                                                            <td><button type="button"   id="editbtn" data-id="' .
                                                                    $value->id .
                                                                    '" class="btn btn-icon icon-left btn-light ml-auto" data-toggle="modal" data-target="#EditModal">
                                                                                                                                                                                                              <i data-feather="edit"></i>
                                                                                                                                                                                                            </button></td>
                                                                                                                                                                                                        </tr>';
                                                            } elseif ($value->status == 0) {
                                                                echo '
                                                                                                                                                                                                          <tr>
                                                                                                                                                                                                          <td>' .
                                                                    $value->id .
                                                                    '</td>
                                                                                                                                                                                                              <td>' .
                                                                    $value->title .
                                                                    '</td>
                                                                                                                                                                                                              <td>' .
                                                                    $value->value .
                                                                    '</td>
                                                                                                                                                                                                              <td><div class="badge badge-danger badge-shadow">Hide</div></td>
                                                                                                                                                                                                              <td><button type="button"   id="editbtn" data-id="' .
                                                                    $value->id .
                                                                    '"  class="btn btn-icon icon-left btn-light ml-auto" data-toggle="modal" data-target="#EditModal">
                                                                                                                                                                                                                <i data-feather="edit"></i>
                                                                                                                                                                                                              </button></td>
                                                                                                                                                                                                          </tr>';
                                                            }
                                                        } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-7">
                                    <h4>Delete Sections</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-7" data-parent="#accordion">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="">
                                            <div class="">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-md">
                                                        <tr class="text-center">
                                                            <th>Watch Views</th>
                                                            <th>Contacts</th>
                                                            <th>Requests</th>
                                                        </tr>
                                                        <tr class="text-center">
                                                            <td><button type="button"
                                                                    class="btn btn-inverse-danger btn-sm"
                                                                    style="color:white" data-toggle="modal"
                                                                    data-target="#exampleModal" id="deletebtnwatch">
                                                                    <i class="mdi mdi-delete-forever"
                                                                        style="color:white"></i>
                                                                </button></td>
                                                            <td><button type="button"
                                                                    class="btn btn-inverse-danger btn-sm"
                                                                    style="color:white" data-toggle="modal"
                                                                    data-target="#exampleModal" id="deletebtncontacts">
                                                                    <i class="mdi mdi-delete-forever"
                                                                        style="color:white"></i>
                                                                </button></td>
                                                            <td><button type="button"
                                                                    class="btn btn-inverse-danger btn-sm"
                                                                    style="color:white" data-toggle="modal"
                                                                    data-target="#exampleModal" id="deletebtnrequests">
                                                                    <i class="mdi mdi-delete-forever"
                                                                        style="color:white"></i>
                                                                </button></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- EDIT modal -->
        <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Section</h5>
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="" id="insertform">
                            <input type="hidden" name="id" class="form-control" id="cid">
                            <!-- <input type="text" id="cid" name="id" hidden> -->
                            <label for="title" class="text-muted">Title</label>
                            <input type="text" id="ctitle" name="title" class="form-control" readonly><br>
                            <label for="value" class="text-muted">Value</label>
                            <input type="text" id="cvalue" name="value" class="form-control"><br>
                            <!-- <input type="text" id="cstatus" name="status" class="form-control" ><br> -->
                            <div class="pretty p-switch">
                                <input type="checkbox" id="cstatus" name="status">
                                <div class="state p-primary">
                                    <label class="text-muted">Status (Show/Hide)</label>
                                </div>
                            </div>
                            <br><br>
                            <div class="modal-footer">
                                <button type="button" id="btnupdate" class="btn btn-success btn-sm">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <?php include 'footer.php'; ?>
        <script>
        // Edit Function
        $(document).on('click', '#editbtn', function() {
            var id = $(this).data('id');
            $("#EditModal").modal('show');
            // $("#btnupdate").show();
            // $("#cityname").val("");
            $.ajax({
                type: 'post',
                url: '<?= base_url() ?>Customize/getCustomizedata',
                data: {
                    id: id
                },
                dataType: 'json',
                before: function() {},
                success: function(result) {
                    $("#cid").val(result.id);
                    $("#ctitle").val(result.title);
                    $("#cvalue").val(result.value);
                    // if(result.status == 1)
                    // {
                    //   $("#cstatus").prop( "checked", true );
                    // }
                    // else{
                    //   $("#cstatus").prop( "checked", false );
                    // }
                }
            })
        });

        // Edit Funtion End //
        // -- Update Function --//
        $("#btnupdate").click(function() {
            var form = $('#insertform').serialize();
            event.preventDefault();

            $.ajax({
                type: 'post',
                url: '<?= base_url() ?>Customize/update',
                data: form,
                success: function(data) {
                    if (data == "Correct") {
                        swal({
                            icon: "success",
                            title: "Data Updated",
                            text: "Successfully",
                            timer: 1500,
                        }).then(() => {
                            location.reload();
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

        });

        // Delete watch Function
        $(document).on('click', '#deletebtnwatch', function() {
            $.ajax({
                type: 'post',
                url: "<?= base_url()?>Customize/deletewatch",
                success: function() {
                    swal({
                            title: 'Are you sure?',
                            text: 'Want to Delete Watch Views?',
                            icon: 'warning',
                            buttons: ["Cancel", "Yes!"],
                        })
                        .then(function(value) {
                            if (value) {
                                swal({
                                    icon: "success",
                                    title: "Deleted",
                                    text: "Watch Views Deleted Successfully",
                                    timer: 1500,
                                }).then(() => {
                                    location.reload();
                                })
                            }
                        })
                }

            })

        })
        //  End Delete Function

        // Delete Contacts Function
        $(document).on('click', '#deletebtncontacts', function() {
            $.ajax({
                type: 'post',
                url: "<?= base_url()?>Customize/deletecontacts",
                success: function() {
                    swal({
                            title: 'Are you sure?',
                            text: 'Want to Delete Contacts?',
                            icon: 'warning',
                            buttons: ["Cancel", "Yes!"],
                        })
                        .then(function(value) {
                            if (value) {
                                swal({
                                    icon: "success",
                                    title: "Deleted",
                                    text: "Contacts Deleted Successfully",
                                    timer: 1500,
                                }).then(() => {
                                    location.reload();
                                })
                            }
                        })
                }

            })

        })
        //  End Delete Function

         // Delete requests Function
         $(document).on('click', '#deletebtnrequests', function() {
            $.ajax({
                type: 'post',
                url: "<?= base_url()?>Customize/deleterequests",
                success: function() {
                    swal({
                            title: 'Are you sure?',
                            text: 'Want to Delete Hired Requests?',
                            icon: 'warning',
                            buttons: ["Cancel", "Yes!"],
                        })
                        .then(function(value) {
                            if (value) {
                                swal({
                                    icon: "success",
                                    title: "Deleted",
                                    text: "Hired Requests Deleted Successfully",
                                    timer: 1500,
                                }).then(() => {
                                    location.reload();
                                })
                            }
                        })
                }

            })

        })
        //  End Delete Function
        </script>