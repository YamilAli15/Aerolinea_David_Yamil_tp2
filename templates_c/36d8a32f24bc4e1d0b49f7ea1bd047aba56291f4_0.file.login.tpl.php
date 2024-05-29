<?php
/* Smarty version 4.5.2, created on 2024-05-28 20:55:51
  from 'C:\xampp\htdocs\Aerolinea_David_Yamil\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665628b77d5394_02808826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36d8a32f24bc4e1d0b49f7ea1bd047aba56291f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Aerolinea_David_Yamil\\templates\\login.tpl',
      1 => 1716922547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:htmlStart.tpl' => 1,
    'file:htmlEnd.tpl' => 1,
  ),
),false)) {
function content_665628b77d5394_02808826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:htmlStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="col-3 m-auto formAddTask" action="Verify_login" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="Password">
  </div>
  <?php if ($_smarty_tpl->tpl_vars['msj']->value) {?>
    <div class='alert alert-warning'>
        <?php echo $_smarty_tpl->tpl_vars['msj']->value;?>

    </div>
  <?php }?>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
