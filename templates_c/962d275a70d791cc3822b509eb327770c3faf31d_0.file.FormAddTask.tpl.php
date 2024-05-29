<?php
/* Smarty version 4.5.2, created on 2024-05-23 21:31:01
  from 'C:\xampp\htdocs\PROYECTOS\Aerolinea_David_Yamil\templates\FormAddTask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664f99759b9667_49925284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '962d275a70d791cc3822b509eb327770c3faf31d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTOS\\Aerolinea_David_Yamil\\templates\\FormAddTask.tpl',
      1 => 1716492660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664f99759b9667_49925284 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="col-3 m-auto formAddTask" action="newflight" method="POST">
    <legend class="text-center">Tabla de vuelos</legend>
      <div class="mb-3">
        <label class="form-label">nombre de la Aeronave</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
      </div>
      <div class="mb-3">
        <label class="form-label">Destino</label>
        <input type="text" name="Destino" class="form-control" placeholder="Ingrese descripción">
      </div>
      <div class="mb-3">
        <label class="form-label">Escala</label>
        <input type="text" name="Escala" class="form-control" placeholder="Ingrese descripción">
      </div>
      <div class="mb-3">
        <label class="form-label">Precio</label>
        <input type="text" name="Precio" class="form-control" placeholder="Ingrese descripción">
      </div>
      <div class="mb-3">
       <label for="fecha">Fecha del vuelo:</label>
       <input type="datetime-local" name="fecha">
      </div>
      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>
<?php }
}
