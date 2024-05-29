<?php
/* Smarty version 4.5.2, created on 2024-05-23 19:32:17
  from 'C:\xampp\htdocs\PROYECTOS\Aerolinea_David_Yamil\templates\NavigationBar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_664f7da17a0dc0_85725826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee38dae0d1dede033b4278cbb05758e00d763ef1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PROYECTOS\\Aerolinea_David_Yamil\\templates\\NavigationBar.tpl',
      1 => 1716485520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:htmlStart.tpl' => 1,
  ),
),false)) {
function content_664f7da17a0dc0_85725826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:htmlStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<nav class="nav nav-pills flex-column flex-sm-row">
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="home">Página del inicio</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="TablaDeVuelos">Tabla de vuelos</a>
  <a class="flex-sm-fill text-sm-center nav-link" href="ModificarLaTabla">Modificar la tabla</a>
</nav><?php }
}
