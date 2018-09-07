<?php

class MvcController{

  #LLAMADA A LA PLANTILLA

  # Muestrame el archivo template.php (Include es solo para archivos.php)
  public function plantilla(){
    # Include() Se utiliza para invocar el archivo que contiene código html.
    include "views/template.php";
  }
#-------------------------------------------------------------------------------
  # INTERACCIÓN DEL USUARIO

  public function enlacesPaginasController(){
    //  echo $enlacesController;

# Si la variable "action" que viene del metodo $_GET tiene información a $enlacesController con esa info.
    if(isset($_GET["action"])){
      # variable $enlacesController recibe todo lo que llegue a tarves del metodo $_GET["nombreVariable"];
        $enlacesController = $_GET["action"];
    }else{
      # De lo contrario tome esa variabe la información de index.php
        $enlacesController = "index.php";
    }
    #NOTA: Como $enlacesController lo estoy mandando al model a través de su función es necesario colocarle una condición en el model.php, me dirijo al model


      # Conectate al model.php, class EnlacesPaginas y haz una conexión con la función enlacesPaginasModel
      # El doble punto es para heredar la clase anterior y la función anterior
      # Si quiero que esto funcione esto debe estar invocado en el index
      $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
      include $respuesta;
  }
}

?>
