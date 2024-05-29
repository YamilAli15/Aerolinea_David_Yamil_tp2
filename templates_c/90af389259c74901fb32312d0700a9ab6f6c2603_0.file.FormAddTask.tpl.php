<?php
/* Smarty version 4.5.2, created on 2024-05-27 20:50:40
  from 'C:\xampp\htdocs\Aerolinea_David_Yamil\templates\FormAddTask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6654d600307029_72477000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90af389259c74901fb32312d0700a9ab6f6c2603' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aerolinea_David_Yamil\\templates\\FormAddTask.tpl',
      1 => 1716835837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6654d600307029_72477000 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="col-3 m-auto formAddTask" action="insert_vuelo" method="POST">
    <legend class="text-center">Tabla de vuelos</legend>
      <div class="mb-3">
        <label class="form-label">nombre de la Aeronave</label>
        <input type="text" name="Aeronave" class="form-control" placeholder="Ingrese nombre">
      </div>
      <div class="mb-3">
        <label class="form-label">Destino</label>
        <input type="text" name="Destino" class="form-control" placeholder="Ingrese descripción">
      </div>
      <div class="mb-3">
        <label class="form-label">Precio</label>
        <input type="text" name="Precio" class="form-control" placeholder="Ingrese descripción">
      </div>
      <div class="mb-3">
       <label for="fecha">Fecha del vuelo:</label>
       <input type="datetime-local" name="Fecha">
      </div>
      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>
<?php }
}
