<?php
/* Smarty version 4.5.2, created on 2024-05-28 20:44:40
  from 'C:\xampp\htdocs\Aerolinea_David_Yamil\templates\AeronaveTables.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_66562618f09377_59988376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be126a07ffdd3d3e52c11aecc6fcef198cd2ce4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aerolinea_David_Yamil\\templates\\AeronaveTables.tpl',
      1 => 1716921878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:NavigationBar.tpl' => 1,
    'file:htmlEnd.tpl' => 1,
  ),
),false)) {
function content_66562618f09377_59988376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:NavigationBar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container col-12">
    <table class="table table-success table-striped mt-2 text-center">
    <thead>
     <tr>
     <th scope="col">Aeronave</th>
     <th scope="col">Precio</th>
     <th scope="col">Fecha</th>
     <th scope="col">Destino</th>
     <th scope="col">más datos sobre el vuelo</th>
     
     </tr>
    </thead>
    <tbody>

    <?php if ($_smarty_tpl->tpl_vars['cantidad']->value == 0) {?>
      <tr>
        <td colspan=5>No hay tareas para mostrar</td>
        <tr>
    
    <?php }?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Aeronave']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
      <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['a']->value->Aeronave;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['a']->value->Precio;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['a']->value->Fecha;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['a']->value->Destino;?>
</td>
      <td> <a href='Verdatos' class='btn btn-primary'>Ver</a></td>
      <tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
