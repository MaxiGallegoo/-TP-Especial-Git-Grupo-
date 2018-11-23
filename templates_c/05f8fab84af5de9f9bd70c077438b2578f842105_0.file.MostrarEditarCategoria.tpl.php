<?php
/* Smarty version 3.1.33, created on 2018-10-27 03:13:09
  from 'C:\xampp\htdocs\maxi\templates\MostrarEditarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd3bba53d8720_04163668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05f8fab84af5de9f9bd70c077438b2578f842105' => 
    array (
      0 => 'C:\\xampp\\htdocs\\maxi\\templates\\MostrarEditarCategoria.tpl',
      1 => 1540602301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bd3bba53d8720_04163668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="Inicio">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CafeVanDyke</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="admininstrador">Home<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="logout">Logout</a>
          </div>
        </div>
      </nav>
    </div>
    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <div class="container">
      <h2>Formulario</h2>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/guardarEditarCategoria">
          <input type="hidden" class="form-control" id="idForm" name="idForm" value="<?php echo $_smarty_tpl->tpl_vars['Categorias']->value["id_categoria"];?>
">
          <div class="form-group">
            <label for="NombreCategoria">Nombre</label>
            <input type="text" class="form-control"  name="NombreCategoria" value="<?php echo $_smarty_tpl->tpl_vars['Categorias']->value["nombre_categoria"];?>
">
          </div>
          <button type="submit" class="btn btn-primary">Editar Categoria</button>
        </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
