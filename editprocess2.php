<?php
if(!isset($_POST['add'])){

   

    include_once 'model/connect.php';
    $id = $_POST['id'];
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $date = $_POST['date'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $function = $_POST['function'];
    $pic = $_POST['picture'];

    
    // $statements = $bd->prepare("UPDATE `persons` SET `first_name`='?',`last_name`='?',
    // `date`='?',`department`='?',`salary`='?',`function`='?',`picture`='?' WHERE `id`='?'");
    // $result = $statements->execute([$first_name,$last_name,$date,$department,$salary,$function,$pic,$id]);

    $sql= "UPDATE persons SET first_name='$first_name', last_name='$last_name', `date` ='$date',
    `department`='$department',`salary`='$salary',`function`='$function',`picture`='$pic' WHERE `id`='$id'";
    $q=mysqli_query($con,$sql);

    // if ($q === TRUE) {
        header('Location: index.php?mensaje=register');
   
} else {
     header('Location: index.php?mensaje=EROOR');
}

?>