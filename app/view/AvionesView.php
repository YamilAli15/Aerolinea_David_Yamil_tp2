<?php
require_once "templates/htmlEnd.php";
require_once "templates/htmlStart.php";;
require_once "templates/AircraftTables.php";
require_once "templates/NavigationBar.php";

class planes {

  
function AvionesView($tareas){
    htmlStart();  
    NavigationBar();
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
      

     echo"<tr>$col1 $col2 $col3 $col4</tr>";
    }
    ?>
   </tbody>
   </table>
 </div>';

<?php 
htmlEnd();}}
?>
