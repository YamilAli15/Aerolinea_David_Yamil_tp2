<?php
/* Smarty version 4.5.2, created on 2024-05-28 22:17:02
  from 'C:\xampp\htdocs\Aerolinea_David_Yamil\templates\formAddTask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_66563bbebade61_57682390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1baa003e65d96a891a567f69d13181610c8b1f97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aerolinea_David_Yamil\\templates\\formAddTask.tpl',
      1 => 1716927421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:NavigationBar.tpl' => 1,
  ),
),false)) {
function content_66563bbebade61_57682390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:NavigationBar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="col-3 m-auto formAddTask" action="insert_vuelo" method="POST">
    <legend class="text-center">Ingrese información a la Tabla </legend>
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
