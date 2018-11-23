<?php
  require_once "api.php";
  require_once "./../model/ProductoModel.php"

  class productosapiController extends api{

    private $model;

    function __construct(){
      parent::__construct();
      $this->model = new ProductoModel();
    }

    function Get($param = null){
      if(isset($param)){
        $id_producto = $param[0];
        $data = $this->model->GetProducto($id_producto);
      }else{
        $data = $this->model->GetProductos();
      }
        if(isset($data)){
          return $this->json_responce($data, 200);
        }else{
          return $this->json_responce(null, 404);
        }

    }

    function Delete($param = null) {
      if(count($param) == 1){
        $producto_id = $param[0];
        $remove = $this->model->BorrarProducto($producto_id);
        if($remove == false){
          return $this->json_response($remove,300);
        }else{
          return $this->json_response($remove,200);
        }
      }
      else{
        return  $this->json_response("Task not found", 300);
      }
    }

    function Post($param = null) {
      $ObjetoJson= $this->getJSONData();
      if(count($param) == 1){
        if(isset($data)){
          $post = $this->model->InsertarProducto($ObjetoJson->Nombre,$ObjetoJson->Precio,$ObjetoJson->Unidades,$ObjetoJson->Categoria);
          if($post == false){
            return $this->json_response($post,300);
          }else{
            return $this->json_response($post,200);
          }
        }
      }
      else{
        return  $this->json_response("Task not found", 300);
      }
    }
    function Update($param = null){

      if(count($param) == 1){
        $idProducto = $param[0];
        $ObjetoJson= $this->getJSONData();
        $update = $this->model->GuardarProductoEditado($ObjetoJson->id,$ObjetoJson->Nombre,$ObjetoJson->Precio,$ObjetoJson->Unidades,$ObjetoJson->Categoria);
        return $this->json_response($update,200);
      }
      else{
        return  $this->json_response("Task not specified", 300);
      }

    }

  }

?>
