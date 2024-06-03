<?php
/* Smarty version 4.5.2, created on 2024-06-03 22:42:04
  from 'C:\xampp\htdocs\Aerolinea_David_Yamil\templates\formAeronave.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665e2a9ca4b6a7_92192161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46b9cdd9c36a34e3f958bc656e80c792ff35f88d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aerolinea_David_Yamil\\templates\\formAeronave.tpl',
      1 => 1717447322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e2a9ca4b6a7_92192161 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="col-3 m-auto formAddTask" action="insert_Aeronave" method="POST">
  <legend class="text-center">Ingrese información a la Tabla </legend>
  <div class="mb-3">
    <label class="form-label">nombre de la Aeronave</label>
    <input type="text" name="Aeronave" class="form-control" placeholder="Ingrese nombre">
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
</form><?php }
}
