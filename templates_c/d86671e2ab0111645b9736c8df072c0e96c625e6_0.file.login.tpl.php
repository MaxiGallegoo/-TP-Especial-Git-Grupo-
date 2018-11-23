<?php
/* Smarty version 3.1.33, created on 2018-10-26 23:44:55
  from 'C:\xampp\htdocs\maxi\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd38ad75c3507_69784551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd86671e2ab0111645b9736c8df072c0e96c625e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\maxi\\templates\\login.tpl',
      1 => 1540589130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bd38ad75c3507_69784551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container barranav">
        <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href=home>HOME</a>
        </li>
      </ul>
    </div>
    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <form method="post" action="verificarLogin">
      <div class="modal-body">
             <div class="form-group">
              <label for="exampleInputEmail1">Usuario</label>
              <input type="input" class="form-control" name="usuarioId" id="usuarioId" aria-describedby="usuarioId" placeholder="Usuario">
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Contraseña">
            </div>
      <div class="">
        <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
