<?php

include("db.php");

if (isset($_POST['save'])){
    $title = $_POST['title'];
    $description = $_POST['description'];



    $query = "INSERT INTO tareas(titulo, descripcion) VALUES ('$title', '$description')";
    $result = mysqli_query($enlace, $query);
    if (!$result) {
        die("query failed");
        # code...
    }
    $_SESSION['message'] = 'Datos Guardados';
    $_SESSION['message_type']= 'success';
    header("location: index.php");
}
?>