
    <?php 
    include 'template/header.php'
    ?>
     <?php 
    include_once 'model/connect.php';
    $statement = $bd -> query("SELECT * FROM `persons`");
    $employe = $statement->fetchAll(PDO::FETCH_OBJ);
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
                                foreach($employe as $data){ 
                    ?>
                          <tr>
                              <td scope="row"><?php echo $data->id; ?></td>
                              <td><?php echo $data->first_name; ?></td>
                              <td><?php echo $data->last_name; ?></td>
                              <td><?php echo $data->date; ?></td>
                              <td><?php echo $data->department; ?></td>
                              <td><?php echo $data->salary; ?></td>
                              <td><?php echo $data->function; ?></td>
                              <td>
                              <img src="<?php echo $data->picture; ?>" alt="this is a employees photo" width="35px" height="35px" style = "border-radius:50% ;"></td>
                            <td>
                              <td><a class="text-success" href="edit.php?id=<?php echo $data->id; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('are you sure you wanna delete this row?');" class="text-danger" href="delete.php?id=<?php echo $data->id; ?>"><i class="bi bi-trash"></i></a></td>
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
                    <!-- <div class="mb-3">
                        <label class="form-label" >picture:</label>
                        <input type="url"  name="picture"  id="7a" class="form-control" placeholder=" your photo URL"  >

                    </div> -->
                    <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-image"></i>
                    </span>
                    <input type="file"  name="picture"  id="7a" class="form-control"  >
                    <span class="input-group-text">
                        <i class="bi bi-arrow-counterclockwise"></i>
                        </span>
                    </div>
                    
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Register">
                    </div>
                    



                </form>
            </div>

        </div>

    </div>


  </div>
    

   
    <?php 
    include 'template/footer.php'
    ?>



<!-- <h2></h2>
                    <div class="col-md-4">
                        <label for="validationCustom01" name="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="validationCustom01" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">Matricule</label>
                        <div class="input-group has-validation">

                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"
                            required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Departement</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                        Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">Salaire</label>
                        <input type="text" class="form-control" id="validationCustom04" required>

                        <div class="invalid-feedback">
                        Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">Fonction</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="mb-3" style="width: 400px;">
                        <label for="formFile" class="form-label">photo</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                    </div>
                </form> -->
                  