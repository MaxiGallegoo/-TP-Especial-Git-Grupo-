<?php
/**
 *
 */
class CategoriasModel
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

  function GetCategorias(){

      $sentencia = $this->db->prepare( "select * from categorias");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarCategoria($nombre){

    $sentencia = $this->db->prepare("INSERT INTO categorias(nombre_categoria) VALUES(?)");
    $sentencia->execute(array($nombre));
  }

  function GetCategoria($categ){

      $sentencia = $this->db->prepare( "select * from categorias where id_categoria=?");
      $sentencia->execute(array($categ));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function BorrarCategoria($idCategoria){
    $sentencia = $this->db->prepare( "delete from categorias where id_categoria=?");
    $sentencia->execute(array($idCategoria));
  }
  function guardarEditarCategoria($titulo, $id_categoria){
  $sentencia = $this->db->prepare( "update categorias set nombre_categoria = ? where id_categoria=?");
  $sentencia->execute(array($titulo, $id_categoria));
  }

}
 ?>
