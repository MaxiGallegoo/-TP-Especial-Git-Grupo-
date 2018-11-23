<?php
require_once('libs/Smarty.class.php');

class ProductosView
{

    private  $smarty;

    function __construct(){
      $this->smarty = new Smarty();
    }
    function PublicView($Titulo,  $Categorias, $Productos){
      $this->smarty->assign('Titulo',$Titulo);
      $this->smarty->assign('Categorias',$Categorias);
      $this->smarty->assign('Productos',$Productos);
      $this->smarty->display('templates/HomePublico.tpl');
    }
    function ViewBase($message = '', $Titulo, $Categorias, $Productos){
      $this->smarty->assign('Message',$message);
      $this->smarty->assign('Titulo',$Titulo);
      $this->smarty->assign('Categorias',$Categorias);
      $this->smarty->assign('Productos',$Productos);
      $this->smarty->display('templates/HomeBase.tpl');
    }
    function ViewEditProducto($Titulo, $Producto, $Categorias){
      $this->smarty->assign('Titulo',$Titulo);
      $this->smarty->assign('producto',$Producto);
      $this->smarty->assign('Categorias',$Categorias);
      $this->smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $this->smarty->display('templates/MostrarEditarProducto.tpl');
    }
    function ViewEditCategorias($Titulo, $Categorias){
      $this->smarty->assign('Titulo',$Titulo);
      $this->smarty->assign('Categorias',$Categorias);
      $this->smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $this->smarty->display('templates/MostrarEditarCategoria.tpl');
    }
    function ViewFilterProductos($message = '', $Titulo, $Categorias, $Productos){
      $this->smarty->assign('Titulo',$Titulo);
      $this->smarty->assign('Categorias',$Categorias);
      $this->smarty->assign('Productos',$Productos);
      $this->smarty->assign('Message',$message);
      $this->smarty->display('templates/homebase.tpl');
    }
}


?>
