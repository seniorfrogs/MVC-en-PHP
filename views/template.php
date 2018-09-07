<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style_barraNavegacion.css"/>
    <title>template</title>
  </head>
  <body>
    <script src="http://localhost:35729/livereload.js" charset="utf-8"></script>
<header>
  <h1>Logotipo</h1>
</header>

<?php
#Muestrame a traves de una variable
  include "modules/navegacion.php";
?>

<section>
  <?php
  # Muestrame un echo de la variable $enlaces a través del objeto que es instanciado desdel el controller
  # En otras palabras instanseo la funcion enlacesPaginasController(); desde el controller.php
    $mvc = new MvcController();
    $mvc -> enlacesPaginasController();
  ?>
</section>

  </body>
</html>
