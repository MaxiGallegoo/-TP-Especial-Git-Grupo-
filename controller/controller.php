<?php
  require_once "./view/ProductosView.php";
  require_once "./view/AdministradorView.php";
  require_once "./model/ProductoModel.php";
  require_once "./model/AdministradorModel.php";
  require_once "./model/CategoriasModel.php";

  class controller {
    private $vista;
    private $model;
    private $modelv;
    private $view;
    private $Titulo;
    private $login;

    function __construct(){
      $this->model = new ProductoModel();
      $this->modelv = new CategoriasModel();
      $this->view = new ProductosView();
      $this->viewGuest = new AdministradorView();
      $this->modelGuest = new AdministradorModel();
      $this->login = new LoginController();
      $this->Titulo = "Un Menu Para Cada Momento Del Dia";
    }
    public function iniciar(){
      $Categorias = $this->modelv->GetCategorias();
      $Productos = $this->model->GetProductos();
      $this ->view->PublicView($this->Titulo, $Categorias, $Productos);
    }
    function CrearCuenta(){
        $this->viewGuest->ViewCrearUsuario();
    }
    function InsertarUsuario(){
        $Usuario = $_POST["usuarioId"];
        $Contraseña = $_POST["passwordId"];
        $Tipo = "base";
        $hash = password_hash($Contraseña, PASSWORD_DEFAULT);
        $this->modelGuest->InsertarUsuario($Usuario,$hash,$Tipo);
        $this->login->verificarLogin();
    }
  }
?>
