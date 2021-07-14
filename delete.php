<?php 

include("db.php");
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tareas WHERE id = $id";
    $result = mysqli_query($enlace, $query);
    if(!$result) {
      die("Query Failed.");
    }
  
    $_SESSION['message'] = 'Dato eliminado';
    $_SESSION['message_type'] = 'danger';
    header('Location: index.php');
  }
?>