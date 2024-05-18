<?php
require_once "templates/htmlEnd.php";
require_once "templates/htmlStart.php";
require_once "templates/formAddTask.php";
require_once "templates/NavigationBar.php";
class Home { 
function Homepage(){
    htmlStart(); 
    NavigationBar();  

    ?>
  <div id="planes">
     <h1>VOLÁ EN AEROLINEAS</h1>
          <img src="Imágenes/aviones1.png" alt="">
     <h2>VOLA A MIAMI, CON LAS MEJORES OFERTAS </h2>
         <img src="Imágenes/aviones2.png" alt="">
     <h3>CONOCE TIMES SQUARE</h3>
         <img src="Imágenes/aviones3.png" alt="">
   </div>
<?php 
htmlEnd();}}
?>