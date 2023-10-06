
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
      <tr>
      <div class="card card-body" style="border: 5px solid blue; padding: 8px;">
      <h1 style="text-align: center; font-family: Arial Black, sans-serif;">PROMEDIO DE NOTAS ALUMNOS</h1>
    </div>
    </div> 
    <br>

        <form action="save.php" method="POST">
          <div class="form-group">
            <input type="text" name="cedula" class="form-control" placeholder="CÉDULA" autofocus>
        </div>
        <div class="form-group">
          <input type="text" name="nombre" class="form-control" placeholder="NOMBRE">
        </div>
        <div class="form-group">
          <input type="text" name="nota_matematica" class="form-control" placeholder="NOTA MATEMATICA">
        </div>
        <div class="form-group">
          <input type="text" name="nota_fisica" class="form-control" placeholder="NOTA FÍSICA">
        </div>
        <div class="form-group">
          <input type="text" name="nota_programacion" class="form-control" placeholder="NOTA PROGRAMACION">
        </div>
        <input type="submit" name="save" class="btn btn-success btn-block" value="GUARDAR DATOS">
      </form>
      </div>
    </div>

    <div class="col-md-8">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="text-align: center; font-family: Arial, sans-serif; line-height: 2">Nota Promedio Matemática</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th style="font-family: Arial, sans-serif; line-height: 2">Nota Promedio Física</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th style="font-family: Arial, sans-serif; line-height: 2">Nota Promedio Programación</th>
      </tr>
    </thead>
    <tbody>
      <div class="card card-body" style="border: 3px solid blue; padding: 1px;">
        <h1 style="text-align: center; font-family: Arial Black, sans-serif;">Nota Promedio de cada Materia</h1>
        <?php
        $query = "SELECT AVG(nota_matematica) AS nota_matematica, AVG(nota_fisica) AS nota_fisica , AVG(nota_programacion) AS nota_programacion FROM alumnos";
        $result_tasks = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo number_format($row['nota_matematica'], 1); ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo number_format($row['nota_fisica'], 1); ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo number_format($row['nota_programacion'], 1); ?></td>
          </tr>
        <?php } ?>
      </div>
    </tbody>
    <br>
  </table>
</div>
<br>
    <div class="col-md-8">
      <table class="table table-bordered; ">
        <thead>
          <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <th style="text-align: center; font-family: Arial, sans-serif; line-height: 2">Alumnos Aprobados</th>
          </tr>
        </thead>
        <tbody>
        <div class="card card-body" style="border: 3px solid gray; padding: 1px;">
        <h1 style="text-align: center; font-family: Arial Black, sans-serif;">Alumnos Aprobados en Matemática</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_matematica >= 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['aprobados']; ?></td>
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
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <th style="text-align: center; font-family: Arial, sans-serif; line-height: 2">Alumnos Aprobados</th>
          </tr>
        </thead>
        <tbody>
          <div class="card card-body" style="border: 3px solid gray; padding: 1px;">
          <h1 style="text-align: center; font-family: Arial Black, sans-serif;">Alumnos Aprobados en Física</h1>

        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_fisica >= 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['aprobados']; ?></td>
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
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <th style="text-align: center; font-family: Arial, sans-serif; line-height: 2">Alumnos Aprobados</th>
          </tr>
        </thead>
        <tbody>
          <div class="card card-body" style="border: 3px solid gray; padding: 1px;">
          <h1 style="text-align: center; font-family: Arial Black, sans-serif;">Alumnos Aprobados en Programación</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_programacion >= 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['aprobados']; ?></td>
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
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <th style="text-align: center; font-family: Arial, sans-serif; line-height: 2">Alumnos Reprobados</th>
          </tr>
        </thead>
        <tbody>
          <div class="card card-body" style="border: 3px solid gray; padding: 1px;">
          <h1 style="text-align: center; font-family: Arial Black, sans-serif;">Alumnos Reprobados en Matemática</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_matematica < 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['aprobados']; ?></td>
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
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <th style="text-align: center; font-family: Arial, sans-serif; line-height: 2">Alumnos Reprobados</th>
          </tr>
        </thead>
        <tbody>
        <div class="card card-body" style="border: 3px solid gray; padding: 1px;">
          <h1 style="text-align: center; font-family: Arial Black, sans-serif;">Alumnos Reprobados en Física</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_fisica < 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['aprobados']; ?></td>
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
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <th style="text-align: center; font-family: Arial, sans-serif; line-height: 2">Alumnos Reprobados</th>
          </tr>
        </thead>
        <tbody>
        <div class="card card-body" style="border: 3px solid gray; padding: 1px;">
          <h1 style="text-align: center; font-family: Arial Black, sans-serif;">Alumnos Reprobados en Programación</h1>

        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_programacion < 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['aprobados']; ?></td>
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
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <th style="text-align: center; font-family: Arial, sans-serif; line-height: 2">Alumnos Aprobados</th>
          </tr>
        </thead>
        <tbody>
        <div class="card card-body" style="border: 3px solid gray; padding: 1px;">
          <h1 style="text-align: center; font-family: Arial Black, sans-serif;">Alumnos que Aprobaron todas las Materias</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_programacion >= 10 and nota_fisica >= 10 and nota_matematica >= 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['aprobados']; ?></td>
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
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <th style="text-align: center; font-family: Arial, sans-serif; line-height: 2">Alumnos Aprobados</th>
          </tr>
        </thead>
        <tbody>
        <div class="card card-body" style="border: 3px solid gray; padding: 1px;">
          <h1 style="text-align: center; font-family: Arial Black, sans-serif;">Alumnos que Aprobaron una sola Materia</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_programacion >= 10 and nota_fisica < 10 and nota_matematica < 10 or nota_programacion < 10 and nota_fisica >= 10 and nota_matematica < 10 or nota_programacion < 10 and nota_fisica < 10 and nota_matematica >= 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['aprobados']; ?></td>
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
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <th style="text-align: center; font-family: Arial, sans-serif; line-height: 2">Alumnos Aprobados</th>
          </tr>
        </thead>
        <tbody>
        <div class="card card-body" style="border: 3px solid gray; padding: 1px;">
          <h1 style="text-align: center; font-family: Arial Black, sans-serif;">Alumnos que Aprobaron Dos Materias</h1>
        <?php
          $query = "SELECT count(*) as aprobados from alumnos where nota_programacion >= 10 and nota_fisica >= 10 and nota_matematica < 10 or nota_programacion >= 10 and nota_fisica < 10 and nota_matematica >= 10 or nota_programacion < 10 and nota_fisica >= 10 and nota_matematica >= 10";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo $row['aprobados']; ?></td>
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
          <th style="text-align: center; font-family: Arial, sans-serif; line-height: 2">Nota Máxima Matemática</th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th style="font-family: Arial, sans-serif; line-height: 2">Nota Máxima Física</th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th style="font-family: Arial, sans-serif; line-height: 2">Nota Máxima Programación</th>
          </tr>
        </thead>
        <tbody>
        <div class="card card-body" style="border: 3px solid blue; padding: 1px;">
          <h1 style="text-align: center; font-family: Arial Black, sans-serif;">Nota Máxima en Cada Materia</h1>
        <?php
          $query = "SELECT MAX(nota_matematica) AS nota_matematica, MAX(nota_fisica) AS nota_fisica , MAX(nota_programacion) AS nota_programacion FROM alumnos";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
          <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo number_format($row['nota_matematica']); ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo number_format($row['nota_fisica']); ?></td>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td style="text-align: center;font-family: Arial, sans-serif; border-bottom: 1px solid black;"><?php echo number_format($row['nota_programacion']); ?></td>

          </tr>
          <?php } ?>
        </tbody>
      </table>
      <br>
    </div>
    <br>
</main>

