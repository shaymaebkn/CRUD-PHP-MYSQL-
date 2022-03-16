<!-- <?php include 'template/header.php' ?>

<?php

include'model/connect.php';
    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        $requete = "SELECT * FROM `persons` where id";
        $query = mysqli_query($con,$requete);
        $rows=mysqli_fetch_assoc($query);
        // $id = $rows['id'];
        $first_name = $rows['first_name'];
        $last_name = $rows['last_name'];
        $date = $rows['date'];
        $department = $rows['department'];
        $salary = $rows['salary'];
        $function = $rows['function'];
        $pic = $rows['picture'];
       
    }else{
         header('Location: index.php?mensaje=eroor');
        exit();
    }

    // include_once 'model/connect.php';
    // $id = $_GET['id'];
    // $statement = $bd->prepare("SELECT * FROM persons WHERE id = ?;");
    // $statement->execute([$id]);
    // $person = $statement->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
            <div class="card-header">
                  edit data
                </div> 
                <?php 
                    ?>
                <form action="editprocess2.php?id=<?php echo $id ; ?>" method="POST" class="p-4">
                    <div class="mb-3">
                    <input type="hidden" name="id" value="<?php if(isset($_GET['id'])){echo $id;}?>">
                        <label class="form-label" >Name:</label>
                        <input type="text" class="form-control" name="first-name"
                        value="<?php if(isset($_GET['id'])){echo $first_name;}?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Last name:</label>
                        <input type="text" class="form-control" name="last-name"
                        value="<?php if(isset($_GET['id'])){echo $last_name;}?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Date:</label>
                        <input type="date" class="form-control" name="date"
                        value="<?php if(isset($_GET['id'])){echo $date;}?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >department:</label>
                        <input type="text" class="form-control" name="department"
                        value="<?php if(isset($_GET['id'])){echo $department;}?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >salary:</label>
                        <input type="text" class="form-control" name="salary"
                        value="<?php if(isset($_GET['id'])){echo $salary;}?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >function:</label>
                        <input type="text" class="form-control" name="function"
                        value="<?php if(isset($_GET['id'])){echo $function;}?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >picture:</label>
                        <input type="URL" class="form-control" name="picture"
                        value="<?php if(isset($_GET['id'])){echo $pic;}?>">
                    </div>
                    <div class="d-grid">
                        <input onclick="return confirm('are you sure you wanna edit this employee?');" type="submit" class="btn btn-primary" name="edit" value="edit">
                    </div>
                    
                </form>
            </div>
            <?php  ?>
        </div>
    </div>
</div>
<?php  include 'template/footer.php' ?> -->