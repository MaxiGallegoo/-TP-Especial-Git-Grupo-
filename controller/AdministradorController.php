<?php
require_once  "./view/AdministradorView.php";
require_once  "./view/LoginView.php";
require_once  "./model/AdministradorModel.php";
require_once "./model/ProductoModel.php";

class AdministradorController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();

    $this->view = new AdministradorView();
    $this->model = new AdministradorModel();
    $this->viewer = new LoginView();
    $this->modelproducto = new ProductoModel();
    $this->Titulo = "Lista de Usuarios";
  }

  function EditarUsuario($param){
    if ($param[1]=="Administrador"){
      $tipo="base";
    }else{
      $tipo="Administrador";
    }
    $this->model->EditarUsuario($tipo,$param[0]);
    header(ADMIN);
  }
  function BorrarUsuario($param){
    $this->model->BorrarUsuario($param[0]);
    header(ADMIN);
  }
  function VerMasAdmin($param){
    $imagenesListas= array();
    $id_producto = $param[0];
    $Imagenes = ($this->modelproducto->GetImagenes($id_producto));
    for ($i=0; $i <count($Imagenes) ; $i++) {
    $imagenesListas[i]=base64_decode($imagen{'contenido'});
    }
    $Comentarios = $this->modelproducto->GetComentarios($id_producto);
    $this->view->VerMasAdmin($imagenesListas,$Comentarios,$id_producto);
  }
}

?>
