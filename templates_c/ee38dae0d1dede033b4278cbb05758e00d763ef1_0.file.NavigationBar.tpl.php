<?php
/* Smarty version 4.5.2, created on 2024-05-30 20:12:39
  from 'C:\xampp\htdocs\PROYECTOS\Aerolinea_David_Yamil\templates\NavigationBar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6658c197b2e2c5_99053904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee38dae0d1dede033b4278cbb05758e00d763ef1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTOS\\Aerolinea_David_Yamil\\templates\\NavigationBar.tpl',
      1 => 1716926468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:htmlStart.tpl' => 1,
  ),
),false)) {
function content_6658c197b2e2c5_99053904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:htmlStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<nav class="nav nav-pills flex-column flex-sm-row">
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="home">🗺️Página del inicio🛬</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="Tabla">📚Tabla de vuelos📖</a>
</nav><?php }
}
