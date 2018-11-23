<?php
/* Smarty version 3.1.33, created on 2018-11-22 18:32:23
  from 'C:\xampp\htdocs\web\templates\MostrarEditarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6e8273578c8_87982248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '147d16f451aba6db3ce0a2506153fffe3b984483' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\MostrarEditarCategoria.tpl',
      1 => 1542819166,
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
function content_5bf6e8273578c8_87982248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:NavBarLogeadoAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <div class="container">
      <h2>Editar Categoria</h2>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/guardarEditar">
          <input type="hidden" class="form-control" id="idForm" name="idForm" value="<?php echo $_smarty_tpl->tpl_vars['Categorias']->value["id_categoria"];?>
">
          <div class="form-group">
            <label for="NombreCategoria">Nombre</label>
            <input type="text" class="form-control" name="NombreCategoria" value="<?php echo $_smarty_tpl->tpl_vars['Categorias']->value["nombre_categoria"];?>
">
          </div>
          <button type="submit" class="btn btn-primary">Editar Categoria</button>
        </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
