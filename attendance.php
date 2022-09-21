<?php require 'header.php'; ?>

<?php require 'nav.php'; ?>


  <h1 class="text-center mt-4">Attendance</h1>


    <div class=" p-2 mt-3 mb-3">
     <div class="row">
      <div class="col-sm-10"></div>
      <div class="col-sm-2">
      <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add Student Data</button>
      </div>
     </div>
    </div>



       <div class="container-fluid">

        <h1 class="text-center mt-4 mb-2">
        <?php
            echo date("d-m-Y");
        ?>
        </h1>


        <table class="table bg-light">
              <thead class="thead-dark">
                  <tr>
                      <th>Roll No</th>
                      <th>Student Name</th>
                      <th>Department Name</th>
                      <th>Course Name</th>
                      <th>Attendence</th>
                  </tr>
              </thead>
              <tbody id="tbody">
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>Otto</td>
                <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label text-success" for="inlineRadio1">Present</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label text-danger" for="inlineRadio2">Absent</label>
                  </div>
                 
                </td>
              </tr>
              </tbody>
          </table>
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
                <label for="">Roll No</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Student Name</label>
                <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Session</label>
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