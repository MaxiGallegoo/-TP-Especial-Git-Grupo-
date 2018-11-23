<?php

class ProductoModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=mercaderia;charset=utf8'
    , 'root', '');
  }

  function GetProductos(){

      $sentencia = $this->db->prepare( "select * from productos");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetProducto($id){

      $sentencia = $this->db->prepare( "select * from productos where id_producto=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function InsertarProducto($producto,$precio,$unidades,$categoria){

    $sentencia = $this->db->prepare("INSERT INTO productos(Nombre, Precio, Unidades, nombre_categoria) VALUES(?,?,?,?)");
    $sentencia->execute(array($producto,$precio,$unidades,$categoria));
    $LastId = $this->db->lastInsertId();
    return $this->GetProducto($LastId);
  }
  function GetImagenes($id_producto){
      $sentencia = $this->db->prepare( "select * from imagenes where id_producto=?");
      $sentencia->execute(array($id_producto));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function GetComentarios($id_producto){
      $sentencia = $this->db->prepare( "select * from comentarios where id_producto=?");
      $sentencia->execute(array($id_producto));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function InsertarImagen($producto,$imagen){
    $sentencia = $this->db->prepare("INSERT INTO imagenes(id_producto,contenido) VALUES(?,?)");
    $sentencia->execute(array($producto,$imagen));
  }
  function InsertarComentario($producto,$comentario){
    $sentencia = $this->db->prepare("INSERT INTO comentarios(id_producto,comentario) VALUES(?,?)");
    $sentencia->execute(array($producto,$comentario));
  }
  function BorrarComentario($id_comentario){
    $Comentario = $this->GetProducto($id_comentario);
    if(isset($Comentario)){
      $sentencia = $this->db->prepare( "delete from comentarios where id_comentarios=?");
      $sentencia->execute(array($id_comentario));
      return $Comentario;
    }
  }
  function BorrarImagen($id_imagen){
    $Imagenes = $this->GetProducto($id_producto);
    if(isset($Imagenes)){
      $sentencia = $this->db->prepare( "delete from imagenes where id_imagen=?");
      $sentencia->execute(array($id_imagen));
      return $Imagenes;
    }
  }
  function BorrarProducto($id_producto){
    $Producto = $this->GetProducto($id_producto);
    if(isset($Producto)){
      $sentencia = $this->db->prepare( "delete from productos where id_producto=?");
      $sentencia->execute(array($id_producto));
      return $Producto;
    }
  }

  function GuardarProductoEditado($nombre,$precio,$unidades,$nombre_categoria,$id_producto){
    $sentencia = $this->db->prepare( "update productos set Nombre = ?, Precio = ?, Unidades = ?, nombre_categoria = ? where id_producto=?");
    $sentencia->execute(array($nombre,$precio,$unidades,$nombre_categoria,$id_producto));
  }

  function getFiltrarProductos($categoria){
    $sentencia = $this->db->prepare( "select * from productos where nombre_categoria=?");
    $sentencia->execute(array($categoria));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}


 ?>
