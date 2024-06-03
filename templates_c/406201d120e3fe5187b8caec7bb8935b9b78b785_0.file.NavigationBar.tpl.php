<?php
/* Smarty version 4.5.2, created on 2024-06-03 23:02:09
  from 'C:\xampp\htdocs\Aerolinea_David_Yamil\templates\NavigationBar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665e2f51eeec12_21610957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '406201d120e3fe5187b8caec7bb8935b9b78b785' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aerolinea_David_Yamil\\templates\\NavigationBar.tpl',
      1 => 1717448527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:htmlStart.tpl' => 1,
  ),
),false)) {
function content_665e2f51eeec12_21610957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:htmlStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<nav class="nav nav-pills flex-column flex-sm-row">
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="home">🗺️Página del inicio🛬</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="Tabla">📚Tabla de vuelos📖</a>
  <?php if ($_smarty_tpl->tpl_vars['logeado']->value) {?>    
    <a class="flex-sm-fill text-sm-center nav-link" href="Editar_tabla_de_vuelos">🛠️Editar_tabla_de_vuelos🛠️</a>
    <a class="flex-sm-fill text-sm-center nav-link" href="logout">🔐Cerrar sesión🔑</a>
    <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href=""><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</a>
  <?php } else { ?>
    <a class="flex-sm-fill text-sm-center nav-link" aria-current="page" href="login">🔓Iniciar sesión🔑</a>
  <?php }?>
</nav><?php }
}
