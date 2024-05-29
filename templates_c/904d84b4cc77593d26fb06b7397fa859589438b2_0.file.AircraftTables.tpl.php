<?php
/* Smarty version 4.5.2, created on 2024-05-24 22:22:32
  from 'C:\xampp\htdocs\PROYECTOS\Aerolinea_David_Yamil\templates\AircraftTables.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6650f708191720_18857015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '904d84b4cc77593d26fb06b7397fa859589438b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTOS\\Aerolinea_David_Yamil\\templates\\AircraftTables.tpl',
      1 => 1716582148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:NavigationBar.tpl' => 1,
    'file:FormAddTask.tpl' => 1,
    'file:htmlEnd.tpl' => 1,
  ),
),false)) {
function content_6650f708191720_18857015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:NavigationBar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:FormAddTask.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container col-12">
    <table class="table table-success table-striped mt-2 text-center">
    <thead>
     <tr>
      <th scope="col">Aeronave</th>
      <th scope="col">Destino</th>
       <th scope="col">Precio</th>
       <th scope="col">Fecha</th>
     
     </tr>
    </thead>
    <tbody>

    <?php if ($_smarty_tpl->tpl_vars['cantidad']->value == 0) {?>
      <tr>
        <td colspan=5>No hay tareas para mostrar</td>
     </tr>
    
    <?php }?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aerolineas']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
        
        <td><?php echo $_smarty_tpl->tpl_vars['a']->value->Aeronave;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['a']->value->Destino;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['a']->value->Precio;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['a']->value->Fecha;?>
</td>
    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
