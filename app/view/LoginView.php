<?php
require_once "templates/htmlEnd.php";
require_once "templates/htmlStart.php";
require_once "templates/LoginMenu.php";
require_once "templates/NavigationBar.php";
class login { 
function login(){
    htmlStart();   
    NavigationBar(); 
    LoginMenu();
    ?>
   </div>
<?php 
htmlEnd();}}
?>