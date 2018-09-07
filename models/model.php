<?php

class EnlacesPaginas{

  public function enlacesPaginasModel($enlacesModel){
    # Validaciones - Esta es mi lista blanca
    if ($enlacesModel == "nosotros" || $enlacesModel == "servicios" || $enlacesModel == "contacto") {

      # La variable $module contendra la dirección
          $module = "views/modules/".$enlacesModel.".php";
    } # Si la variable no cotiene información lo manda a index
    else if ($enlacesModel == "index.php"){
        $module = "views/modules/inicio.php";
    }else {
      #Si la url no se encuentra dentro de mi lista blanca, lo manda a index, nuevamente.
      $module = "views/modules/inicio.php";
    }
    return $module;
  }
}

?>
