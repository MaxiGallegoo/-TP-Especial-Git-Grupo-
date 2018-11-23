<?php
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('USER', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/CrearCuenta');
define('ADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/admin');
define('BASE', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/base');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');
class ConfigApp{
  public static $ACTION = "action";
  public static $PARAMS = "params";
  public static $ACTIONS = [
    'home' => 'controller#iniciar',
    ''=> 'controller#iniciar',
        'admin'=> 'ProductosController#HomeAdmin',
        'agregar'=> 'ProductosController#InsertCategoria',
        'editar' => 'ProductosController#EditarCategoria',
        'guardarEditar'=> 'ProductosController#guardarEditarCategoria',
        'borrar'=> 'ProductosController#BorrarCategoria',
        'agregarProducto'=> 'ProductosController#InsertProducto',
        'FiltrarProductos' => 'ProductosController#filtrarProductos',
        'editarProducto'=> 'ProductosController#EditarProducto',
        'borrarProducto'=> 'ProductosController#BorrarProducto',
        'guardarEditarProducto'=> 'ProductosController#guardarEditarProducto',
        'mostrarAdministrador'=> 'AdministradorController#MostrarAdministrador',
        'login'=> 'LoginController#login',
        'logout'=> 'LoginController#logout',
        'verificarLogin' => 'LoginController#verificarLogin',
        'CrearCuenta'=> 'controller#CrearCuenta',
        'guardarUsuario'=>'controller#InsertarUsuario',
        'base'=>'ProductosController#HomeBase',
        'editarUsuario'=>'AdministradorController#EditarUsuario',
        'borrarUsuario'=>'AdministradorController#BorrarUsuario',
        'agregarImagen'=>'ProductosController#InsertarImagen',
        'agregarURL'=>'ProductosController#InsertarURL',
        'vermasAdmin'=>'AdministradorController#VerMasAdmin',
        'vermas'=>'ProductosController#verMas'

  ];
};

?>
