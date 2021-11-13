<?php include ('../header/header.php'); ?>
<center><h4> REGISTRO MATERIAS </h4></center>
<?php include ("database.php");
$materia = new Database();
if (isset($_POST) && !empty($_POST)){
    $tNombreMateria = $materia->sanitize($_POST['tNombreMateria']);
    $tDescripcionMateria = $materia->sanitize($_POST['tDescripcionMateria']);

    $res = $materia->altamaterias($tNombreMateria,$tDescripcionMateria);
    if ($res){
        $message = "Datos insertados con exito";
        $class = "alert alert-success";
    }
    else{ 
        $message = "No se pudieron insertar los datos";
        $class = "alert alert-danger";
    }
    ?>
    <div class="<?php echo $class?>">
        <?php echo $message ?>
    </div>
    <?php
}
?>
<form method="post">
<div class="container">
            <div class="row">
                <div class="col-md-3">
                    <label>Nombre de Materia</label>
                    <input type="text" name="tNombreMateria" id="tNombreMateria" class='form-control' required >
                </div>
                <div class="col-md-3">
                    <label>Descripcion de Materia</label>
                    <input type="text" name="tDescripcionMateria" id="tDescripcionMateria" class='form-control' required >
                </div>
        </div>
        </div>
<div class="col-md-12 pull-right">
    <br /> 
    <center>
        <button type="submit" class="btn btn-succes"><i class="fa fa-floppy-o" aria-hidden="true">&nbsp;Guardar Materia
    <center>
    </div>
    </div>
</form>
<?php include('../footer/footer.php');?>