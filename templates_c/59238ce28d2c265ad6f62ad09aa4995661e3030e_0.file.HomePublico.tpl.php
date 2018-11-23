<?php
/* Smarty version 3.1.33, created on 2018-11-18 22:53:19
  from 'C:\xampp\htdocs\web\templates\HomePublico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf1df4f865c02_42873022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59238ce28d2c265ad6f62ad09aa4995661e3030e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\HomePublico.tpl',
      1 => 1542496858,
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
function content_5bf1df4f865c02_42873022 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:NavBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
</li>
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
 - Tipo: <?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_categoria'];?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>

  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
