<?php
include('header.php');
?>
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5">
      <h1 class="text-center">ID CARD GENERATOR</h1>
      <a href="?Crud/insert" class="btn btn-primary"> insert</a>
      <a href="?Crud/generateIdCard" class="btn btn-primary"><i class="fa fa-address-card"></i> Generate ID
        Card</a>
      <hr style="height: 1px;color: black;background-color: black;">
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>ID Number</th>
            <th>Name</th>
            <th>Destination</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($args as $record) {
          ?>
            <tr>
              <td><?= $record['id'] ?></td>
              <td><?= $record['id_number'] ?></td>
              <td><?= $record['name']; ?></td>
              <td><?=$record['role']; ?></td>
              <td>
                <a href="Crud/read/<?= $record['id_number']; ?>" class="badge badge-info">Read</a>
                <a href="Crud/delete/<?= $record['id_number']; ?>" class="badge badge-danger">Delete</a>
                <a href="Crud/update/<?= $record['id_number']; ?>" class="badge badge-success">Edit</a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<?php
include('footer.php');
?>