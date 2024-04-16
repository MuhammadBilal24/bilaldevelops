<?php include('header.php');?>
<div id="main-content"> 
    <div class="page-heading">
        <section class="section">
            <div class="card">
                <div class="card-header" style=" color:black">   
                    HIRED PROJECTS REQUESTS                                    
                    <!-- <button type="button" style="float:right" class="btn btn-primary"data-toggle="modal" data-target="#exampleModal">
                        +Add
                    </button> -->
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Subject</th>
                                <th class="text-center">About</th>
                                <!-- <th>Actions</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                           foreach($hireddata as $value)
                            echo'
                            <tr class="text-center">
                               <td>'.$value->id.'</td>
                               <td>'.$value->fname.'</td>
                               <td>'.$value->email.'</td>
                               <td>'.$value->subject.'</td>
                               <td>'.$value->about.'</td>
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
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form action="/add/data" method="POST">
                
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" class="form-control" required>
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" class="form-control" required>  
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" class="form-control" required>
                <label for="address">Address</label>
                <input type="text" id="address" name="address" class="form-control" required>
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control" required>
                    <option value=""></option>
                    <option value="1">Active</option>
                    <option value="0">Deactive</option>
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
    </div> -->
    <!-- {{-- Edit Modal --}} -->
  <!-- <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form action="/edit/data" method="POST">
                
                <input type="hidden" name="client_id" id="getid">
                <label for="fname">First Name</label>
                <input type="text" id="getfname" name="fname" class="form-control" required>
                <label for="lname">Last Name</label>
                <input type="text" id="getlname" name="lname" class="form-control" required>  
                <label for="phone">Phone</label>
                <input type="text" id="getphone" name="phone" class="form-control" required>
                <label for="address">Address</label>
                <input type="text" id="getaddress" name="address" class="form-control" required>
                <label for="status">Status</label>
                <select id="getstatus" name="status" class="form-control" required>
                    <option value="1">Active</option>
                    <option value="0">Deactive</option>
                </select>
                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div> -->
  <?php include('footer.php');?>