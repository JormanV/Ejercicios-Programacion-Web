
<?php include("db.php"); ?>
<main class="container p-4">
  <div class="row">
    <div class="col-md-4">


      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        </button>
      </div>
      <?php session_unset(); } ?>
      
      <div style="display: flex; justify-content: center; align-items: center; height: 50vh;">
        <div class="card card-body" style="border: 5px solid blue; padding: 10px; text-align: center;">
          <h1 style="font-family: Arial Black, sans-serif;">CONTROL DE EMPLEADOS</h1>
          <form action="save.php" method="POST">
            <div class="form-group">
              <input type="text" name="nombre" class="form-control form-control-lg" placeholder="Nombre" autofocus><br>
              <input type="text" name="apellido" class="form-control form-control-lg" placeholder="Apellido"><br>
              <input type="text" name="estado_civil" class="form-control form-control-lg" placeholder="Estado Civil: Casado/Viuda"><br>
              <input type="text" name="sexo" class="form-control form-control-lg" placeholder="Sexo: Masculino/Femenino"><br>
              <input type="text" name="sueldo" class="form-control form-control-lg" placeholder="Sueldo"><br>
              <input type="text" name="edad" class="form-control form-control-lg" placeholder="Edad"><br>
            </div>
            <input type="submit" name="save" class="btn btn-success btn-block btn-lg" value="Guardar">
        </form>
      </div>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="text-align: center; font-family: Arial, sans-serif; line-height: 2">Nombre</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Apellido</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Estado Civil</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Sexo</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Sueldo</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Edad</th>
          </tr>
        </thead>
        <tbody>
          <div class="card card-body" style="border: 5px solid gray; padding: 1px;">
          <h1 style="text-align: center; font-family: Arial Black, sans-serif;">Empleados Femeninos</h1>
        <?php
          $query = "SELECT * FROM empleados WHERE sexo = 'Femenino'";
          $result_tasks = mysqli_query($conn, $query);  
          $femeninos = mysqli_num_rows($result_tasks);  
          ?>
          <p style="font-family: Arial, sans-serif;">Total Empleados Femeninos: <?php echo $femeninos; ?></p>
              <?php
          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['nombre']; ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['apellido']; ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['estado_civil']; ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['sexo']; ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['sueldo']; ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['edad']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
        <br>
      </table>
    </div>
    <br>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
          <th style="text-align: center; font-family: Arial, sans-serif; line-height: 2">Nombre</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Apellido</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Estado Civil</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Sexo</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Sueldo</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Edad</th>
          </tr>
        </thead>
        <tbody>
        <div class="card card-body" style="border: 5px solid gray; padding: 1px;">
          <h1 style="text-align: center; font-family: Arial Black, sans-serif;">Hombres casados que ganan mas de 2500</h1>
        <?php
          $query = "SELECT * FROM empleados WHERE sexo = 'Masculino' AND estado_civil = 'Casado' AND sueldo > 2500";
          $result_tasks = mysqli_query($conn, $query);
          $masculino = mysqli_num_rows($result_tasks);  
          ?>
          <p style="font-family: Arial, sans-serif;">Total Hombres casados que ganan más de 2500: <?php echo $masculino; ?></p>    
          <?php

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['nombre']; ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['apellido']; ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['estado_civil']; ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['sexo']; ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['sueldo']; ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['edad']; ?></td>
            
          </tr>
          <?php } ?>
        </tbody>
        <br>
      </table>
    </div>
    <br>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
          <th style="text-align: center; font-family: Arial, sans-serif; line-height: 2">Nombre</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Apellido</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Estado Civil</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Sexo</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Sueldo</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Edad</th>
          </tr>
        </thead>
        <tbody>
        <div class="card card-body" style="border: 5px solid gray; padding: 1px;">
          <h1 style="text-align: center; font-family: Arial Black, sans-serif;">Mujeres viudas que ganan mas de 1000</h1>
        <?php
          $query = "SELECT * FROM empleados WHERE sexo = 'Femenino' AND estado_civil = 'Viuda' AND sueldo > 1000";
          $result_tasks = mysqli_query($conn, $query);
          $viudas = mysqli_num_rows($result_tasks);              
          ?>
          <p style="font-family: Arial, sans-serif;">Total Mujeres viudas que ganan mas de 1000: <?php echo $viudas; ?></p>    
          <?php

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['nombre']; ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['apellido']; ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['estado_civil']; ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['sexo']; ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['sueldo']; ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['edad']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <br>
    </div>
    <br>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
          <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="font-family: Arial, sans-serif; line-height: 2">Edad promedio</th>
          </tr>
        </thead>
        <tbody>
        <div class="card card-body" style="border: 5px solid gray; padding: 1px;">
          <h1 style="text-align: center; font-family: Arial Black, sans-serif;">Edad promedio de los hombre</h1>
        <?php
          $query = "SELECT AVG(edad) as edad FROM empleados WHERE sexo = 'Masculino'";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['edad']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
        <br>
      </table>
    </div>
    <br>

  </div>
</main>

