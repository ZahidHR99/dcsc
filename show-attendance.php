<?php require 'header.php'; ?>



<?php require 'nav.php'; ?>

<div class="container-fluid">

    <h2 class="text-center mt-4 mb-4">Show All Attendance</h2>
    <hr/>

    
    <div class="row">
        <div class="col-sm-12">
               <div class="mb-4">
                <h2 class="text-center mt-4 mb-4">01, January, 2022</h2>
                    <table class="table mb-4 shadow-sm">
                        <thead class="thead-dark ">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Class Time</th>
                                <th scope="col">Number of Student</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ten</td>
                                <td>CSE</td>
                                <td>10:30 PM</td>
                                <td>10</td>
                            </tr>
                        
                        </tbody>
                    </table>
               </div>
                
               <br/>

               <div class="mb-4">
                <h2 class="text-center mt-4 mb-4">01, January, 2022</h2>
                    <table class="table mb-4 shadow-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Class Time</th>
                                <th scope="col">Number of Student</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ten</td>
                                <td>CSE</td>
                                <td>10:30 PM</td>
                                <td>10</td>
                            </tr>
                        
                        </tbody>
                    </table>
               </div>

               <br/>

               <div class="mb-4">
                <h2 class="text-center mt-4 mb-4">01, January, 2022</h2>
                    <table class="table mb-4 shadow-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Class Time</th>
                                <th scope="col">Number of Student</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Ten</td>
                            <td>CSE</td>
                            <td>10:30 PM</td>
                            <td>10</td>
                          
                            </tr>
                        
                        </tbody>
                    </table>
               </div>
               <br/>
               
                
        </div>
        
        
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Class</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="">Department name</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Course Name</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Class Time</label>
                <input type="text" class="form-control" id="">
            </div>
            
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<?php require 'footer.php'; ?>