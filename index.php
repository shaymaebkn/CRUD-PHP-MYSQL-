
    <?php 
    include 'template/header.php'
    ?>
     <?php 
    include_once 'model/connect.php';

    $requete = "SELECT * FROM `persons`" ;
    $query = mysqli_query($con,$requete);
    ?>
    
  <div class="container mt-7">
      <div class="row justify-content-center">
          <div class="col-md-7">
              <div class="card-header">
                  lista de personas 
                  <table class="table align-middle">
                      <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">last name</th>
                            <th scope="col">Date </th>
                            <th scope="col">Departement</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Function</th>
                            <th scope="col "colspane="2">picture</th>
                            <th scope="col">operations</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php 
                                foreach($query as $data){ 
                        ?>
                          <tr>
                              <td scope="row"><?php echo $data['id']; ?></td>
                              <td><?php echo $data['first_name']; ?></td>
                              <td><?php echo $data['last_name']; ?></td>
                              <td><?php echo $data['date']; ?></td>
                              <td><?php echo $data['department']; ?></td>
                              <td><?php echo $data['salary']; ?></td>
                              <td><?php echo $data['function']; ?></td>
                              <td>
                              <img src="<?php echo $data['picture']; ?>" alt="" width="35px" height="35px" style = "border-radius:50% ;"></td>
                            <td>
                              <a class="text-success" href="edit.php?id=<?php echo $data['id']; ?>"><i class="bi bi-pencil-square"></i></a>
                                <a onclick="return confirm('are you sure you wanna delete this row?');" class="text-danger" href="delete.php?id=<?php echo $data['id']; ?>"><i class="bi bi-trash"></i></a>
                            </td>
                          </tr>
                          <?php 
                                }
                            ?>
                      </tbody>
                  </table>
              </div>
          </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                  enter data

                </div>
                <form action="register.php" method="POST" class="p-4">
                    <input type="hidden" name="id" >
                    <div class="mb-3">
                        <label class="form-label" >Name:</label>
                        <input type="text" class="form-control" name="first-name">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Last name:</label>
                        <input type="text" class="form-control" name="last-name">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Date:</label>
                        <input type="date" class="form-control" name="date">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >department:</label>
                        <input type="text" class="form-control" name="department">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >salary:</label>
                        <input type="text" class="form-control" name="salary">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >function:</label>
                        <input type="text" class="form-control" name="function">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >picture:</label>
                        <input type="url"  name="picture"  id="7a" class="form-control" placeholder=" your photo URL"  >

                    </div>
                    <div class="d-grid">
                        <!-- <input type="hidden" name="oculto" value="1"> -->
                        <input type="submit" class="btn btn-primary" name="add" value="Register">
                    </div>
                    



                </form>
            </div>

        </div>

    </div>


  </div>
    

   
    <?php 
    include 'template/footer.php'
    ?>

