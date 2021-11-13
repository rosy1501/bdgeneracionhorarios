<?php include ("header/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-3">
            <center>Catalogos</center>
            <div class="row">
                <div class="col-md-12">
                    <label>Turno</label>
                    <select class="form-control" name="tTurnoHorario" id="tTurnoHorario" required>
                        <option value = 0 disabled selected>Selecciona el Turno (Matutino, Vespertino, Nocturno</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label>Modalidad</label>
                    <select class="form-control" name="tModalidadHorario" id="tModalidadHorario" required>
                        <option value = 0 disabled selected>Selecciona la Modalidad(Escolarizado, Semiescolarizado)</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label>Grupo</label>
                    <select class="form-control" name="tGrupoHorario" id="tGrupoHorario" required>
                        <option value = 0 disabled selected>Selecciona el Grupo</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label>Docentes</label>
                    <select class="form-control" name="tDocenteHorario" id="tDocenteHorario" required>
                        <option value = 0 disabled selected>Selecciona al Docente</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label>Materia</label>
                    <select class="form-control" name="tMateriaHorario" id="tMateriaHorario" required>
                        <option value = 0 disabled selected>Selecciona el horario</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label>Campus</label>
                    <select class="form-control" name="tCampusHorario" id="tCampusHorario" required>
                        <option value = 0 disabled selected>Selecciona el Campus</option>
                    </select>
                </div>
        </div>


        </div>
        <div class="col-9">
            <center>Generacion Horarios</center>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Horas</th>
                    <th scope="col">Lunes</th>
                    <th scope="col">Martes</th>
                    <th scope="col">Miercoles</th>
                    <th scope="col">Jueves</th>
                    <th scope="col">Viernes</th>
                    <th scope="col">Sabado</th>
                    <th scope="col">Domingo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">7:00 - 8:00</th>
                    <td>
                        <div class="col-md-20">
                            <label>Materia</label>
                            <select class="form-control" name="tMateriaHorario" id="tMateriaHorario" required>
                                <option value = 0 disabled selected>Selecciona la materia</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-20">
                            <label>Materia</label>
                            <select class="form-control" name="tMateriaHorario" id="tMateriaHorario" required>
                                <option value = 0 disabled selected>Selecciona la materia</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-20">
                            <label>Materia</label>
                            <select class="form-control" name="tMateriaHorario" id="tMateriaHorario" required>
                                <option value = 0 disabled selected>Selecciona la materia</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-20">
                            <label>Materia</label>
                            <select class="form-control" name="tMateriaHorario" id="tMateriaHorario" required>
                                <option value = 0 disabled selected>Selecciona la materia</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-20">
                            <label>Materia</label>
                            <select class="form-control" name="tMateriaHorario" id="tMateriaHorario" required>
                                <option value = 0 disabled selected>Selecciona la materia</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-20">
                            <label>Materia</label>
                            <select class="form-control" name="tMateriaHorario" id="tMateriaHorario" required>
                                <option value = 0 disabled selected>Selecciona la materia</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-20">
                            <label>Materia</label>
                            <select class="form-control" name="tMateriaHorario" id="tMateriaHorario" required>
                                <option value = 0 disabled selected>Selecciona la materia</option>
                            </select>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">8:00 - 9:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <th scope="row">9:00 - 10:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <th scope="row">10:00 - 11:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <th scope="row">11:00 - 12:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <th scope="row">13:00 - 14:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <th scope="row">14:00 - 15:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <th scope="row">15:00 - 16:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <th scope="row">16:00 - 17:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <th scope="row">17:00 - 18:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <th scope="row">18:00 - 19:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <th scope="row">19:00 - 20:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <th scope="row">20:00 - 21:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <th scope="row">21:00 - 22:00</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>  
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("footer/footer.php"); ?>