<?php
require_once "templates/htmlEnd.php";
require_once "templates/htmlStart.php";
require_once "templates/AircraftTables.php";
require_once "templates/formAddTask.php";
require_once "templates/NavigationBar.php";
class ModifyAirplane{
      
       function ModifyAirplane($tareas){
        htmlStart(); 
        NavigationBar();
        showFormAddTask();
        AircraftTables();
?>

<?php
    

    if(count($tareas) == 0){
      echo"<tr>
        <td colspan=5>No hay tareas para mostrar</td>
     </tr>";
    }
    foreach ($tareas as $tarea) {
       $col1 = "<td>$tarea->Aeronave</td>";
       $col2 = "<td>$tarea->Destino</td>";
       $col3 = "<td>$tarea->Escala</td>";
       $col4 = "<td>$tarea->Precio</td>";
       $col5 = "<td>$tarea->Fecha</td>";
       $col6 = !$tarea->finalizada 
     ?
       "<td>
            <a href='show/$tarea->id' class='btn btn-primary'>Ver</a>
            <a href='finalize/$tarea->id' class='btn btn-success'>Finalizar</a>
        </td>"
     :
      "<td>            
          <a href='delete/$tarea->id' class='btn btn-danger'>Eliminar</a>
      </td>";

     $class = $tarea->finalizada ? "finalizada": "";

     echo"<tr class='$class'>$col1 $col2 $col3 $col4 $col5 $col6</tr>";
    }
?>
        </tbody>
        </table>
    </div>;
<?php 
htmlEnd();}}
?>
