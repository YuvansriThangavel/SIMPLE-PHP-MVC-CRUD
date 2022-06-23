<?php
include('header.php');
?>
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5">
      <h1 class="text-center">PHP OOP CRUD TUTORIAL - SINGLE RECORD</h1>
      <hr style="height: 1px;color: black;background-color: black;">
    </div>
  </div>
  <div class="row">
    <div class="col-md-5 mx-auto">
      <div class="card">
        <div class="card-header">
          Single Record
        </div>
        <div class="card-body">
          <p>Name = <?= $args[0]['name']; ?></p>
          <p>Id Number = <?= $args[0]['id_number']; ?></p>
          <p>role = <?= $args[0]['role']; ?></p>
          <p>Email = <?= $args[0]['email']; ?></p>
          <p>Mobile No. = <?= $args[0]['mobile']; ?></p>
          <p>Address = <?= $args[0]['address']; ?></p>
          <p>Date of Birth = <?= $args[0]['dob']; ?></p>
          <p>Image = <?= $args[0]['image']; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include('footer.php')
?>