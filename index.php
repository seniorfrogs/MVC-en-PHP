<?php

# De esta manera estamos haciendo una conexión con el controlador
# Esto es necesario para que funcione el MvcController de lo contrario saldrá error
# require_once impide la carga más de una vez de lo contrario corremos riesgo de re-declaraciones, variables, funciones y clases varias veces.
require_once "controllers/controller.php";
require_once "models/model.php";

# Creacion del objeto mvc
$mvc = new MvcController();
# A traves de él llamamos la funcion plantilla
$mvc -> plantilla();

?>
