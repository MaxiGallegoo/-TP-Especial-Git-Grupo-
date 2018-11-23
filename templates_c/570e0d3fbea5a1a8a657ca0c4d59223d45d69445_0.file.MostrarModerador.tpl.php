<?php
/* Smarty version 3.1.33, created on 2018-11-18 20:53:21
  from 'C:\xampp\htdocs\web\templates\MostrarModerador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf1c33130f6f3_45020055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '570e0d3fbea5a1a8a657ca0c4d59223d45d69445' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\MostrarModerador.tpl',
      1 => 1541194198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:NavBarLogeado.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf1c33130f6f3_45020055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>

    <div class="container">
      <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
            <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre_usuario'];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['usuario']->value['contraseña_usuario'];?>
<a href="borrar/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
">BORRAR</a> </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
