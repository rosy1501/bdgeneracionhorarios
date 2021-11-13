<?php include('../header/header.php'); ?>
<center><h4>Listado de Materias</h4></center>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th> ID Materia</th>
                <th> Nombre de Materia</th>
                <th> Descripcion de Materia</th>
                <th> Fecha de registro</th>
            </tr>
        </thead>
            <?php
                include ('database.php');
                $materia = new Database();
                $listadomateria = $materia->listadomateria();
            ?>
        <tbody>
        <?php 
            while($row = mysqli_fetch_object($listadomateria)){
                $eCodMaterias           =$row->eCodMaterias;
                $tNombreMateria         =$row->tNombreMateria;
                $tDescripcionMateria    =$row->tDescripcionMateria;
                $fFechaRegistroMateria  =$row->fFechaRegistroMateria;
            
            
        ?>
            <tr>
                <td><?php echo $eCodMaterias; ?></td>
                <td><?php echo $tNombreMateria; ?></td>
                <td><?php echo $tDescripcionMateria;?></td>
                <td><?php echo $fFechaRegistroMateria; ?></td>
            <td>
<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
  o
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Seleccionar docente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="col-md-4">
            <label>Nombre del Docente</label> 
              <select id="tNombreDocente" name="tNombreDocente" class="form-control">
                  <option disabled selected>Seleccione el Nombre del docente</option>
                  <?php include ("database.php");
                      $query = $mysqli->query("SELECT * FROM cat_docentes");
                      while ($valores = mysqli_fetch_array($query)){

                          echo "<option value=".$valores['eCodDocente'].">".$valores['tNombreDocente'].'</option>';
                      }
                      ?>
                </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>
<?php include('../footer/footer.php'); ?>