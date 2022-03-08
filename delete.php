<?php 
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include 'model/connect.php';
    $id = $_GET['id'];

    $statment = $bd->prepare("DELETE FROM `persons` WHERE id = ?;");
    $result = $statment->execute([$id]);

    if ($result === TRUE) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>