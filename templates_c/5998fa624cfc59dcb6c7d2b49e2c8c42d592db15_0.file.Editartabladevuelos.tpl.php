<?php
/* Smarty version 4.5.2, created on 2024-06-03 23:09:27
  from 'C:\xampp\htdocs\Aerolinea_David_Yamil\templates\Editartabladevuelos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665e3107214247_12539505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5998fa624cfc59dcb6c7d2b49e2c8c42d592db15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aerolinea_David_Yamil\\templates\\Editartabladevuelos.tpl',
      1 => 1717448942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:NavigationBar.tpl' => 1,
    'file:formvuelos.tpl' => 1,
    'file:htmlEnd.tpl' => 1,
  ),
),false)) {
function content_665e3107214247_12539505 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['Rango']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:NavigationBar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:formvuelos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <table class="table table-success table-striped mt-2">
        <thead>
            <tr>
                <th scope="col">Destino</th>
                <th scope="col">Pilotos</th>
                <th scope="col">Configuración de admin</th>
            </tr>
        </thead>

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
                <td>
                    <a href='Eliminarvuelos/<?php echo $_smarty_tpl->tpl_vars['a']->value->ID_Vuelos;?>
' class='btn btn-danger'>Eliminar🧹</a>
                <td>

            </tr>
            <?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
