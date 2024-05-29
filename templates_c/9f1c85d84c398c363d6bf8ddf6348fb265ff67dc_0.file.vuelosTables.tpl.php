<?php
/* Smarty version 4.5.2, created on 2024-05-28 20:21:59
  from 'C:\xampp\htdocs\Aerolinea_David_Yamil\templates\vuelosTables.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665620c7490ad7_82084084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f1c85d84c398c363d6bf8ddf6348fb265ff67dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aerolinea_David_Yamil\\templates\\vuelosTables.tpl',
      1 => 1716920516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:NavigationBar.tpl' => 1,
    'file:htmlEnd.tpl' => 1,
  ),
),false)) {
function content_665620c7490ad7_82084084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:NavigationBar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="container col-12">
    <table class="table table-success table-striped mt-2 text-center">
    <thead>
     <tr>
     <th scope="col">Destino</th>
     <th scope="col">Pilotos</th>
   
     </tr>
    </thead>
    <tbody>

    <?php if ($_smarty_tpl->tpl_vars['cantidad']->value == 0) {?>
      <tr>
        <td colspan=5>No hay tareas para mostrar</td>
        <tr>
    
    <?php }?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vuelos']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
      <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['v']->value->Destino;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['v']->value->Pilotos;?>
</td>
      <tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


  
    

    <?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
