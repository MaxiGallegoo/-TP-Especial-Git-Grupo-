<?php
/* Smarty version 3.1.33, created on 2018-10-27 01:42:28
  from 'C:\xampp\htdocs\maxi\templates\homePublico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd3a6640202c4_67442783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21ce38f9252a11b6452c298d88ad94ea4c129e4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\maxi\\templates\\homePublico.tpl',
      1 => 1540597346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bd3a6640202c4_67442783 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="Inicio">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
      <a class="navbar-brand" href="">CafeVanDyke</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="home">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="login">Login</a>
        </div>
      </div>
    </nav>
    </div>

  <div class="medio">
    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
      <div class="container">
        <h4>Categorias</h4>
        <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
              <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre_categoria'];?>
<a href="editar/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
">EDITAR</a><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
">BORRAR</a></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <h4>Productos Disponibles</h4>
        <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
              <li class="list-group-item">Producto: <?php echo $_smarty_tpl->tpl_vars['producto']->value['Nombre'];?>
 - Valor: $ <?php echo $_smarty_tpl->tpl_vars['producto']->value['Precio'];?>
 - Cantidad: <?php echo $_smarty_tpl->tpl_vars['producto']->value['Unidades'];?>
 - Tipo: <?php echo $_smarty_tpl->tpl_vars['producto']->value['id_categoria'];?>
 <a href="editarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">EDITAR</a><a href="borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">BORRAR</a></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>

      <div class="container filtro">
            <form method="post" action="FiltrarProductos">
              <h5>Filtrar</h5>
           <div class="form-group">
             <select class="custom-select" name="nombreCategoria">
               <option selected value="todas">Categorias</option>

                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                   <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre_categoria'];?>
</option>
                   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
             </select>
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>

           </form>
         </div>

  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
