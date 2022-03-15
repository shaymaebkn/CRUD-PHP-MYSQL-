<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=eroor');
        exit();
    }

    include_once 'model/connect.php';
    $id = $_GET['id'];

    $requete = "SELECT * FROM `persons`" ;
    $query = mysqli_query($con,$requete);

  

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
                  editar data

                </div> 
                <?php foreach ($query as $person) { 
                    ?>
                <form action="editprocess2.php?id=<?php echo $person['id']; ?>" method="POST" class="p-4">
                    <div class="mb-3">
                    <input type="hidden" name="id" value="<?php  echo $person['id'];?>">
                        <label class="form-label" >Name:</label>
                        <input type="text" class="form-control" name="first-name"
                        value="<?php echo $person['first_name']; ?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Last name:</label>
                        <input type="text" class="form-control" name="last-name"
                        value="<?php echo $person['last_name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Date:</label>
                        <input type="date" class="form-control" name="date"
                        value="<?php echo $person['date']; ?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >department:</label>
                        <input type="text" class="form-control" name="department"
                        value="<?php echo $person['department']; ?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >salary:</label>
                        <input type="text" class="form-control" name="salary"
                        value="<?php echo $person['salary']; ?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >function:</label>
                        <input type="text" class="form-control" name="function"
                        value="<?php echo $person['function']; ?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >picture:</label>
                        <input type="file" class="form-control" name="picture"
                        value="<?php echo $person['picture']; ?>">

                    </div>
                    <div class="d-grid">
                        
                        <input type="submit" class="btn btn-primary" value="edit">
                    </div>
                    
                </form>
            </div>
            <?php } ?>
        </div>
    </div>
</div>



<?php  include 'template/footer.php' ?>