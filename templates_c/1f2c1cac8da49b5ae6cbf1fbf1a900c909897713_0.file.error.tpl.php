<?php
/* Smarty version 4.5.2, created on 2024-05-28 22:48:08
  from 'C:\xampp\htdocs\Aerolinea_David_Yamil\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_66564308004553_57736682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f2c1cac8da49b5ae6cbf1fbf1a900c909897713' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aerolinea_David_Yamil\\templates\\error.tpl',
      1 => 1716929174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:NavigationBar.tpl' => 1,
    'file:htmlEnd.tpl' => 1,
  ),
),false)) {
function content_66564308004553_57736682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:NavigationBar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="ImágenesError">
<img src='Imágenes/download.jpg' class="d-block w-40" alt='ERROR'>
</div>
<?php if ($_smarty_tpl->tpl_vars['msj']->value) {?>
    <div class='alert alert-warning'>
        <?php echo $_smarty_tpl->tpl_vars['msj']->value;?>

    </div>
<?php }
$_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
