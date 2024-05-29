<?php
/* Smarty version 4.5.2, created on 2024-05-28 21:27:39
  from 'C:\xampp\htdocs\Aerolinea_David_Yamil\templates\AeronaveTablesAdmi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6656302bc92106_45686890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f469d6bab0b2f07bd4212b3dc2049a93e1429a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aerolinea_David_Yamil\\templates\\AeronaveTablesAdmi.tpl',
      1 => 1716924457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:formAddTask.tpl' => 1,
    'file:htmlEnd.tpl' => 1,
  ),
),false)) {
function content_6656302bc92106_45686890 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:formAddTask.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table table-success table-striped mt-2">
    <thead>
    <tr>
      <th scope="col">Aeronave🛬</th>
       <th scope="col">Precio</th>
       <th scope="col">Fecha🕓</th>
       <th scope="col">Destino🗺️</th>
       <th scope="col">más datos sobre el vuelo📖</th>
       <th scope="col">Configuración de admin</th>
    </tr>
</thead>

<tbody>

<?php if ($_smarty_tpl->tpl_vars['cantidad']->value == 0) {?>
    <tr>
        <td colspan=5>No hay tareas para mostrar</td>
    </tr> 
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
    <td>
         <a href='Ver/<?php echo $_smarty_tpl->tpl_vars['a']->value->id;?>
' class='btn btn-primary'>Ver🗺️</a>              
       
    </td>
    <td>
     <a href='Eliminar/<?php echo $_smarty_tpl->tpl_vars['a']->value->id;?>
' class='btn btn-danger'>Eliminar🧹</a>
    <td>
    
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
