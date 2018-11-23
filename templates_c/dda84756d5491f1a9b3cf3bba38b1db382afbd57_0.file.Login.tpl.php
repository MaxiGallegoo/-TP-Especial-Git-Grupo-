<?php
/* Smarty version 3.1.33, created on 2018-11-19 15:51:22
  from 'C:\xampp\htdocs\web\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf2cdead16d42_66560515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dda84756d5491f1a9b3cf3bba38b1db382afbd57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\Login.tpl',
      1 => 1542474300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:NavBarLogin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf2cdead16d42_66560515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:NavBarLogin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h3><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h3>
    <form method="post" action="verificarLogin">
      <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Usuario</label>
              <input type="input" class="form-control" name="usuarioId" aria-describedby="usuarioId" placeholder="Usuario">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="passwordId" placeholder="Contraseña">
            </div>
      <div class="">
        <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

      </div>
      <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
