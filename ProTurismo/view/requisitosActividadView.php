<!DOCTYPE html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Turismo Rural</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php 
         include '../business/requisitosActividadBusiness.php';
         
     ?>

</head>

<body>

    <header> 
        </header>
    
             <h1>REQUISITOS DE ACTIVIDAD</h1>
             <br>
             <form id="form" method="post" action="../Business/requisitosActividadAction.php">
                    Edad:
                    <input required type="number" name="edadRequisitosActividad" id="edadRequisitosActividad" />
                    <br>
                    <br>
                    Conocimiento:<br>
                    <textarea required name="conocimientoRequisitosActividad" id="conocimientoRequisitosActividad" cols="30" rows="5" placeholder="Describa los conocimientos"></textarea>
                    <br>
                    <br>
                    Estado Fisico:<br>
                    <textarea required name="estadoFisicoRequisitosActividad" id="estadoFisicoRequisitosActividad"cols="30" rows="5" placeholder="Describa su estado fisico"></textarea>				
   							
                    <br>
                    <br>
                    Equipo Necesario:<br>
                    <textarea required name="equipoNecesarioRequisitosActividad" id="equipoNecesarioRequisitosActividad" cols="30" rows="5" placeholder="Describa el equiponecesario"></textarea>
                    <br>
                    <br>
                    Aptitudes:<br>
                    <textarea required name="aptitudesRequisitosActividad" id="aptitudesRequisitosActividad" cols="30" rows="5" placeholder="Describa las aptitudes"></textarea>
                    <br>
                    <br>
                    
                    <input type="submit" value="Guardar" name="guardarRequisitosActividad" id="guardarRequisitosActividad"/><br><br>

    </form>

    <table>
        <tr>
            <th>Edad  </th>
            <th>Conocimiento </th>
            <th>Estado fisico </th>
            <th>Equipo necesario </th>
            <th>Aptitudes </th>
        </tr>

         <?php
            $requisitosActividadBusiness = new requisitosActividadBusiness();
                 
            $todosRequisitosActividad = $requisitosActividadBusiness->mostrarTodosRequisitosActividad();
             foreach ($todosRequisitosActividad as $requisitosActividad) {
                echo '<form method="post" enctype="multipart/form-data" action="../business/requisitosActividadAction.php">';
                echo '<input type="hidden" name="idRequisitosActividad" id="idRequisitosActividad" value="' . $requisitosActividad->getIdRequisitosActividad() .'">';
                echo '<tr>';
                echo '<td><input type="number" name="edadRequisitosActividad" id="edadRequisitosActividad" value="' . $requisitosActividad->getEdadRequisitosActividad() . '"/></td>';

                echo '<td><textarea name="conocimientoRequisitosActividad" id="conocimientoRequisitosActividad"> '.$requisitosActividad->getConocimientoRequisitosActividad().'</textarea></td>';
                  echo '<td><textarea name="estadoFisicoRequisitosActividad" id="estadoFisicoRequisitosActividad">'.$requisitosActividad->getEstadoFisicoRequisitosActividad() .'</textarea></td>';  
                 echo '<td><textarea  name="equipoNecesarioRequisitosActividad" id="equipoNecesarioRequisitosActividad"> '. $requisitosActividad->getEquipoNecesarioRequisitosActividad().'</textarea></td>';
                echo '<td><textarea name="aptitudesRequisitosActividad" id="aptitudesRequisitosActividad" >'. $requisitosActividad->getAptitudesRequisitosActividad().'</textarea></td>';


                echo '<td><input type="submit" value="Actualizar" name="update" id="update"/></td>';
                echo '<td><input type="submit" value="Eliminar" name="delete" id="delete"/></td>';
             
                echo '</tr>';
                echo '</form>';
            }
          ?>

        
    </table>

    <footer>
    </footer>

</body>
</html>
