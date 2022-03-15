<?php
    include_once 'model/connect.php';
    // $id = $_POST['id'];
    if (isset($_POST['add'])){
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $date = $_POST['date'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $function = $_POST['function'];
    $pic = $_POST['picture'];

    // $statement = $bd->prepare("INSERT INTO `persons`( `first_name`, `last_name`, `date`, `department`, `salary`, `function`, `picture`) 
    //                            VALUES (?,?,?,?,?,?,?)");
    // $result = $statement->execute([$first_name,$last_name,$date,$department,$salary,$function,$pic]);

    $requete = "INSERT INTO `persons`( `first_name`, `last_name`, `date`, `department`, `salary`, `function`, `picture`) 
     VALUES ('$first_name','$last_name','$date','$department','$salary','$function','$pic')";
    $query = mysqli_query($con,$requete);

    // if ($query === TRUE) {
        header('Location:index.php?message=register');
    // } 
    
} else {
        header('Location:index.php?message=error');
        exit();
}
?>
