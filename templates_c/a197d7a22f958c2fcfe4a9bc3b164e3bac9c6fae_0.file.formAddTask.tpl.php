<?php
/* Smarty version 4.5.2, created on 2024-05-30 21:17:07
  from 'C:\xampp\htdocs\PROYECTOS\Aerolinea_David_Yamil\templates\formAddTask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6658d0b398edb7_70868708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a197d7a22f958c2fcfe4a9bc3b164e3bac9c6fae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTOS\\Aerolinea_David_Yamil\\templates\\formAddTask.tpl',
      1 => 1717010116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:NavigationBar.tpl' => 1,
  ),
),false)) {
function content_6658d0b398edb7_70868708 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:NavigationBar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="col-3 m-auto formAddTask" action="insert_Aeronave" method="POST">
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
     <div class="mb-3">
        <label class="form-label">Destino</label>
        <input type="text" name="Destino" class="form-control" placeholder="Ingrese descripción">
      </div>
      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>
<?php }
}
