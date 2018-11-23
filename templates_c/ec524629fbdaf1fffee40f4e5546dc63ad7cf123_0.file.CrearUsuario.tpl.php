<?php
/* Smarty version 3.1.33, created on 2018-11-19 17:21:04
  from 'C:\xampp\htdocs\web\templates\CrearUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf2e2f0caa6f3_70465683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec524629fbdaf1fffee40f4e5546dc63ad7cf123' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\CrearUsuario.tpl',
      1 => 1542644426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:NavBar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf2e2f0caa6f3_70465683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:NavBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <form method="post" action="guardarUsuario">
    <h2>Crear Cuenta</h2>
        <div class="">
          <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

        </div>
      <div class="form-group row">
        <label for="inputUsuario" class="col-sm-2 col-form-label">Ingresar Usuario</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="usuarioId" placeholder="Usuario">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputContraseña" class="col-sm-2 col-form-label">Ingresar Contraseña</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="passwordId" placeholder="Password">
        </div>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Tipo de Cliente</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1">
                 Cliente Frecuente
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
              <label class="form-check-label" for="gridRadios2">
                 Nuevo Cliente
              </label>
            </div>
          </div>
        </div>
      </fieldset>
      <div class="form-group row">
        <div class="col-sm-2">Terminos y condiciones</div>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
              Acepta los terminos y condiciones de la pagina
            </label>
          </div>
        </div>
      </div>
          <button type="submit" class="btn btn-primary">Crear Cuenta</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
