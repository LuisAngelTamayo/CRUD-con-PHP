<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION['message'])) {?>
                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php  session_unset(); }?>
            <div class="card card-body">
                <form action="add.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="titulo" autofocus>                        
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
                    </div>
                    <input type="submit" name="save" class="btn btn-success btn-block" value="Save">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>

        <tbody>

          <?php
          $query = "SELECT * FROM tareas";
          $result_tasks = mysqli_query($enlace, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['titulo']; ?></td>
            <td><?php echo $row['descripcion']; ?></td>
            <td><?php echo $row['fecha']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
               
              </a>
              <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
        </div>
    </div>

</div>

<?php include("includes/footer.php") ?>