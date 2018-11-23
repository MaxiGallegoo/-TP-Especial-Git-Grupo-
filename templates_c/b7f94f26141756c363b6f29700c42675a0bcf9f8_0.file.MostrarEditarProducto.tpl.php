<?php
/* Smarty version 3.1.33, created on 2018-10-27 02:09:59
  from 'C:\xampp\htdocs\maxi\templates\MostrarEditarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd3acd7ee2ca2_07293122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7f94f26141756c363b6f29700c42675a0bcf9f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\maxi\\templates\\MostrarEditarProducto.tpl',
      1 => 1540598996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bd3acd7ee2ca2_07293122 (Smarty_Internal_Template $_smarty_tpl) {
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
/GuardarEditarProducto">
          <input type="hidden" class="form-control" id="idForm" name="idForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["id_producto"];?>
">
          <div class="form-group">
            <label for="nombreForm">Nombre</label>
            <input type="text" class="form-control"  name="nombreForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["Nombre"];?>
">
          </div>
        <div class="form-group">
            <label for="precioForm">Precio</label>
            <input type="number" class="form-control"  name="precioForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["Precio"];?>
">
          </div>
          <div class="form-group">
            <label for="unidadesForm">Unidades</label>
            <input type="number" class="form-control"  name="unidadesForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["Unidades"];?>
">
          </div>
          <div class="form-group">
           <select class="custom-select" name="nombreCategoria">
             <option selected>Categorias</option>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mercaderia']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['mercaderia']->value['id_nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['mercaderia']->value['id_nombre'];?>
</option>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
           </select>
          </div>
          <button type="submit" class="btn btn-primary">Editar Producto</button>
        </form>

    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
