<?php
/* Smarty version 3.1.33, created on 2018-11-22 19:41:49
  from 'C:\xampp\htdocs\web\templates\vermasADMIN.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6f86d6bc416_81186227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9febe26c0177210dd9147d70b01c64eda241d18b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\vermasADMIN.tpl',
      1 => 1542912107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:NavBarLogeadoAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf6f86d6bc416_81186227 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:NavBarLogeadoAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="contenedor Cosas" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value["id_producto"];?>
">

  <h4>Imagenes</h4>
  <ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['imagen']->value['contenido'];?>
<a href="borrarImagen/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
"><button  type="button"  class="btn btn-warning">Borrar</button></a></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>

<div class="contenedor ingresar">
  <form>
    <h3>Ingresar Comentario</h3>
    <div class="form-group">
      <label for="comentario">Ingresar Comentario</label>
      <textarea type="text" class="form-control" id="comentario" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="valoracion">Valoracion de Producto</label>
      <select class="form-control" id="valoracion">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      <input type="submit" name="subirConmentario" value="Enviar Comentario"/>
    </div>
  </form>
  <h3>Ingresar Imagen</h3>
  <li class="list-group-item">
    <form>
      <div class="form-group">
        <form method="post" action="agregarImagen">
        <label for="idImagen">Seleccionar Imagen</label>
        <input type="file" class="form-control-file" name="idImagen"  multiple/>
          <input type="text" name="id_producto" value=id_producto/>
        <input type="submit" name="agregarImagen" value="Subir Imagen"/>
      </div>
    </form>
  </li>

  <div>
    <form method="post" action="agregarURL">
      <label for="basic-url">Ingresar URL de la Imagen</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
          </div>
          <input type="text" class="form-control" name="URL" aria-describedby="basic-addon3">
          <input type="text" name="id_producto" value=id_producto/>
        </div>
        <input type="submit" name="agregarURL" value="agregarURL"/>
    </form>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
