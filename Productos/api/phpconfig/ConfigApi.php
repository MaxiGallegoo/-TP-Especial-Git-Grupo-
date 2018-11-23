<?php

class ConfigApi{
  public static $RESOURCE = "resource";
  public static $PARAMS = "params";
  public static $RESOURCES = [
    'traer#GET'=> 'productosapiController#Get',
    'traer#DELETE'=> 'productosapiController#Delete',
    'traer#POST'=> 'productosapiController#Post',
    'traer#PUT'=> 'productosapiController#Update'

  ];
};

?>
