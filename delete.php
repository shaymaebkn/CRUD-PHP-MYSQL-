<?php 
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include 'model/connect.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM persons where id='$id'";
    $query = mysqli_query($con,$sql);
    if ($query === TRUE) {
        header('Location: index.php?mensaje=deleted');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>