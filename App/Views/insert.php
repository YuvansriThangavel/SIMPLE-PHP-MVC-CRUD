<?php
include('header.php');
?>
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5">
      <h1 class="text-center"> INSERT RECORD</h1>
      <hr style="height: 1px;color: black;background-color: black;">
    </div>
  </div>
  <div class="row">
    <div class="col-md-5 mx-auto">
      <form action="http://localhost/PHP-oop-crud-master/index.php?Crud/insert" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
          <label for="">ID number</label>
          <input type="text" name="id_no" class="form-control">
        </div>

        <div class="form-group">
          <label for="">Role|Destination</label>
          <input type="text" name="role" class="form-control">
        </div>

        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Mobile No.</label>
          <input type="text" name="mobile" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Address</label>
          <textarea name="address" id="" cols="" rows="3" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="inputZip">Date of Birth</label>
          <input type="date" name="dob" class="form-control">
        </div>
        <div class="form-group">
          <label for="photo">image</label>
          <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
include('footer.php');
?>