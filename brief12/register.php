<?php
    //print_r($_POST);
    // if(empty($_POST["oculto"]) || empty($_POST["first-name"]) || empty($_POST["last-name"]) || empty($_POST["date"]) 
    // || empty($_POST["departement"]) || empty($_POST["salary"]) || empty($_POST["function "]) 
    // || empty($_POST["picture"])){

    //     header('Location: index.php?mensaje=falta');
    //     exit();
    // }

    include_once 'model/connect.php';
    $id = $_POST['id'];
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $date = $_POST['date'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $function = $_POST['function'];
    $pic = $_POST['picture'];

    $statement = $bd->prepare("INSERT INTO `persons`( `first_name`, `last_name`, `date`, `department`, `salary`, `function`, `picture`) 
                               VALUES (?,?,?,?,?,?,?)");
    $result = $statement->execute([$first_name,$last_name,$date,$department,$salary,$function,$pic]);

    if ($result === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>
