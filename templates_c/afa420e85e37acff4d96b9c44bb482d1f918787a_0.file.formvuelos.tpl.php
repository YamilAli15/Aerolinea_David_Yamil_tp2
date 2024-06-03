<?php
/* Smarty version 4.5.2, created on 2024-06-03 22:53:15
  from 'C:\xampp\htdocs\Aerolinea_David_Yamil\templates\formvuelos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665e2d3b6a66e7_03487370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afa420e85e37acff4d96b9c44bb482d1f918787a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aerolinea_David_Yamil\\templates\\formvuelos.tpl',
      1 => 1717447990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e2d3b6a66e7_03487370 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="col-3 m-auto formAddTask" action="insert_vuelos" method="POST">
  <legend class="text-center">Ingrese información a la Tabla </legend>
  <div class="mb-3">
    <label class="form-label">Destino</label>
    <input type="text" name="Destino" class="form-control" placeholder="Ingrese nombre">
  </div>
  <div class="mb-3">
    <label class="form-label">Pilotos</label>
    <input type="text" name="Pilotos" class="form-control" placeholder="Ingrese descripción">
  </div>
  
  <div class="mb-3">
  <label class="form-label">Tiendas a la que pertenece</label>
  <select  name="id_tienda" class="form-select">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Aeronave']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
       <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value->id_aerolinea;?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value->Aeronave;?>
</option>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   </select>
 </div>
  <button type="submit" class="btn btn-primary col-12">Submit</button>
</form><?php }
}
