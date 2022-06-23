<?php
include('header.php');
?>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">PHP OOP CRUD TUTORIAL - EDIT RECORD</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <form action="?Crud/update/<?=$args['id']?>" method="post">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" value="<?=$args['name']; ?>" class="form-control">
            </div>

            <div class="form-group">
              <label for="">ID Number</label>
              <input type="text" name="id_no" value="<?=$args['id_number']; ?>" class="form-control">
            </div>

            <div class="form-group">
              <label for="">Role|Destination</label>
              <input type="text" name="role" value="<?=$args['role']; ?>" class="form-control">
            </div>

            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" value="<?=$args['email']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Mobile No.</label>
              <input type="text" name="mobile" value="<?=$args['mobile']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <textarea name="address" id="" cols="" rows="3" class="form-control"><?=$args['address']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="inputZip">Date of Birth </label>
              <input type="date" name="dob" value="<?=$args['dob']; ?>" class="form-control">
            </div>

            <div class="form-group">
              <label for="photo">Image</label>
              <input type="file" name="image" value="<?=$args['image']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <button type="submit" name="update" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<?php
include('footer.php');
?>