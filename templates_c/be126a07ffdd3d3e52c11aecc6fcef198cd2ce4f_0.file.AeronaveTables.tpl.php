<?php
/* Smarty version 4.5.2, created on 2024-06-03 23:02:51
  from 'C:\xampp\htdocs\Aerolinea_David_Yamil\templates\AeronaveTables.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665e2f7b535e18_46866395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be126a07ffdd3d3e52c11aecc6fcef198cd2ce4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aerolinea_David_Yamil\\templates\\AeronaveTables.tpl',
      1 => 1717448551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:NavigationBar.tpl' => 2,
    'file:formAeronave.tpl' => 1,
    'file:htmlEnd.tpl' => 2,
  ),
),false)) {
function content_665e2f7b535e18_46866395 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['Rango']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:NavigationBar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:formAeronave.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <table class="table table-success table-striped mt-2">
        <thead>
            <tr>
                <th scope="col">Aeronave🛬</th>
                <th scope="col">Precio</th>
                <th scope="col">Fecha🕓</th>
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

                    <td> <a href='Verdatos/<?php echo $_smarty_tpl->tpl_vars['a']->value->ID;?>
' class='btn btn-primary'>Ver📖</a></td>


                    <td>
                        <a href='EliminarAeronave/<?php echo $_smarty_tpl->tpl_vars['a']->value->ID;?>
' class='btn btn-danger'>Eliminar🧹</a>
                    <td>

                </tr>
                <?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender('file:NavigationBar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <table class="table table-success table-striped mt-2">
                <thead>
                    <tr>
                        <th scope="col">Aeronave🛬</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Fecha🕓</th>
                        <th scope="col">más datos sobre el vuelo📖</th>
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
                            <td> <a href='Verdatos/<?php echo $_smarty_tpl->tpl_vars['a']->value->ID;?>
' class='btn btn-primary'>Ver📖</a></td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
