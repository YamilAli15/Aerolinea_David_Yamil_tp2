<?php
/* Smarty version 4.5.2, created on 2024-05-28 19:50:31
  from 'C:\xampp\htdocs\Aerolinea_David_Yamil\templates\vuelosTablesAdmi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665619672d3c74_13714580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef209db5ad0ca05a82392570452f9813f05bbdfa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aerolinea_David_Yamil\\templates\\vuelosTablesAdmi.tpl',
      1 => 1716918629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:formAddTask.tpl' => 1,
    'file:AeronaveTablesAdmi.tpl' => 1,
    'file:htmlEnd.tpl' => 1,
  ),
),false)) {
function content_665619672d3c74_13714580 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:formAddTask.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table table-success table-striped mt-2">
    <thead>
    <tr>
      <th scope="col">Destino</th>
       <th scope="col">Pilotos</th>
       <th scope="col">más datos sobre el vuelo</th>
    </tr>
</thead>

<tbody>

<?php if ($_smarty_tpl->tpl_vars['cantidad']->value == 0) {?>
    <tr>
        <td colspan=5>No hay tareas para mostrar</td>
    </tr> 
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vuelos']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
    <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['a']->value->Destino;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['a']->value->Pilotos;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['a']->value->id_aerolinea;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
</td>
        <td>
         <a href='Ver/<?php echo $_smarty_tpl->tpl_vars['tarea']->value->id;?>
' class='btn btn-primary'>Ver</a>              
        <a href='Eliminar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value->id;?>
' class='btn btn-danger'>Eliminar</a>
        </td>

    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender('file:AeronaveTablesAdmi.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
