<?php
    // print_r($_POST);
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/connect.php';
    $id = $_POST['id'];
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $date = $_POST['date'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $function = $_POST['function'];
    $pic = $_POST['picture'];

    $statment = $bd->prepare("UPDATE `persons` SET  `first_name` = `?` ,
     `last_name`= `?` , `date` = `?`, `department`=`?`, `salary`=`?`, `function` = `?`, `picture` = `?` WHERE `id`= `?` ;") ;
    $result = $statment->execute([$first_name,$last_name,$date,$department,$salary,$function,$pic]);

    if ($result === TRUE) {
        header('Location: index.php?mensaje=editado');

    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>