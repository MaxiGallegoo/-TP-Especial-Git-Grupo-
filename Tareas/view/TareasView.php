<?php
require('libs/Smarty.class.php');
/**
 *
 */
class TareasView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function Mostrar($Titulo, $Tareas){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Tareas',$Tareas);
    //$smarty->debugging = true;
    $this->Smarty->display('templates/home.tpl');
  }

  function MostrarEditarTarea($Titulo, $Tarea){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Tarea',$Tarea);
    $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

    //$smarty->debugging = true;
    $this->Smarty->display('templates/MostrarEditarTarea.tpl');
  }

}

 ?>
