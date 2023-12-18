<?php include('header.php'); ?>
<div id="main-content">
    <div class="page-heading">
        <section class="section">
            <div class="card">
                <div class="card-header" style=" color:black">
                    Projects
                    <button type="button" style="float:right" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        +Add
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Website</th>
                                <th class="text-center">Details</th>
                                <th class="text-center">Link</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($projectsdata as $value)
                                echo '
                            <tr class="text-center">
                               <td>' . $value->id . '</td>
                               <td>' . $value->web_name . '</td>
                               <td>' . $value->details . '</td>
                               <td>' . $value->link . '</td>
                               <td><img src="'. base_url() .'assets/imgs/'. $value->img .'" style="width:100px;height:50px" alt=""></td>
                               <td>' . $value->status . '</td>
                               <td><button id="editbtn" data-id="'.$value->id.'" class="btn btn-success" type="button" data-toggle="modal" data-target="#exampleModal1">Edit</button>
                                   <button class="btn btn-danger">Delete</button></td>

                           </tr>
                           ';
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <!-- {{-- Add Modal --}} -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="insertform">
                        <label for="web_name">Web Name</label>
                        <input type="text" id="web_name" name="web_name" class="form-control" required>
                        <label for="details">Details</label>
                        <input type="text" id="details" name="details" class="form-control" required>
                        <label for="link">Link</label>
                        <input type="text" id="link" name="link" class="form-control" required>
                        <label for="img">Insert Picture</label>
                        <input type="file" id="image_file" name="file" class="form-control" required>
                        <label for="status">Status</label>
                        <select id="status" name="status" class="form-control" required>
                            <option value="">Choose Status</option>
                            <option value="1">Show</option>
                            <option value="0">Hide</option>
                        </select>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- {{-- Edit Modal --}} -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="updateform">
                        <input type="text" id="eid" name="eid" class="form-control">
                        <label for="web_name">Web Name</label>
                        <input type="text" id="web_name1" name="web_name" class="form-control" required>
                        <label for="details">Details</label>
                        <input type="text" id="details1" name="details" class="form-control" required>
                        <label for="link">Link</label>
                        <input type="text" id="link1" name="link" class="form-control" required>
                        <label for="img">Picture</label>
                        <input type="text" id="img1" name="img" class="form-control" required>
                        <label for="status">Status</label>
                        <select id="status" name="status1" class="form-control" required>
                            <option value=""></option>
                            <option value="1">Show</option>
                            <option value="0">Hide</option>
                        </select>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>

    <script>
        $('#insertform').submit(function() {
            var form = $('#insertform').serialize();
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "<?= base_url() ?>Projects/insertproject",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(data) {
                    // swal("Thank You", "Your Message is Succesfully Sent.", "success");
                    if (data = "Correct") {
                        swal({
                                icon: "success",
                                title: "Success",
                                text: "Your Project Uploaded",
                                timer: 1500,
                            })
                            .then(function() {
                                location.reload();
                            })
                    } else {
                        swal({
                            icon: "Ooops..!",
                            title: "warning",
                            showCloseButton: true,
                        })
                    }
                }
            })
        })

// Edit Function
$(document).on('click','#editbtn',function(){
      var eid=$(this).data('eid');
      $.ajax({
        type:'post',
        url:'<?= base_url()?>Projects/edit',
        data:{eid:eid},
        dataType:'json',
        before:function(){
        },
        success:function(result){
          $("#eid").val(result.id);
          $("#web_name1").val(result.web_name);
          $("#details1").val(result.details);
          $("#link1").val(result.link);
          $("#img1").val(result.img);
          $("#status1").val(result.status);
          
        }
      })
    });

    // Edit Funtion End //

    // -- Update Function --//
    $("#btnupdate").click(function(){
      var form = $('#updateform').serialize();
    //   var nursery_name = $('#nursery_name').val();
    //   var address = $('#address').val();
    //   var city = $('#city').val();
    //   var contact = $('#contact').val();
    //   event.preventDefault();
      
        $.ajax({
          type: 'post',
          url: '<?= base_url()?>Nurseries_data/update',
          data: form,
          success: function (data) {
            if (data == "Correct") {
              swal({
                icon: "success",
                title: "Data Updated",
                text: "Successfully",
                timer: 1500,
              }).then(() => {
                location.reload();
              })
            }
            else {
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
    // -- Update Function --//




    </script>