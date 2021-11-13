<?php
$conexion=mysqli_connect('localhost','root','','bd_generacionhorarios');
$Grupo=$_POST['Grupo'];

    $sql="SELECT eCodGrupo,
            tClaveGrupo,
            tSemestre,
            tGeneracion,
            fFechaRegistro,
            bEstatus
        from cat_grupos
        where tClaveGrupo='$Grupo'";
    
    $result=mysqli_query($conexion,$sql);

    $cadena="<label> SELECT 2 (Grupo)</label>
            <select id='lista2' name='lista2'>";
    
    while ($ver=mysqli_fetch_row($result)) {
        $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';

    }

    echo $cadena."</select";

?>