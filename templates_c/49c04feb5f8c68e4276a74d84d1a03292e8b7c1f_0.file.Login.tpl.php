<?php
/* Smarty version 4.5.2, created on 2024-05-27 20:13:06
  from 'C:\xampp\htdocs\Aerolinea_David_Yamil\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6654cd321f3492_80207104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49c04feb5f8c68e4276a74d84d1a03292e8b7c1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aerolinea_David_Yamil\\templates\\Login.tpl',
      1 => 1716833455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:htmlStart.tpl' => 1,
    'file:htmlEnd.tpl' => 1,
  ),
),false)) {
function content_6654cd321f3492_80207104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:htmlStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="col-3 m-auto formAddTask" action="addTask" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
    <input type="text" class="form-control" name="Name" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="Password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
